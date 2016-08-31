<body>

  <!-- NAV -->
  <?php include('header.php'); ?>


  <div class="clearfix"></div>


  <div class="container-fluid" style="margin-top:80px;">

    <div class="container">

    	<label class="h5">Bienvenue : <?php print($userRow['user_name']); ?></label>
      <hr />
      <p class="h2">Page d'accueil</p> 

      <p>
        <a href="#"><span class="glyphicon glyphicon-home"></span> Créer un Projet</a>
        <a href="#"><span class="glyphicon glyphicon-user"></span> Gestion de Partenaire</a>
        <a href="#"><span class="glyphicon glyphicon-calendar"></span> Affichage Projets</a>
        <hr />
      </p>




    </div>

  </div>

  <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>