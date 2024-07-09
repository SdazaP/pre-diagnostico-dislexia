<?php include("template/header.php")?>

    <!-- Encabezado -->
    <div class="container mt-4">
        <img src="images/Banner.jpeg" alt="Header Image" class="header-image img-fluid">
    </div>

    <!-- Sección: ¿Qué es la Dislexia?  -->
    <section class="container mt-4 qdislexia">
        <div class="row">
            <div class="col-md-4">
                <img src="images/que es la dislexia.png" alt="Imagen sobre dislexia" class="info-image img-fluid">
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-center">
                <h1>¿Qué es la Dislexia?</h1>
                <p style="text-align: justify;">Es una dificultad de aprendizaje que se manifiesta en dificultades de acceso al léxico, y puede estar causada por una combinación de déficit en el procesamiento fonológico, auditivo, y/o visual. 
                <br>
                Asimismo, se suele acompañar de problemas relacionados con un funcionamiento deficiente de la memoria de trabajo, deficiencias en el conocimiento sintáctico, y problemas de velocidad de procesamiento. <br> <br> (GUÍA GENERAL SOBRE DISLEXIA 2.010 ASOCIACIÓN ANDALUZA de DISLEXIA (ASANDIS), n.d.)</p>
                <a class="btn btn-primary btn-learn-more" href="articulo.php" role="button">Aprende más</a>
            </div>
        </div>
    </section>

    <!-- Sección Causas y Consecuencias de Dislexia  -->
    <section class="container section text-white caucons">
        <div class="row caucons-cont">
            <div class="col-md-6 col-sm-12 caus-cont">
                <div class="image-container text-center">
                    <img class="card-image img-fluid" src="images/causas.jpeg" alt="Causas de la Dislexia">
                </div>
                <h3 class="card-title text-center">
                    <strong>Causas de la Dislexia</strong>
                </h3>
                <p class="card-text" style="text-align: justify;">
                Los niños nacen con dislexia, pero la sintomatología comienza a manifestarse cuando entra en la escuela, la mayoría de los especialistas establece la clasificación después de los siete u ocho
                años, cuando se supone que ha adquirido la lectura sin ninguna duda.
                </p>
            </div>
            <div class="col-md-6 col-sm-12 cons-cont">
                <div class="image-container text-center">
                    <img class="card-image img-fluid" src="images/consecuencias.jpeg"
                        alt="Consecuencias de la Dislexia">
                </div>
                <h3 class="card-title text-center">
                    <strong>Consecuencias de la Dislexia</strong>
                </h3>
                <ul class="card-text lista">
                    <li>Desinterés por el estudio</li>
                    <li>Calificaciones escolares bajas</li>
                    <li>marginados del grupo</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Sección Mitos de la dislexia  -->
    <section class="container mt-4 mitos">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex flex-column justify-content-center h-100">
                    <h1>Mitos sobre la Dislexia</h1>
                    <ul class="lista">
                        <li>Es una enfermedad que se cura con el tratamiento adecuado</li>
                        <li>La dislexia no se manifiesta hasta los siete años</li>
                        <li>Un mal hábito de lectura puede provocar la dislexia</li>
                        <li>Los disléxicos tienen un cociente intelectual algo más bajo</li>
                        <li>Los niños bilingües no pueden tener dislexia</li>
                    </ul>
                    <p>(Leyre Artiz Elkarte, 2020)</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                    <img class="myth-image img-fluid" src="images/mitos.jpeg" alt="Imagen de mitos sobre la dislexia">
                </div>
            </div>
        </div>
    </section>

    <section class="container ref">
        <h1>Referencias</h1>
        <ul class="list">
            <li>
                GUÍA GENERAL SOBRE DISLEXIA 2.010 ASOCIACIÓN ANDALUZA DE DISLEXIA (ASANDIS). (n.d.). https://www.disfam.org/wp-content/uploads/2017/03/guia-general-sobre-dislexia-andalucia.pdf         
            </li>
            <li>
                Leyre Artiz Elkarte. (2020, November 2). Ni escriben al revés ni son niños “tontos” o vagos. Diez falsos mitos sobre la dislexia. Uoc.edu; Universitat Oberta de Catalunya. https://www.uoc.edu/es/news/2020/410-10-falsos-mitos-sobre-dislexia
            </li>
        </ul>
    </section>

<?php include("template/footer.php")?>