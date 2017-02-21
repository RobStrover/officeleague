<div class="container animated bounceIn">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			<h1>Sign In</h1>
			<div class="form-group">
		    	<label for="signinUsername">Username</label>
		    	<input type="email" class="form-control" id="signinUsername">
		  	</div>
		  	<div class="form-group">
		    	<label for="signinPassword">Password</label>
		   		<input type="password" class="form-control" id="signinPassword">
		  </div>
		  <button id="signinButton" class="btn btn-primary btn-block">Sign In</button>
		  <p class="text-center"><a href="<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?signup' ?>">Need an account? / Sign up</a></p>
		</div>
	</div>
</div>