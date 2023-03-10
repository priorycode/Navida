<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
if (empty($_POST['nombre'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <main class="container">
        <div class="contenedor container-fluid">
            <div class="window">
                <div class="santa">
                    <div class="head">
                        <div class="face">
                            <div class="redhat">
                                <div class="whitepart"></div>
                                <div class="redpart"></div>
                                <div class="hatball"></div>
                            </div>
                            <div class="eyes"></div>
                            <div class="beard">
                                <div class="nouse"></div>
                                <div class="mouth"></div>
                            </div>
                        </div>
                        <div class="ears"></div>
                    </div>
                    <div class="body"></div>
                </div>
            </div>
            <div class="message img-fluid">
                <br>
                <h1 style="text-align: center;">Felíz Navidad<br><?php echo $nombre ?></h1>
                <div>
                    <h2 class="copyright">
                        Te deseo lo mejor en este día y
                        <br>
                        que la paz y la armonía celebrada en esta Navidad
                        <br>
                        estén presentes todos los días de tu año nuevo.
                        <br>¡Feliz Navidad y felices fiestas!
                    </h2>
                </div>
            </div>

        </div>

    </main>
    <div class="container-fluid text-center">
        <audio src="audio/navida.mp3" autoplay></audio>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>