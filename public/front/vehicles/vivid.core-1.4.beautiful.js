(function ($) {
    "use strict";
    $.fn.enableplaceholder = function () {

        if ("placeholder" in document.createElement("input")) {
            return this;
        }

        return this.each(function () {
            var $this = $(this);

            if ($this.val() === "") {
                $this.val($this.attr("placeholder"));
            }

            $this
            .focus(function () {
                if ($this.val() === $this.attr("placeholder")) {
                    $this.val("");
                }
            })
            .blur(function () {
                if ($this.val() === "") {
                    $this.val($this.attr("placeholder"));
                }
            })
            .closest("form")
            .bind("reset", function () {
                $this.val($this.attr("placeholder"));
                return false;
            })
            .bind("submit", function () {
                if ($this.val() === $this.attr("placeholder")) {
                    $this.val("");
                    setTimeout(function () {
                        $this.val($this.attr("placeholder"));
                    }, 0);
                }
            });
        });
    };
})(jQuery);


(function ($) {
    $.vividCore = function (options) {

        var defaults = {
            navigationToggle: false,
            inputPlaceholderFix: true,
            navigationContainerSelector: "#navigationContainer",
            navigationToggleSelector: "#navigationToggle",
            searchContainerSelector: ".searchContainer",
            searchToggleSelector: "#searchToggle",
            memberLoginContainerSelector: ".memberLoginContainer",
            memberLoginSelector: "#memberLoginToggle",
            minCartSelector: "#mini-cart",
            minCartToggleSelector: "#toggle-cart",
            onlyOneToggleOpen: true
        };

        var extendedOptions = $.extend(defaults, options);

        var methods = {
            navigationToggle: function () {
                $(extendedOptions.navigationToggleSelector).click(function() {
                    $(this).toggleClass("active");
                    if (extendedOptions.onlyOneToggleOpen) {
                        $(extendedOptions.searchToggleSelector).removeClass("active");
                        $(extendedOptions.searchContainerSelector).hide();
                        $(extendedOptions.memberLoginSelector).removeClass("active");
                        $(extendedOptions.memberLoginContainerSelector).hide();
                        $(extendedOptions.minCartToggleSelector).removeClass("active");
                        $(extendedOptions.minCartSelector).hide();
                    }
                    $(extendedOptions.navigationContainerSelector).slideToggle(400);
                    return false;
                });
            },
            inputPlaceholderFix: function () {

                $("[placeholder]").enableplaceholder();

            }
        };

        if (extendedOptions.navigationToggle) {
            methods.navigationToggle();
        }
        if (extendedOptions.inputPlaceholderFix) {
            methods.inputPlaceholderFix();
        }
    }
})(jQuery);