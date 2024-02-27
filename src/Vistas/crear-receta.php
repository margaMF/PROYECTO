<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brotherhop | Contacto</title>
    <link rel="stylesheet" href="../../css/style-receta.css">
    <link rel="stylesheet" href="../../css/style_menu.css">
    <link rel="stylesheet" href="../../css/style_footer.css">
    <link rel="icon" href="../../img/imagotipo.png" type="image/x-icon">
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
                                        <label for="style">Estilo:</label>
                                        <input class="style-inputs" type="text" name="style" id="id_style" size="40" placeholder="Escribe el estilo" required>
                                    </div>
                                    <div class="c-inputs-form-style-ABV">
                                        <label for="ABV">ABV:</label>
                                        <input class="style-inputs" type="text" name="ABV" id="id_abv" size="20" placeholder="Escribe el alcohol" required>
                                    </div>
                                </div>
                                <div class="c-inputs-form-file">
                                    <label for="img-recipe">Elegir etiqueta:</label>
                                    <input class="input-img" type="file" id="img-recipe" name="img-recipe" required>
                                </div>
                                <div class="c-inputs-form">
                                    <label for="recipe">Receta:</label>
                                    <textarea name="recipe" id="recipe" cols="100" rows="8" placeholder="Escribe tu receta..."></textarea>
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