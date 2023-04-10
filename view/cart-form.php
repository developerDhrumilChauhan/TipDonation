<!-- MANUAL AMOUNT OR PREDEFINED AMOUNT ON/OFF -->

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

<?php if($gg_enable_input_mode == 0 || $gg_enable_predefined_amount == 0): ?>
<div class="donation-section cart_section" >
	<?php if(!empty($gg_fees_message)){ ?>
	<!-- HEADING MESSAGE -->
    <p class="message"><strong><?php echo $gg_fees_message; ?></strong></p>
	<?php } ?>
	<?php if($gg_enable_predefined_amount == 0):
			if (preg_match($integerRegx,str_replace(' ','',$gg_predefined_amount))) : ?>
				<!-- PREDEFINED AMOUNT BAR ON/OFF -->
				<div class="input text" style="margin-bottom:5px;display:inline-block;">
					<?php foreach(explode(',',str_replace(' ','',$gg_predefined_amount)) as $preAmt): ?>
					<a href="javascript:void(0);" class="fee-button default-fee-add <?php echo ($amount==$preAmt ? 'fee-button-added' : ''); ?>" data-value="<?php echo $preAmt; ?>" data-selected="<?php echo ($amount==$preAmt ? 'true' : 'false'); ?>"><?php echo $preAmt; ?></a>
					<?php endforeach; ?>
				</div>
	<?php endif; endif; ?>
	
	<?php if($gg_enable_predefined_percentage_amount == 0):
			if (preg_match($int2regex, str_replace(' ','',$gg_predefined_percentage_amount))) : ?>
				<?php 
					global $woocommerce;
					$cartTotalAmountFromForm = floatval( preg_replace( '#[^\d.]#', '', $woocommerce->cart->get_cart_total() ) );
					$tipStoredInSessionValue = $woocommerce->session->get(self::$session);
					$amountInPercentage = ($tipStoredInSessionValue * 100) / $cartTotalAmountFromForm."%";
				?>
				<!-- PREDEFINED PERCENTAGE AMOUNT BAR ON/OFF -->
				<br><div class="input text" style="margin-bottom:5px;display:inline-block;">
					<?php foreach(explode(',',str_replace(' ','',$gg_predefined_percentage_amount)) as $preAmt): ?>
					<a href="javascript:void(0);" class="fee-button default-fee-add-percentage <?php echo ($amountInPercentage==$preAmt ? 'fee-button-added' : ''); ?>" data-value="<?php echo $preAmt; ?>" data-selected="<?php echo ($amountInPercentage==$preAmt ? 'true' : 'false'); ?>"><?php echo $preAmt; ?></a>
					<?php endforeach; ?>
				</div>
	<?php endif; endif; ?>
	
	<?php 
		if($gg_enable_input_mode == 0): 
	?>
	
	<!-- MANUAL AMOUNT INPUT ON/OFF -->
    <div class="input text">
		<input type="text" value="<?php echo $amount; ?>" class="fee-input-text input-text donation-amount" name="donation-amount" style="margin-bottom: 20px;width:100%;" />
        <a href="javascript:void(0);" class="fee-add"><?php echo ($gg_add_btn_text ? $gg_add_btn_text : 'Add Tip'); ?></a>
		<?php if($gg_display_remove_btn == 0): ?>
			<a href="javascript:void(0);" class="fee-remove"><?php echo ($gg_remove_btn_text ? $gg_remove_btn_text : 'Remove Tip'); ?></a>
		<?php endif; ?>
    </div>
	<?php endif; ?>
	
	<!-- SECURITY NONCE -->
	<input type="hidden" value="<?php echo wp_create_nonce( 'plugin-tgdffw-nonce' ); ?>" class="_tgdffw_nonce"/>
	
	<!-- ERROR DISPLAY -->
    <div class="error">&nbsp;</div>
</div>
<style>
.error {
	visibility: hidden;
}

.fee-input-text{
	
	padding-top: <?php echo $gg_tip_input_padding_top?$gg_tip_input_padding_top:"5px"; ?> !important;
	padding-right: <?php echo $gg_tip_input_padding_right?$gg_tip_input_padding_right:"10px"; ?>  !important;
	padding-bottom: <?php echo $gg_tip_input_padding_bottom?$gg_tip_input_padding_bottom:"5px"; ?>  !important;
	padding-left: <?php echo $gg_tip_input_padding_left?$gg_tip_input_padding_left:"10px"; ?>  !important;

	margin-top: <?php echo $gg_tip_input_margin_top?$gg_tip_input_margin_top:0; ?> !important;
	margin-right: <?php echo $gg_tip_input_margin_right?$gg_tip_input_margin_right:0; ?> !important;
	margin-bottom: <?php echo $gg_tip_input_margin_bottom?$gg_tip_input_margin_bottom:0; ?> !important;
	margin-left: <?php echo $gg_tip_input_margin_left?$gg_tip_input_margin_left:0; ?> !important;

	background: <?php echo $gg_tip_input_background_color?$gg_tip_input_background_color:"#ffffff"; ?> !important;
	color: <?php echo $gg_tip_input_text_color?$gg_tip_input_text_color:"#000000"; ?> !important;
	
	border-style: solid !important;
	border-width: <?php echo $gg_tip_input_border_width?$gg_tip_input_border_width:"1px"; ?> !important;
	border-color: <?php echo $gg_tip_input_border_color?$gg_tip_input_border_color:"#000000"; ?> !important;
	border-radius: <?php echo $gg_tip_input_border_radius?$gg_tip_input_border_radius:"5px"; ?> !important;
}
.fee-button-added {
	 /*
	 color:#fff !important;
	 background-color: #2F6EA6 !important;
*/
	background: <?php echo $gg_predefined_btn_selected_background_color?$gg_predefined_btn_selected_background_color:"#00ff00"; ?> !important;
	color: <?php echo $gg_predefined_btn_selected_text_color?$gg_predefined_btn_selected_text_color:"#ffffff"; ?> !important;
	border-color: <?php echo $gg_predefined_btn_selected_border_color?$gg_predefined_btn_selected_border_color:"#ffffff"; ?> !important;
	font-weight: 500px;

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
	text-decoration: none !important;
}

.fee-add{

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
	text-decoration: none !important;
}

.fee-remove{

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
	text-decoration: none !important;
}

</style>
<?php endif; ?>