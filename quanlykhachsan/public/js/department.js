$(document).ready(function(){
    $('#modal_edit').on('shown.bs.modal', function (e) {
        let button = $(e.relatedTarget);
        let department = button.data('department');

        $('#edit-form').attr('action', button.data('url'));
        $(this).find('.modal-body #name_group').val(department.name);
        $(this).find('.modal-body #description').val(department.description);
    });
});
