<?php include("template/header.php")?>
    <!-- Sección: Evaluaciones  -->
    <section class="container mt-4 eval">
        <div class="text-center">
            <h1>Evaluaciones</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus molestiae dolorem eius velit
                tempore optio quis fuga necessitatibus quae autem. Consectetur dicta ducimus ipsa laborum! Doloribus
                repellendus laudantium voluptatum. Blanditiis?</p>
        </div>
    </section>
    
    <!-- Carrusel de Evaluaciones  -->
    <section class="container mt-4 carrusel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/consecuencias.jpeg" class="d-block w-100 carousel-image">
                    <div class="carousel-caption">
                        <h3>Título de la evaluación</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/causas.jpeg" class="d-block w-100 carousel-image">
                    <div class="carousel-caption">
                        <h3>Título de la evaluación</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/mitos.jpeg" class="d-block w-100 carousel-image">
                    <div class="carousel-caption">
                        <h3>Título de la evaluación</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>

<?php include("template/footer.php")?>