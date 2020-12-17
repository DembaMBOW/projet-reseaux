
<?php
require('src/inc/pdo.php');
require('src/inc/functions.php');


$title = 'Homepage'
?>
<!---------------------------- MENU BURGER --------------------------->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">

    <!------------- Début Logo  ----------->
    <img src="asset/img/logo-rose.png" alt="logo-rose">
    <!------------ Fin de logo  ----------->

<!-------------------------------- Début Navbar --------------------------->

    <!-- Lien ves l'acceuil en cliquant sur titre -->
    <a class="navbar-brand text-white" href="#">Network Days</a> 
    <!-- Fin de lien  -->
    
    <!-- Bouton du menu burger en mode responsive -->
    <button aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
      data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span
      class="navbar-toggler-icon "></span></button>
    <!------------- Fin du bouton menu burger  ------->

<? include('src/template/footer.php');?>