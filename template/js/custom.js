function AjaxUploadResponse(phpurl, phpdata) {

    path = localStorage.getItem("path");
    var return_val = '';
    $.ajax({
        cache: false,
        contentType: false,
        processData: false,
        type: "POST",
        async: false,
        url: path + phpurl,
        beforeSend: function () {
        },
        dataType: 'json',
        data: phpdata,
        success: function (data) {
            return_val = data;
        },
        error: function (xhr, status, text) {
            console.log('Failure! ' + text);
        }
    });
    return return_val;
}


function UpdateFilters(parent) {
    var data = $("form#" + parent).serialize();
    var rslt = AjaxResponse('form_process/update_filters', 'session_name=' + parent + '&' + data);
    if (rslt.status == 'success') {
        location.reload();
    }
}

function ClearFilters(SessionName) {

    var rslt = AjaxResponse("form_process/clear_filters", 'session_name=' + SessionName);
    if (rslt.status == 'success') {
        location.reload();
    }
}

function AjaxRequest(phpurl, phpdata, divid) {

    path = localStorage.getItem("path");
    //alert(phpurl+phpdata);
    $.ajax({
        cache: false,
        type: "POST",
        url: path + phpurl,
        beforeSend: function () {
            $("#" + divid).html('Loading....');
            $("#" + divid).fadeIn('fast');
        },
        dataType: "html",
        data: phpdata,
        success: function (data) {
            $("#" + divid).html(data);
            $("#" + divid).fadeIn('slow');
        },
        error: function (xhr, status, text) {
            console.log('Failure! ' + text);
        }
    });
}

function AjaxResponse(phpurl, phpdata) {
    path = localStorage.getItem("path");
    var return_val = '';
    $.ajax({
        cache: false,
        type: "POST",
        async: false,
        url: path + phpurl,
        beforeSend: function () {
        },
        dataType: "json",
        data: phpdata,
        success: function (data) {
            return_val = data;
        },
        error: function () {
        }
    });
    return return_val;
}


function GridMessages(FormId, divId, cssClass, msg, timeOut) {

    var html = '<div class="card-alert card ' + cssClass + ' lighten-5">\
                    <div style="text-align: center;" class="card-content ' + cssClass + '-text">\
                        <p class="text-center"><strong>' + msg + ' ...!</strong></p>\
                    </div>\
                    <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">\
                        <span aria-hidden="true">×</span>\
                    </button>\
                </div>';

    $('#' + FormId + ' #' + divId).html(html);
    $('#' + FormId + ' #' + divId).fadeTo(2500, timeOut).slideUp(timeOut, function () {
        $('#' + FormId + ' #' + divId).slideUp(timeOut);
    });

}

function ActionsLoad(){
    $('.dropdown-trigger').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            coverTrigger: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        }
    );
}


$(document).ready(function () {
    $('.dropdown-trigger').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            coverTrigger: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        }
    );
});