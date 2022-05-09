var filter_params = {}
$(function() {
    $('#search_button').click(function (event) {
        event.preventDefault();
        var filter = {};
        $("#search_form :input").each(function() {
            if ($(this).attr("name")=='status' && !$("input[id='" + $(this).attr("id") + "']").is(":checked")) {
            }else {
                filter[$(this).attr("name")] = $(this).val();
            }
        });

        filter_params = filter;
        ajaxReloadList($(this).attr('data-url'), filter_params);
        $('#export_year').val(filter['year'])
        $('#export_month').val(filter['month'])
        $('#export_user_id').val(filter['user_id'])
    });

    function ajaxReloadList(url, params) {
        $.ajax({
            url:url,
            type: 'GET',
            data: params,
            success:function(data)
            {
                $('#results').html(data);
            }
        });
    }
});
