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
                    <a class="navbar-brand" href="index.php">
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
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card shadow-sm">
                    <div class="card-header border-0 bg-white text-center">
                        <img src="https://www.circemexico.com/img/circe_logo.png" alt="circe-header">
                    </div>
                    <div class="card-body">
                        <h4 class="h1-color fw-bold text-center">Contacto</h4>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" required>
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="telefono" required>
                            <label for="telefono">Teléfono</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="organizacion" required>
                            <label for="organizacion">Organización</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" required>
                            <label for="email">Correo</label>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Producto de interés</option>
                                <option value="1">CIRCECAT</option>
                                <option value="2">CIRCERPP</option>
                                <option value="3">CIRCENOT</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>País</option>
                                <option value="1">México</option>
                                <option value="2">USA</option>
                                <option value="3">España</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Estado</option>
                                <option value="1">YUCATAN</option>
                                <option value="2">CAMPECHE</option>
                                <option value="3">QUINTANA ROO</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-circe-blue">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>