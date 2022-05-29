<!-- BEGIN mynav.php INCLUDE -->
<?php include 'menu.php'; ?>
<!-- END mynav.php INCLUDE -->
<main>

    <div class="container">
        <div class="row" id="contact">
            <div id="arcos-list"></div>
            </tbody>
            </table>
        </div>
    </div>

    <!-- //////////     MODAL Editar  Articulo     ////////// -->
    <div id="openedit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">

                    <h4 class="modal-title">Editar artículo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="Backend/edit.php" id="edit-form">
                        <input class="form-control" type="hidden" name="id">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input id="edit-form" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input id="edit-form" class="form-control" type="text" name="tipo">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input  id="edit-form" class="form-control" type="text" name="precio">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input  id="edit-form" class="form-control" type="text" name="cantidad">
                        </div>
                        <button type="button" class="btn btn-primary" id="btnUpdateSubmit">Actualizar</button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Cerrar</button>
                    </form>


                </div>

                <!-- Modal body -->

            </div>

        </div>
    </div>
    </div>
</main>


<footer>
    <?php
    echo "<p>Laura Moya Ruiz &copy; 1999-" . date("Y") . " All rigth reserved</p>";
    ?>

</footer>
<!-- jQuery (es necesario para plugins JavaScript de Bootstrap  ) -->
<!--<script src="js/jquery-1.11.2.min.js"></script>-->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>


    jQuery(".kill").click(function (e) {
        console.log("Estoy dentro")
        let tip = $(this).val();
        Swal.fire({
            title: 'Estas seguro?',
            text: "¡No podras revertir este cambio!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminalo!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "Backend/delete.php",
                    type: "POST",
                    data: {
                        'id': tip
                    },
                    success: function (result) {
                        Swal.fire({
                            title: 'Perfecto',
                            text: "El articulo ha sido eliminado!",
                            type: 'success',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Aceptar',
                        }).then((result) => {
                            window.location.reload();
                        })
                        ;

                    }
                });
            }
        });
    });

    function all() {
        $.ajax({
            type: "GET", //we are using GET method to get all record from the server
            url: 'Backend/all.php', // get the route value
            success: function (response) {//once the request successfully process to the server side it will return result here

                // Parse the json result
                response = JSON.parse(response);
                html = '<table id="tablearco" class="table table-striped table-bordered" style="width:100%"><thead><tr>';
                html += '<th scope="col">Id</th><th scope="col">Name</th><th scope="col">Tipo</th><th scope="col">Precio</th><th scope="col">Cantidad</th><th scope="col">Acciones</th></tr></thead>';
                html += '<tbody>'
                $.each(response, function (key, value) {
                    html += "<tr id=" + value.id + ">";
                    html += "<td>" + value.id + "</td>"
                    html += "<td>" + value.name + "</td>"
                    html += "<td>" + value.tipo + "</td>"
                    html += "<td>" + value.precio + "</td>"
                    html += "<td>" + value.cantidad + "</td>"
                    html += '<td><button type="button" id="' + value.id + '"class="btn btn-danger btn-sm kill"> <span class="glyphicon glyphicon-trash"></span></button> &nbsp';
                    html += '<button type="button" id="' + value.id + '" data-toggle="modal" data-target="#openedit" class="btn btn-primary btn-sm openedit"><span class="glyphicon glyphicon-pencil"></span></button>';
                    html += '</td></tr>'
                });

                html += '</div>';
                $("#arcos-list").html(html);
            }
        });
    }
    $("#btnUpdateSubmit").on("click", function() {
        var $this 		    = $(this);
        var $caption        = $this.html();
        var form 			= "#edit-form";
        var formData        = $(form).serializeArray();
        var route 			= $(form).attr('action')
        $.ajax({
            type: "POST",
            url: route,
            data: formData,
            beforeSend: function () { //Para evitar pulsar muchas veces click
                $this.attr('disabled', true).html("Processing...");
            },
            success: function (response) {
                $this.attr('disabled', false).html($caption);
                all();
                alert(response);
                resetForm(form);
                $('#openedit').modal('toggle');
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                // You can put something here if there is an error from submitted request
            }
        });
    });

    function resetForm(selector)
    {
        $(selector)[0].reset();
    }

    function get()
    {
        $(document).delegate("[data-target='#openedit']", "click", function() {

            var id = $(this).attr('id');
            $.ajax({
                type: "GET", //we are using GET method to get data from server side
                url: 'Backend/get.php', // get the route value
                data: {id:id}, //set data
                dataType:"JSON",
                success: function (response) {//once the request successfully process to the server side it will return result here
                    console.log(response)
                    $("#edit-form [name='id']").val(response.id);
                    $("#edit-form [name='name']").val(response.name);
                    $("#edit-form [name='tipo']").val(response.tipo);
                    $("#edit-form [name='precio']").val(response.precio);
                    $("#edit-form [name='cantidad']").val(response.cantidad);

                }
            });
        });

    }


    $(document).ready(function() {
        all();
        // save();
        get();
        // update();
    });

    jQuery(".edit").click(function (e) {
        let tip = $(this).val();
        $.ajax({
            url: "Backend/edit.php",
            type: "POST",
            data: {
                'id': tip
            },
            success: function (result) {
                Swal.fire({
                    title: 'Perfecto',
                    text: 'El articulo ha sido eliminado!',
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    window.location.reload();
                })
                ;

            }
        });
    });
</script>