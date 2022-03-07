<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Supprimer une organisation</title>
</head>
<body>
    <div class="row">
        <h3 class="text-center"><strong>Suppresion d'une organisation</strong></h3>
        <?php
            if ($errors) {
                echo '<ul class="errors">';
                foreach ($errors as $field => $error) {
                    echo '<li>' . htmlentities($error) . '</li>';
                }
                echo '</ul>';
            }
        ?>
    </div>

    <div class="container">
        <h3 class="my-5 color-red">Confirmer vous de vouloir supprimer cette organisation</h3>
        <form class="form-horizontal" action="" method="post">
            <div class="form-actions">
                <input type="hidden" name="form-submitted" value="1">
                <button type="submit" class="btn text-center btn-danger">Supprimer définitive l'entreprise</button>
                <a class="btn btn-default btn-success" href="index.php?op=ret">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>