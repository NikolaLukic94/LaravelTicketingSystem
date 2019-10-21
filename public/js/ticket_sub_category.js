$(document).ready(function() {
    $("#btn-add").click(function() { //defines the click event for the Add Task button that is on the modal form.
        $.ajaxSetup({ //sets up the AJAX X-CSRF-TOKEN header and passes the token value that we set up in the header section of the parent template. 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') reads the header meta named csrf-token and reads the value of the content attribute and assigns it to X-CSRF-TOKEN
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({ //performs the AJAX operation.
            type: 'POST',//type: 'POST', specifies the HTTP verb to be used.
            url: '/ticket-sub-category/store',//url: '/ticket-category', defines the URL that our AJAX operation should interact with.
            data: {//defines the values that should be submitted to the back-end server that processes the AJAX operations.
                name: $("#frmAddTicketSubCategory input[name=name]").val(),// uses jQuery to get the value of the input named name in the form with the id of #frmAddTask.
            },
            dataType: 'json', // sets the data type for the operation
            success: function(data) {//defines the function that should be called if everything works ok. The function accepts a parameter data which contains the data returned from the server.
                $('#frmAddTicketSubCategory').trigger("reset");
                $("#frmAddTicketSubCategory .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#add-ticket-sub-category-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#add-ticket-sub-category-errors').append('<li>' + value + '</li>');
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
            url: '/tasks/' + $("#frmEditTask input[name=task_id]").val(),
            data: {
                task: $("#frmEditTask input[name=task]").val(),
                description: $("#frmEditTask input[name=description]").val(),
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditTask').trigger("reset");
                $("#frmEditTask .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-task-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-task-errors').append('<li>' + value + '</li>');
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
            url: '/tasks/' + $("#frmDeleteTask input[name=task_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteTask .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});

function addTicketSubCategoryForm() {// defines the show add task modal form.
    $(document).ready(function() {
        $("#add-error-bag").hide();
        $('#addTicketSubCategoryModal').modal('show');
    });
}

function editTicketCategoryForm(task_id) {
    $.ajax({
        type: 'GET',
        url: '/tasks/' + task_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditTicketCategory input[name=name]").val(data.task.task);
            $("#frmEditTask input[name=task_id]").val(data.task.id);
            $('#editTaskModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}

function deleteTicketCategoryForm(task_id) {
    $.ajax({
        type: 'GET',
        url: '/tasks/' + task_id,
        success: function(data) {
            $("#frmDeleteTicketCategory #delete-title").html("Delete Task (" + data.task.task + ")?");
            $("#frmDeleteicketCategory input[name=task_id]").val(data.task.id);
            $('#deleteTaskModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}