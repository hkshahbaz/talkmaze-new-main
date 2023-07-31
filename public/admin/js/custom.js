/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */
const myurl = "https://talkmaze.com";
function load(method,url,responseId) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(responseId).innerHTML =
                this.responseText;
        }
    };
    console.log(myurl+"/"+url);
    xhttp.open(method, myurl+"/"+url, true);
    xhttp.send();
}

function ajax(url,method,responseId) {
    $.ajax({
        url: myurl+url,
        method: method,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            document.getElementById(responseId).innerHTML = data;
            console.log("aa gya");
            $("#"+responseId).selectpicker('refresh');
        },
        error: function(data) {
            console.log(data);
            console.log("error");
        }
    });
}
function loaddata(id) {
    $.ajax({
        url: myurl+'/tasks/'+id+'/getmilestones',
        method: "GET",
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            loaddatatow(id)
            loaddatatowkl(id)
            $("#ajmilestones option").each(function() {
                $(this).remove();
            });
            $.each(data, function(key, value) {
                $('#ajmilestones')
                    .append($("<option></option>")
                        .attr("value",value.id)
                        .text(value.name));
            });
        },
        error: function(data) {
            console.log(data)
            $("#ajmilestones option").each(function() {
                $(this).remove();
            });
        }
    });
}

function loaddatatow(id) {
    $.ajax({
        url: myurl+'/tasks/'+id+'/getusers',
        method: "GET",
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            $("#ajusers option").each(function() {
                $(this).remove();
            });
            $.each(data, function(key, value) {
                $('#ajusers')
                    .append($("<option></option>")
                        .attr("value",value.id)
                        .text(value.name));
            });
            $('.multiselect-full-featured').multiselect('rebuild')
        },
        error: function(data) {
            console.log(data);
            $("#ajusers option").each(function() {
                $(this).remove();
            });
            $('.multiselect-full-featured').multiselect('rebuild')
        }
    });
}
function loaddatatowkl(id) {
    $.ajax({
        url: myurl+'/tasks/'+id+'/getobjectives',
        method: "GET",
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            $("#ajobj option").each(function() {
                $(this).remove();
            });
            $.each(data, function(key, value) {
                $('#ajobj')
                    .append($("<option></option>")
                        .attr("value",value.id)
                        .text(value.title));
            });
        },
        error: function(data) {
            console.log(data);
            $("#ajobj option").each(function() {
                $(this).remove();
            });
        }
    });
}

function sdelete(url) {
    $.ajax({
        url: myurl +'/'+ url,
        method: "DELETE",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#utable').dataTable().fnDraw();
            new PNotify({
                title: 'Item Deleted',
                text: 'Item Deleted Successfully',
                icon: 'icon-checkmark3',
                type: 'success'
            });
        },
        error: function (data) {
            console.log(myurl +'/'+ url)
            console.log("error");
        }
    });
}

function restore(url){
    $.ajax({
        url: myurl +'/'+ url,
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#utable').dataTable().fnDraw();
            new PNotify({
                title: 'Item Restored',
                text: 'Item Restored Successfully',
                icon: 'icon-checkmark3',
                type: 'success'
            });
        },
        error: function (data) {
            console.log("error");
        }
    });
}

function permanent(url){
    $.ajax({
        url: myurl +'/'+ url,
        method: "DELETE",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#utable').dataTable().fnDraw();
            new PNotify({
                title: 'Item Permanently Deleted',
                text: 'Item Deleted Successfully',
                icon: 'icon-checkmark3',
                type: 'danger'
            });
        },
        error: function (data) {
            console.log("error");
        }
    });
}


/////////////////////////////////////////////////////////

function restorer(url){
    $.ajax({
        url: myurl +'/'+ url,
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            $('#rtable').dataTable().fnDraw();
            new PNotify({
                title: 'Item Restored',
                text: 'Item Restored Successfully',
                icon: 'icon-checkmark3',
                type: 'success'
            });
        },
        error: function (data) {
            console.log("error");
        }
    });
}
function sdeleter(url) {
    $.ajax({
        url: myurl +'/'+ url,
        method: "DELETE",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log('saham')
            $('#rtable').dataTable().fnDraw();
            new PNotify({
                title: 'Item Deleted',
                text: 'Item Deleted Successfully',
                icon: 'icon-checkmark3',
                type: 'success'
            });
        },
        error: function (data) {
            console.log(myurl +'/'+ url)
            console.log("error");
        }
    });
}
