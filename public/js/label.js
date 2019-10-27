$(document).ready(function() {
    $("#btn-add").click(function() { //defines the click event for the Add Task button that is on the modal form.

        $.ajaxSetup({ //sets up the AJAX X-CSRF-TOKEN header and passes the token value that we set up in the header section of the parent template. 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') reads the header meta named csrf-token and reads the value of the content attribute and assigns it to X-CSRF-TOKEN
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({ //performs the AJAX operation.
            type: 'POST',//type: 'POST', specifies the HTTP verb to be used.
            url: '/label/store',//url: '/ticket-category', defines the URL that our AJAX operation should interact with.
            data: {//defines the values that should be submitted to the back-end server that processes the AJAX operations.
                name: $("#frmAddLabel input[name=name]").val(),// uses jQuery to get the value of the input named name in the form with the id of #frmAddTask.
            },
            dataType: 'json', // sets the data type for the operation
            success: function(data) {//defines the function that should be called if everything works ok. The function accepts a parameter data which contains the data returned from the server.
                $('#frmAddLabel').trigger("reset");
                $("#frmAddLabel .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);

                $('#add-ticket-label-errors').html('');
                $.each(errors.messages, function(key, value) {
                   console.log(value);
                });
                $("#add-error-bag").show();
            }
        });
    });
    $("#btn-edit").click(function() {
        $.ajaxSetup({ 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({ 
            type: 'PUT',
            url: '/label/edit' + $("#frmEditLabel input[name=ticket_category_id]").val(),
            data: {
                task: $("#frmEditLabel input[name=name]").val()
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditLabel').trigger("reset");
                $("#frmEditLabel .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-ticket-label-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-ticket-label-errors').append('<li>' + value + '</li>');
                });
                $("#edit-error-bag").show();
            }
        });
    });
    $("#btn-delete").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'DELETE',
            url: '/delete/' + $("#frmDeleteLabel input[name=ticket_category_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteLabel .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});


function editLabelForm(task_id) {
    $.ajax({
        type: 'GET',
        url: '/label/edit/' + task_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditLabel input[name=name]").val(data.task.task);
            $("#frmEditLabel input[name=ticket_category_id]").val(data.task.id);
            $('#frmEditLabel').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteTicketCategoryForm(task_id) {
    $.ajax({
        type: 'GET',
        url: '/label/delete/' + task_id,
        success: function(data) {
            $("#frmDeleteLabel #delete-title").html("Delete Task (" + data.task.task + ")?");
            $("#frmDeleteLabel input[name=task_id]").val(data.task.id);
            $('#deleteLabelModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}