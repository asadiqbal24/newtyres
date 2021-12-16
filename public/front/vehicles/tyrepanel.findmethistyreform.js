$(document).on("click", ".askForADeal", function (e) {

    e.preventDefault();

    var $this = $(this);
    var $parent = $this.parent();

    $this.hide();
    $parent.find(".icons").hide();
    $parent.find(".tyrethumbnail").hide();
    $parent.find(".price").hide();
    $parent.find(".sold-out").hide();
    $parent.find(".searchtile-deliverylocation").hide();
    $parent.find(".grayline").hide();

    $parent
        .find(".findTyreForm")
        .attr("style", "display: block !important;")
        .find("form")
        .submit(function (e) {

            var $this = $(this);

            if (!$this.valid()) {
                return;
            }

            e.preventDefault();

            $
                .post($this.attr("action"), $this.serialize(), null, "json")
                .done(function (data, textStatus, jqXhr) {
                    var response = $.parseJSON(jqXhr.responseText);
                    if (response === true) { // expect a json boolean from server.
                        $this.parent().html("Thank you, one of our tyre experts will get back to you as soon as possible.");
                    } else {
                        $this.append("<span class=\"field-validation-error\">Sorry, a server error occured please try again later.</span>");
                    }
                })
                .fail(function (e) {
                    $this.append("<span class=\"field-validation-error\">Sorry, a server error occured please try again later.</span>");
                });

            $this
                .find("input")
                .attr("disabled", true)
                .filter("[type=submit]")
                .val("Sending...");
        });
});