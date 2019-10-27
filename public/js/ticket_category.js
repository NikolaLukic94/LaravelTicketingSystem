$(document).ready(function() {
    $("#btn-add").click(function() { //defines the click event for the Add Task button that is on the modal form.

        $.ajaxSetup({ //sets up the AJAX X-CSRF-TOKEN header and passes the token value that we set up in the header section of the parent template. 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') reads the header meta named csrf-token and reads the value of the content attribute and assigns it to X-CSRF-TOKEN
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({ //performs the AJAX operation.
            type: 'POST',//type: 'POST', specifies the HTTP verb to be used.
            url: '/ticket-category/store',//url: '/ticket-category', defines the URL that our AJAX operation should interact with.
            data: {//defines the values that should be submitted to the back-end server that processes the AJAX operations.
                name: $("#frmAddTicketCategory input[name=name]").val(),// uses jQuery to get the value of the input named name in the form with the id of #frmAddTask.
            },
            dataType: 'json', // sets the data type for the operation
            success: function(data) {//defines the function that should be called if everything works ok. The function accepts a parameter data which contains the data returned from the server.
                $('#frmAddTicketCategory').trigger("reset");
                $("#frmAddTicketCategory .close").click();
                var tr = $('<tr>');
                tr.append($('<td>',{ticket_category.name})).
                    append($('</td>').
                    append($('<td>'));                                                                                                                            
                $('#list').apend(tr);
                }, 
            error: function(data) {
                var errors = $.parseJSON(data.responseText);

                $('#add-ticket-category-errors').html('');
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
            url: '/ticket-category/edit' + $("#frmEditTicketCategory input[name=ticket_category_id]").val(),
            data: {
                task: $("#frmEditTicketCategory input[name=name]").val()
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditTicketCategory').trigger("reset");
                $("#frmEditTicketCategory .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-ticket-category-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-ticket-category-errors').append('<li>' + value + '</li>');
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
            url: '/delete/' + $("#frmDeleteTicketCategory input[name=ticket_category_id]").val(),
            dataType: 'json',
            success: function(data) {
                $("#frmDeleteTicketCategory .close").click();
                window.location.reload();
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
});

function editTicketCategoryForm(ticket_category_id) {
    $.ajax({
        type: 'GET',
        url: '/ticket-category/edit/' + task_id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditTicketCategory input[name=name]").val(data.ticket_category.ticket_category);
            $("#frmEditTicketCategory input[name=ticket_category_id]").val(data.ticket_category.id);
            $('#frmEditTicketCategory').modal('show');
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