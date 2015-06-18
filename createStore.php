<?php include("includes/header.php"); ?>

<?php include("includes/menu.php"); ?>

<div class="l-container">
<!-- login-form -->	

<!-- strat-login-form -->	
<div class="login-form">
<!-- start-form -->
	<form class="login_form" action="#" method="post" name="contact_form">
		<h1>Magasin</h1>
	    <ul>
			<li><p>Remplissez le formulaire du magasin afin de pouvoir le retrouver sur notre site ! Notre équipe vérifiera son authenticité avant de la rendre disponible.</p><br/></li>
	        <li>
	            <input type="text" class="textbox2" name="name" placeholder="Nom du magasin" required/>
	        </li>
	        <li>
	            <input type="text" name="address" class="textbox2" placeholder="Adresse">
	        </li>
	        <li>
	            <input type="text" name="address_2" class="textbox2" placeholder="Complément d'adresse">
	        </li>
	        <li>
	            <input type="text" name="postal_code" class="textbox2" placeholder="Code postal">
	            <input type="text" name="city" class="textbox2" placeholder="Ville">
	        </li>
			<li>
				<select name="country">
					<option value="FRANCE">France</option>
					<option value="GERMANY">Allemagne</option>
					<option value="SPAIN">Espagne</option>
				</select>
			</li>
	        <li>
	            <input type="text" name="website" class="textbox2" placeholder="Adresse du site">
	        </li>
	        <li>
	            <input type="text" name="company" class="textbox2" placeholder="Compagnie">
	        </li>
         </ul>
       	 	<input type="submit" name="Validate" value="Valider"/>
	</form>
<!-- end-form -->
<!-- start-account -->
<!-- end-account -->
<!-- end-login-form -->

	
</div>

</div>

<?php include("includes/footer.php"); ?>
