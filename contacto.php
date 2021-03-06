<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&display=swap&fbclid=IwAR1Ra9o5kiqQsoGNapGSJP76ozKTd1fcmuXARhanMsNYqN5SApr0aggEhew">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&display=swap&fbclid=IwAR1Ra9o5kiqQsoGNapGSJP76ozKTd1fcmuXARhanMsNYqN5SApr0aggEhew">
    <link rel="stylesheet" href="css/Fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/Fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre-mi.php">Sobre Mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contacto.php">Contacto</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <h1>¡Trabajemos Juntos!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h2>Para más detalles sobre mi trabajo podés ver mi Linkedin,  descargar mi CV o mandarme un mensaje.
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-12 col-sm-6 py-3">
                                <input type="text" placeholder="NOMBRE" class="form-control">
                            </div>
                            <div class="col-12 col-sm-6 py-3">
                                <input type="email" placeholder="CORREO" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 py-3">
                                <input type="text" placeholder="ASUNTO" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 py-3">
                                <textarea  id="mensaje" cols="30" rows="10"class="form-control" placeholder="MENSAJE"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center py-5">
                                <input type="submit" name="btnEnviar" value="ENVIAR" class="btn">
                            </div>   
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
    <footer>
        <div class="container" id="">
            <div class="row py-5">
                <div class="col-sm-4 col-12 text-sm-left text-center">
                    <a href="index.html">©Alan Antu Gutierrez<br>2020</a>
                </div>
                <div class="col-sm-4 col-12 text-center py-4 py-sm-0">
                    <a href="https://api.whatsapp.com/send?phone=541159773312&text=Hola" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/alan-antu-gutierrez-1514a184/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                </div>
                <div class="col-sm-4 col-12 text-sm-right text-center">
                    Patrocinado por<br><a href="https://depcsuite.com" target="_blank">DePC Suite</a>
                </div>
            </div>
        </div>
    </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>