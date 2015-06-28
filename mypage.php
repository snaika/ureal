<?php include("includes/header.php"); ?>

<?php include("includes/menu.php"); ?>

<div class="l-container user-fiche">
	<h2 class="text-middle title">Jean Bonduel</h2>

	<!-- product-resume -->
	<div class="section user-edit">
		<div class="row">
			<div class="col-xs-3 profil-picture" id="profil-picture">
				<a href="#" id="change-profil-thumb"><img src="img/19694367.jpg">
						<p>Modifiez la photo</p></a>
				
			</div>
			<div class="store-summup col-md-9">


				<div class="col-xs-6">
					<a href="#"><p class=" toHide">A la recherche de perles rares et autres. J'aime les années 80 et tout ce qui est rétro, n'hésitez pas me faire des propositions. Je peux me déplacer en IDF, pour toute propositions intéréssantes. N'hésitez pas non plus a allez voir mes ventes.</p></a>
					<form class="toShow form-horizontal" action="profil-des" method="post" accept-charset="utf-8">
							<div class="form-group">
								<label for="des">Description</label>
								<textarea name="des" rows="3" class="control-form"></textarea>
							</div>
							<input type="submit" class="btn btn-submit" id="Validate" value="Valider">
						
					</form>
				</div>

				<div class="col-xs-6">
						<a href="#"><p class="add-to-list">Ajouter à ma liste</p></a>						
						<div class="thumbs-vote">
							<img src="http://www.clipartbest.com/cliparts/dT6/x7x/dT6x7xjT9.png" alt="">
						</div>
				
				</div>		
			</div>

		</div>

	</div>


	<!--  -->
	<div class="section">
		
	</div>





</div>


<?php include("includes/footer.php"); ?>
<script type="text/javascript">
(function() {

var img = document.getElementById('container').firstChild;
img.onload = function() {
    if(img.height < img.width) {
        img.height = '100%';
        img.width = 'auto';
    }
};

}());
</script>