<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brotherhop | Contacto</title>
    <link rel="stylesheet" href="../../css/style-receta.css">
    <link rel="stylesheet" href="../../css/style_menu.css">
    <link rel="stylesheet" href="../../css/style_footer.css">
</head>
<body>
    <div class="container-all">
        <?php include 'menu.php';?>

            <div class="c-contact-us">
                <div class="c-body-form">
                    <h1>Crea una receta nueva</h1>
                    <div class="container-content">
                        <div class="c-form">
                            <form action="#" method="post">
                                <div class="c-infobeer">
                                    <div class="c-inputs-form-name">
                                        <label for="name">Nombre:</label>
                                        <input class="style-inputs" type="text" name="name" id="id_name" size="40" placeholder="Nombre de la cerveza" required>
                                    </div>
                                    <div class="c-inputs-form-style">
                                        <label for="surnames">Estilo - ABV:</label>
                                        <input class="style-inputs" type="text" name="surname" id="id_surname" size="40" placeholder="Escribe el estilo y el alcohol" required>
                                    </div>
                                </div>
                                <div class="c-inputs-form-file">
                                    <label for="img-recipe">Elegir etiqueta:</label>
                                    <input class="input-img" type="file" id="img-recipe" name="img-recipe" required>
                                </div>
                                <div class="c-inputs-form">
                                    <label for="message">Receta:</label>
                                    <textarea name="message" id="message" cols="100" rows="8" placeholder="Escribe tu receta..."></textarea>
                                </div>
                                <input class="input-submit" type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <?php include 'footer.php';?>
    </div>
</body>
</html>