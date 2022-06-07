<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="https://kit.fontawesome.com/8efbe29298.js" crossorigin="anonymous"></script>

    <title>CIRCE - Contacto</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar fixed-top shadow-sm bg-circe">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <h5 class="fw-bold text-white">CIRCE</h5>
                    </a>
                    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                        <a class="me-3 py-2 text-white text-decoration-none" href="#">Planes</a>
                        <a class="me-3 py-2 text-white text-decoration-none" href="#">Nosotros</a>
                        <a class="me-3 py-2 text-white text-decoration-none" href="#">Contacto</a>
                        <a href="#" class="py-2 text-white btn btn-sm btn-outline-dark" style="radious: .75rem"><i
                                class="fas fa-sign-in-alt"></i> Ingresar</a>
                    </nav>

                </div>
            </nav>
        </div>
    </header>
    <main class="container p-5 mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2 class="h1-color display-4 fw-bold">Menos problemas, más soluciones</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis atque nam in. Veritatis
                    blanditiis quibusdam corrupti iure rerum iste. Eum neque ipsa animi vitae sed asperiores hic esse
                    eius distinctio!</p>
            </div>
            <div class="col-md-4">
                <img src="images/contacto_page.jpg" alt="foto_contacto" class="img-thumbnail" width="">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center my-4">
                <h2 class="h1-color fw-bold ">¿Cómo podemos ayudarte?</h2>
                <p class="small text-muted">Si aún tienes dudas, ponte en contacto con nosotros y te resolveremos todas
                    las dudas que tengas.</p>
                <div class="row">
                    <div class="col justify-content-center align-items-center">
                        <h4 class="h1-color">¿Ya eres cliente?</h4>
                        <p class="text-left"><a href="#" class="link-info">Ingresa</a> y comunícate con nuestro equipo
                        </p>
                    </div>
                    <div class="col justify-content-center align-items-center">
                        <h4 class="h1-color">Consulta de ventas</h4>
                        <p class="text-left"><a href="register.php" class="link-info">Regístrate</a> y nuestro equipo se pondrá en
                            contacto con usted
                        </p>
                    </div>
                    <div class="col justify-content-center align-items-center">
                        <h4 class="h1-color">¿Sin acceso?</h4>
                        <p class="text-left"><a href="#" class="link-info">Recupera</a> tu cuenta aquí</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center my-4">
                <h2 class="h1-color fw-bold">Ubicación de nuestras oficinas</h2>
                <p class="lead">
                    <i class="fas fa-map-marker-alt"></i> Adolfo Prieto 718, Col del Valle Nte, Benito Juárez, 03100
                    Ciudad de México, CDMX
                </p>
                <button type="button" class="btn btn-circe-blue" data-bs-toggle="modal" data-bs-target="#modalMaps">
                    Google Maps
                </button>
                <div class="modal fade" id="modalMaps" tabindex="-1" aria-labelledby="modalMapsLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalMapsLabel">Ubicación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7527.006839788869!2d-99.16760600000002!3d19.390643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff0cab0766bb%3A0xc07111c9b87fe48a!2sAdolfo%20Prieto%20718%2C%20Col%20del%20Valle%20Nte%2C%20Benito%20Ju%C3%A1rez%2C%2003100%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX%2C%20Mexico!5e0!3m2!1sen!2sus!4v1654568006093!5m2!1sen!2sus"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-footer-circe">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="https://www.circemexico.com/img/circe_logo.png" alt="circe-logo-footer"
                        class="img-thumbnail">
                    <p class="small text-muted mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore,
                        nisi
                        aliquam, id corporis omnis
                        illo vel tempore magnam quam dolor voluptatibus.</p>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold text-muted">Información</h6>
                    <ul class="list-unstyled">
                        <li>Antecedentes</li>
                        <li>Fundadores</li>
                        <li>Valores y principios</li>
                        <li>Certificación ISO</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold text-muted">Ligas</h6>
                    <ul class="list-unstyled">
                        <li>Registros públicos</li>
                        <li>Evaluar y medir para avanzar</li>
                        <li>Documentos</li>
                        <li>Contacto</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold text-muted">Legal</h6>
                    <ul class="list-unstyled">
                        <li>Aviso de privacidad</li>
                        <li>Términos de servicio</li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

</body>

</html>