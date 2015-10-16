<?php include("includes/header.php"); ?>

<?php include("includes/menu.php"); ?>

<div class="l-container">
	<h1 id="list-name">Ma liste</h1>
	<h2><?php if(isset($_GET['name'])){ echo($_GET['name']);} else {echo "Mes envies"; } ?> </h2>
	<div class="list-management">
	<div class="section">
		<div class="col-xs-7">
			<a href="#form-inline" class="managerlink active" >modifier la liste</a>
			<form class="form-inline list-manager" action="listDisplay.php" method="get" accept-charset="utf-8">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputEmail3">Nom</label>
				    <input name="name" type="text" class="form-control" id="exampleInputEmail3" placeholder="Modifier nom">
				  </div>
			      	<div class="form-group">
			        	<label for="visibility" class="sr-only">Visibilité</label>
						<div class="col-sm-3">
							<select id="visibility" class="form-control" requiered>
								<option value="cat1">Publique</option>
								<option value="cat2">Privée</option>
							</select>
						</div>
					</div>
				  <button id="remove-list" class="btn btn-default">Supprimer ma liste</button>
				  <button type="submit" class="btn btn-primary">Valider</button>
			</form>
		</div>
		<div class="col-xs-5">
			<ul class="list-inline">
			    <li>Trier par : </li>
			    <li><a href="#">Date</a></li>
			    <li><a href="#">Prix</a></li>
			    <li><a href="#">Nom</a></li>
			</ul>
		</div>
	</div>
	</div>
	<div class="products-list">
		<div class="row product-row">
				<a href="./productInfo.php">
					<div class="col-xs-3 product-img">
					<span class="verticale-helper"></span>
						<img src="http://image.darty.com/petit_electromenager/aspirateur/nettoyeur_vapeur/black_decker_fsm1630_steam_mop_d1303273721337A_142632770.jpg" alt="" >
					</div>
					<div class="col-xs-5 product-des">
						<dl>
							<dt product-name>BLACK & DECKER FSM1630 STEAM MOP</dt>
							<dd>Un nettoyage en profondeur sans contrainte<br>Tue 99.9% des bactéries et germes - Pas besoin de produits chimiques !</dd>
						</dl>
					</div>
					<div class="col-xs-2 product-price"><span id='price'>264,95 €</span></div>
				</a>
			<a href="#">
				<div class="col-xs-2 product-remove"></div>
			</a>
		</div>



		<div class="row product-row">
				<a href="./productInfo.php">
					<div class="col-xs-3 product-img">
					<span class="verticale-helper"></span>
						<img src="http://www.prixing.fr/images/product_images/2ba/2baaa4044e4b288f8729677d65d06dee.jpg" alt="" >
					</div>
					<div class="col-xs-5 product-des">
						<dl>
							<dt product-name>ASPIRATEUR TORNADO TOT3520 SANS SAC</dt>
							<dd>Aspirateur sans sac les 8 cyclones de T8 assurent une excellente séparation des particules de poussières de l'air aspiré .</dd>
						</dl>
					</div>
					<div class="col-xs-2 product-price"><span id='price'>147 €</span></div>
				</a>
			<a href="#">
				<div class="col-xs-2 product-remove"></div>
			</a>
		</div>





	</div>

</div>

<?php include("includes/footer.php"); ?>
