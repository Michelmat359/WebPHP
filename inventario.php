<!-- BEGIN mynav.php INCLUDE -->
    <?php include 'menu.php';?>
<!-- END mynav.php INCLUDE -->
<main>

    <?php
    include_once("Backend/conexion.php");
    $sqlQuery = "SELECT id, name, tipo, precio, cantidad FROM arcos";
    $resultSet = mysqli_query($conexion, $sqlQuery) or die("database error:". mysqli_error($conexion));
    ?>
    <div class="container">
        <div class="row" id="contact">

            <table id="editableTable" class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody>
                <?php while( $resultados = mysqli_fetch_assoc($resultSet) ) { ?>
                    <tr id="<?php echo $resultados ['id']; ?>">
                        <td><?php echo $resultados ['id']; ?></td>
                        <td><?php echo $resultados ['name']; ?></td>
                        <td><?php echo $resultados ['tipo'] ; ?></td>
                        <td><?php echo $resultados ['precio']." €"; ?></td>
                        <td><?php echo $resultados ['cantidad']; ?></td>
                        <td>
                            <a href="Backend/delete.php?id=<?php echo $resultados ['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<footer>
    <?php
    echo "<p>Laura Moya Ruiz &copy; 1999-" . date("Y") . " All rigth reserved</p>";
    ?>

</footer>
<!-- jQuery (es necesario para plugins JavaScript de Bootstrap  ) -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/editable.js"></script>