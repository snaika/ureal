<?php include("includes/header.php"); ?>

<?php include("includes/menu.php"); ?>

<div class="l-container">
	<h1>Mes listes</h1>
	<div class="">
		
		<table class="table">
	      <caption>ci-dessous, l'intégralité de vos listes depuis votre arrivé chez nous</caption>
	      <thead>
	        <tr data-href="#">
	          <th>#</th>
	          <th>Nom</th>
	          <th>Création</th>
	          <th>Dernière modif.</th>
	          <th>Visibilité</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr data-href="./listDisplay.php" class="clickable">
	          <th scope="row">1</th>
	          <td>A vendre</td>
	          <td>21-06-2015</td>
	          <td>21-06-2015</td>
	          <td>Publique</td>
	        </tr>
	        <tr data-href="./listDisplay.php" class="clickable">
	          <th scope="row">2</th>
	          <td>Mes envies</td>
	          <td>10-06-2015</td>
	          <td>18-06-2015</td>
	          <td>Privée</td>
	        </tr>
	        <tr data-href="./listDisplay.php" class="clickable">
	          <th scope="row">3</th>
	          <td>Course de la semaine</td>
	          <td>13-06-2015</td>
	          <td>15-06-2015</td>
	          <td>Privée</td>
	        </tr>
	      </tbody>
	    </table>

	</div>

</div>

<?php include("includes/footer.php"); ?>
