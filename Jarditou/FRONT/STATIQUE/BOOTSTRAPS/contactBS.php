<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>tableau</title>
    <link href="../BOOTSTRAPS/style2.css" rel="stylesheet">
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
                        <!--promotion-->
                        <input class="form-control mr-sm-2" type="text" placeholder="Ma promotion">
                        <button class="pull-right btn btn-outline-success">Rechercher</button>
                    </form>
                </div>
            </nav>
        </header>
        <img src="img/promotion.jpg" class="img-fluid">

        <div class="container shadow">
            <form id="form">

                <div class="form-group">
                    <!--formulaire-->
                    <p>* Ces zones sont obligatoire</p>
                    <fieldset>
                        <legend>Vos coordonn??es</legend>
                        <div class="form-group">
                            <label for="nom">Nom*</label>
                            <input type="nom" class="form-control" id="Nom" placeholder="Nom" >
                        <span id ="spannom"></span>

                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom*</label>
                            <input type="prenom" class="form-control" id="Pr??nom" placeholder="Prenom" >
                            <span id="spanprenom"></span>
                        </div>
                </div>
                <br>
                                       <div class="form-group">
                            <label for="sexe">Sexe*</label><br>

                            <input type="radio" name="sexe" id="Feminin" value="F??minin" > Feminin
                            <input type="radio" name="sexe" id="Masculin" value="Masculin"> Masculin <br>
                            <span id ="spansexe"></span>
                        </div>
                <br>
                <div class="row">
                    <div class="col-12 col-lg-6 ml">
                        <label for="Date de naissance">Date de naissance</label> <span class="ast">*</span>
                        <input class="form-control" input type="text" placeholder="JJ/MM/AAAA" id="Date"><span id="spandate"></span>
                    </div>
                </div>
                <br>
                        <div class="form-group">
                            <label for="cp">Code postal*</label>
                            <input type="text" class="form-control" id="cp" name="CP">
                            <span id ="spancp"></span>

                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" id="adresse" name="Adresse">

                        </div>
                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" id="Ville" name="ville">

                        </div>
                <br>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="Email" name="email"
                                placeholder=dave.loper@afpa.fr><br>
                                <span id="spanemail"></span>

                        </div>
        </Fieldset>
        <br>
        <fieldset class="fieldset2">
            <legend>Votre demande <span class="ast">*</span></legend>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <select class="custom-select" id="Demande">
                        <option selected value="demande"> Sujet de demande : </option>
                        <option value="1">Mes commandes</option>
                        <option value="2">Question sur un produit</option>
                        <option value="3">R??clamation</option>
                        <option value="4">Autres</option>
                    </select><span id="spandemande"></span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <label for="Vos questions">Vos questions : <span class="ast">*</span></label>
                    <textarea class="form-control" name="sujet" id="Questions" rows="3"></textarea><span id="spanquestion"></span>
                </div>
            </div>
        </fieldset> <br> <br>
        <label for="checkbox"><input id="checkbox" type="checkbox"> J'accepte le traitement informatique de ce
            formulaire </label> <span class="ast">*</span><br> 
            <span id="spancheckbox"></span>
        <br> <br>

        <input type="submit" class="btn btn-dark" value="Envoyer" id="envoyer"> 
        <input type="reset" class="btn btn-dark" value="Annuler">
    </form>
        
        <br>
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
     



     <script type="text/javascript" src="../BOOTSTRAPS/formulaire.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    
   
</body>

</html>