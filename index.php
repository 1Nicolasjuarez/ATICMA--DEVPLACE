<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <title>Automarket</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Automarket</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.html">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-mod">
        <section class="row">
            <div class="col-lg-12">
                <div class="container-carrousel">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/img1.jpg" class="d-block w-100 " alt="img-carrousel">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/img2.jpg" class="d-block w-100" alt="img-carrousel">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/img3.jpg" class="d-block w-100" alt="img-carrousel">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 promociones">
                <img src="./assets/img/promociones.png" alt="">
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./assets//img/patagonia.png" class="card-img-top" alt="img-card">
                        <div class="card-body">
                            <h5 class="card-title">PEUGEOT PARTNER PATAGÓNICA</h5>
                            <p class="card-text">ENTREGA INMEDIATA DESDE $2.552.000.</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://belchamp.com.ar/vehiculos_0km/peugeot-partner-patagonica/" class="btn btn-secondary info">+info</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./assets/img/208.png" class="card-img-top" alt="img-card">
                        <div class="card-body">
                            <h5 class="card-title">PEUGEOT NUEVO 208</h5>
                            <p class="card-text"> ENTREGA INMEDIATA DESDE $2.552.00</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://belchamp.com.ar/vehiculos_0km/208/" class="btn btn-secondary info">+info</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./assets/img/expert.png" class="card-img-top" alt="img-card">
                        <div class="card-body">
                            <h5 class="card-title"> PEUGEOT EXPERT FURGÓN
                            </h5>
                            <p class="card-text">ENTREGA INMEDIATA DESDE $2.552.00.</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://belchamp.com.ar/vehiculos_0km/expert/" class="btn btn-secondary info ">+info</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./assets/img/408.png" class="card-img-top" alt="img-card">
                        <div class="card-body">
                            <h5 class="card-title">PEUGEOT 408</h5>
                            <p class="card-text">ENTREGA INMEDIATA DESDE $2.552.00.</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://belchamp.com.ar/vehiculos_0km/408/" class="btn btn-secondary info">+info</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./assets/img/suv2008.png" class="card-img-top" alt="img-card">
                        <div class="card-body">
                            <h5 class="card-title"> PEUGEOT SUV 2008</h5>
                            <p class="card-text">ENTREGA INMEDIATA DESDE $2.552.00.</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://belchamp.com.ar/vehiculos_0km/2008/ " class="btn btn-secondary info">+info</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./assets/img/boxer.png" class="card-img-top" alt="img-card">
                        <div class="card-body">
                            <h5 class="card-title">PEUGEOT BOXER</h5>
                            <p class="card-text">ENTREGA INMEDIATA DESDE $2.552.00.</p>
                        </div>
                        <div class="card-footer">
                            <a href="https://belchamp.com.ar/vehiculos_0km/boxer/" class="btn btn-secondary info">+info</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer bg-light">
        <div class="container-footer">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-3 mx-auto mb-4 text-center title-footer">
                    <h3>dirección</h3>
                    <p>Av. Independencia 2265</p>
                </div>
                <div class="col-md-3 mx-auto mb-4 text-center title-footer">
                    <h3>teléfono</h3>
                    <p> +549 0223 410-9000</p>
                </div>
                <div class="col-md-3 mx-auto mb-4 text-center title-footer">
                    <h3>email</h3>
                    <p>belchamp@gmail.com</p>
                </div>
            </div>
        </div>

        <p class="copyright">
            Copyright&copy; 2021 - Página creada por @nicolas-jrz Linkedin - Todos los derechos reservados.
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>