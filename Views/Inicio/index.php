<?php require_once("Views/layouts/headerAlu.php")?>
    <main id="contenido">
        <div id="carrosa">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="Assets/img/aprendiendo.jpeg" class="d-block w-100 img_car" alt="portalWeb">
                    </div>
                    <div class="carousel-item">
                    <img src="Assets/img/prueba.webp" class="d-block w-100 img_car" alt="aprender">
                    </div>
                    <div class="carousel-item">
                    <img src="Assets/img/software.jpg" class="d-block w-100 img_car" alt="estudiantes">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-around align-items-md-center mt-5">
            <div class="col-md-3 me-md-2 mb-5 mb-md-0">
                <div class="card">
                    <div class="card-header">Noticias</div>
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, quo voluptatem. Ad expedita, ratione mollitia commodi explicabo animi quam? Exercitationem.</div>
                </div>
            </div>
            
            <div class="col-md-3 me-md-2 mb-5 mb-md-0">
                <div class="card">
                    <div class="card-header">Información Materias</div>
                    <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, et?</div>
                </div>
            </div>
            
            <div class="col-md-3 me-md-2 mb-5 mb-md-0">
                <div class="card">
                    <div class="card-header">Dato Curioso</div>
                    <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum aliquid atque animi tempore voluptatum ipsam exercitationem deleniti numquam odit quam?</div>
                </div>
            </div>
        </div>
    </main>
<?php require_once("Views/layouts/footerAlu.php")?>