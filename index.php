<?php require_once 'partials/header.php';?>

  <?php require_once 'partials/navbar.php';?>

    <div class="container">
      <div class="row">
      	<div class="col-4"></div>
        <div class="col-4">
          <div class="card">
          	<div class="card-header">POKEDEX</div>
          	<div class="card-body">
          		<div class="form-group">
          			<label>Search Info</label>
          			<input class="form-control mb-3" id="search">
          			<p id="summary"></p>
          		</div>
          		
          	</div>
          	<div class="card-footer">
          		<input type="button" class="btn btn-block btn-outline-danger" value="DELETE" id="btnDelete">
          	</div>
          </div>
        </div>
      </div>
    </div>

<?php require_once 'partials/footer.php';?>