<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
                margin: 0;
                padding: 0;
                background-color: #17a2b8;
                height: 100vh;
            }
            #login .container #login-row #login-column #login-box {
                margin-top: 120px;
                max-width: 600px;
                height: 320px;
                border: 1px solid #9C9C9C;
                background-color: #EAEAEA;
            }
            #login .container #login-row #login-column #login-box #login-form {
                padding: 20px;
            }
            #login .container #login-row #login-column #login-box #login-form #register-link {
                margin-top: -85px;
            }
    </style>
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Connexion sur la plateforme</h3>
        <?php
            if ($errors) {
                echo '<ul class="errors">';
                foreach ($errors as $field => $error) {
                    echo '<li>' . htmlentities($error) . '</li>';
                }
                echo '</ul>';
            }
        ?>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="logine" id="logine" class="form-control" value="<?php echo htmlentities($logine); ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="mot_de_passe" id="mot_de_passe" class="form-control" value="<?php echo htmlentities($mot_de_passe); ?>">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <div class="form-actions mb-3">
                                    <input type="hidden" name="form-submitted" value="1">
                                    <button type="submit" class="btn btn-info btn-md">Envoyer</button>
                                </div>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="index.php?op=insc" class="text-info">Cliquer ici pour inscrire</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>