<?php    

	// ------------------------------------------------------- //
	// -------------------- Fetch And Put -------------------- //
	// ------------------------------------------------------- //
	
	//settings
	$gg_add_btn_text = $this->get_setting('add-button-text');
	$gg_remove_btn_text = $this->get_setting('remove-button-text');
	$gg_display_remove_btn = $this->get_setting('display-remove-button');
	$gg_fees_message = $this->get_setting('fees-message');
	$gg_fees_title = $this->get_setting('fees-title');
	$gg_predefined_amount = trim(preg_replace('/\s+/', '', $this->get_setting('predefined-amount')));
	$gg_is_taxable = $this->get_setting('is-taxable');
	$gg_enable_input_mode = $this->get_setting('enable-custom-input');
	$gg_enable_predefined_amount = $this->get_setting('enable-predefined-amount');
	$gg_predefined_percentage_amount = $this->get_setting('predefined-percentage-amount');
	$gg_enable_predefined_percentage_amount = $this->get_setting('enable-predefined-percentage-amount');
	//appearance
	// -> Add Button
	$gg_add_btn_text_color = $this->get_appearance('add-button-text-color');
	$gg_add_btn_background_color = $this->get_appearance('add-button-background-color');

	$gg_add_btn_padding_top = $this->get_appearance('add-button-padding-top');
	$gg_add_btn_padding_right = $this->get_appearance('add-button-padding-right');
	$gg_add_btn_padding_bottom = $this->get_appearance('add-button-padding-bottom');
	$gg_add_btn_padding_left = $this->get_appearance('add-button-padding-left');

	$gg_add_btn_margin_top = $this->get_appearance('add-button-margin-top');
	$gg_add_btn_margin_right = $this->get_appearance('add-button-margin-right');
	$gg_add_btn_margin_bottom = $this->get_appearance('add-button-margin-bottom');
	$gg_add_btn_margin_left = $this->get_appearance('add-button-margin-left');

	$gg_add_btn_border_width = $this->get_appearance('add-button-border-width');
	$gg_add_btn_border_color = $this->get_appearance('add-button-border-color');
	$gg_add_btn_border_radius = $this->get_appearance('add-button-border-radius');

	// -> Remove Button
	$gg_remove_btn_text_color = $this->get_appearance('remove-button-text-color');
	$gg_remove_btn_background_color = $this->get_appearance('remove-button-background-color');

	$gg_remove_btn_padding_top = $this->get_appearance('remove-button-padding-top');
	$gg_remove_btn_padding_right = $this->get_appearance('remove-button-padding-right');
	$gg_remove_btn_padding_bottom = $this->get_appearance('remove-button-padding-bottom');
	$gg_remove_btn_padding_left = $this->get_appearance('remove-button-padding-left');

	$gg_remove_btn_margin_top = $this->get_appearance('remove-button-margin-top');
	$gg_remove_btn_margin_right = $this->get_appearance('remove-button-margin-right');
	$gg_remove_btn_margin_bottom = $this->get_appearance('remove-button-margin-bottom');
	$gg_remove_btn_margin_left = $this->get_appearance('remove-button-margin-left');

	$gg_remove_btn_border_width = $this->get_appearance('remove-button-border-width');
	$gg_remove_btn_border_color = $this->get_appearance('remove-button-border-color');
	$gg_remove_btn_border_radius = $this->get_appearance('remove-button-border-radius');

	// -> Predefined Button
	$gg_predefined_btn_text_color = $this->get_appearance('pre-defined-button-text-color');
	$gg_predefined_btn_background_color = $this->get_appearance('pre-defined-button-background-color');

	$gg_predefined_btn_padding_top = $this->get_appearance('pre-defined-button-padding-top');
	$gg_predefined_btn_padding_right = $this->get_appearance('pre-defined-button-padding-right');
	$gg_predefined_btn_padding_bottom = $this->get_appearance('pre-defined-button-padding-bottom');
	$gg_predefined_btn_padding_left = $this->get_appearance('pre-defined-button-padding-left');

	$gg_predefined_btn_margin_top = $this->get_appearance('pre-defined-button-margin-top');
	$gg_predefined_btn_margin_right = $this->get_appearance('pre-defined-button-margin-right');
	$gg_predefined_btn_margin_bottom = $this->get_appearance('pre-defined-button-margin-bottom');
	$gg_predefined_btn_margin_left = $this->get_appearance('pre-defined-button-margin-left');

	$gg_predefined_btn_border_width = $this->get_appearance('pre-defined-button-border-width');
	$gg_predefined_btn_border_color = $this->get_appearance('pre-defined-button-border-color');
	$gg_predefined_btn_border_radius = $this->get_appearance('pre-defined-button-border-radius');

	// -> Predefined Button Selected
	$gg_predefined_btn_selected_background_color = $this->get_appearance('pre-defined-button-selected-background-color');
	$gg_predefined_btn_selected_text_color = $this->get_appearance('pre-defined-button-selected-text-color');
	$gg_predefined_btn_selected_border_color =$this->get_appearance('pre-defined-button-selected-border-color');

	//-> Tip Text Input
	$gg_tip_input_text_color = $this->get_appearance('tip-input-text-color');
	$gg_tip_input_background_color = $this->get_appearance('tip-input-background-color');

	$gg_tip_input_padding_top = $this->get_appearance('tip-input-padding-top');
	$gg_tip_input_padding_right = $this->get_appearance('tip-input-padding-right');
	$gg_tip_input_padding_bottom = $this->get_appearance('tip-input-padding-bottom');
	$gg_tip_input_padding_left = $this->get_appearance('tip-input-padding-left');

	$gg_tip_input_margin_top = $this->get_appearance('tip-input-margin-top');
	$gg_tip_input_margin_right = $this->get_appearance('tip-input-margin-right');
	$gg_tip_input_margin_bottom = $this->get_appearance('tip-input-margin-bottom');
	$gg_tip_input_margin_left = $this->get_appearance('tip-input-margin-left');

	$gg_tip_input_border_width = $this->get_appearance('tip-input-border-width');
	$gg_tip_input_border_color = $this->get_appearance('tip-input-border-color');
	$gg_tip_input_border_radius = $this->get_appearance('tip-input-border-radius');	
?>

<div class="plugin-tgdffw-donation-section cart_section" style="background:#fff;border-radius:5px;display: block;width: 500px;margin: 0 auto;border: 1px solid #a5a5a5;padding: 10px 25px;position:sticky;top:5%;">
	<div style="display:block;width:100%;border:1px solid #a5a5a5;text-align:center;border-radius:5px;background:#478ac9;color:white;">
        <h5>Widget Preview</h5>
    </div>
	<p class="message"><strong>Fees Message Here</strong></p>
	<div class="input text" style="margin-bottom:5px;display:inline-block;">
		<a href="#" class="fee-button plugin-tgdffw-default-fee-add fee-button-added">
			5 
		</a>
		<a href="#" class="fee-button plugin-tgdffw-default-fee-add">
			10 
		</a>
		<a href="#" class="fee-button plugin-tgdffw-default-fee-add">
			15 
		</a>
		<a href="#" class="fee-button plugin-tgdffw-default-fee-add">
			20 
		</a>
	</div>

	<br>
		
	<div class="input text" style="margin-bottom:5px;display:block;">
		<a href="#" class="fee-button plugin-tgdffw-default-fee-add-percentage fee-button-added">
			1% 
		</a>
		<a href="#" class="fee-button plugin-tgdffw-default-fee-add-percentage">
			10% 
		</a>
		<a href="#" class="fee-button plugin-tgdffw-default-fee-add-percentage">
			15% 
		</a>
		<a href="#" class="fee-button plugin-tgdffw-default-fee-add-percentage">
			20% 
		</a>
	</div>

    <div class="input text">
		<input type="text" value="123456789" class="fee-input-text input-text donation-amount default-text-box-styles default-display-block" name="donation-amount" /><br>
        <a href="#;" class="plugin-tgdffw-fee-add default-display-block">
        	Add Tip
        </a>
		<a href="#" class="plugin-tgdffw-fee-remove default-display-block">
			Remove Tip
		</a>
    </div>
</div>

<style>
.plugin-tgdffw-error {
	visibility: hidden;
}

.default-display-block{
    display: inline-block;
}

.default-text-box-styles{
    width:100%;
    margin-bottom: 20px;
}

.fee-input-text.input-text{
	
	padding-top: <?php echo $gg_tip_input_padding_top?$gg_tip_input_padding_top:"5px"; ?> ;
	padding-right: <?php echo $gg_tip_input_padding_right?$gg_tip_input_padding_right:"10px"; ?>  ;
	padding-bottom: <?php echo $gg_tip_input_padding_bottom?$gg_tip_input_padding_bottom:"5px"; ?>  ;
	padding-left: <?php echo $gg_tip_input_padding_left?$gg_tip_input_padding_left:"10px"; ?>  ;

	margin-top: <?php echo $gg_tip_input_margin_top?$gg_tip_input_margin_top:0; ?> ;
	margin-right: <?php echo $gg_tip_input_margin_right?$gg_tip_input_margin_right:0; ?> ;
	margin-bottom: <?php echo $gg_tip_input_margin_bottom?$gg_tip_input_margin_bottom:0; ?> ;
	margin-left: <?php echo $gg_tip_input_margin_left?$gg_tip_input_margin_left:0; ?> ;

	background-color: <?php echo $gg_tip_input_background_color?$gg_tip_input_background_color:"#ffffff"; ?> ;
	color: <?php echo $gg_tip_input_text_color?$gg_tip_input_text_color:"#000000"; ?> ;
	
	border-style: solid ;
	border-width: <?php echo $gg_tip_input_border_width?$gg_tip_input_border_width:"1px"; ?> ;
	border-color: <?php echo $gg_tip_input_border_color?$gg_tip_input_border_color:"#000000"; ?> ;
	border-radius: <?php echo $gg_tip_input_border_radius?$gg_tip_input_border_radius:"5px"; ?> ;
}

.fee-button.fee-button-added {
	 /*
	 color:#fff !important;
	 background-color: #2F6EA6 !important;
*/
	background: <?php echo $gg_predefined_btn_selected_background_color?$gg_predefined_btn_selected_background_color:"#00ff00"; ?>;
	color: <?php echo $gg_predefined_btn_selected_text_color?$gg_predefined_btn_selected_text_color:"#ffffff"; ?>;
	border-color: <?php echo $gg_predefined_btn_selected_border_color?$gg_predefined_btn_selected_border_color:"#ffffff"; ?>;
	font-weight: 500;
}

.fee-button {
	/*
  	border:1px solid #2F6EA6 !important;
   	background-color:#fff;
    color: #2F6EA6;
    padding: 5px 10px !important;
    text-align: center !important;
    text-decoration: none !important;
    display: inline-block !important;
    font-size: 16px !important;
*/
    
	padding-top: <?php echo $gg_predefined_btn_padding_top?$gg_predefined_btn_padding_top:"5px"; ?>;
	padding-right: <?php echo $gg_predefined_btn_padding_right?$gg_predefined_btn_padding_right:"10px"; ?>;
	padding-bottom: <?php echo $gg_predefined_btn_padding_bottom?$gg_predefined_btn_padding_bottom:"5px"; ?>;
	padding-left: <?php echo $gg_predefined_btn_padding_left?$gg_predefined_btn_padding_left:"10px"; ?>;

	margin-top: <?php echo $gg_predefined_btn_margin_top?$gg_predefined_btn_margin_top:0; ?>;
	margin-right: <?php echo $gg_predefined_btn_margin_right?$gg_predefined_btn_margin_right:0; ?>;
	margin-bottom: <?php echo $gg_predefined_btn_margin_bottom?$gg_predefined_btn_margin_bottom:0; ?>;
	margin-left: <?php echo $gg_predefined_btn_margin_left?$gg_predefined_btn_margin_left:0; ?>;

	background: <?php echo $gg_predefined_btn_background_color?$gg_predefined_btn_background_color:"#ffffff"; ?>;
	color: <?php echo $gg_predefined_btn_text_color?$gg_predefined_btn_text_color:"#000000"; ?>;
	
	border-style: solid;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	border-width: <?php echo $gg_predefined_btn_border_width?$gg_predefined_btn_border_width:"1px"; ?>;
	border-color: <?php echo $gg_predefined_btn_border_color?$gg_predefined_btn_border_color:"#000000"; ?>;
	border-radius: <?php echo $gg_predefined_btn_border_radius?$gg_predefined_btn_border_radius:"1px"; ?>;
	text-decoration: none;
}

.plugin-tgdffw-fee-add{

	padding-top: <?php echo $gg_add_btn_padding_top?$gg_add_btn_padding_top:"5px"; ?>;
	padding-right: <?php echo $gg_add_btn_padding_right?$gg_add_btn_padding_right:"10px"; ?>;
	padding-bottom: <?php echo $gg_add_btn_padding_bottom?$gg_add_btn_padding_bottom:"5px"; ?>;
	padding-left: <?php echo $gg_add_btn_padding_left?$gg_add_btn_padding_left:"10px"; ?>;

	margin-top: <?php echo $gg_add_btn_margin_top?$gg_add_btn_margin_top:0; ?>;
	margin-right: <?php echo $gg_add_btn_margin_right?$gg_add_btn_margin_right:0; ?>;
	margin-bottom: <?php echo $gg_add_btn_margin_bottom?$gg_add_btn_margin_bottom:0; ?>;
	margin-left: <?php echo $gg_add_btn_margin_left?$gg_add_btn_margin_left:0; ?>;

	background: <?php echo $gg_add_btn_background_color?$gg_add_btn_background_color:"#00ff00"; ?>;
	color: <?php echo $gg_add_btn_text_color?$gg_add_btn_text_color:"#ffffff"; ?>;

	border-style: solid;
	border-width: <?php echo $gg_add_btn_border_width?$gg_add_btn_border_width:"1px"; ?>;
	border-color: <?php echo $gg_add_btn_border_color?$gg_add_btn_border_color:"#000000"; ?>;
	border-radius: <?php echo $gg_add_btn_border_radius?$gg_add_btn_border_radius:"5px"; ?>;
	text-decoration: none;
}

.plugin-tgdffw-fee-remove{

	padding-top: <?php echo $gg_remove_btn_padding_top?$gg_remove_btn_padding_top:"5px"; ?>;
	padding-right: <?php echo $gg_remove_btn_padding_right?$gg_remove_btn_padding_right:"10px"; ?>;
	padding-bottom: <?php echo $gg_remove_btn_padding_bottom?$gg_remove_btn_padding_bottom:"5px"; ?>;
	padding-left: <?php echo $gg_remove_btn_padding_left?$gg_remove_btn_padding_left:"10px"; ?>;

	margin-top: <?php echo $gg_remove_btn_margin_top?$gg_remove_btn_margin_top:0; ?>;
	margin-right: <?php echo $gg_remove_btn_margin_right?$gg_remove_btn_margin_right:0; ?>;
	margin-bottom: <?php echo $gg_remove_btn_margin_bottom?$gg_remove_btn_margin_bottom:0; ?>;
	margin-left: <?php echo $gg_remove_btn_margin_left?$gg_remove_btn_margin_left:0; ?>;

	background: <?php echo $gg_remove_btn_background_color?$gg_remove_btn_background_color:"#ff0000"; ?>;
	color: <?php echo $gg_remove_btn_text_color?$gg_remove_btn_text_color:"#ffffff"; ?>;
	border-style: solid;
	border-width: <?php echo $gg_remove_btn_border_width?$gg_remove_btn_border_width:"1px"; ?>;
	border-color: <?php echo $gg_remove_btn_border_color?$gg_remove_btn_border_color:"#000000"; ?>;
	border-radius: <?php echo $gg_remove_btn_border_radius?$gg_remove_btn_border_radius:"5px"; ?>; 
	text-decoration: none;
}

</style>