
(function ($) {
    $('html').addClass('stylish-select');
    if (!Array.prototype.indexOf) {
        Array.prototype.indexOf = function (searchElement) {
            if (this === void 0 || this === null)
                throw new TypeError();
            var t = Object(this);
            var len = t.length >>> 0;
            if (len === 0)
                return -1;
            var n = 0;
            if (arguments.length > 0) {
                n = Number(arguments[1]);
                if (n !== n)
                    n = 0;
                else if (n !== 0 && n !== (1 / 0) && n !== -(1 / 0))
                    n = (n > 0 || -1) * Math.floor(Math.abs(n));
            }
            if (n >= len)
                return -1;
            var k = n >= 0
            ? n
            : Math.max(len - Math.abs(n), 0);
            for (; k < len; k++) {
                if (k in t && t[k] === searchElement)
                    return k;
            }
            return -1;
        };
    }
    $.fn.extend({
        getSetSSValue: function (value) {
            if (value) {
                $(this).val(value).change();
                return this;
            } else {
                return $(this).find(':selected').val();
            }
        },
        resetSS: function () {
            var oldOpts = $(this).data('ssOpts');
            $this = $(this);
            $this.next().remove();
            $this.unbind('.sSelect').sSelect(oldOpts);
        }
    });
    $.fn.sSelect = function (options) {
        return this.each(function () {
            var defaults = {
                defaultText: '',
                animationSpeed: 0,
                ddMaxHeight: '',
                containerClass: ''
            };
            var opts = $.extend(defaults, options),
            $input = $(this),
            $containerDivText = $('<div class="selectedTxt"></div>'),
            $containerDiv = $('<div class="newListSelected ' + opts.containerClass + ($input.is(':disabled') ? ' newListDisabled' : '') + '"></div>'),
            $containerDivWrapper = $('<div class="SSContainerDivWrapper" style="visibility:hidden;"></div>'),
            $newUl = $('<ul class="newList"></ul>'),
            currentIndex = -1,
            prevIndex = -1,
            keys = [],
            prevKey = false,
            prevented = false,
            $newLi;
            $(this).data('ssOpts', options);
            $containerDiv.insertAfter($input);
            $containerDiv.attr("tabindex", $input.attr("tabindex") || "0");
            $containerDivText.prependTo($containerDiv);
            $('<span class="fieldLabel">' + $('label[for="' + $input.attr("id") + '"]').text() + '</span>').prependTo($containerDiv);
            $newUl.appendTo($containerDiv);
            $newUl.wrap($containerDivWrapper);
            $containerDivWrapper = $newUl.parent();
            $input.hide();
            if ($input.is(':disabled')) {
                return;
            }
            $containerDivText.data('ssReRender', !$containerDivText.is(':visible'));
            function addItem(item, container) {
                var option = $(item).text(),
                key = $(item).val(),
                isDisabled = $(item).is(':disabled');
                if (!isDisabled && !$(item).parents().is(':disabled')) {
                    keys.push(option.charAt(0).toLowerCase());
                }
                container.append($('<li><a' + (isDisabled ? ' class="newListItemDisabled"' : '') + ' href="JavaScript:void(0);">' + option + '</a></li>').data({
                    'key': key,
                    'selected': $(item).is(':selected')
                }));
            }
            $input.children().each(function () {
                if ($(this).is('option')) {
                    addItem(this, $newUl);
                } else {
                    var optionTitle = $(this).attr('label'),
                    $optGroup = $('<li class="newListOptionTitle ' + ($(this).is(':disabled') ? 'newListOptionDisabled' : '') + '">' + optionTitle + '</li>'),
                    $optGroupList = $('<ul></ul>');
                    $optGroup.appendTo($newUl);
                    $optGroupList.appendTo($optGroup);
                    $(this).children().each(function () {
                        addItem(this, $optGroupList);
                    });
                }
            });
            $newLi = $newUl.find('li a:not(.newListItemDisabled)').not(function () {
                return $(this).parents().hasClass('newListOptionDisabled');
            });
            $newLi.each(function (i) {
                if ($(this).parent().data('selected')) {
                    opts.defaultText = $(this).html();
                    currentIndex = prevIndex = i;
                }
            });
            var newUlHeight = $newUl.height(),
            containerHeight = $containerDiv.height(),
            newLiLength = $newLi.length;
            if (currentIndex != -1) {
                navigateList(currentIndex);
            } else {
                $containerDivText.text(opts.defaultText);
            }
            function newUlPos() {
                var containerPosY = $containerDiv.offset().top,
                docHeight = $(window).height(),
                scrollTop = $(window).scrollTop();
                if (newUlHeight > parseInt(opts.ddMaxHeight)) {
                    newUlHeight = parseInt(opts.ddMaxHeight);
                }
                containerPosY = containerPosY - scrollTop;
                if (containerPosY + newUlHeight >= docHeight) {
                    $newUl.css({
                        height: newUlHeight
                    });
                    $containerDivWrapper.css({
                        top: '-' + newUlHeight + 'px',
                        height: newUlHeight
                    });
                    $input.onTop = true;
                } else {
                    $newUl.css({
                        height: newUlHeight
                    });
                    $containerDivWrapper.css({
                        top: containerHeight + 'px',
                        height: newUlHeight
                    });
                    $input.onTop = false;
                }
            }
            newUlPos();
            $(window).bind('resize.sSelect scroll.sSelect', newUlPos);
            function positionFix() {
                $containerDiv.css('position', 'relative');
            }
            function positionHideFix() {
                $containerDiv.css(
                {
                    position: 'static'
                });
            }
            $containerDivText.bind('click.sSelect', function (event) {
                event.stopPropagation();
                if ($(this).data('ssReRender')) {
                    newUlHeight = $newUl.height('').height();
                    $containerDivWrapper.height('');
                    containerHeight = $containerDiv.height();
                    $(this).data('ssReRender', false);
                    newUlPos();
                }
                $('.SSContainerDivWrapper')
                .not($(this).next())
                .hide()
                .parent()
                .css('position', 'static')
                .removeClass('newListSelFocus');
                $containerDivWrapper.toggle();
                positionFix();
                if (currentIndex == -1) currentIndex = 0;
                try {
                    $newLi.eq(currentIndex).focus();
                } catch (ex) { }
            });
            function closeDropDown(fireChange, resetText) {
                if (fireChange == true) {
                    prevIndex = currentIndex;
                    $input.change();
                }
                if (resetText == true) {
                    currentIndex = prevIndex;
                    navigateList(currentIndex);
                }
                $containerDivWrapper.hide();
                positionHideFix();
            }
            $newLi.bind('click.sSelect', function (e) {
                var $clickedLi = $(e.target);
                currentIndex = $newLi.index($clickedLi);
                prevented = true;
                navigateList(currentIndex, true);
                closeDropDown();
            });
            $newLi.bind('mouseenter.sSelect',
            function (e) {
                var $hoveredLi = $(e.target);
                $hoveredLi.addClass('newListHover');
            }).bind('mouseleave.sSelect',
            function (e) {
                var $hoveredLi = $(e.target);
                $hoveredLi.removeClass('newListHover');
            });
            function navigateList(currentIndex, fireChange) {
                if (currentIndex == -1) {
                    $containerDivText.text(opts.defaultText);
                    $newLi.removeClass('hiLite');
                } else {
                    $newLi.removeClass('hiLite')
                    .eq(currentIndex)
                    .addClass('hiLite');
                    var text = $newLi.eq(currentIndex).text(),
                    val = $newLi.eq(currentIndex).parent().data('key');
                    try {
                        $input.val(val);
                    } catch (ex) {
                        $input[0].selectedIndex = currentIndex;
                    }
                    $containerDivText.text(text);
                    if (fireChange == true) {
                        prevIndex = currentIndex;
                        $input.change();
                    }
                    if ($containerDivWrapper.is(':visible')) {
                        try {
                            $newLi.eq(currentIndex).focus();
                        } catch (ex) { }
                    }
                }
            }
            $input.bind('change.sSelect', function (event) {
                var $targetInput = $(event.target);
                if (prevented == true) {
                    prevented = false;
                    return false;
                }
                var $currentOpt = $targetInput.find(':selected');
                currentIndex = $targetInput.find('option').index($currentOpt);
                navigateList(currentIndex);
            });
            function keyPress(element) {
                $(element).unbind('keydown.sSelect').bind('keydown.sSelect', function (e) {
                    var keycode = e.which;
                    prevented = true;
                    switch (keycode) {
                        case 40:
                        case 39:
                            incrementList();
                            return false;
                            break;
                        case 38:
                        case 37:
                            decrementList();
                            return false;
                            break;
                        case 33:
                        case 36:
                            gotoFirst();
                            return false;
                            break;
                        case 34:
                        case 35:
                            gotoLast();
                            return false;
                            break;
                        case 13:
                        case 27:
                            closeDropDown(true);
                            return false;
                            break;
                        case 9:
                            closeDropDown(true);
                            nextFormElement();
                            return false;
                            break;
                    }
                    keyPressed = String.fromCharCode(keycode).toLowerCase();
                    var currentKeyIndex = keys.indexOf(keyPressed);
                    if (typeof currentKeyIndex != 'undefined') {
                        ++currentIndex;
                        currentIndex = keys.indexOf(keyPressed, currentIndex);
                        if (currentIndex == -1 || currentIndex == null || prevKey != keyPressed) {
                            currentIndex = keys.indexOf(keyPressed);
                        }
                        navigateList(currentIndex);
                        prevKey = keyPressed;
                        return false;
                    }
                });
            }
            function incrementList() {
                if (currentIndex < (newLiLength - 1)) {
                    ++currentIndex;
                    navigateList(currentIndex);
                }
            }
            function decrementList() {
                if (currentIndex > 0) {
                    --currentIndex;
                    navigateList(currentIndex);
                }
            }
            function gotoFirst() {
                currentIndex = 0;
                navigateList(currentIndex);
            }
            function gotoLast() {
                currentIndex = newLiLength - 1;
                navigateList(currentIndex);
            }
            $containerDiv.bind('click.sSelect', function (e) {
                e.stopPropagation();
                keyPress(this);
            });
            $containerDiv.bind('focus.sSelect', function () {
                $(this).addClass('newListSelFocus');
                keyPress(this);
            });
            $containerDiv.bind('blur.sSelect', function () {
                $(this).removeClass('newListSelFocus');
            });
            $(document).bind('click.sSelect', function () {
                $containerDiv.removeClass('newListSelFocus');
                if ($containerDivWrapper.is(':visible')) {
                    closeDropDown(false, true);
                } else {
                    closeDropDown(false);
                }
            });
            function nextFormElement() {
                var fields = $('body').find('button,input,textarea,select'),
                index = fields.index($input);
                if (index > -1 && (index + 1) < fields.length) {
                    fields.eq(index + 1).focus();
                }
                return false;
            }
            $input.focus(function () {
                $input.next().focus();
            });
            $containerDivText.bind('mouseenter.sSelect',
            function (e) {
                var $hoveredTxt = $(e.target);
                $hoveredTxt.parent().addClass('newListSelHover');
            }).bind('mouseleave.sSelect',
            function (e) {
                var $hoveredTxt = $(e.target);
                $hoveredTxt.parent().removeClass('newListSelHover');
            });
            $containerDivWrapper.css({
                left: '0',
                display: 'none',
                visibility: 'visible'
            });
        });
    };
})(jQuery);