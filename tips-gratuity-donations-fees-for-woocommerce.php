<?php
/*
 * Plugin Name: Tips, Gratuity, Donations & Fees For WooCommerce 
 * Plugin URI: http://plugin-tgdffw.com
 * Description: Toolkit for add tip amount during checkout.
 * Author: Guestgrow
 * Text Domain: plugin-tgdffw
 * Version: 1.0
 * Requires at least: 4.4
 * Tested up to: 5.6 
 * WC requires at least: 3.0.0
 * WC tested up to: 5.0 
*/

defined('ABSPATH') or die();

//WC check
$PLUGIN_TGDFFW_active_plugins = get_option('active_plugins', array());
if (!in_array('woocommerce/woocommerce.php', $PLUGIN_TGDFFW_active_plugins))
{
    require_once (ABSPATH . 'wp-admin/includes/plugin.php');
    deactivate_plugins(plugin_basename(__FILE__));
    if (isset($_GET['activate'])) unset($_GET['activate']);
}

function PLUGIN_TGDFFW_set_default_options(){
    // Home
    $PLUGIN_TGDFFW_default_home_options = array(
    	"enable" => "1"
    );
    
    // Settings
    $PLUGIN_TGDFFW_default_setting_options = array(
    	"fees-title" => "Add tip",
    	"default-amount" => "50",
    	"enable-predefined-amount" => "1",
    	"predefined-amount" => "2,5,7,10",
    	"enable-predefined-percentage-amount" => "1",
    	"predefined-percentage-amount" => "2%,5%,7%,10%",
    	"display-location" => "0",
    	"cart-page-position" => "woocommerce_before_cart_contents",
    	"checkout-page-position" => "woocommerce_before_checkout_form",
    	"is-taxable" => "0",
    	"fees-message" => "Want to add a tip?",
    	"add-button-text" => "Add Tip",
    	"display-remove-button" => "0",
    	"remove-button-text" => "Remove Tip",
    	"enable-custom-input" => "0"
    );
    
    // Appearance
    $PLUGIN_TGDFFW_default_appearance_options = array(
    	// Add Button
    	"add-button-background-color" => "#00ff00",
    	"add-button-text-color" => "#ffffff",
    	"add-button-padding-top" => "10px",
    	"add-button-padding-right" => "25px",
    	"add-button-padding-bottom" => "10px",
    	"add-button-padding-left" => "25px",
    	"add-button-margin-top" => "20px",
    	"add-button-margin-right" => "10px",
    	"add-button-margin-bottom" => "20px",
    	"add-button-margin-left" => "0",
    	"add-button-border-width" => "0",
    	"add-button-border-color" => "#000000",
    	"add-button-border-radius" => "5px",
    
    	// Remove button
    	"remove-button-background-color" => "#ff0000",
    	"remove-button-text-color" => "#000000",
    	"remove-button-padding-top" => "10px",
    	"remove-button-padding-right" => "25px",
    	"remove-button-padding-bottom" => "10px",
    	"remove-button-padding-left" => "25px",
    	"remove-button-margin-top" => "20px",
    	"remove-button-margin-right" => "0",
    	"remove-button-margin-bottom" => "20px",
    	"remove-button-margin-left" => "10px",
    	"remove-button-border-width" => "0",
    	"remove-button-border-color" => "#000000",
    	"remove-button-border-radius" => "5px",
    
    	// Predefined Tip Button
    	"pre-defined-button-background-color" => "#ffffff",
    	"pre-defined-button-selected-background-color" => "#000000",
    	"pre-defined-button-text-color" => "#000000",
    	"pre-defined-button-selected-text-color" => "#ffffff",
    	"pre-defined-button-padding-top" => "5px",
    	"pre-defined-button-padding-right" => "10px",
    	"pre-defined-button-padding-bottom" => "5px",
    	"pre-defined-button-padding-left" => "10px",
    	"pre-defined-button-margin-top" => "5px",
    	"pre-defined-button-margin-right" => "5px",
    	"pre-defined-button-margin-bottom" => "5px",
    	"pre-defined-button-margin-left" => "5px",
    	"pre-defined-button-border-width" => "0",
    	"pre-defined-button-border-color" => "#000000",
    	"pre-defined-button-selected-border-color" => "#000000",
    	"pre-defined-button-border-radius" => "5px", 
    
    	// Custom Input Field 
    	"tip-input-background-color" => "#ffffff",
    	"tip-input-text-color" => "#000000",
    
    	"tip-input-padding-top" => "10px",
    	"tip-input-padding-right" => "10px",
    	"tip-input-padding-bottom" => "10px",
    	"tip-input-padding-left" => "10px",
    
    	"tip-input-margin-top" => "20px",
    	"tip-input-margin-right" => "0",
    	"tip-input-margin-bottom" => "20px",
    	"tip-input-margin-left" => "0",
    
    	"tip-input-border-width" => "1px",
    	"tip-input-border-color" => "#000000",
    	"tip-input-border-radius" => "5px"
    );
    
    update_option("plugin-tgdffw-home-options", $PLUGIN_TGDFFW_default_home_options);
    update_option("plugin-tgdffw-setting-options", $PLUGIN_TGDFFW_default_setting_options);
    update_option("plugin-tgdffw-appearance-options", $PLUGIN_TGDFFW_default_appearance_options);
    $PLUGIN_TGDFFW_tip_title_meta_options = get_option("plugin-tgdffw-tip-title-meta", false);
    
    if($PLUGIN_TGDFFW_tip_title_meta_options === false) {
    	update_option("plugin-tgdffw-tip-title-meta", array("Add tip"));	
    }
    else
    {
    	if(!in_array("Add Tip", $PLUGIN_TGDFFW_tip_title_meta_options))
    	{
    		array_push($PLUGIN_TGDFFW_tip_title_meta_options, "Add tip");
    	}
    }

}

register_activation_hook(__FILE__, "PLUGIN_TGDFFW_set_default_options");

require_once(plugin_dir_path( __FILE__ )."php_scripts/class-my-table.php");
// Tips, Gratuity, Donations & Fees For WooCommerce
if (!class_exists('PLUGIN_TGDFFW'))
{
    $PLUGIN_TGDFFW_plugin_dir = dirname(__FILE__) . "/";
    $PLUGIN_TGDFFW_plugin_url = plugins_url()."/" . basename($PLUGIN_TGDFFW_plugin_dir) . "/";

    class PLUGIN_TGDFFW
    {
        protected static $instance;

        protected $adminpage;

        private static $plugin_url;
        private static $plugin_dir;
        private static $plugin_slug = "plugin-tgdffw";

        /* Fix This */
        private static $home_option_key = "plugin-tgdffw-home-options";
        private static $setting_option_key = "plugin-tgdffw-setting-options";
        private static $appearance_option_key = "plugin-tgdffw-appearance-options";
        private static $tip_title_option_key = "plugin-tgdffw-tip-title-meta";
        private static $debug_mode = false;

        private static $session = "plugin_tgdffw_dt_session";

        public function __construct()
        {
            global $PLUGIN_TGDFFW_plugin_url, $PLUGIN_TGDFFW_plugin_dir;
            
            /* plugin url and directory variable */
            self::$plugin_dir = $PLUGIN_TGDFFW_plugin_dir;
            self::$plugin_url = $PLUGIN_TGDFFW_plugin_url;

            $this->home = get_option(self::$home_option_key);
            $this->setting = get_option(self::$setting_option_key);
            $this->appearance = get_option(self::$appearance_option_key);

            //-----  Woocommerce Hooks for placecment of tip donation Option on Cart Page -----//
            $this->cart_hook = array(
                'woocommerce_before_cart_contents' => 'Before Cart Content',
                'woocommerce_after_cart_table' => 'After Cart Table',
                'woocommerce_cart_coupon' => 'After Coupon',
                'woocommerce_cart_collaterals' => 'After Cart Collateral',
                'woocommerce_before_cart_totals' => 'Before Cart Total',
                'woocommerce_cart_totals_before_shipping' => 'Before Shipping Total',
                'woocommerce_cart_totals_after_shipping' => 'After Shipping Total',
                'woocommerce_before_shipping_calculator' => 'Before Shipping Calculator',
                'woocommerce_after_shipping_calculator' => 'After Shipping Calculator',
                'woocommerce_cart_totals_before_order_total' => 'Before Order Total',
                'woocommerce_cart_totals_after_order_total' => 'After Cart Total',
                'woocommerce_proceed_to_checkout' => 'Before Checkout Button',
                'woocommerce_after_cart_totals' => 'After Cart Total',
                'woocommerce_review_order_after_submit' => 'After Submit'
            );

            // ------------------------  Woocommerce Hooks for placecment of tip donation Option on Checkout Page ------------------------  //
            $this->checkout_hook = array(
                'woocommerce_before_checkout_form' => 'Before Checkout Form',
                'woocommerce_checkout_before_customer_details' => 'Before Customer Details',
                'woocommerce_before_checkout_billing_form' => 'Before Billing Form',
                'woocommerce_after_checkout_billing_form' => 'After Billing Form',
                'woocommerce_before_checkout_shipping_form' => 'Before Shipping Form',
                'woocommerce_after_checkout_shipping_form' => 'After Shipping Form',
                'woocommerce_before_order_notes' => 'Before Order Note',
                'woocommerce_after_order_notes' => 'After Order Note',
                'woocommerce_checkout_after_customer_details' => 'After Customer Details',
                'woocommerce_checkout_before_order_review' => 'Before Order Review',
                'woocommerce_review_order_before_payment' => 'Before Payment',
                'woocommerce_review_order_before_submit' => 'Before Submit',
                'woocommerce_review_order_after_payment' => 'After Payment',
                'woocommerce_checkout_after_order_review' => 'After Review',
            );

            $this->cart_default_hook = (empty($this->setting['plugin-tgdffw-cart-page-position']) ? 'woocommerce_before_cart_contents' : $this->setting['plugin-tgdffw-cart-page-position']);
            $this->checkout_default_hook = (empty($this->setting['plugin-tgdffw-checkout-page-position']) ? 'woocommerce_review_order_before_payment' : $this->setting['plugin-tgdffw-checkout-page-position']);

            // ------------------------ Webhooks for wordpress and Add Actions ------------------------  //
            add_action('admin_init', array(
                $this,
                'woo_version_check'
            ));
            add_action("wp_enqueue_scripts", array(
                $this,
                "enqueue_scripts"
            ) , 10);
            add_action("admin_enqueue_scripts", array(
                $this,
                "enqueue_admin_scripts"
            ) , 10);
            add_action('admin_menu', array(
                $this,
                'add_menulink'
            ));
            add_action("woocommerce_thankyou", array(
                $this,
                "woocommerce_thankyou"
            ));
            add_action($this->cart_default_hook, array(
                $this,
                'woocommerce_donation_cart_form'
            ) , 99);
            add_action($this->checkout_default_hook, array(
                $this,
                'woocommerce_donation_checkout_form'
            ) , 99);
            add_action('wp_ajax_update_fee', array(
                $this,
                "update_fee"
            ));
            add_action('wp_ajax_nopriv_update_fee', array(
                $this,
                "update_fee"
            ));
            add_action('wp_ajax_update_fee_from_percentage', array(
                $this,
                "update_fee_from_percentage"
            ));
            add_action('wp_ajax_nopriv_update_fee_from_percentage', array(
                $this,
                "update_fee_from_percentage"
            ));
            add_action('woocommerce_cart_calculate_fees', array(
                $this,
                'add_fee'
            ));
            add_action('wp_ajax_ajax_fetch_custom_list', array(
				$this, 
				'ajax_fetch_custom_list_callback'
			));
            /*add_filter("sanitize_option_plugin-tgdffw-tip-title-meta", array(
				$this, 
				'sanitize_option_tip_title_meta'
			));*/
			
        }
		
        public function sanitize_option_tip_title_meta() {}

		public function ajax_fetch_custom_list_callback() {
        	$wp_list_table = new PLUGIN_TGDFFW_table();
        	$wp_list_table->ajax_response();
        }
		
        //-----  Intiatialization of Plugin -----//
        public function instance()
        {
            if (is_null(self::$instance))
            {
                self::$instance = new self();
            }
            return self::$instance;
        }

        //----- Check for Woocommerce Version -----//
        public function woo_version_check()
        {
            global $woocommerce;
            if (version_compare($woocommerce->version, '2.4.9', '<='))
            {

                add_action('admin_notices', array(
                    $this,
                    'WMAMC_admin_notice_msg'
                ));
                require_once (ABSPATH . 'wp-admin/includes/plugin.php');
                deactivate_plugins(plugin_basename(__FILE__));
                return false;

            }
        }

        //-----  Enlist the Scripts in Wordpress  -----//
        public function enqueue_scripts()
        {
            if (is_cart() || is_checkout())
            {
                wp_enqueue_script('plugin-tgdffw-script', plugins_url('/assets/js/script.js', __FILE__) , array() , false, true);
                wp_localize_script('plugin-tgdffw-script', 'tgdffw', array(
                    'ajax_url' => admin_url( 'admin-ajax.php' )
                ));
            }
        }

        public function enqueue_admin_scripts()
        {
            $temp_screen = get_current_screen();
            if($temp_screen->id == "woocommerce_page_plugin-tgdffw"){
                // wp_enqueue_script( 'plugin-tgdffw-js', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.js' );
                wp_enqueue_style( 'plugin-tgdffw-css', plugin_dir_url( __FILE__ ) . 'assets/css/styles.css' );
                wp_enqueue_style( 'plugin-tgdffw-css-2', plugin_dir_url( __FILE__ ) . 'assets/css/nicepage.css' );
                wp_enqueue_style( 'plugin-tgdffw-css-3', plugin_dir_url( __FILE__ ) . 'assets/css/custom-styles.css' );
    			
    			if(isset($_GET["subpage"]))
    			{
    			    if($_GET['subpage'] == "appearance"){
    			        wp_enqueue_script( 'plugin-tgdffw-js-5', plugin_dir_url( __FILE__ ) . 'assets/js/live-widget.js' );
    			    }
    			    elseif($_GET['subpage'] == "reports"){
    			        wp_enqueue_script( 'plugin-tgdffw-js-4', plugin_dir_url( __FILE__ ) . 'assets/js/table-ajax.js' );
            			wp_localize_script('plugin-tgdffw-js-4', 'tgdffw_2', array('ajaxurl' => admin_url('admin-ajax.php')));
            			wp_register_script("google_visualization", "https://www.gstatic.com/charts/loader.js");
                        wp_enqueue_script("google_visualization");
                        wp_register_script('plugin_tgdffw_chart_js', plugin_dir_url( __FILE__ ) . 'assets/js/chart-class.js', "google_visualization", false, true);
    			    }
    			}
            }
        }

        //----- Setup Menu Entry Under Woocommerce -----//
        public function add_menulink()
        {

            $this->adminpage = add_submenu_page('woocommerce', __('Tip / Donation', self::$plugin_slug) , __('Tip / Donation', self::$plugin_slug) , 'manage_woocommerce', self::$plugin_slug, array(
                $this,
                'render_submenu_pages'
            ));
        }

        //----- Render Tip / Donation Settings page -----//
        public function render_submenu_pages()
        {
            /* save donation setting */
            $error = new WP_Error();
            
            $alphaNumericRegex = '/^[A-Za-z0-9?,. ]+$/';
            $colorCodeRegex = '/^[a-z0-9.,#()%]+$/';
            $boolCheckRegex = '/^[01]{1}$/';
            $boolCheckRegex2 = '/^[012]{1}$/';
            $numericRegex = '/^[A-Za-z]+$/';
            $numberAndCommasRegex = '/^[0-9,]+$/';
            $marginPaddingParameterLimitRegex = '/^[a-zA-Z0-9% ]+$/';
            $numericCommasAndPercentage = '/^[0-9,%]+$/';

            if (isset($_POST['btn-submit']) && $_POST['btn-submit'] != "clear" && isset($_POST[self::$plugin_slug]))
            {
                echo self::$debug_mode ? "Validation has Entered" : "";
                $integerRegx = '/^\d+(?:,\d+)*$/';
                if (wp_verify_nonce($_POST["_tgdffw_nonce"], 'plugin-tgdffw-home-nonce'))
                {
                    echo self::$debug_mode ? "Validate Home Reached" : "";
                    //--------------------------------------------------//
                    //---------------------Validate Home----------------//
                    //--------------------------------------------------//

                    //-------------------- Options ---------------------//
                    // -> Enable Tip Donation {0 & 1}
                    // -> Enable Woocommerce Dashboard {0 & 1}

                    if($_POST["enable"] && !preg_match($boolCheckRegex, $_POST['enable']))
                    {
                        echo self::$debug_mode ? "Home 1" : "";
                        $error->add('error', 'Please Refresh The page and try again, enable Tips, Gratituity, Donations, Fees for WooCommerce');
                    }
                    else
                    {
                        $this->save_home();
                        $error->add('success', 'Saved Successfully: Home');
                    }
                }
                elseif (wp_verify_nonce($_POST["_tgdffw_nonce"], 'plugin-tgdffw-setting-nonce'))
                {

                    echo self::$debug_mode ? "Validate Setting reached" : "";
                    //-----------------------------------------------------//
                    //---------------------Validate Setting----------------//
                    //-----------------------------------------------------//

                    //-------------------- Options ------------------------//
                    // -> Add Button Text {string only}
                    // -> Remove Button Text {string only}
                    // -> Display Remove Button {0 & 1}
                    // -> Fees Message {string only}
                    // -> Fees Title {string only}
                    // -> Cart Page Position {Match from Array only}
                    // -> Checkout Page Position {Match From Array Only}
                    // -> Pre-Defined Tip Amount List {Numeric and Commas}
                    // -> Is Taxable {0 & 1}

                    if($_POST['add-button-text'] && !preg_match($alphaNumericRegex, $_POST['add-button-text'])){
                        echo self::$debug_mode ? "Validate setting 1" : "";
                        $error->add('error', 'Please Refresh The page and try again, Add button text');
                    }
                    elseif($_POST['remove-button-text'] && !preg_match($alphaNumericRegex, $_POST['remove-button-text'])){
                        echo self::$debug_mode ? "Validate setting 2" : "";
                        $error->add('error', 'Please Refresh The page and try again, Remove button text');
                    }
                    elseif($_POST['display-remove-button'] && !preg_match($boolCheckRegex, $_POST['display-remove-button'])){
                        echo self::$debug_mode ? "Validate setting 3" : "";
                        $error->add('error', 'Please Refresh The page and try again, Display Remove button');
                    }
                    elseif($_POST['fees-message'] && !preg_match($alphaNumericRegex, $_POST['fees-message'])){
                        echo self::$debug_mode ? "Validate setting 4" : "";
                        $error->add('error', 'Please Refresh The page and try again, Fees Message button');
                    }
                    elseif($_POST['fees-title'] && !preg_match($alphaNumericRegex, $_POST['fees-title'])){
                        echo self::$debug_mode ? "Validate setting 5" : "";
                        $error->add('error', 'Please Refresh The page and try again, Fees Title button');   
                    }
                    elseif($_POST['predefined-amount'] && !preg_match($numberAndCommasRegex, $_POST['predefined-amount'])){
                        echo self::$debug_mode ? "Validate setting 6" : "";
                        $error->add('error', 'Please Refresh The page and try again, Predefined tip amount');   
                    }
                    elseif($_POST['is-taxable'] && !preg_match($boolCheckRegex, $_POST['is-taxable']) ){
                        echo self::$debug_mode ? "Validate setting 7" : "";
                        $error->add('error', 'Please Refresh The page and try again, Is Taxable');      
                    }
                    elseif($_POST['predefined-percentage-amount'] && !preg_match($numericCommasAndPercentage, $_POST['predefined-amount']) ){
                        echo self::$debug_mode ? "Validate setting 8" : "";
                        $error->add('error', 'Please Refresh The page and try again, Predefined tip percentage amount');      
                    }
                    else
                    {
                        $temp = get_option(self::$tip_title_option_key, array());
                        if(!in_array($_POST["fees-title"], $temp))
                        {
                            array_push($temp, sanitize_text_field($_POST["fees-title"]));
                            update_option(self::$tip_title_option_key, $temp);
                        }
                        
                        $this->save_setting();
                        $error->add('success', 'Saved Successfully: Setting');
                    }

                }
                elseif (wp_verify_nonce($_POST["_tgdffw_nonce"], 'plugin-tgdffw-appearance-nonce'))
                {
                    echo self::$debug_mode ? "Validate Appearance Reached" : "";
                    //--------------------------------------------------------//
                    //---------------------Validate Appearance----------------//
                    //--------------------------------------------------------//

                    //-------------------- Options ---------------------------//
                    // -> Add Button Background Color {Alphabets Numbers # () % , . only}
                    // -> Add Button Text Color {Alphabets Numbers # () % , . only}
                    // -> Add Button Padding {1, 2 and 4 values seperated by ","}
                    // -> Add Button Margin {1, 2 and 4 values seperated by ","}
                    // -> Add Button Border Width {Numeric Only}
                    // -> Add Button Border Color {Alphabets Numbers # () % , . only}
                    // -> Add Button Border Radius {Numeric Only}

                    // -> Remove Button Background Color {Alphabets Numbers # () % , . only}
                    // -> Remove Button Text Color {Alphabets Numbers # () % , . only}
                    // -> Remove Button Padding {1, 2 and 4 values seperated by ","}
                    // -> Remove Button Margin {1, 2 and 4 values seperated by ","}
                    // -> Remove Button Border Width {Numeric Only}
                    // -> Remove Button Border Color {Alphabets Numbers # () % , . only}
                    // -> Remove Button Border Radius {Numeric Only}

                    // -> Predefined Button Background Color {Alphabets Numbers # () % , . only}
                    // -> Predefined Button Selected Background Color {Alphabets Numbers # () % , . only}
                    // -> Predefined Button Text Color {Alphabets Numbers # () % , . only}
                    // -> Predefined Button Selected Text Color {Alphabets Numbers # () % , . only}
                    // -> Predefined Button Padding {1, 2 and 4 values seperated by ","}
                    // -> Predefined Button Margin {1, 2 and 4 values seperated by ","}
                    // -> Predefined Button Border Width {Numeric Only}
                    // -> Predefined Button Border Color {Alphabets Numbers # () % , . only}
                    // -> Predefined Button Selected Border Color {Alphabets Numbers # () % , . only}
                    // -> Predefined Button Border Radius {Numeric Only}

                    // -> Tip Text Input Background Color {Alphabets Numbers # () % , . only}
                    // -> Tip Text Input Text Color {Alphabets Numbers # () % , . only}
                    // -> Tip Text Input Padding {1, 2 and 4 values seperated by ","}
                    // -> Tip Text Input Margin {1, 2 and 4 values seperated by ","}
                    // -> Tip Text Input Border Width {Numeric Only}
                    // -> Tip Text Input Border Color {Alphabets Numbers # () % , . only}
                    // -> Tip Text Input Border Radius {Numeric Only}

                    
                    // add button
                    if($_POST['add-button-background-color'] && !preg_match($colorCodeRegex, $_POST['add-button-background-color'])){
                        echo self::$debug_mode ? "Validate Appearance 1" : "";
                        $error->add('error', 'Please Refresh The page and try again, Add Background Color');      
                    }   
                    elseif($_POST['add-button-text-color'] && !preg_match($colorCodeRegex, $_POST['add-button-text-color'])){
                        echo self::$debug_mode ? "Validate Appearance 2" : "";
                        $error->add('error', 'Please Refresh The page and try again, Add Text Color');      
                    }

                    elseif($_POST['add-button-padding-top'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-padding-top'])){
                        echo self::$debug_mode ? "Validate Appearance 3" : "";
                        $error->add('error', 'Please Refresh The page and try again, Add Button Padding Top');      
                    }
                    elseif($_POST['add-button-padding-right'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-padding-right'])){
                        echo self::$debug_mode ? "Validate Appearance 32" : "";
                        $error->add('error', 'Please Refresh The page and try again, Add Button Padding right');      
                    }
                    elseif($_POST['add-button-padding-bottom'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-padding-bottom'])){
                        echo self::$debug_mode ? "Validate Appearance 33" : "";
                        $error->add('error', 'Please Refresh The page and try again, Add Button Padding bottom');      
                    }
                    elseif($_POST['add-button-padding-left'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-padding-left'])){
                        echo self::$debug_mode ? "Validate Appearance 34":"";
                        $error->add('error', 'Please Refresh The page and try again, Add Button Padding left');      
                    }

                    elseif($_POST['add-button-margin-top'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-margin-top'])){
                        echo self::$debug_mode ? "Validate Appearance 4":"";
                        $error->add('error', 'Please Refresh The page and try again, Add Button Margin top');      
                    }
                    elseif($_POST['add-button-margin-right'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-margin-right'])){
                        echo self::$debug_mode ? "Validate Appearance 35":"";
                        $error->add('error', 'Please Refresh The page and try again, Add Button Margin right');      
                    }
                    elseif($_POST['add-button-margin-bottom'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-margin-bottom'])){
                        echo self::$debug_mode ? "Validate Appearance 36":"";
                        $error->add('error', 'Please Refresh The page and try again, Add Button Margin bottom');      
                    }
                    elseif($_POST['add-button-margin-left'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-margin-left'])){
                        echo self::$debug_mode ? "Validate Appearance 37":"";
                        $error->add('error', 'Please Refresh The page and try again, Add Button Margin left');      
                    }


                    elseif ($_POST['add-button-border-width'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-border-width'])) {
                        echo self::$debug_mode ? "Validate Appearance 5":"";
                        $error->add('error', 'Please Refresh The page and try again, Add button Border Width');
                    }
                    elseif($_POST['add-button-border-color'] && !preg_match($colorCodeRegex, $_POST['add-button-border-color'])){
                        echo self::$debug_mode ? "Validate Appearance 6":"";
                        $error->add('error', 'Please Refresh The page and try again, Add button Border Color');
                    }
                    elseif($_POST['add-button-border-radius'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['add-button-border-radius'])){
                        echo self::$debug_mode ? "Validate Appearance 7":"";
                        $error->add('error', 'Please Refresh The page and try again, Add button Border Radius');   
                    }

                    // remove button
                    elseif($_POST['remove-button-background-color'] && !preg_match($colorCodeRegex, $_POST['remove-button-background-color'])){
                        echo self::$debug_mode ? "Validate Appearance 8":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Background Color');      
                    }   
                    elseif($_POST['remove-button-text-color'] && !preg_match($colorCodeRegex, $_POST['remove-button-text-color'])){
                        echo self::$debug_mode ? "Validate Appearance 9":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Text Color');      
                    }

                    elseif($_POST['remove-button-padding-top'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-padding-top'])){
                        echo self::$debug_mode ? "Validate Appearance 10":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Button Padding top');      
                    }
                    elseif($_POST['remove-button-padding-right'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-padding-right'])){
                        echo self::$debug_mode ? "Validate Appearance 38":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Button Padding right');      
                    }
                    elseif($_POST['remove-button-padding-bottom'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-padding-bottom'])){
                        echo self::$debug_mode ? "Validate Appearance 39":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Button Padding bottom');      
                    }
                    elseif($_POST['remove-button-padding-left'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-padding-left'])){
                        echo self::$debug_mode ? "Validate Appearance 40":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Button Padding left');      
                    }

                    elseif($_POST['remove-button-margin-top'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-margin-top'])){
                        echo self::$debug_mode ? "Validate Appearance 11":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Button Margin top');      
                    }
                    elseif($_POST['remove-button-margin-right'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-margin-right'])){
                        echo self::$debug_mode ? "Validate Appearance 41":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Button Margin right');      
                    }
                    elseif($_POST['remove-button-margin-bottom'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-margin-bottom'])){
                        echo self::$debug_mode ? "Validate Appearance 42":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Button Margin bottom');      
                    }
                    elseif($_POST['remove-button-margin-left'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-margin-left'])){
                        echo self::$debug_mode ? "Validate Appearance 43":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove Button Margin left');      
                    }

                    elseif ($_POST['remove-button-border-width'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-border-width'])) {
                        echo self::$debug_mode ? "Validate Appearance 12":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove button Border Width');
                    }
                    elseif($_POST['remove-button-border-color'] && !preg_match($colorCodeRegex, $_POST['remove-button-border-color'])){
                        echo self::$debug_mode ? "Validate Appearance 13":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove button Border Color');
                    }
                    elseif($_POST['remove-button-border-radius'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['remove-button-border-radius'])){
                        echo self::$debug_mode ? "Validate Appearance 14":"";
                        $error->add('error', 'Please Refresh The page and try again, Remove button Border Radius');   
                    }

                    // predefined button
                    elseif($_POST['pre-defined-button-background-color'] && !preg_match($colorCodeRegex, $_POST['pre-defined-button-background-color'])){
                        echo self::$debug_mode ? "Validate Appearance 15":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Background Color');      
                    }
                    elseif($_POST['pre-defined-button-selected-background-color'] && !preg_match($colorCodeRegex, $_POST['pre-defined-button-selected-background-color'])){
                        echo self::$debug_mode ? "Validate Appearance 16":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined selected Background Color');      
                    }   
                    elseif($_POST['pre-defined-button-text-color'] && !preg_match($colorCodeRegex, $_POST['pre-defined-button-text-color'])){
                        echo self::$debug_mode ? "Validate Appearance 17":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Text Color');      
                    }
                    elseif($_POST['pre-defined-button-selected-text-color'] && !preg_match($colorCodeRegex, $_POST['pre-defined-button-selected-text-color'])){
                        echo self::$debug_mode ? "Validate Appearance 18":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined selected Text Color');      
                    }

                    elseif($_POST['pre-defined-button-padding-top'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-padding-top'])){
                        echo self::$debug_mode ? "Validate Appearance 19":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Button Padding top');      
                    }
                    elseif($_POST['pre-defined-button-padding-right'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-padding-right'])){
                        echo self::$debug_mode ? "Validate Appearance 44":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Button Padding right');      
                    }
                    elseif($_POST['pre-defined-button-padding-bottom'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-padding-bottom'])){
                        echo self::$debug_mode ? "Validate Appearance 45":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Button Padding bottom');      
                    }
                    elseif($_POST['pre-defined-button-padding-left'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-padding-left'])){
                        echo self::$debug_mode ? "Validate Appearance 46":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Button Padding left');      
                    }

                    elseif($_POST['pre-defined-button-margin-top'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-margin-top'])){
                        echo self::$debug_mode ? "Validate Appearance 20":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Button Margin top');      
                    }
                    elseif($_POST['pre-defined-button-margin-right'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-margin-right'])){
                        echo self::$debug_mode ? "Validate Appearance 47":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Button Margin right');      
                    }
                    elseif($_POST['pre-defined-button-margin-bottom'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-margin-bottom'])){
                        echo self::$debug_mode ? "Validate Appearance 48":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Button Margin bottom');      
                    }
                    elseif($_POST['pre-defined-button-margin-left'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-margin-left'])){
                        echo self::$debug_mode ? "Validate Appearance 49":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined Button Margin left');      
                    }

                    elseif ($_POST['pre-defined-button-border-width'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-border-width'])) {
                        echo self::$debug_mode ? "Validate Appearance 21":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined button Border Width');
                    }
                    elseif($_POST['pre-defined-button-border-color'] && !preg_match($colorCodeRegex, $_POST['pre-defined-button-border-color'])){
                        echo self::$debug_mode ? "Validate Appearance 22":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined button Border Color');
                    }
                    elseif($_POST['pre-defined-button-selected-border-color'] && !preg_match($colorCodeRegex, $_POST['pre-defined-button-selected-border-color'])){
                        echo self::$debug_mode ? "Validate Appearance 23":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined button selected Border Color');
                    }
                    elseif($_POST['pre-defined-button-border-radius'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['pre-defined-button-border-radius'])){
                        echo self::$debug_mode ? "Validate Appearance 24":"";
                        $error->add('error', 'Please Refresh The page and try again, Predefined button Border Radius');   
                    }

                    // tip text input
                    elseif($_POST['tip-input-background-color'] && !preg_match($colorCodeRegex, $_POST['tip-input-background-color'])){
                        echo self::$debug_mode ? "Validate Appearance 25":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Input Background Color');      
                    }   
                    elseif($_POST['tip-input-text-color'] && !preg_match($colorCodeRegex, $_POST['tip-input-text-color'])){
                        echo self::$debug_mode ? "Validate Appearance 26":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Input Text Color');      
                    }

                    elseif($_POST['tip-input-padding-top'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-padding-top'])){
                        echo self::$debug_mode ? "Validate Appearance 27":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Padding top');      
                    }
                    elseif($_POST['tip-input-padding-right'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-padding-right'])){
                        echo self::$debug_mode ? "Validate Appearance 50":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Padding right');      
                    }
                    elseif($_POST['tip-input-padding-bottom'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-padding-bottom'])){
                        echo self::$debug_mode ? "Validate Appearance 51":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Padding bottom');      
                    }
                    elseif($_POST['tip-input-padding-left'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-padding-left'])){
                        echo self::$debug_mode ? "Validate 52":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Padding left');      
                    }

                    elseif($_POST['tip-input-margin-top'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-margin-top'])){
                        echo self::$debug_mode ? "Validate Appearance 28":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Margin top');      
                    }
                    elseif($_POST['tip-input-margin-right'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-margin-right'])){
                        echo self::$debug_mode ? "Validate Appearance 53":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Margin right');      
                    }
                    elseif($_POST['tip-input-margin-bottom'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-margin-bottom'])){
                        echo self::$debug_mode ? "Validate Appearance 54":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Margin bottom');      
                    }
                    elseif($_POST['tip-input-margin-left'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-margin-left'])){
                        echo self::$debug_mode ? "Validate Appearance 55":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Margin left');      
                    }

                    elseif ($_POST['tip-input-border-width'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-border-width'])) {
                        echo self::$debug_mode ? "Validate Appearance 29":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Border Width');
                    }
                    elseif($_POST['tip-input-border-color'] && !preg_match($colorCodeRegex, $_POST['tip-input-border-color'])){
                        echo self::$debug_mode ? "Validate Appearance 30":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Border Color');
                    }
                    elseif($_POST['tip-input-border-radius'] && !preg_match($marginPaddingParameterLimitRegex, $_POST['tip-input-border-radius'])){
                        echo self::$debug_mode ? "Validate Appearance 31":"";
                        $error->add('error', 'Please Refresh The page and try again, Tip Text Input Border Radius');   
                    }
                    else{
                        $this->save_appearance();
                        $error->add('success', 'Saved Successfully: Appearance');
                    } 
                }
                elseif (wp_verify_nonce($_POST["_tgdffw_nonce"], 'plugin-tgdffw-reports-nonce'))
                {
                    if(!session_id()){
                        session_start();
                    }
                    
                    //echo "it reached reports";
                    if(isset($_POST["start_date"]) && isset($_POST["end_date"]))
                    {
                        //echo "it validated dates <br>";
                        $start_date = strtotime($_POST["start_date"]);
                        $end_date = strtotime($_POST["end_date"]);
                        
                        //echo "Start Dates Unformatted: ".$start_date. " <br>";
                        //echo "End Dates Unformatted: ".$end_date. " <br>";
                        
                        $start_date = date("Y-m-d", $start_date);
                        $end_date = date("Y-m-d", $end_date);
                        
                        if($start_date > $end_date)
                        {
                            $temp = $start_date;
                            $start_date = $end_date;
                            $end_date = $temp;
                        }
                        
                        //echo "Start Dates: ".$start_date. " <br>";
                        //echo "End Dates: ".$end_date. " <br>";
                        
                        $_SESSION["plugin_tgdffw_vars"]["date_filter_active"] = true;
                        $_SESSION["plugin_tgdffw_vars"]["start_date"] = $start_date;
                        $_SESSION["plugin_tgdffw_vars"]["end_date"] = $end_date;
                    }
                }
                else
                {
                    echo self::$debug_mode ? "NONE OF THE VALIDATION WORKED" :"";
                    $error->add('error', 'Something Went Wrong, Please Retry again.');
                }

                echo self::$debug_mode ? "Validation Has been done":"";
                wp_safe_redirect(wp_get_referer());
            }
            elseif(isset($_POST['btn-submit']) && $_POST['btn-submit'] == "clear" && isset($_POST[self::$plugin_slug]))
            {
                if(!session_id())
                {
                    session_start();
                }

                $_SESSION["plugin_tgdffw_vars"]["date_filter_active"] = false;
                unset($_SESSION["plugin_tgdffw_vars"]["start_date"], $_SESSION["plugin_tgdffw_vars"]["end_date"]);
            }

            if(isset($_GET['subpage'])){
            	if($_GET['subpage'] == "home"){
            		include_once self::$plugin_dir . 'pages/page-home.php';
            	}
            	elseif($_GET['subpage'] == "setting"){
            		include_once self::$plugin_dir . 'pages/page-setting.php';
            	}
            	elseif($_GET['subpage'] == "appearance"){
            		include_once self::$plugin_dir . 'pages/page-appearance.php';
            	}
            	elseif($_GET['subpage'] == "reports"){
            		include_once self::$plugin_dir . 'pages/page-reports.php';
            	}
            	else{
            		include_once self::$plugin_dir . 'pages/page-home.php';
            	}
            }
            else{
            	include_once self::$plugin_dir . 'pages/page-home.php';
            }
        }

        //-----  Fetch error and return in HTML  -----//
        public function get_error_message($error)
        {
            $html = '';
            if (is_wp_error($error) && $error->get_error_message())
            {
                $html .= '<div id="message" class="updated notice ' . $error->get_error_code() . ' is-dismissible">
                            <p><strong>' . $error->get_error_message() . '</strong></p>
                            <button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this message.</span></button>
                        </div>';
            }
            return $html;
        }

        //----- Save Settings -----//
        public function save_home()
        {
            $arrayRemove = array(
                "gg_page",
                self::$plugin_slug,
                "btn-submit",
                "_tgdffw_nonce"
            );

            $saveData = array();

            foreach ($_POST as $key => $value):
                if (in_array($key, $arrayRemove)) continue;
                $saveData[sanitize_text_field($key)] = sanitize_text_field($value);
            endforeach;

            $this->home = $saveData;
            update_option(self::$home_option_key, $saveData);
        }

        public function save_appearance()
        {
            $arrayRemove = array(
                "gg_page",
                self::$plugin_slug,
                "btn-submit",
                "_tgdffw_nonce"
            );
            
            $saveData = array();
            
            foreach ($_POST as $key => $value):
                if (in_array($key, $arrayRemove)) continue;
                $saveData[sanitize_text_field($key)] = sanitize_text_field($value);
            endforeach;
            $this->appearance = $saveData;
            update_option(self::$appearance_option_key, $saveData);
        }

        public function save_setting()
        {
            $arrayRemove = array(
                "gg_page",
                self::$plugin_slug,
                "btn-submit",
                "_tgdffw_nonce"
            );
            
            $saveData = array();
            
            foreach ($_POST as $key => $value):
                if (in_array($key, $arrayRemove)) continue;
                $saveData[sanitize_text_field($key)] = sanitize_text_field($value);
            endforeach;
            
            $this->setting = $saveData;
            update_option(self::$setting_option_key, $saveData);
            
			$this->setting = get_option(self::$setting_option_key);
			$this->cart_default_hook = (empty($this->setting['cart-page-position']) ? 'woocommerce_before_cart_contents' : $this->setting['cart-page-position']);
            $this->checkout_default_hook = (empty($this->setting['checkout-page-position']) ? 'woocommerce_review_order_before_payment' : $this->setting['checkout-page-position']);
        }

        //-----  Cart Donation Form -----//
        public function woocommerce_donation_cart_form()
        {
            $integerRegx = '/^\d+(?:,\d+)*$/';
			$int2regex = '/^[0-9%,]*$/';
            if ($this->get_home("enable") != 0) {		
				return;
			}

            $display_setting = $this->get_setting('display-location');
            if (isset($display_setting) && ($display_setting == 0 || $display_setting == 2)){
				
                $amount = 0;
                if ($this->get_fee() > 0){
					
                    $amount = $this->get_fee();
                }
                else{
					
                    $amount = $this->get_setting('default-amount');
                }
				
                include_once self::$plugin_dir . 'view/cart-form.php';
			}
        }

        //-----  Checkout Donation Form -----//
        public function woocommerce_donation_checkout_form()
        {
            $integerRegx = '/^\d+(?:,\d+)*$/';
			$int2regex = '/^[0-9%,]*$/';
            if ($this->get_home("enable") != 0) return;

            $display_setting = $this->get_setting('display-location');
            if ($this->get_setting('display-location') && ($display_setting == 1 || $display_setting == 2)):
                $amount = 0;
                if ($this->get_fee() > 0)
                {
                    $amount = $this->get_fee();
                }
                else
                    {
                        $amount = $this->get_setting('default-amount');
                    }
                include_once self::$plugin_dir . 'view/cart-form.php';
            endif;
        }

        //-----  Add, Update and Fetch (get) fees -----//
        public function add_fee()
        {
            global $woocommerce;
            if ($this->get_home("enable") != 0) return;
            $fee = $this->get_fee();
            if ($fee && is_numeric($fee) && $fee > 0):
                $fee_title = $this->get_setting("fees-title");
                $taxable = $this->get_setting("is-taxable") ? true : false;
                $woocommerce
                    ->cart
                    ->add_fee(__($fee_title, 'plugin_tgdffw') , $fee, $taxable);
            endif;
        }

        public function update_fee()
        {
            if (isset($_POST["amount"]) && is_numeric($_POST["amount"]) && wp_verify_nonce($_POST["_tgdffw_nonce"], 'plugin-tgdffw-nonce'))
            {
                $amount = $_POST["amount"];
                global $woocommerce;    
                $woocommerce
                    ->session
                    ->set(self::$session, $amount);
                add_filter('add_to_cart_fragments', array(
                    $this,
                    'woocommerce_header_add_to_cart_fragment'
                ));
            }
        }

        public function update_fee_from_percentage()
        {
            if (isset($_POST["amount"]) && wp_verify_nonce($_POST["_tgdffw_nonce"], 'plugin-tgdffw-nonce'))
            {
                global $woocommerce;
                $amount = preg_replace("/^[^0-9]+$/", "", $_POST["amount"]);
                if($amount != "" && $amount != 0)
                {
                    $totalCost = floatval( preg_replace( '#[^\d.]#', '', $woocommerce->cart->get_cart_total() ) );
                    $costAfterPercentage = ($amount / 100) * $totalCost;
                    $woocommerce->session->set(self::$session, $costAfterPercentage);
                    add_filter('add_to_cart_fragments', array($this, 'woocommerce_header_add_to_cart_fragment'));
                    $temp = array("added", $costAfterPercentage);
    				echo json_encode($temp);
    				die();
                }
                else
                {
                    $woocommerce->session->set(self::$session, 0);
                    add_filter('add_to_cart_fragments', array($this, 'woocommerce_header_add_to_cart_fragment'));
                    $temp = array("removed", 0);
                    echo json_encode($temp);
                    die();
                }
            }
        }

        public function get_fee(){
            global $woocommerce;
            $amount = $woocommerce
                ->session
                ->get(self::$session);
            if ($amount && is_numeric($amount))
            {
                return $amount;
            }
            return "0";
        }

        //----- Fetch Data From WP_OPTIONS -----//
        public function get_setting($key)
        {
            if (!$key || $key == "") return;

            if (!isset($this->setting[$key])) return;

            return $this->setting[$key];
        }

        public function get_home($key)
        {
            
            if (!$key || $key == "") return;

            if (!isset($this->home[$key])) return;

            return $this->home[$key];
        }

        public function get_appearance($key)
        {
            if (!$key || $key == "") return;

            if (!isset($this->appearance[$key])) return;

            return $this->appearance[$key];
        }

        public function woocommerce_thankyou($order_get_id)
        {
            global $woocommerce;
            $woocommerce
                ->session
                ->set(self::$session, $this->get_setting("default-amount") || 0/*$order_get_id*/);
        }
    }

}

$PLUGIN_TGDFFW_instance = new PLUGIN_TGDFFW();
?>