if (typeof $ !== "undefined") {
    $(function () {
        $("#pnlForm > form").submit(function (e) {
            e.preventDefault();

            var $form = $(this);

            if (!$form.valid()) {
                return;
            }
            
            $.post($form.attr("action"), $form.serialize(), null, "json")
                .done(function (response) {

                    console.log(response);
                    if (typeof response !== "undefined" &&
                        response !== null &&
                        response !== 0) {
                        $(".getHelpFormBody").html("<span class=\"thankyouMessage\"><p>Thank you, one of our tyre experts will get back to you as soon as possible. Your reference number for this request is <strong>"
                            + response
                            + "</strong></p></span>");
                    } else {
                        $form.append("<span class=\"field-validation-error\">Sorry, a server error occured please try again later.</span>");
                    }
                })
                .fail(function(e) {
                    $form.append("<span class=\"field-validation-error\">Sorry, a server error occured please try again later.</span>");
                });
        });
    });
}