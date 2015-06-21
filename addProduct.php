<?php include("includes/header.php"); ?>

<?php include("includes/menu.php"); ?>

<div class="l-container">
	
	<div class="">
		<h1>Proposer nous un nouveau produit</h1>

		<form class="form-horizontal submit-form login-form" action="#" method="post" id="contact_form">
		    <ul>
				<div class="form-group"><p>Remplissez le formulaire du produit afin de pouvoir le retrouver sur notre site ! Notre équipe validera les informatons rapidement.</p><br/></div>
		        <div class="form-group">
		        	<label for="name" class="col-sm-2">Nom *</label>
					<div class="col-sm-9"><input type="text" class="form-control" id="name" placeholder="Dénomination du produit" required/></div>
				</div>
		      	<div class="form-group">
		        	<label for="country" class="col-sm-2">Catégorie *</label>
					<div class="col-sm-9">
						<select id="country" class="form-control">
							<option value="cat1">Epicerie</option>
							<option value="cat2">Electroménager</option>
							<option value="cat3">Fourniture</option>
						</select>
					</div>
				</div>
		        <div class="form-group">
		        	<label for="product-ref" class="col-sm-2">Référence</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="product-ref" placeholder="Référence ou code barre"/>
					</div>
				</div>
				<div class="form-group">
					<label for="product-img" class="col-sm-2">Image</label>
					<div class="col-sm-9">
						<input type="file" id="product-img" class="btn btn-primary">
						<p class="help-block">l'image du produit ne doit pas exéder 5mo</p>
					</div>
				</div>
		        <div class="form-group">
		        	<label for="product-des" class="col-sm-2">Description</label>
					<div class="col-sm-9">
						<textarea class="form-control" rows="4" id="product-des" placeholder="Description du produit"></textarea>
					</div>
				</div>
		        <div class="form-group">
		        	<label for="website" class="col-sm-2">Site</label>
		            <div class="col-sm-9">
		            	<input type="text" id="website" class="form-control" placeholder="http://site-web.com">
		            </div>
		        </div>
	         </ul>
	       	 	<input type="submit" id="Validate" value="Valider"/>
		</form>

	</div>

</div>

<?php include("includes/footer.php"); ?>
