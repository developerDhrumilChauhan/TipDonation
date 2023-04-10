jQuery(document).ready(function($){
    
    // EVENTS Events for Add button
    // Background Color
    $("#add-btn-enable-background-color").on("click", function(){
		$(this).hide();
		$('[name="add-button-background-color"]').remove();
		$("#add-btn-disable-background-color").show();
		$(this).after("<input type='color' id='appearance_1' name='add-button-background-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#add-btn-disable-background-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#add-btn-enable-background-color").data("preval")+"' name='add-button-background-color'/>");
		$("#add-btn-enable-background-color").show();
		$(".plugin-tgdffw-fee-add").css({"background-color":""});
		$("#appearance_1").remove();

	});
    
    // Text Color // <input type="color" id="appearance_2" name="add-button-text-color" value="<?php echo $x ? $x : "#000000" ; ?>">
    $("#add-btn-enable-text-color").on("click", function(){
		$(this).hide();
		$('[name="add-button-text-color"]').remove();
		$("#add-btn-disable-text-color").show();
		$(this).after("<input type='color' id='appearance_2' name='add-button-text-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#add-btn-disable-text-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#add-btn-enable-text-color").data("preval")+"' name='add-button-text-color'/>");
		$("#add-btn-enable-text-color").show();
		$(".plugin-tgdffw-fee-add").css({"color":""});
		$("#appearance_2").remove();
	});
    
    // Border Color // <input type="color" id="appearance_6" name="add-button-border-color" value="<?php echo $x ? $x : "#ffffff" ; ?>">
    $("#add-btn-enable-border-color").on("click", function(){
		$(this).hide();
		$('[name="add-button-border-color"]').remove();
		$("#add-btn-disable-border-color").show();
		$(this).after("<input type='color' id='appearance_6' name='add-button-border-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#add-btn-disable-border-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#add-btn-enable-border-color").data("preval")+"' name='add-button-border-color'/>");
		$("#add-btn-enable-border-color").show();
		$(".plugin-tgdffw-fee-add").css({"border-color":""});
		$("#appearance_6").remove();
	});
	
	// EVENTS Events for Remove button
    // Background Color //<input type="color" id="appearance_8" name="remove-button-background-color" value="<?php echo $x ? $x : "#ffffff" ; ?>">
    $("#remove-btn-enable-background-color").on("click", function(){
		$(this).hide();
		$('[name="remove-button-background-color"]').remove();
		$("#remove-btn-disable-background-color").show();
		$(this).after("<input type='color' id='appearance_8' name='remove-button-background-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#remove-btn-disable-background-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#remove-btn-enable-background-color").data("preval")+"' name='remove-button-background-color'/>");
		$("#remove-btn-enable-background-color").show();
		$(".plugin-tgdffw-fee-remove").css({"background-color":""});
		$("#appearance_8").remove();

	});
    
    // Text Color // <input type="color" id="appearance_9" name="remove-button-text-color" value="<?php echo $x ? $x : "#000000" ; ?>">
    $("#remove-btn-enable-text-color").on("click", function(){
		$(this).hide();
		$('[name="remove-button-text-color"]').remove();
		$("#remove-btn-disable-text-color").show();
		$(this).after("<input type='color' id='appearance_9' name='remove-button-text-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#remove-btn-disable-text-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#remove-btn-enable-text-color").data("preval")+"' name='remove-button-text-color'/>");
		$("#remove-btn-enable-text-color").show();
		$(".plugin-tgdffw-fee-remove").css({"color":""});
		$("#appearance_9").remove();
	});
    
    // Border Color // <input type="color" id="appearance_13" name="remove-button-border-color" value="<?php echo $x ? $x : "#ffffff" ; ?>">
    $("#remove-btn-enable-border-color").on("click", function(){
		$(this).hide();
		$('[name="remove-button-border-color"]').remove();
		$("#remove-btn-disable-border-color").show();
		$(this).after("<input type='color' id='appearance_13' name='remove-button-border-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#remove-btn-disable-border-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#remove-btn-enable-border-color").data("preval")+"' name='remove-button-border-color'/>");
		$("#remove-btn-enable-border-color").show();
		$(".plugin-tgdffw-fee-remove").css({"border-color":""});
		$("#appearance_13").remove();
	});
	
	
	// EVENTS Events for Pre-defined Tip button
    // Background Color // <input type="color" id="appearance_15" name="pre-defined-button-background-color" value="<?php echo $x ? $x : "#ffffff" ; ?>">
    $("#predefined-btn-enable-background-color").on("click", function(){
		$(this).hide();
		$('[name="pre-defined-button-background-color"]').remove();
		$("#predefined-btn-disable-background-color").show();
		$(this).after("<input type='color' id='appearance_15' name='pre-defined-button-background-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#predefined-btn-disable-background-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#predefined-btn-enable-background-color").data("preval")+"' name='pre-defined-button-background-color'/>");
		$("#predefined-btn-enable-background-color").show();
		$(".fee-button").css({"background-color":""});
		$("#appearance_15").remove();
	});
	
	// Background Color Selected // <input type="color" id="appearance_22" name="pre-defined-button-selected-background-color" value="<?php echo $x ? $x : "#ffffff" ; ?>">
    $("#predefined-selected-btn-enable-background-color").on("click", function(){
		$(this).hide();
		$('[name="pre-defined-button-selected-background-color"]').remove();
		$("#predefined-selected-btn-disable-background-color").show();
		$(this).after("<input type='color' id='appearance_22' name='pre-defined-button-selected-background-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#predefined-selected-btn-disable-background-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#predefined-selected-btn-enable-background-color").data("preval")+"' name='pre-defined-button-selected-background-color'/>");
		$("#predefined-selected-btn-enable-background-color").show();
		$(".fee-button-added").css({"background-color":""});
		$("#appearance_22").remove();
	});
    
    // Text Color // <input type="color" id="appearance_16" name="pre-defined-button-text-color" value="<?php echo $x ? $x : "#000000" ; ?>">
    $("#predefined-btn-enable-text-color").on("click", function(){
		$(this).hide();
		$('[name="pre-defined-button-text-color"]').remove();
		$("#predefined-btn-disable-text-color").show();
		$(this).after("<input type='color' id='appearance_16' name='pre-defined-button-text-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#predefined-btn-disable-text-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#predefined-btn-enable-text-color").data("preval")+"' name='pre-defined-button-text-color'/>");
		$("#predefined-btn-enable-text-color").show();
		$(".fee-button").css({"color":""});
		$("#appearance_16").remove();
	});
	
	// Text Color Selected // <input type="color" id="appearance_23" name="pre-defined-button-selected-text-color" value="<?php echo $x ? $x : "#000000" ; ?>">
    $("#predefined-selected-btn-enable-text-color").on("click", function(){
		$(this).hide();
		$('[name="pre-defined-button-selected-text-color"]').remove();
		$("#predefined-selected-btn-disable-text-color").show();
		$(this).after("<input type='color' id='appearance_23' name='pre-defined-button-selected-text-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#predefined-selected-btn-disable-text-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#predefined-selected-btn-enable-text-color").data("preval")+"' name='pre-defined-button-selected-text-color'/>");
		$("#predefined-selected-btn-enable-text-color").show();
		$(".fee-button-added").css({"color":""});
		$("#appearance_23").remove();
	});
    
    // Border Color // <input type="color" id="appearance_20" name="pre-defined-button-border-color" value="<?php echo $x ? $x : "#ffffff" ; ?>">
    $("#predefined-btn-enable-border-color").on("click", function(){
		$(this).hide();
		$('[name="pre-defined-button-border-color"]').remove();
		$("#predefined-btn-disable-border-color").show();
		$(this).after("<input type='color' id='appearance_20' name='pre-defined-button-border-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#predefined-btn-disable-border-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#predefined-btn-enable-border-color").data("preval")+"' name='pre-defined-button-border-color'/>");
		$("#predefined-btn-enable-border-color").show();
		$(".fee-button").css({"border-color":""});
		$("#appearance_20").remove();
	});
    
    // Border Color Selected // <input type="color" id="appearance_24" name="pre-defined-button-selected-border-color" value="<?php echo $x ? $x : "#ffffff" ; ?>">
    $("#predefined-selected-btn-enable-border-color").on("click", function(){
		$(this).hide();
		$('[name="pre-defined-button-selected-border-color"]').remove();
		$("#predefined-selected-btn-disable-border-color").show();
		$(this).after("<input type='color' id='appearance_24' name='pre-defined-button-selected-border-color'value='"+$(this).data("preval")+"'/>" );
	});
	$("#predefined-selected-btn-disable-border-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#predefined-selected-btn-enable-border-color").data("preval")+"' name='pre-defined-button-selected-border-color'/>");
		$("#predefined-selected-btn-enable-border-color").show();
		$(".fee-button-added").css({"border-color":""});
		$("#appearance_24").remove();
	});
	
	// EVENTS Events for Custom Tip Text Input
    // Background Color // <input type="color" id="appearance_25" name="tip-input-background-color" value="<?php echo $x ? $x : "#ffffff" ; ?>">
    $("#tip-input-btn-enable-background-color").on("click", function(){
		$(this).hide();
		$('[name="tip-input-background-color"]').remove();
		$("#tip-input-btn-disable-background-color").show();
		$(this).after("<input type='color' id='appearance_25' name='tip-input-background-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#tip-input-btn-disable-background-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#tip-input-btn-enable-background-color").data("preval")+"' name='tip-input-background-color'/>");
		$("#tip-input-btn-enable-background-color").show();
		$(".fee-input-text").css({"background-color":""});
		$("#appearance_25").remove();

	});
    
    // Text Color // <input type="color" id="appearance_26" name="tip-input-text-color" value="<?php echo $x ? $x : "#000000" ; ?>">
    $("#tip-input-btn-enable-text-color").on("click", function(){
		$(this).hide();
		$('[name="tip-input-text-color"]').remove();
		$("#tip-input-btn-disable-text-color").show();
		$(this).after("<input type='color' id='appearance_26' name='tip-input-text-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#tip-input-btn-disable-text-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#tip-input-btn-enable-text-color").data("preval")+"' name='tip-input-text-color'/>");
		$("#tip-input-btn-enable-text-color").show();
		$(".fee-input-text").css({"color":""});
		$("#appearance_26").remove();
	});
	
	// Border Color // <input type="color" id="appearance_30" name="tip-input-border-color" value="<?php echo $x ? $x : "#000000" ; ?>">
    $("#tip-input-btn-enable-border-color").on("click", function(){
		$(this).hide();
		$('[name="tip-input-border-color"]').remove();
		$("#tip-input-btn-disable-border-color").show();
		$(this).after("<input type='color' id='appearance_30' name='tip-input-border-color' value='"+$(this).data("preval")+"'/>" );
	});
	$("#tip-input-btn-disable-border-color").on("click", function(){
		$(this).hide();
		$(this).after("<input type='hidden'value='"+$("#tip-input-btn-enable-border-color").data("preval")+"' name='tip-input-border-color'/>");
		$("#tip-input-btn-enable-border-color").show();
		$(".fee-input-text").css({"color":""});
		$("#appearance_30").remove();
	});
	
	setInterval(PLUGIN_TGDFFW_liveWidgetPreviewFunc, 50);

	function PLUGIN_TGDFFW_liveWidgetPreviewFunc(){
        
        // --------------------------------------------------------------------------- //
        // ------------------------- Add Button Live Events -------------------------- //
        // --------------------------------------------------------------------------- //
        
		if($("#appearance_1").length){
			$(".plugin-tgdffw-fee-add").css({"background-color" : $("#appearance_1").val()});
		}
		
		if($("#appearance_2").length){
			$(".plugin-tgdffw-fee-add").css({"color" : $("#appearance_2").val()});
		}
		
	    $(".plugin-tgdffw-fee-add").css({"padding-top" : $("#appearance_3").val()});
	    $(".plugin-tgdffw-fee-add").css({"padding-right" : $("#appearance_32").val()});
	    $(".plugin-tgdffw-fee-add").css({"padding-bottom" : $("#appearance_33").val()});
	    $(".plugin-tgdffw-fee-add").css({"padding-left" : $("#appearance_34").val()});
	    
	    $(".plugin-tgdffw-fee-add").css({"margin-top" : $("#appearance_4").val()});
	    $(".plugin-tgdffw-fee-add").css({"margin-right" : $("#appearance_35").val()});
	    $(".plugin-tgdffw-fee-add").css({"margin-bottom" : $("#appearance_36").val()});
	    $(".plugin-tgdffw-fee-add").css({"margin-left" : $("#appearance_37").val()});
	    
	    $(".plugin-tgdffw-fee-add").css({"border-width" : $("#appearance_5").val()});
	    
	    if($("#appearance_6").length){
			$(".plugin-tgdffw-fee-add").css({"border-color" : $("#appearance_6").val()});
		}
		
		$(".plugin-tgdffw-fee-add").css({"border-radius" : $("#appearance_7").val()});
		
		// ----------------------------------------------------------------------------- //
		// ------------------------- Remove Button Live Events ------------------------- //
		// ----------------------------------------------------------------------------- //
        
		if($("#appearance_8").length){
			$(".plugin-tgdffw-fee-remove").css({"background-color" : $("#appearance_8").val()});
		}
		
		if($("#appearance_9").length){
			$(".plugin-tgdffw-fee-remove").css({"color" : $("#appearance_9").val()});
		}
		
	    $(".plugin-tgdffw-fee-remove").css({"padding-top" : $("#appearance_10").val()});
	    $(".plugin-tgdffw-fee-remove").css({"padding-right" : $("#appearance_38").val()});
	    $(".plugin-tgdffw-fee-remove").css({"padding-bottom" : $("#appearance_39").val()});
	    $(".plugin-tgdffw-fee-remove").css({"padding-left" : $("#appearance_40").val()});
	    
	    $(".plugin-tgdffw-fee-remove").css({"margin-top" : $("#appearance_11").val()});
	    $(".plugin-tgdffw-fee-remove").css({"margin-right" : $("#appearance_53").val()});
	    $(".plugin-tgdffw-fee-remove").css({"margin-bottom" : $("#appearance_54").val()});
	    $(".plugin-tgdffw-fee-remove").css({"margin-left" : $("#appearance_55").val()});
	    
	    $(".plugin-tgdffw-fee-remove").css({"border-width" : $("#appearance_12").val()});
	    
	    if($("#appearance_13").length){
			$(".plugin-tgdffw-fee-remove").css({"border-color" : $("#appearance_13").val()});
		}
		
		$(".plugin-tgdffw-fee-remove").css({"border-radius" : $("#appearance_14").val()});
		
		// ----------------------------------------------------------------------------- //
		//--------------------- Pre Defined Tip Button Live Events --------------------- //
		// ----------------------------------------------------------------------------- //
        
		if($("#appearance_15").length){
			$(".fee-button").css({"background-color" : $("#appearance_15").val() });
		}
		
		if($("#appearance_22").length){
			$(".fee-button.fee-button-added").css({"background-color" : $("#appearance_22").val() });
		}
		
		if($("#appearance_16").length){
			$(".fee-button").css({"color" : $("#appearance_16").val()});
		}
		
		if($("#appearance_23").length){
			$(".fee-button.fee-button-added").css({"color" : $("#appearance_23").val() });
		}
		
	    $(".fee-button").css({"padding-top" : $("#appearance_17").val()});
	    $(".fee-button").css({"padding-right" : $("#appearance_41").val()});
	    $(".fee-button").css({"padding-bottom" : $("#appearance_42").val()});
	    $(".fee-button").css({"padding-left" : $("#appearance_43").val()});
	    
	    $(".fee-button").css({"margin-top" : $("#appearance_18").val()});
	    $(".fee-button").css({"margin-right" : $("#appearance_44").val()});
	    $(".fee-button").css({"margin-bottom" : $("#appearance_45").val()});
	    $(".fee-button").css({"margin-left" : $("#appearance_46").val()});
	    
	    $(".fee-button").css({"border-width" : $("#appearance_19").val()});
	    
	    if($("#appearance_20").length){
			$(".fee-button").css({"border-color" : $("#appearance_20").val()});
		}
		
		if($("#appearance_24").length){
			$(".fee-button.fee-button-added").css({"border-color" : $("#appearance_24").val() });
		}
		
		$(".fee-button").css({"border-radius" : $("#appearance_21").val()});
		
		// -------------------------------------------------------------------------------- //
		// ------------------------- Custom Tip Input Live Events ------------------------- //
		// -------------------------------------------------------------------------------- //
        
		if($("#appearance_25").length){
			$(".fee-input-text").css({"background" : $("#appearance_25").val() });
			console.log($(".fee-input-text").css("background"));
		}
		
		if($("#appearance_26").length){
			$(".fee-input-text").css({"color" : $("#appearance_26").val() });
			console.log($(".fee-input-text").css("color"));
		}
		
	    $(".fee-input-text").css({"padding-top" : $("#appearance_27").val() });
	    $(".fee-input-text").css({"padding-right" : $("#appearance_47").val() });
	    $(".fee-input-text").css({"padding-bottom" : $("#appearance_48").val() });
	    $(".fee-input-text").css({"padding-left" : $("#appearance_49").val() });
	    
	    $(".fee-input-text").css({"margin-top" : $("#appearance_28").val() });
	    $(".fee-input-text").css({"margin-right" : $("#appearance_50").val() });
	    $(".fee-input-text").css({"margin-bottom" : $("#appearance_51").val() });
	    $(".fee-input-text").css({"margin-left" : $("#appearance_52").val() });
	    
	    $(".fee-input-text").css({"border-width" : $("#appearance_29").val() });
	    
	    if($("#appearance_30").length){
			$(".fee-input-text").css({"border-color" : $("#appearance_30").val() });
			console.log($(".fee-input-text").css("border-color"));
		}
		
		$(".fee-input-text").css({"border-radius" : $("#appearance_31").val() });
	}
});