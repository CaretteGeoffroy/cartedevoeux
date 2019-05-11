<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
  <title>Envoyer une carte de voeux</title>
</head>

<body>

  <div class="container-fluid">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
          <p class="mt-5">Souhaitez la bonne année à vos proches en envoyant une carte de voeux électronique via ce formulaire</p>
            <form method="post" action="index.php">
              <input class="form-control mb-3" type="text" required placeholder="Votre nom" id="sender" name="sender">
              <input class="form-control mb-3" type="text" required placeholder="Nom de la personne qui reçois la carte" id="name" name="name">
              <input class="form-control mb-3" type="mail" required placeholder="Email du receveur" id="mail" name="mail">
              <input type="submit" value="Envoyer la carte de voeux" class="btn btn-info" id="submit" name="submit">
            </form>
        </div>
      </div>
    </div>
  </div>

  <?php require_once 'traitement.php';?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
</body>

</html>