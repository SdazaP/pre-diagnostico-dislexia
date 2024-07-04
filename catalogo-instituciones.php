<?php 
    include("template/header.php");
    include("db/db.php");

    $sql = "SELECT * FROM institución";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    $instituciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


    <!-- Sección: Catálogo de instituciones  -->
    <section class="container mt-5">
        
        <h2><strong>Catálogo de instituciones relacionadas al tratamiento de la dislexia</strong></h2>

        <?php
            if (!empty($instituciones)) {
                foreach ($instituciones as $institucion) {
                    echo '<div id="otra-asociacion" class="association-section mt-5">';
                    echo '    <div class="row mt-4">';
                    echo '        <div class="col-md-3 text-center">';
                    echo '            <h4><strong>' . htmlspecialchars($institucion["nombre"]) . '</strong></h4>';
                    echo '            <img src="images/otra-logo.png" alt="Logo Otra Asociación" class="img-fluid mb-3">';
                    
                    echo '        </div>';
                    echo '        <div class="col-md-3">';
                    echo '            <h5>Información</h5>';
                    echo '            <p>' . htmlspecialchars($institucion["descripcion"]) . '</p>';
                    echo '            <h5>Contacto</h5>';
                    echo '            <p>Tel: ' . htmlspecialchars($institucion["numero"]) . '</p>';
                    echo '            <p>Email: <a href="mailto:' . htmlspecialchars($institucion["correo"]) . '">' . htmlspecialchars($institucion["correo"]) . '</a></p>';
                    echo '            <div class="social-icons">';
                    echo '                <a href="#"><img src="images/twitter-icon.png" alt="Twitter" class="img-fluid"></a>';
                    echo '                <a href="#"><img src="images/instagram-icon.png" alt="Instagram" class="img-fluid"></a>';
                    echo '                <a href="#"><img src="images/facebook-icon.png" alt="Facebook" class="img-fluid"></a>';
                    echo '                <a href="#"><img src="images/linkedin-icon.png" alt="LinkedIn" class="img-fluid"></a>';
                    echo '            </div>';
                    echo '        </div>';
                    echo '        <div class="col-md-6 text-center">';
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