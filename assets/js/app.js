var backgroundColor = [
    'rgba(253, 114, 114, 0.9)',
    'rgba(27, 156, 252, 0.9)',
    'rgba(234, 181, 67, 0.9)',
    'rgba(85, 230, 193, 0.9)',
    'rgba(130, 88, 159, 0.9)',
    'rgba(59, 59, 152, 0.9)'
]

$(document).ready(function () {
    $('#topAnchorsByBacklinks').DataTable({
        "pageLength": 5
    });
    $('#topAnchorsByDomains').DataTable({
        "pageLength": 5
    });
});


function url_domain(data) {
    var a = document.createElement('a');
    a.href = data;
    return a.hostname;
}

function LaunchBl() {
    $("#loadingBl").show();
    $.ajax({
        url: 'app.php',
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            json.map(jsonItem => {
                if (jsonItem[0]) {
                    if (jsonItem[0] === 'url') {
                        ViewBls.innerHTML += '<tr><td>' + jsonItem[0] + '</td>' +
                            '<td>' + jsonItem[1] + '</td>' +
                            '<td>' + jsonItem[2] + '</td>' +
                            '<td>' + jsonItem[3] + '</td>' +
                            '</tr>'
                    } else {
                        ViewBls.innerHTML += '<tr><td><img class="img-icon" src="https://s2.googleusercontent.com/s2/favicons?domain=' + url_domain(jsonItem[0]) + '"> ' + jsonItem[0] + '</td>' +
                            '<td>' + jsonItem[1] + '</td>' +
                            '<td>' + jsonItem[2] + '</td>' +
                            '<td>' + jsonItem[3] + '</td>' +
                            '</tr>'
                    }
                }
            })
            $("#loadingBl").hide();
        }
    });
}