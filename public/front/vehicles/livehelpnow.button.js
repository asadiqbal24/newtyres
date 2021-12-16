if (typeof $ !== "undefined") {
    $(window).load(checkChatOnlineStatus);
}



function checkChatOnlineStatus() {
    if (typeof window.bLHNOnline !== "undefined") {
        InitializeLHNInviteAcceptButton();
    } else {
        checkChatOnlineStatusRecursive();
    }
}

function checkChatOnlineStatusRecursive() {
    setTimeout(checkChatOnlineStatus, 10);
}

function InitializeLHNInviteAcceptButton() {
    var $lhnInviteAcceptButton = $(".LHNInviteAcceptButton");

    $lhnInviteAcceptButton.click(function(e) {
        e.preventDefault();

        if (typeof OpenLHNChat === "function") {
            OpenLHNChat();
        } else {
            throw "Unable to open LiveHelpNow Chat window, OpenLHNChat() is undefined.";
        }
    });

    if (window.bLHNOnline === 0) {
        $lhnInviteAcceptButton
            .removeClass("online")
            .addClass("disabled")
            .html(
                "Live Chat - Offline"
                //$lhnInviteAcceptButton.data("offline-text")
            );
    } else {

        $lhnInviteAcceptButton
            .removeClass("disabled")
            .addClass("online")
            .html(
                "Live Chat - Online"
                //$lhnInviteAcceptButton.data("online-text")
            );
    }
}