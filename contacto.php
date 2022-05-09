    <?php include 'menu.php';?>

<main>
    <div class="container">
        <form id="contact" action="Backend/contacto.php" method="post">
            <h3>Contacta con nosotros</h3>
            <h4>Contacta con nosotros e intentaremos responderte en menos de 24 horas</h4>
            <fieldset>
                <input placeholder="Nombre" type="text" name="nombre" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email" type="email" name="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Asunto" type="text" name="asunto" tabindex="3" required>
            </fieldset>

            <fieldset>
                <textarea placeholder="Escribe tu mensaje aquí...." name="mensaje" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
            </fieldset>

        </form>
    </div>
</main>

<!--PIE DE PÁGINA-->
<footer>
    <p class="pie"> Laura Moya Ruiz. &copy; 2022 All rigth reserved </p>
</footer>
    <!-- jQuery (es necesario para plugins JavaScript de Bootstrap  ) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>