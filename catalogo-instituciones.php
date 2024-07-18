<?php 
    include("template/header.php");
    include("db/db.php");

    $sql = "SELECT * FROM institucion";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    $instituciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


    <!-- Sección: Catálogo de instituciones  -->
    <section class="inst container mt-5">
        
        <h1>Catálogo de instituciones relacionadas al tratamiento de la dislexia</h1>

        <?php
            if (!empty($instituciones)) {
                foreach ($instituciones as $institucion) {
                    echo '<div id="otra-asociacion" class="association-section mt-5">';
                    echo '    <div class="row mt-4">';
                    echo '        <div class="col-md-3 text-center">';
                    echo '            <h4><strong>' . htmlspecialchars($institucion["nombre"]) . '</strong></h4>';
                    echo '            <img src="images/'.$institucion["logo"].' " alt="Logo Otra Asociación" class="img-fluid mb-3">';
                    
                    echo '        </div>';
                    echo '        <div class="col-md-4">';
                    echo '            <h5>Información</h5>';
                    echo '            <p>' . htmlspecialchars($institucion["descripcion"]) . '</p>';
                    echo '            <h5>Contacto</h5>';
                    echo '            <p>Tel: ' . htmlspecialchars($institucion["numero"]) . '</p>';
                    echo '            <p>Email: <a href="mailto:' . htmlspecialchars($institucion["correo"]) . '">' . htmlspecialchars($institucion["correo"]) . '</a></p>';
                    echo '        </div>';
                    echo '        <div class="col-md-5 text-center">';
                    echo '            <h5>Ubicación</h5>';
                    echo             $institucion["ubicacion"];
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No hay instituciones disponibles.</p>";
            }
        ?>

    </section>

    <?php include("template/footer.php")?>