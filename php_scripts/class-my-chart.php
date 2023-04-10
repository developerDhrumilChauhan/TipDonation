<?php

error_reporting( ~E_NOTICE );

class PLUGIN_TGDFFW_chart{
	
	var $data;
	
	public function createConditionArray_chart($optionsFromTable, $field){
		$str = "";
		foreach($optionsFromTable as $e)
			$str .= " or ".$field." = '".$e."'";

		return preg_replace('/'."or".'/', '', $str, 1);
	}

	public function createFinalDataArray_chart($orderDate, $orderTipAmount){
		$resultArr = array(	$orderDate, number_format($orderTipAmount));
		return $resultArr;
	}
	
	public function fetchOrderFromPosts_chart($filter = 0){
	    if(!session_id()) session_start();
	    $dtDemo = array();
	    
	    if($filter == 1 && (isset($_SESSION["plugin_tgdffw_vars"]["date_filter_active"]) && $_SESSION["plugin_tgdffw_vars"]["date_filter_active"] == true)){
	        $start_date = date('Y-m-d', strtotime("-1 day", strtotime($_SESSION["plugin_tgdffw_vars"]["start_date"])));
            $end_date = date('Y-m-d', strtotime("+1 day", strtotime($_SESSION["plugin_tgdffw_vars"]["end_date"])));
            
	        $dtDemo = array('after' => $start_date, 'before' => $end_date);
	    }
	    
	    $customer_orders = get_posts( array(
                'numberposts' => -1,
                'post_type'   => array('shop_order'),
                'post_status' => wc_get_order_statuses(),
                'date_query' => $dtDemo
            ) );
            
        return $customer_orders;
	}
	
	public function getAllData_chart(){
	    if(!session_id()) session_start(); 
	    
	    $data = array();
	    $data2 = array(["Date", "Tip / Donation"]);
	    $customer_orders;
	    $date_counter;
	    $cumulative_fee_amount = 0;
	    $options = get_option("plugin-tgdffw-tip-title-meta");
	    
	    if($_SESSION["plugin_tgdffw_vars"]["date_filter_active"] == true)
	        $customer_orders = $this->fetchOrderFromPosts_chart(1);
	    else
	        $customer_orders = $this->fetchOrderFromPosts_chart(0); 
    	
        foreach ( $customer_orders as $customer_order ) {
            $order = wc_get_order( $customer_order );
            $order_fees = $order->get_items("fee");
            $curr_date = $order->get_date_created()->format("d-m-Y");
            
            foreach($order_fees as $fees_key => $fee){
                if(in_array($fee->get_name(), $options)){
                    
                    if(!isset($date_counter)){
                        $date_counter = $curr_date;
                    }
                    
                    if($date_counter != $curr_date){
                        array_push($data, $this->createFinalDataArray_chart($date_counter, $cumulative_fee_amount));
                        $date_counter = $curr_date;
                        $cumulative_fee_amount = 0;
                    }
                    
                    $cumulative_fee_amount += $fee->get_amount();
                }
            }
        }
        
        array_push($data, $this->createFinalDataArray_chart($date_counter, $cumulative_fee_amount));
        
        return array_merge($data2, array_reverse($data));
	}

	public function prepare_chart(){
		$data = $this->getAllData_chart();
		$json_encoded_data = json_encode($data, JSON_NUMERIC_CHECK);
		
		wp_localize_script("plugin_tgdffw_chart_js", "plugin_tgdffw_chart", ["data" => $json_encoded_data]);
		
		
	}
	
	public function display(){
	    echo "<section style='overflow:scroll !important;' class='chart_wrap'><div id='curve_chart' style='width:100%;height:70vh;'></div></section>";
	    wp_enqueue_script('plugin_tgdffw_chart_js');
	}
}

?>