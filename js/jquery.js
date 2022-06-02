<!-- Añadir usuario -->
$(document).on('click', '#btn-add', function (e) {
    var data = $("#user_form").serialize();
    console.log(data);
    $.ajax({
        data: data,
        type: "post",
        url: "backend/crud_usuarios.php",
        success: function (dataResult) {
            console.log(dataResult);
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
                $('#addEmployeeModal').modal('hide');
                location.reload();
            }
        }
    });
});

$(document).on('click', '#bAceptarlog', function (e) {
    var data = $("#login_user_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "backend/edit_user_login.php",
        success: function (dataResult) {
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
                location.reload();
            }
        }
    });
});

    $(document).on('click', '.update', function (e) {
        var id = $(this).attr("data-id");
        var name = $(this).attr("data-name");
        var email = $(this).attr("data-email");
        var phone = $(this).attr("data-phone");
        var city = $(this).attr("data-city");
        var adm = $(this).attr("data-adm");
        $('#id_u').val(id);
        $('#name_u').val(name);
        $('#email_u').val(email);
        $('#phone_u').val(phone);
        $('#city_u').val(city);
        $('#adm_u').val(adm);
    });

    $(document).on('click', '#update', function (e) {
        console.log("update function");
        var data = $("#update_form").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "backend/crud_usuarios.php",
            success: function (dataResult) {
                console.log(dataResult);
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $('#editEmployeeModal').modal('hide');
                    location.reload();
                }
            }
        });
    });

$(document).on("click", ".delete", function () {
    var id = $(this).attr("data-id");
    $('#id_d').val(id);

});
$(document).on("click", "#delete", function () {
    $.ajax({
        url: "backend/crud_usuarios.php",
        type: "POST",
        cache: false,
        data: {
            type: 3,
            id: $("#id_d").val()
        },
        success: function (dataResult) {
            $('#deleteEmployeeModal').modal('hide');
            $("#" + dataResult).remove();

        }
    });
});
$(document).on("click", "#delete_multiple", function () {
    var user = [];
    $(".user_checkbox:checked").each(function () {
        user.push($(this).data('user-id'));
    });
    if (user.length > 0) {
        var selected_values = user.join(",");
        console.log(selected_values);
        $.ajax({
            type: "POST",
            url: "backend/crud_usuarios.php",
            cache: false,
            data: {
                type: 4,
                id: selected_values
            },
            success: function (response) {
                var ids = response.split(",");
                for (var i = 0; i < ids.length; i++) {
                    $("#" + ids[i]).remove();
                }
            }
        });

    }
});


$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function () {
        if (this.checked) {
            checkbox.each(function () {
                this.checked = true;
            });
        } else {
            checkbox.each(function () {
                this.checked = false;
            });
        }
    });
    checkbox.click(function () {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});
