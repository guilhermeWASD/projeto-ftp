<h1>Novo Usuário</h1> <br>

<form action="?page=save" method="POST">
	<input type="hidden" name="action" value="signup">

	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="username" class="form-control">
	</div>

	<div class="mb-3">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>

	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="txtpassword" class="form-control">
	</div>

	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="borndate" class="form-control">
		<div id="borndateHelpBlock" class="form-text">
			Tenha em mente que a data está sendo inserida no formato <u>mês-dia-ano</u>
		</div>
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Confirmar</button>
	</div>
</form>