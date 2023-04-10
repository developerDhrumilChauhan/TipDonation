<?php

if ( ! class_exists( 'WP_List_Table' ) )
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );

error_reporting( ~E_NOTICE );

class PLUGIN_TGDFFW_table extends WP_List_Table {
	
	public function createConditionArray($optionsFromTable, $field)
	{
		$str = "";
		foreach($optionsFromTable as $e)
		{
			$str .= " or ".$field." = '".$e."'";
		}
		return preg_replace('/'."or".'/', '', $str, 1);
	}

	public function createFinalDataArray($orderID, $orderDate, $orderTotal, $orderTipName, $orderTipAmount)
	{
		$orderTipPercentage = round(($orderTipAmount / $orderTotal) * 100, 2)."%";
		$resultArr = array(
			'order_id' => "<a href='post.php?post=".$orderID."&action=edit'>#".$orderID."</a>",
			'order_date' => $orderDate,
			'order_total' => $orderTotal,
			'tip_name' => $orderTipName,
			'tip_amount' => $orderTipAmount,
			'tip_percentage' => $orderTipPercentage
		);
		return $resultArr;
	}
	
	public function fetchOrderFromPosts($filter = 0)
	{
	    if(!session_id()){
	        session_start();
	    }
	    
	    $dtDemo = array();
	    
	    if($filter == 1 && (isset($_SESSION["plugin_tgdffw_vars"]["date_filter_active"]) && $_SESSION["plugin_tgdffw_vars"]["date_filter_active"] == true))
	    {
	        $start_date = date('Y-m-d', strtotime("-1 day", strtotime($_SESSION["plugin_tgdffw_vars"]["start_date"])));
            $end_date = date('Y-m-d', strtotime("+1 day", strtotime($_SESSION["plugin_tgdffw_vars"]["end_date"])));
            
	        $dtDemo = array('after' => $start_date, 'before' => $end_date);
	    }
	    
	    $customer_orders = get_posts( array(
                'numberposts' => - 1,
                'post_type'   => array('shop_order'),
                'post_status' => wc_get_order_statuses(),
                'date_query' => $dtDemo
            ) );
            
        return $customer_orders;
	}
	
	public function getAllData()
	{
	    if(!session_id()){
	        session_start();
	    }
	    
	    $data = array();
	    $customer_orders;
	    $options = get_option("plugin-tgdffw-tip-title-meta");
	    
	    if($_SESSION["plugin_tgdffw_vars"]["date_filter_active"] == true)
	    {
	        $customer_orders = $this->fetchOrderFromPosts(1);
	    }
	    else
	    {
	        $customer_orders = $this->fetchOrderFromPosts(0);
	    }
    	
        foreach ( $customer_orders as $customer_order ) {
            $order = wc_get_order( $customer_order );
            $order_data = $order->get_data();
            $order_fees = $order->get_items("fee");
            foreach($order_fees as $fees_key => $fee)
            {
                if(in_array($fee->get_name(), $options)){
                    array_push($data, $this->createFinalDataArray($order->get_id(), $order->get_date_created()->format("Y-m-d"), $order->get_total(), $fee->get_name(), $fee->get_amount()));
                }
            }
        }
        
        return $data;
	}

	function __construct() {

		global $status, $page;
		parent::__construct(
			array(
				'singular'	=> 'tip',
				'plural'	=> 'tips',
				'ajax'		=> true
			)
		);
	}

	function column_default( $item, $column_name ) {

		switch ( $column_name ) {

			case 'order_id':
			case 'order_date':
			case 'order_total':
			case 'tip_name':
			case 'tip_amount':
			case 'tip_percentage':
				return $item[ $column_name ];
			default:
				return print_r( $item, true );
		}
	}

	function column_title( $item ) {
		
		//Build row actions
		$actions = array(
			'edit'		=> sprintf( '<a href="?page=%s&action=%s&movie=%s">Edit</a>', $_REQUEST['page'], 'edit', $item['ID'] ),
			'delete'	=> sprintf( '<a href="?page=%s&action=%s&movie=%s">Delete</a>', $_REQUEST['page'], 'delete', $item['ID'] ),
		);
		
		//Return the title contents
		return sprintf('%1$s <span style="color:silver">(id:%2$s)</span>%3$s',
			/*$1%s*/ $item['order_date'],
			/*$2%s*/ $item['order_id'],
			/*$3%s*/ $this->row_actions( $actions )
		);
	}

	/*function column_cb( $item ) {

		return sprintf(
			'<input type="checkbox" name="%1$s[]" value="%2$s" />',
			$this->_args['singular'],  
			$item['order_id']	
		);
	}*/

	function get_columns() {

		return $columns = array(
			//'cb'		=> '<input type="checkbox" />', //Render a checkbox instead of text
			'order_id'		=> 'Order ID',
			'order_date'	=> 'Order Date',
			'order_total'	=> 'Order Total',
			'tip_name'		=> 'Tip Name',
			'tip_amount'	=> 'Tip Amount',
			'tip_percentage' => 'Tip Percentage'
		);
	}

	function get_sortable_columns() {

		return $sortable_columns = array(
			'order_id'	 	=> array( 'order_id', true ),	//true means it's already sorted
			'order_date'	=> array( 'order_date', false ),
			'order_total'	=> array( 'order_total', false ),
			'tip_name'		=> array( 'tip_name', false ),
			'tip_amount'	=> array( 'tip_amount', false ),
			'tip_percentage'	=> array( 'tip_percentage', false )
		);
	}

	/*function get_bulk_actions() {

		return $actions = array(
			'delete'	=> 'Delete'
		);
	}

	function process_bulk_action() {
		
		if( 'delete'=== $this->current_action() ) {
			wp_die( 'Items deleted (or they would be if we had items to delete)!' );
		}
		
	}*/

	function prepare_items() {

		global $wpdb;

		$per_page = 5;
		
		$columns = $this->get_columns();
		$hidden = array();
		$sortable = $this->get_sortable_columns();

		$this->_column_headers = array($columns, $hidden, $sortable);

		$this->process_bulk_action();

		$data = $this->getAllData();

		function usort_reorder( $a, $b ) {

			//If no sort, default to title
			$orderby = ( ! empty( $_REQUEST['orderby'] ) ) ? $_REQUEST['orderby'] : 'order_id';
			//If no order, default to asc
			$order = ( ! empty( $_REQUEST['order'] ) ) ? $_REQUEST['order'] : 'asc';
			 //Determine sort order
			$result = strnatcmp( $a[ $orderby ], $b[ $orderby ] );
			//Send final sort direction to usort
			return ( 'asc' === $order ) ? $result : -$result; 
		}

		usort( $data, 'usort_reorder' );

		$current_page = $this->get_pagenum();

		$total_items = count($data);

		$data = array_slice($data,(($current_page-1)*$per_page),$per_page);

		$this->items = $data;

		$this->set_pagination_args(
			array(
				//WE have to calculate the total number of items
				'total_items'	=> $total_items,
				//WE have to determine how many items to show on a page
				'per_page'	=> $per_page,
				//WE have to calculate the total number of pages
				'total_pages'	=> ceil( $total_items / $per_page ),
				// Set ordering values if needed (useful for AJAX)
				'orderby'	=> ! empty( $_REQUEST['orderby'] ) && '' != $_REQUEST['orderby'] ? $_REQUEST['orderby'] : 'order_id',
				'order'		=> ! empty( $_REQUEST['order'] ) && '' != $_REQUEST['order'] ? $_REQUEST['order'] : 'asc'
			)
		);
	}

	function display() {

		wp_nonce_field( 'ajax-custom-list-nonce', '_ajax_custom_list_nonce' );

		echo '<input type="hidden" id="order" name="order" value="' . $this->_pagination_args['order'] . '" />';
		echo '<input type="hidden" id="orderby" name="orderby" value="' . $this->_pagination_args['orderby'] . '" />';

		parent::display();
	}

	function ajax_response() {

		
		check_ajax_referer( 'ajax-custom-list-nonce', '_ajax_custom_list_nonce' );
		$this->prepare_items();

		extract( $this->_args );
		extract( $this->_pagination_args, EXTR_SKIP );

		ob_start();
		if ( ! empty( $_REQUEST['no_placeholder'] ) )
			$this->display_rows();
		else
			$this->display_rows_or_placeholder();
		$rows = ob_get_clean();

		ob_start();
		$this->print_column_headers();
		$headers = ob_get_clean();

		ob_start();
		$this->pagination('top');
		$pagination_top = ob_get_clean();

		ob_start();
		$this->pagination('bottom');
		$pagination_bottom = ob_get_clean();

		$response = array( 'rows' => $rows );
		$response['pagination']['top'] = $pagination_top;
		$response['pagination']['bottom'] = $pagination_bottom;
		$response['column_headers'] = $headers;

		if ( isset( $total_items ) )
			$response['total_items_i18n'] = sprintf( _n( '1 item', '%s items', $total_items ), number_format_i18n( $total_items ) );

		if ( isset( $total_pages ) ) {
			$response['total_pages'] = $total_pages;
			$response['total_pages_i18n'] = number_format_i18n( $total_pages );
		}
		die( json_encode( $response ) );
	}
}

?>