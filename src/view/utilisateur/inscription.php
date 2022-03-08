<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page d'insciption</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
        />
        <style>
            body {
                color: #000;
                overflow-x: hidden;
                height: 100%;
                background-image: url("https://i.imgur.com/GMmCQHC.png");
                background-repeat: no-repeat;
                background-size: 100% 100%
            }

            .card {
                padding: 30px 40px;
                margin-top: 60px;
                margin-bottom: 60px;
                border: none !important;
                box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
            }

            .blue-text {
                color: #00BCD4
            }

            .form-control-label {
                margin-bottom: 0
            }

            input,
            textarea,
            button {
                padding: 8px 15px;
                border-radius: 5px !important;
                margin: 5px 0px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                font-size: 18px !important;
                font-weight: 300
            }

            input:focus,
            textarea:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                border: 1px solid #00BCD4;
                outline-width: 0;
                font-weight: 400
            }

            .btn-block {
                text-transform: uppercase;
                font-size: 15px !important;
                font-weight: 400;
                height: 43px;
                cursor: pointer
            }

            .btn-block:hover {
                color: #fff !important
            }

            button:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                outline-width: 0
            }
        </style>
    </head>
    <body>
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <h3>Nous les femmes</h3>
                    <p class="blue-text">Une organisation féminine<br> qui oeuvre pour le bien étre de la femme sénégalaise.</p>
                    <?php
						if ($errors) {
							echo '<ul class="errors">';
							foreach ($errors as $field => $error) {
								echo '<li>' . htmlentities($error) . '</li>';
							}
							echo '</ul>';
						}
					?>
                    <div class="card">
                        <h5 class="text-center mb-4">Remplir le formulaire d'inscription</h5>
                        <form class="form-card" action="" method="post">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Votre nom<span class="text-danger"> *</span></label> <input type="text" id="nom" name="nom" placeholder="Entrer votre nom" value="<?php echo htmlentities($nom); ?>" > </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Votre prénom<span class="text-danger"> *</span></label> <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom" value="<?php echo htmlentities($prenom); ?>"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Votre adresse<span class="text-danger"> *</span></label> <input type="text" id="adresse" name="adresse" placeholder="Donner votre adresse" value="<?php echo htmlentities($adresse); ?> "> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Mot de passe<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mot_de_passe" placeholder="Donner votre mot de passe" value="<?php echo htmlentities($mot_de_passe); ?>" > </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Votre login<span class="text-danger"> *</span></label> <input type="text" id="logine" name="logine" placeholder="Donner votre login" value="<?php echo htmlentities($logine); ?> "> </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-6 my-3"> 
                                     <div class="form-actions mb-3">
                                        <input type="hidden" name="form-submitted" value="1">
                                        <button type="submit" class="btn-block btn-primary">Inscrire</button>
                                     </div>
                                     <div class="form-actions mb-3">
                                        <a href="index.php?op=dec" class="text-info">Connecter vous sur la plateforme</a>
                                     </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>