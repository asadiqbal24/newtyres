$(document).ready(function () {
	$(".inline").colorbox({
		inline: true, 
		width: (window.innerWidth <= 1024 ? "90%" : "40%"),
		top: "10%",
		onLoad: function () {
			$(".postcodeValidationDiv").show();
			$(".qualifiedFitmentDiv").hide(); 
			$(".errorFitment").hide();
		}
	});

    $(document).bind('cbox_complete',
        function() {
            $("#cboxLoadedContent").css({ overflow: 'hidden' });
        });
});


function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode != 43 && charCode > 32 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function checkPostcode(stockId, sameDayFitmentType) {
	var postcode = $("#postcode_" + stockId).val();
    var realstockId = stockId.substring(0, stockId.indexOf('_'));
    var quantity = $("#quantity_" + realstockId).val();
	$.ajax({
		type: "GET",
		url: '/tyres/check-postcode-fitment',
		data: "postcode=" + postcode + "&fitmentType=" + sameDayFitmentType + "&stockId=" + realstockId+ "&quantity=" + quantity,
		//data: JSON.stringify({ phoneNumber: $("#phoneNumberNextDayPopup").val(), reservationId: $("#FitmentPopupReservationId").val() }),
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			if (data.success == true) {
				$(".postcodeValidationDiv").hide();
				$(".qualifiedFitmentDiv").show();
				var fitmentOfferFootNote = $("#samedayFitmentImageNote_" + stockId).text();
				$("#samedayFitmentImageNote_" + stockId).text(fitmentOfferFootNote.replace(/####/g, postcode));
			} else {
				var notValidPostcodeMessage = $("#noPostcodeOffer_" + stockId).text();
				$("#noPostcodeOffer_" + stockId).text(notValidPostcodeMessage.replace(/(in )(.*)/gm, 'in ' + postcode));
				$("#failPostcode_" + stockId).show();
			}
		    parent.$.colorbox.resize();
		},
		error: function (errorThrown) {
			$("#inputPhoneNextDayFitment").show();
			$("#successSubmitNextDayFitment").hide();
			$("#failSubmitNextDayFitment").show();
		}
	});
}

function SubmitSameDayFitmentPhoneNumber(stockId, sameDayFitmentType) {
	$("#ValidationSameDayFitmentPhoneNumber_" + stockId).hide();
    $("#ValidationSameDayFitmentName_" + stockId).hide();

	var phoneNumber = $("#SamedayFitmentPhoneNumber_" + stockId).val();
    var name = $("#SamedayFitmentName_" + stockId).val();
    
	var regex = new RegExp(/^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$/gm);
	if (!regex.test(phoneNumber)) {
		$("#ValidationSameDayFitmentPhoneNumber_" + stockId).show();
		return false;
	}

    if (!name) {
        $("#ValidationSameDayFitmentName_" + stockId).show();
        return false;
    }

    var cleanedStockId = stockId.substring(0, stockId.indexOf('_'));

	$.ajax({
		type: "POST",
		url: '/tyres/submit-phonenumber-fitment',
		data: JSON.stringify({ 
			phoneNumber: phoneNumber, 
			postcode: $("#postcode_" + stockId).val(),
			stockId: cleanedStockId,
			quantity: $("#quantity_" + cleanedStockId).val(),
			fitmentType: $("#fitmentType_" + stockId).val(),
			name: name
		}),
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (data) {
			if (data.result == "OK") {
				$("#inputPhoneNextDayFitment_" + stockId).hide();
				$("#successSubmitNextDayFitment_" + stockId).show();
				$("#failPhoneNumberSubmission_" + stockId).hide();
			} 
		},
		error: function (errorThrown) {
			$("#failPhoneNumberSubmission_" + stockId).show();
			$("#successSubmitNextDayFitment_" + stockId).hide();
		}
	});

	return false;
};