
<section class="container">
    <p id="success"></p>
    <section class="table-wrapper">
        <section class="table-title">
            <section class="row">
                <section class="col-sm-6">
                    <h2>Manage <b>Users</b></h2>
                </section>
                <section class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Añadir Usuario</span></a>
                    <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Eliminar Usuarios</span></a>
                </section>
            </section>
        </section>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                </th>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>CITY</th>
                <th>ROL</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $result = mysqli_query($conn,"SELECT * FROM usuarios");

            $i=1;
            while($row = mysqli_fetch_array($result)) {
                ?>
                <tr id="<?php echo $row["id"]; ?>">
                    <td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
                    </td>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["city"]; ?></td>
                    <td><?php echo $row["adm"]; ?></td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                            <i class="material-icons update" data-toggle="tooltip"
                               data-id="<?php echo $row["id"]; ?>"
                               data-name="<?php echo $row["name"]; ?>"
                               data-email="<?php echo $row["email"]; ?>"
                               data-phone="<?php echo $row["phone"]; ?>"
                               data-city="<?php echo $row["city"]; ?>"
                               data-adm="<?php echo $row["adm"]; ?>"
                               title="Edit"></i>
                        </a>
                        <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
                            <i class="material-icons" data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>

    </section>
</section>
<!-- Add Modal HTML -->
<section id="addEmployeeModal" class="modal fade" tabindex="-1" role="dialog">
    <section class="modal-dialog" role="document">
        <section class="modal-content">
            <form id="user_form">
                <section class="modal-header">
                    <h4 class="modal-title">Añadir un usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </section>
                <section class="modal-body">
                    <section class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Contraseña</label>
                        <input type="password" id="clave" name="clave" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Teléfono</label>
                        <input type="phone" id="phone" name="phone" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Ciudad</label>
                        <input type="city" id="city" name="city" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Rol</label>
                        <select type="adm" id="adm" name="adm" class="form-control" >
                            <option value="Admin">Admin</option>
                            <option value="Usuario">Usuario</option>
                        </select>
                    </section>
                </section>
                <section class="modal-footer">
                    <input type="hidden" value="1" name="type">
                    <button type="button" class="btn btn-danger btn-lau-izq" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success btn-lau-der" id="btn-add">Añadir</button>
                </section>
            </form>
        </section>
    </section>
</section>
<!-- Edit Modal HTML -->
<section id="editEmployeeModal" class="modal fade" tabindex="-1" role="dialog">
    <section class="modal-dialog">
        <section class="modal-content">
            <form id="update_form">
                <section class="modal-header">
                    <h4 class="modal-title">Editar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </section>
                <section class="modal-body">
                    <input type="hidden" id="id_u" name="id" class="form-control" required>
                    <section class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="name_u" name="name" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_u" name="email" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Teléfono</label>
                        <input type="phone" id="phone_u" name="phone" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Ciudad</label>
                        <input type="city" id="city_u" name="city" class="form-control" required>
                    </section>
                    <section class="form-group">
                        <label>Rol</label>
                        <select type="adm" id="adm_u" name="adm" class="form-control" >
                            <option value="Admin">Admin</option>
                            <option value="Usuario">Usuario</option>
                        </select>
                    </section>
                </section>
                <section class="modal-footer">
                    <input type="hidden" value="2" name="type">
                    <button type="button" class="btn btn-danger btn-lau-izq" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success btn-lau-der" id="update">Actualizar</button>
                </section>
            </form>
        </section>
    </section>
</section>
<!-- Delete Modal HTML -->
<section id="deleteEmployeeModal" class="modal fade">
    <section class="modal-dialog">
        <section class="modal-content">
            <form id="delete_form">

                <section class="modal-header">
                    <h4 class="modal-title">Delete User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </section>
                <section class="modal-body">
                    <input type="hidden" id="id_d" name="id" class="form-control">
                    <p>¿Seguro que quieres eliminar al usuario?</p>
                    <p class="text-warning"><small>Esta accion no se puede deshacer.</small></p>
                </section>
                <section class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-danger" id="delete">Eliminar</button>
                </section>
            </form>
        </section>
    </section>
</section>