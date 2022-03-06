<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="connexion.css">
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
    </head>
    <body>
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <h3>Nous les femmes</h3>
                    <p class="blue-text">Une organisation féminine<br> qui oeuvre pour le bien étre de la femme sénégalaise.</p>
                    <div class="card">
                        <h5 class="text-center mb-4">Remplir le formulaire d'inscription</h5>
                        <form class="form-card" onsubmit="event.preventDefault()">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Votre nom<span class="text-danger"> *</span></label> <input type="text" id="nom" name="nom" placeholder="Entrer votre nom" onblur="validate(1)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Votre prénom<span class="text-danger"> *</span></label> <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom" onblur="validate(2)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Votre adresse<span class="text-danger"> *</span></label> <input type="text" id="adresse" name="adresse" placeholder="Donner votre adresse" onblur="validate(3)"> </div>
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Mot de passe<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="Donner votre mot de passe" onblur="validate(4)"> </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Votre login<span class="text-danger"> *</span></label> <input type="text" id="logine" name="logine" placeholder="Donner votre login" onblur="validate(5)"> </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-6 my-3"> <button type="submit" class="btn-block btn-primary">Inscrire</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>