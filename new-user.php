<h1>New User</h1>

<form action="?page=save" method="POST">
	<input type="hidden" name="action" value="signup">

	<div class="mb-3">
		<label>Name</label>
		<input type="text" name="username" class="form-control">
	</div>

	<div class="mb-3">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>

	<div class="mb-3">
		<label>Password</label>
		<input type="password" name="txtpassword" class="form-control">
	</div>

	<div class="mb-3">
		<label>Born Date</label>
		<input type="date" name="borndate" class="form-control">
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Confirm</button>
	</div>
</form>