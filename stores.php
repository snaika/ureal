<?php include("includes/header.php"); ?>

<?php include("includes/menu.php"); ?>

	<div class="l-container">

		<h1>Les magasins près de chez vous</h1>
		
			<div class="store-table">
				<table class="table table-bordered">
				           <th>Nom</th>
				           <th>Distance</th>
				        <tr data-href="./storeInfo.php">
				           <td>Carrefour Rosny 2</td>
				           <td>50 m</td>
				       </tr>
				       <tr data-href="./storeInfo.php">
				           <td>Cocci Market</td>
				           <td>150 m</td>
				       </tr>
				       <tr data-href="./storeInfo.php">
				           <td>Casino</td>
				           <td>320 m</td>
				       </tr>
				       <tr data-href="./storeInfo.php">
				           <td>AUDREY D BEAUTE </td>
				           <td>1, 24 km</td>
				       </tr>
				       <tr data-href="./storeInfo.php">
				           <td>CC Rosny 2</td>
				           <td>2,1 km</td>
				       </tr>
				       <tr data-href="./storeInfo.php">
				           <td>Le dauphin Bleu</td>
				           <td>2,1 km</td>
				       </tr>
				</table>
			</div>

	
	<div class="section">
		
      <div class="items-list userlist">
      <h3 class="text-left">Utilisateurs près de chez vous</h3>
      <div class="row">
        <div class="col-xs-4 item-box">
			<a href="./userInfo.php">
              <div class="row">
                <div class="col-xs-12">
                  <div class="col-xs-4 item-list-thumb">
                    <span class="verticale-helper"></span><img src="img/header-logo.png" alt="produit" class="item-thumb">
                  </div>
                  <div class="col-xs-8">
                    <p class="item-name">
                      Jean Bonduel
                    </p>
                    <div class="item-rating">

                    </div>
                  </div>
                </div>
              </div>
			</a>
        </div>
        <div class="col-xs-4 item-box">
			<a href="./userInfo.php">
              <div class="row">
                <div class="col-xs-12">
                  <div class="col-xs-4 item-list-thumb">
                    <span class="verticale-helper"></span><img src="img/header-logo.png" alt="produit" class="item-thumb">
                  </div>
                  <div class="col-xs-8">
                    <p class="item-name">
                      Jean Neymar
                    </p>
                    <div class="item-rating">

                    </div>
                  </div>
                </div>
            </div>
			</a>
        </div>
        <div class="col-xs-4 item-box">
			<a href="./userInfo.php">
				<div class="row">
                <div class="col-xs-12">
                  <div class="col-xs-4 item-list-thumb">
                    <span class="verticale-helper"></span><img src="img/header-logo.png" alt="produit" class="item-thumb">
                  </div>
                  <div class="col-xs-8">
                    <p class="item-name">
                      Barry Porter
                    </p>
                    <div class="item-rating">

                    </div>
                  </div>
                </div>
            </div>
			</a>
          </div>
      </div>
      <p class="text-right link-container">
        <a href="#" class="text-right">Voir tout >></a>
      </p>
    </div>

	</div>

</div>


<?php include("includes/footer.php"); ?>
