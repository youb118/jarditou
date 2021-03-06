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
            <!--bouton promotion-->
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
                                <span class="sr-only">(current)</span>
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
                        <!--Promotion-->
                        <input class="form-control mr-sm-2" type="text" placeholder="Ma promotion">
                        <button class="pull-right btn btn-outline-success">Rechercher</button>
                    </form>
                </div>
            </nav>
        </header>
        <img src="IMG/promotion.jpg" class="img-fluid">

        <!--Tableau ici-->
        <table class="table table-striped table-hover table-bordered">

            <tbody>
                <thead class="thead-light">
                    <tr>
                        <th>photos</th>
                        <th>ID</th>
                        <th>Categorie</th>
                        <th>Libell??</th>
                        <th>Prix</th>
                        <th>Couleur</th>
                    </tr>
                </thead>
                <tr class="table-warning">
                    <td><img src="img/7.jpg" width="100"></td>
                    <td>7</td>
                    <td>Barbecues</td>
                    <td>Aramis</td>
                    <td>110.00???</td>
                    <td>Brun</td>
                </tr>
                <tr>
                    <td><img src="img/8.jpg" width="100"></td>
                    <td>8</td>
                    <td>barbecues</td>
                    <td>Athos</td>
                    <td>249.99???</td>
                    <td>Noir</td>
                </tr>
                <tr class="table-warning">
                    <td><img src="img/11.jpg" width="100"></td>
                    <td>11</td>
                    <td>Barbecues</td>
                    <td>Clatronic</td>
                    <td>135.90???</td>
                    <td>Chrome</td>
                </tr>
                <tr class=>
                    <td><img src="img/12.jpg" width="100"></td>
                    <td>12</td>
                    <td>Barbecues</td>
                    <td>Camping</td>
                    <td>88.00???</td>
                    <td>Noir</td>
                </tr>
                <tr class="table-warning">
                    <td><img src="img/13.jpg" width="100"></td>
                    <td>13</td>
                    <td>Brouette</td>
                    <td>Green</td>
                    <td>49.00???</td>
                    <td>Verte</td>
                </tr>
            </tbody>
        </table>
        <footer>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark rounded">
                <!-- Bouton footer -->
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

</body>

</html>