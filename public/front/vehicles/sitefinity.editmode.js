
function getUrlParameterVal(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.href);
    if (results == null)
        return "";
    else
        return results[1];
}

function Sitefinity() {
    this.cmsMode = getUrlParameterVal("cmspagemode");
}

Sitefinity.prototype.InEditMode = function() {
    return (this.cmsMode == 'edit');
}

Sitefinity.prototype.InPreviewMode = function() {
    return (this.cmsMode == 'preview');
}
