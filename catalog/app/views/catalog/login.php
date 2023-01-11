<?php $this->view("catalog/header",$data); ?>

	<div style="margin: auto;max-width: 600px;width:100%;padding: 2em;">
		<h2 class="col-6 tm-text-primary">
                Registracija
            </h2>

		<form method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">el. pašto adresas</label>
		    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
		    <small id="emailHelp" class="form-text text-muted">bbnbfbdffffffffffdbfdbfdbf.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Kodas</label>
		    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
		  </div>
		   
		  <button type="submit" class="btn btn-primary">Pateikti</button>
		</form>
	</div>

<?php $this->view("catalog/footer",$data); ?>