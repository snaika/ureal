<?php include("includes/header.php"); ?>

<?php include("includes/menu.php"); ?>

<div class="l-container user-fiche">


	<!-- product-resume -->
	<div class="section user-edit">
		<div class="row">
			<div class="col-xs-3 profil-picture" id="profil-picture">
				<a href='javascript:PopupCentrer("test.php",500,200,"menubar=no,scrollbars=no,titlebar=no,resizable=no,status=no,location=no,channelmode=yes,")' id="change-profil-thumb">
					<img src="http://top10for.com/wp-content/uploads/2014/04/Beautiful-Girl-Singapore.jpg">
						<p>Modifier la photo</p>
				</a>		
			</div>

			<div class="store-summup col-xs-8">
	<h1 class="text-middle title">Sara Mayne</h1>
					<div class="toHide">
						<p  id="desc">A la recherche de perles rares et autres. J'aime les années 80 et tout ce qui est rétro,
						 n'hésitez pas me faire des propositions. Je peux me déplacer en IDF, pour toute propositions intéréssantes. 
						 N'hésitez pas non plus a allez voir mes ventes.</p>
					</div>
					<form class="toShow " action="profil-des" method="post" accept-charset="utf-8">
					        <div class="form-group">
					        	<label for="message" class="col-sm-2">Description</label>
								<div class="col-sm-8">
									<textarea class="form-control toShow" rows="6" id="message" placeholder="Décrivez vouz en quelques lignes" requiered></textarea>
								</div>
							</div>
							<input type="submit" class="btn btn-submit" id="Validate" value="Valider">
						
					</form>
		

	
			</div>

		</div>

	</div>


	<!--  -->
	<div class="section  user-edit">
		<form class="form-horizontal submit-form " action="#" method="post" id="user_form">
		    <ul>
		    
		        <div class="form-group ">
		        	<label for="username" class="col-sm-2">Login</label>
					<div class="col-sm-8">
					 	<div class="toHide">
					 		<p id="username">SaraMayne</p><span>cliquez pour modifier</span>
					 	</div>
					 	<input  type="text" class="form-control toShow" id="username" placeholder="Votre nom sur le site" />
		  			</div>
				</div>
		        <div class="form-group">
		        	<label for="lastname" class="col-sm-2">Nom</label>					 
					<div class="col-sm-8">
						<div class="toHide">
							<p  id="lastname">Mayne</p><span>cliquez pour modifier</span>
						</div>
						<input  type="text" class="form-control toShow" id="lastname" placeholder="Votre nom" />
					</div>
				</div>
		        <div class="form-group">
		        	<label for="firstname" class="col-sm-2">Prénom</label>
					<div class="col-sm-8">
						<div class="toHide">
							<p id="firstname">Sara</p><span>cliquez pour modifier</span>
						</div>
						<input type="text" class="form-control toShow" id="firstname" placeholder="Votre prénom" />
						
					 </div>
				</div>
		        <div class="form-group">
		        	<label for="address" class="col-sm-2">Adresse</label>
					<div class="col-sm-8">
						<div class="toHide">
							<p  id="address"></p><span>cliquez pour modifier</span>
						</div>
						<input type="text" class="form-control toShow" id="address" placeholder="Votre e-mail" />
					</div>
				</div>
		        <div class="form-group">
		        	<label for="CP" class="col-sm-2">Code Postale</label>
					<div class="col-sm-2">
						<div class="toHide">
							<p id="address">94170</p><span>cliquez pour modifier</span>
						</div>
						<input type="text" class="form-control toShow" id="CP" placeholder="Code Postale" />
						
					</div>
		        	<label for="city" class="col-sm-1">Ville</label>
					<div class="col-sm-5">
						<div class="toHide">
							<p id="address">Le Perreux s/ Marne</p><span>cliquez pour modifier</span>
						</div>
						<input type="text" class="form-control toShow" id="city" placeholder="Ville" />
					</div>
				</div>
				<div class="form-group">
	        		<label for="email" class="col-sm-2">E-mail *</label>
					<div class="col-sm-8">
		        		<div class="toHide">
		        			<p id="email"></p><span>cliquez pour modifier</span>
			        	</div>
		        	<input type="email" class="form-control toShow" id="email" placeholder="Votre e-mail" />
					</div>
				</div>
				<div class="form-group">
		        	<label for="password" class="col-sm-2">Mot de Passe *</label>
					<div class="col-sm-8">
			        	<div class="toHide">
							<p id="password"></p><span>cliquez pour modifier</span>
			        	</div>
						<input  type="password" class="form-control toShow" id="password" placeholder="Mot de passe" />
						
					</div>
				</div>
				<div class="form-group">
		        	<label for="cpassword" class="col-sm-2">Confirmation mot de passe *</label>
					<div class="col-sm-8">
						<div class="toHide">
							<span>cliquez pour modifier</span>
						</div>
						<input  type="password" class="form-control toShow" id="cpassword" placeholder="Confirmation de votre mot de passe" />
					</div>
				</div>

		       </ul>
	       	 	<input type="submit" style="visibility: hidden" id="Validate" value="Valider"/>
		</form>
	</div>

	<div class="section user-edit user-friend">
	<h2>----------------------		Mes amis		----------------------</h2>


<!-- friend thumnail start -->
	<div class=" col-xs-2 myfriend">

		<a href="#"><img class="rm" src="http://icons.iconarchive.com/icons/visualpharm/must-have/256/Remove-icon.png" alt="remove button"></a>

		<a href="./userInfo.php">
			<div class="friend-thumb ">
			 	<img  src="https://pbs.twimg.com/profile_images/3716957761/a6db54cbe8d3415373d7d0e0b3601a53.jpeg">
			</div>
			<p class="username">Barry Porter</p>
		</a>
	</div>
<!-- friend thumnail end -->



<!-- friend thumnail start -->
	<div class=" col-xs-2 myfriend">

		<a href="#"><img class="rm" src="http://icons.iconarchive.com/icons/visualpharm/must-have/256/Remove-icon.png" alt="remove button"></a>

		<a href="./userInfo.php">
			<div class="friend-thumb ">
			 	<img  src="https://www.bostonconservatory.edu/sites/all/files/styles/900_wide/public/StephanieMoskalMAIN_0.jpg?itok=CIBDeBXb">
			</div>
			<p class="username">Alice Meyer</p>
		</a>
	</div>
<!-- friend thumnail end -->



<!-- friend thumnail start -->
	<div class=" col-xs-2 myfriend">

		<a href="#"><img class="rm" src="http://icons.iconarchive.com/icons/visualpharm/must-have/256/Remove-icon.png" alt="remove button"></a>

		<a href="./userInfo.php">
			<div class="friend-thumb ">
			 	<img  src="https://pbs.twimg.com/profile_images/439996204932292608/I672NWMF.jpeg">
			</div>
			<p class="username">Yasmine Keller</p>
		</a>
	</div>
<!-- friend thumnail end -->




	</div>

</div>


<?php include("includes/footer.php"); ?>
