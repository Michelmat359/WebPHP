<?php include 'menu.php'; ?>

    <!--CONTENIDO DE LA PÁGINA-->
    <article class="contenido">
        <section class="card">
            <h1 id=form>Formulario de contacto</h1>
            <hr>
            <section class="card" id="formulario">
                <form action="" class="needs-validation" novalidate>
                    <h4>Formulario validable</h4>
                    <hr>
                    <section class="form-group">
                        <section class="row">
                            <section class="col-md-6">
                                <label for="ValidationNombre">Nombre </label>
                                <input type="text" class="form-control" placeholder="nombre" id="ValidationNombre" required>
                                <section class="valid-feedback">Looks good!</section>
                                <section class="invalid-feedback">Please, fill out this field</section>
                            </section>
                            <section class="col-md-6">
                                <label for="validationApellidos">Apellidos </label>
                                <input type="text" class="form-control" placeholder="apellidos" id="validationApellidos" required>
                                <section class="valid-feedback">Looks good!</section>
                                <section class="invalid-feedback">Please, fill out this field</section>
                            </section>
                        </section>
                    </section>
                    <section class="form-group">
                        <section class="row">
                            <section class="col-md-8 mb-8">
                                <label for="validationCorreoElectrónico">Correo electrónico </label>
                                <section class="input-group">
                                    <section class="input-group-prepend">
                                        <span class="input-group-text" id="arroba">@</span>
                                    </section>
                                    <input type="text" class="form-control rounded" placeholder="Correo electrónico" id="validateCorreoElectronico" required>
                                    <section class="valid-feedback">Looks good!</section>
                                    <section class="invalid-feedback">Please, fill out this field</section>
                                </section>
                            </section>
                            <section class="col-md-4">
                                <label for="validateTelefono">Telefono </label>
                                <input type="text" class="form-control rounded" placeholder="telefono" id="validateTelefono">
                                <section class="valid-feedback">Opcional</section>
                            </section>
                        </section>
                    </section>
                    <section class="form-group">
                        <section class="row">
                            <section class="col-md-12">
                                <label for="nombre">Tu mensaje: </label>
                                <textarea class="form-control" id="areaTexto" rows="6" required></textarea>
                                <section class="valid-feedback">Looks good!</section>
                                <section class="invalid-feedback">Please, write here your message</section>
                            </section>
                        </section>
                    </section>
                    <section class="form-group form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                        <section class="invalid-feedback">You must agree before submitting.</section>
                    </section>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </section>
            <br>

        </section>
    </article>
<?php include 'anuncios.php'; ?>
<?php include 'footer.php'; ?>