<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brotherhop | Login</title>
    <link rel="stylesheet" href="../../css/style_login.css">
    <link rel="stylesheet" href="../../css/style_menu.css">
    <link rel="stylesheet" href="../../css/style_footer.css">
</head>
<body>
    <div class="container-all">
        <?php include 'menu.php';?>
            <div class="c-content">
                <div class="c-icon-login">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                </div>
                <div class="c-login">
                    <form action="#" method="post">
                        <div class="c-content-form">
                            <div class="c-inputs-form">
                                <div class="c-icon-form">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                </div>
                              <input class="style-inputs" type="email" name="email" id="id_email" size="45" placeholder="Correo electrónico" required>
                            </div>
                            <div class="c-inputs-form">
                                <div class="c-icon-form">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                                </div>
                                <input class="style-inputs" type="password" name="password" id="id_password" size="30" placeholder="Contraseña">
                            </div>
                            <div class="c-remember">
                                <input class="mycheck" type="checkbox" name="remember" id="remember">
                                <label for="remember">Recuérdame</label>
                            </div>
                            <div class="c-submmit">
                                <input class="input-submit" type="submit" value="Iniciar Sesión">
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        <?php include 'footer.php';?>
    </div>
</body>
</html>