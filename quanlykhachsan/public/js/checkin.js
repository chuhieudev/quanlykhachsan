var filter_params = {}
$(function () {
    $('#search_button').click(function (event) {
        event.preventDefault();
        var filter = {};
        $("#search_form :input").each(function () {
            if ($(this).attr("name") == 'status' && !$("input[id='" + $(this).attr("id") + "']").is(":checked")) {
            } else {
                filter[$(this).attr("name")] = $(this).val();
            }
        });

        filter_params = filter;
        ajaxReloadList($(this).attr('data-url'), filter_params);
    });

    function ajaxReloadList(url, params) {
        $.ajax({
            url: url,
            type: 'GET',
            data: params,
            success: function (data) {
                $('#results').html(data);
            }
        });
    }

    $('.date_checkin').on('change', function() {
        var $sels = $('.date_checkin option:selected[value=""]');
        $("#export").attr("disabled", $sels.length > 0);
    }).change();
});

$(document).on('click', '#export', function(event) {
    event.preventDefault();
    $('#export_year').val($('#year').val())
    $('#export_month').val($('#month').val())
    $('#export_user_id').val($('#selUser').val())
    $('#frm_export')[0].submit();
});
