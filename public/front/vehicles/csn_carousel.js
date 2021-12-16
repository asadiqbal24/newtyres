(function ($) {
    var defaultSettings = {
        interval: 1000,
        transitionDuration: 250
    }

    function formatItemType(str) {
        return str === "reviews" ? "review" : str;
    }

    function formatNumber(nbr) {
        return nbr;
//        (nbr < 10 ? "0" : "") + nbr;
    }

    function showImage(container, settings, index, doTransition) {
        var currentIndex = container.data("index"),
            itemDiv = container.find(".item:eq(0)"),
            itemType = container.data("type");

        if (currentIndex == index) return;

        container.find(".thumbs > li:eq(" + currentIndex + ") > a").removeClass("selected");
        container.find(".thumbs > li:eq(" + index + ") > a").addClass("selected");

        var item = container.data("items")[index];

        if (doTransition) {
            itemDiv.find("img:eq(" + index + ")").css("opacity", "0").fadeTo(settings.transitionDuration, 1);
            itemDiv.find("img:eq(" + currentIndex + ")").fadeTo(settings.transitionDuration, 0);

        } else {
            itemDiv.find("img:eq(" + currentIndex + ")").hide();
            itemDiv.find("img:eq(" + index + ")").show();
        }


        itemDiv.attr("title", "click here for the " + formatItemType(item.itemType));
        itemDiv.find(".subHeading").text(item.subHeading);
        itemDiv.find("span").removeClass(itemType).addClass(item.itemType);
        itemDiv.find(".more").attr("href", item.itemUrl).attr("title", "click here for the " + formatItemType(item.itemType));
        itemDiv.find("h4>a").attr("href", item.itemUrl).text(item.caption);
        itemDiv.find(".timestamp").html(item.timestamp);

        container.find(".frame").attr("title", item.caption);
        container.find(".status .number").text(formatNumber(index + 1));
        container.data("index", index);
        container.data("type", item.itemType);
    }

    $.fn.carousel = function (options) {
        var timer, container = this,
            settings = $.extend({}, defaultSettings, options),
            mih = container.find(".item:first img").height(),
            mi = $("<div class='frame'></div>").prependTo(container.find(".item:first")),
            thmbs = this.find(".thumbs"),
            tabindex = 100 + $("body *[tabindex]").length,
            items = [];

        if (thmbs.length <= 0) return;

        var nextItem = function () {
            var items = container.data("items"),
                idx = parseInt(container.data("index")) + 1;
            if (idx >= items.length) idx = 0;
            showImage(container, settings, idx, true);
            resetTimer();
        }

        var prevItem = function () {
            var items = container.data("items"),
                idx = parseInt(container.data("index")) - 1;
            if (idx < 0) idx = items.length - 1;
            showImage(container, settings, idx, true);
            resetTimer();
        }

        var selectItem = function (ev) {
            var a = $(ev.target);
            if (!a.is("a")) {
                // is a child of the thumbnail link
                a = a.parent();
            }
            showImage(container, settings, parseInt(a.attr("index")), true);
            resetTimer();
        }

        var clickItem = function (ev) {
            var currentIndex = container.data("index"),
                item = container.data("items")[currentIndex];
            window.location.href = item.itemUrl;
        }

        var clearTimer = function () {
            clearInterval(timer);
        }

        var resetTimer = function () {
            clearTimer();
            timer = setInterval(nextItem, settings.interval);
        }

        this.find(".subHeading:eq(0) .more").attr("tabindex", (tabindex + 1));
        thmbs.find("li>a").each(function (i, a) { $(a).attr("tabIndex", tabindex++).attr("index", i); })
            .hover(function (ev) { selectItem(ev); clearTimer(); }, resetTimer);
        mi.css({ "overflow": "hidden", "position": "relative", "float": "left" });
        this.find(".item:first").css("cursor", "pointer").click(clickItem).hover(clearTimer, resetTimer);

        settings.itemCount = thmbs.find("li").length;
        this.data("index", 0);

        container.find("div.item").each(function (i, a) {
            var div = $(a),
                img = div.find("img"),
                o = {
                    imageUrl: img.attr("src"),
                    itemUrl: div.find("h4>a").attr("href"),
                    caption: $.trim(div.find("h4>a").text()),
                    itemType: ($.trim(div.find("p.subHeading").attr("class").replace("subHeading", ""))),
                    subHeading: div.find("p.subHeading").text(),
                    timestamp: div.find("p.timestamp").html()
                };
            items.push(o);
            img.css({ "position": "absolute", "zIndex": (100 + settings.itemCount - i), "top": "0px", "left": "0px" });
            mi.append(img);
            if (i > 0) { div.remove(); img.css({ "opacity": "0", "margin": "0" }).show(); } else { div.attr("title", "Click here for the " + formatItemType(items[0].itemType)); img.show(); }
        });

        container.data("items", items);
        if (items.length > 0) {
            $("<span></span>").appendTo(container.find(".item:first")).addClass(items[0].itemType);
            this.data("type", items[0].itemType);
        }
        delete items;

        thmbs.find("li:first>a").addClass("selected");
        resetTimer();
    };

})(jQuery);
