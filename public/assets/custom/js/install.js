function checkDatabase(baseURL) {
    console.log(baseURL+'installation/databasecon/?server='+$('#inputServer').val()+'&username='+$('#inputUsername').val()+'&password='+$('#inputPassword').val());
    $.ajax({
        url: baseURL+'installation/databasecon/?server='+$('#inputServer').val()+'&username='+$('#inputUsername').val()+'&password='+$('#inputPassword').val(), // The targeted resource
        type: 'GET', // The type of HTTP request.
        dataType: 'json', // The type of data to receive, here, from HTML.
        success: function(data, res, status) {
            if (data['status']) {
                console.log('database connection good');
                $('#buttonCheckDatabase').attr('onclick','nextInstalationTab(2)').removeClass('btn-primary').addClass('btn-success').text('Selanjutnya');
            }else{
                console.log('database connection fail');
            }
        }
    });
}

function createDatabase(baseURL) {
    console.log(baseURL+'installation/databasecon/?server='+$('#inputServer').val()+'&username='+$('#inputUsername').val()+'&password='+$('#inputPassword').val()+'&database='+$('#inputDatabase').val());
    $.ajax({
        url: baseURL+'installation/databasecon/?server='+$('#inputServer').val()+'&username='+$('#inputUsername').val()+'&password='+$('#inputPassword').val()+'&database='+$('#inputDatabase').val(), // The targeted resource
        type: 'GET', // The type of HTTP request.
        dataType: 'json', // The type of data to receive, here, from HTML.
        success: function(data, res, status) {
            if (data['status']) {
                console.log('database created');
                $('#buttonCreateDatabase').attr('onclick','nextInstalationTab(3)').removeClass('btn-primary').addClass('btn-success').text('Selanjutnya');
            }else{
                console.log('database creation fail');
            }
        }
    });
}

function nextInstalationTab(params) {
    console.log('here');
    $('#nav-step-1').removeClass('active').removeAttr("aria-current");
    $('#nav-step-2').removeClass('active').removeAttr("aria-current");
    $('#nav-step-3').removeClass('active').removeAttr("aria-current");
    $('#nav-step-4').removeClass('active').removeAttr("aria-current");
    $('#nav-step-'+params).addClass('active').attr("aria-current",'true');
    $('#body-step-1').addClass('d-none');
    $('#body-step-2').addClass('d-none');
    $('#body-step-3').addClass('d-none');
    $('#body-step-4').addClass('d-none');
    $('#body-step-'+params).addClass('d-block').removeClass('d-none');
}