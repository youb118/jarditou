<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>tableau</title>
</head>

<body>
  <div class="container">
    <header>
      <div class="row d-none d-md-flex w-100">
        <img class="col-2 img-fluid" src="img/jarditou_logo.jpg" alt="Logo Jarditou" title="Logo Jarditou"
          id="logo"><br>
        <div class="col-10 h2 align-self-center text-right  ">Tout le jardin</div>
      </div>
      <!--Bouton promotion-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#!">Jarditou.com</a>
        <!--Menu-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            <li class="nav-item active">
              <a class="nav-link" href="../BOOTSTRAPS/index.php">Accueil
                <span class="sr-only">"current"</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../BOOTSTRAPS/TableauBS.php">Tableau</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../BOOTSTRAPS/contactBS.php">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <!--promotion-->
            <input class="form-control mr-sm-2" type="text" placeholder="Ma promotion">
            <button class="pull-right btn btn-outline-success">Rechercher</button>
          </form>
        </div>
      </nav>
    </header>
    <img src="img/promotion.jpg" class="img-fluid">
    <div class="container">
      <div class="row shadow">
        <div class="col-8">
          <h2>L'entreprise</h2>
          <article>
            <p>Notre entreprise familiale met tout son savoir-faire ?? votre disposition dans le domaine du jardin et du
              paysagisme.</p>
            <p>Cr????e il y a 70 ans, notre entreprise vend fleurs, arbustes, mat??riel ?? main et motoris??s.</p>
            <p>Implant??s ?? Amiens, nous intervenons dans tout le d??partement de la Somme : Albert, Doullens, P??ronne,
              Abbeville, Corbie</p>
          </article>
          <h2>Qualit??</h2>
          <article>
            <p>Nous mettons ?? votre disposition un service personnalis??, avec 1 seul interlocuteur durant tout votre
              projet.</p>
            <p>Vous serez s??duit par notre expertise, nos comp??tences et notre s??rieux.</p>
          </article>
          <h2>Devis gratuit</h2>
          <article>
            <p>Vous pouvez bien s??r contacter pour de plus amples informations ou pour une demande d???intervention. Vous
              souhaitez un devis ? Nous vous le r??alisons gratuitement.Lorem ipsum dolor sit amet consectetur,
              adipisicing elit. Labore dolorem, adipisci maiores earum rerum voluptate ducimus repellendus sunt
              dignissimos blanditiis minus, officiis excepturi temporibus perferendis nam dolore consectetur illo?
              Veritatis?
          </article>
        </div>
        <div class="col-4 bg-warning text-center ">
          <h2>[Colonne Droite]</h2>
        </div>
      </div>
    </div>
    <footer>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark rounded">
        <!--Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bouton-footer">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="bouton-footer">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="">Mention l??gales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">horaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Plan du site</a>
            </li>
          </ul>
        </div>
      </nav>
    </footer>
    <!--Java script-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
  </div>

</html>