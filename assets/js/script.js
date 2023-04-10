jQuery(document).ready(function ($) {
	//AMOUNT ADD BY PREDEFINED AMOUNT BAR
	$("body").on(
		"click",
		".donation-section .default-fee-add",
		function () {
			var ele = $(this);
			var amt = ele.data("value");

			if (isNaN(amt) === true) {
				$(".error").html("Please enter valid value.").show();
				return false;
			}
			if (ele.attr("data-selected") == "true") {
				amt = 0;
			}

			$("body").trigger("update_checkout");
			$(document.body).trigger("wc_update_cart");
			var _tgdffw_nonce = $(
				".donation-section ._tgdffw_nonce"
			).val();

			$.ajax({
				url: tgdffw.ajax_url,
				type: "POST",
				data: {
					_tgdffw_nonce: _tgdffw_nonce,
					amount: amt,
					action: "update_fee",
				},

				success: function (result) {
					$(
						".donation-section .default-fee-add"
					).removeClass("fee-button-added");
					$(
						".donation-section .default-fee-add"
					).attr("data-selected", false);
					$(
						".donation-section .default-fee-add-percentage"
					).removeClass("fee-button-added");
					$(
						".donation-section .default-fee-add-percentage"
					).attr("data-selected", false);

					if (amt) {
						$(ele).attr("data-selected", true);
						$(ele).addClass("fee-button-added");
						$(".donation-section .donation-amount").val(amt);
					} else {
						$(".donation-section .donation-amount").val("");
					}

					$("body").trigger("update_checkout");
					$(document.body).trigger("wc_update_cart");
					return false;
				},
			});
		}
	);

	//AMOUNT ADD BY PREDEFINED PERCENTAGE AMOUNT BAR

	$("body").on(
		"click",
		".donation-section .default-fee-add-percentage",
		function () {
			var ele = $(this);
			var amt = ele.data("value");

			if (ele.attr("data-selected") == "true") {
				amt = 0;
			}

			$("body").trigger("update_checkout");
			$(document.body).trigger("wc_update_cart");

			var _tgdffw_nonce = $(
				".donation-section ._tgdffw_nonce"
			).val();

			$.ajax({
				url: tgdffw.ajax_url,
				type: "POST",
				data: {
					_tgdffw_nonce: _tgdffw_nonce,
					amount: amt,
					action: "update_fee_from_percentage",
				},

				success: function (result) {
					$(
						".donation-section .default-fee-add"
					).removeClass("fee-button-added");
					$(
						".donation-section .default-fee-add"
					).attr("data-selected", false);
					$(
						".donation-section .default-fee-add-percentage"
					).removeClass("fee-button-added");
					$(
						".donation-section .default-fee-add-percentage"
					).attr("data-selected", false);

					var result = JSON.parse(result);

					if (result[0] == "added") {
						$(ele).attr("data-selected", true);
						$(ele).addClass("fee-button-added");
						$(".donation-section .donation-amount").val(
							result[1].toFixed(2)
						);
					} else {
						$(".donation-section .donation-amount").val("");
					}

					$("body").trigger("update_checkout");
					$(document.body).trigger("wc_update_cart");
					return false;
				},
				error: function (xhr, status, error) {
					alert(xhr + " \n" + status + "\n" + error);
				},
			});
		}
	);

	//AMOUNT ADD BY INPUT AMOUNT
	$("body").on(
		"click",
		".donation-section .fee-add",
		function () {
			var amt = $(".donation-section .donation-amount").val();
			var _tgdffw_nonce = $(
				".donation-section ._tgdffw_nonce"
			).val();

			if (isNaN(amt) === true) {
				$(".error").fadeIn("fast", function () {
					$(this)
						.html("please enter valid value.")
						.css("visibility", "visible");
					$(this).fadeOut(1000, function () {
						$(this).css({
							display: "block",
							visibility: "hidden",
						}); // <-- Style Overwrite
					});
				});
				return false;
			}

			$("body").trigger("update_checkout");
			$(document.body).trigger("wc_update_cart");

			$.ajax({
				url: tgdffw.ajax_url,

				type: "POST",

				data: {
					_tgdffw_nonce: _tgdffw_nonce,
					amount: amt,
					action: "update_fee",
				},

				success: function (result) {
					$(
						".donation-section .default-fee-add"
					).removeClass("fee-button-added");
					$(
						".donation-section .default-fee-add[data-value=" +
							amt +
							"]"
					).addClass("fee-button-added");
					$("body").trigger("update_checkout");
					$(document.body).trigger("wc_update_cart");
					return false;
				},
			});
		}
	);

	//AMOUNT REMOVE
	$("body").on(
		"click",
		".donation-section .fee-remove",
		function () {
			$("body").trigger("update_checkout");
			$(document.body).trigger("wc_update_cart");
			var amt = 0;
			var _tgdffw_nonce = $(
				".donation-section ._tgdffw_nonce"
			).val();

			$.ajax({
				url: tgdffw.ajax_url,

				type: "POST",

				data: {
					_tgdffw_nonce: _tgdffw_nonce,
					amount: 0,
					action: "update_fee",
				},

				success: function (result) {
					$(
						".donation-section .default-fee-add"
					).removeClass("fee-button-added");
					$(
						".donation-section .default-fee-add"
					).attr("data-selected", false);
					$(
						".donation-section .default-fee-add-percentage"
					).removeClass("fee-button-added");
					$(
						".donation-section .default-fee-add-percentage"
					).attr("data-selected", false);

					$(".donation-section .donation-amount").val("");
					$("body").trigger("update_checkout");
					$(document.body).trigger("wc_update_cart");
					return false;
				},
			});
		}
	);
});
