<body>

  <!-- NAV -->
  <?php include('header.php'); ?>



  <div class="clearfix"></div>


  <div class="container-fluid" style="margin-top:80px;">

    <div class="container">

      <div class="row"><label class="h5 bienvenue">Bienvenue : <?php print($userRow['user_name']); ?></label></div>


      <div class="row text-center marge-20">
        <div class="col-md-offset-3 col-md-3">
          <div class="pastille">
            <a href="../V1/projet.php">
              <div class="icone">
                <span class="glyphicon glyphicon-plus"></span>
              </div>
              <div>
                Créer un projet
              </div>

            </a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="pastille">
            <a href="../V1/view.projet.php">
              <div class="icone">
                <span class="glyphicon glyphicon-th-list"></span>
              </div>
              <div>
                Voir tous les projets
              </div>

            </a>
          </div>
        </div>
      </div>


      <div class="row text-center">
        <div class="col-md-offset-3 col-md-3">
          <div class=" pastille-b">
            <a href="../V1/offre.php">
              <div class="icone">
                <span class="glyphicon glyphicon-gift"></span>
              </div>
              <div>
                Ajouter une Offre
              </div>

            </a>
          </div>
        </div>

       <div class=" col-md-3">
          <div class=" pastille-b">
            <a href="../V1/view.offre.php">
              <div class="icone">
                <span class="glyphicon glyphicon-th-list"></span>
              </div>
              <div>
                Voir toutes les Offres
              </div>

            </a>
          </div>
        </div>
     </div>



    </div>

  </div>

  <script src="bootstrap/js/bootstrap.min.js"></script>




  
  <!--  <p class="h2">Page d'accueil</p>  -->

      <!-- <p>
        <a href="#"><span class="glyphicon glyphicon-home"></span> Créer un Projet</a>
        <a href="#"><span class="glyphicon glyphicon-user"></span> Gestion de Partenaire</a>
        <a href="#"><span class="glyphicon glyphicon-calendar"></span> Affichage Projets</a>
        <hr />
      </p> -->

<!-- <table class="table">
  <tr class="col-md-4"><td><a href="#"><span class="glyphicon glyphicon-home"></span></a></td></tr>
  <tr class="col-md-4"><td><a href="#">Créer un Projet</a></td></tr>
</table>

<table class="table">
  <tr class="col-md-4"><td><a href="#"><span class="glyphicon glyphicon-home"></span></a></td></tr>
  <tr class="col-md-4"><td><a href="#">Gestion de Partenaire</a></td></tr>
</table>
</table>

<table class="table col-md-4">
  <tr><td><a href="#"><span class="glyphicon glyphicon-home"></span></a></td></tr>
  <tr><td><a href="#">Affichage Projets</a></td></tr>
</table>
</table>


    </div>
  -->




</body>
</html>