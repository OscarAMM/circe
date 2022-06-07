<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
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

    <title>Inicio - Circe</title>
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
        <div class="container py-3">

            <div class="row justify-content-center">
                <div class="col">
                    <div class="text-center">
                        <img src="https://www.circemexico.com/img/circe_logo.png" alt="circe-logo" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="text-center mt-2">
                <h3 class="h1-color">Centro de Información Registral, Catastral y Económica, A.C.</h3>
            </div>
            <div class="text-left mt-4">
                <h4 class="h1-color">Servicios en línea</h4>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                            data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">CIRCENOT</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list"
                            href="#list-profile" role="tab" aria-controls="list-profile">CIRCECAT</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list"
                            href="#list-messages" role="tab" aria-controls="list-messages">CIRCERPP</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list"
                            href="#list-settings" role="tab" aria-controls="list-settings">CIRCECP</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                            aria-labelledby="list-home-list">
                            <h5>CIRCENOT</h5>
                            <p class="lead text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Mollitia
                                necessitatibus nisi dolorem, rem numquam nostrum. Porro sapiente itaque, quasi culpa
                                minima ducimus saepe laborum, qui eos reprehenderit officia eligendi nostrum.</p>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel"
                            aria-labelledby="list-profile-list">
                            <h5>CIRCECAT</h5>
                            <p class="lead text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Mollitia
                                necessitatibus nisi dolorem, rem numquam nostrum. Porro sapiente itaque, quasi culpa
                                minima ducimus saepe laborum, qui eos reprehenderit officia eligendi nostrum.</p>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel"
                            aria-labelledby="list-messages-list">
                            <h5>CIRCERPP</h5>
                            <p class="lead text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Mollitia
                                necessitatibus nisi dolorem, rem numquam nostrum. Porro sapiente itaque, quasi culpa
                                minima ducimus saepe laborum, qui eos reprehenderit officia eligendi nostrum.</p>
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel"
                            aria-labelledby="list-settings-list">
                            <h5>CIRCECP</h5>
                            <p class="lead text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Mollitia
                                necessitatibus nisi dolorem, rem numquam nostrum. Porro sapiente itaque, quasi culpa
                                minima ducimus saepe laborum, qui eos reprehenderit officia eligendi nostrum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <h1 class="h1-color">Selecciona tu plan</h1>
            </div>
            <div class="row col my-5 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Básico</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$$$<small class="text-muted fw-light">/mo</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 users included</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Empezar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Empresarial</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$$$<small class="text-muted fw-light">/mo</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>30 users included</li>
                                <li>15 GB of storage</li>
                                <li>Phone and email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="contact.php" class="w-100 btn btn-lg btn-primary">Contáctanos</a>
                            
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4 h1-color">Compara planes</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%;"></th>
                            <th style="width: 22%;">Básico</th>
                            <th style="width: 22%;">Empresarial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">CIRCENOT</th>
                            
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">CIRCECAT</th>
                           
                            <td></td>
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <th scope="row" class="text-start ">CIRCERPP</th>
                            
                            <td></td>
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">CIRCERPPMNC</th>
                            
                            <td></td>
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">CIRCEVU</th>
                            
                            <td></td>
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">CIRCEAN</th>
                            
                            <td></td>
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">CIRCECP</th>
                            
                            <td></td>
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                        </tr>
                        <tr>
                        <th scope="row" class="text-start">Digitalizar Acervos</th>
                            
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                            <td><i class="fas fa-check-circle check-ft"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h2 class="h1-color">Te damos la bienvenida a las soluciones CIRCE</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/contacto.jpg" alt="foto_contacto" class="img-thumbnail">
                </div>
                <div class="col-md-6 text-center">
                    <a href="#" class="w-100 btn btn-large btn-outline-primary my-2">Iniciar prueba</a>
                    <a href="#" class="w-100 btn btn-large btn-circe-blue my-2">Contáctanos</a>
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