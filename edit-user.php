<h1>Editar</h1>	<br>
<?php
	$sql = "SELECT * FROM users WHERE id=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row =  $res->fetch_object();
?>

<form action="?page=save" method="POST">
	<input type="hidden" name="action" value="edit">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">

	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="username" value="<?php print $row->username; ?>" class="form-control">
	</div>

	<div class="mb-3">
		<label>Email</label>
		<input type="text" name="email" value="<?php print $row->email; ?>" class="form-control">
	</div>

	<div class="mb-3">
		<label>Senha</label>
		<input type="password" name="txtpassword" value="" class="form-control" required>
	</div>

	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="borndate" value="<?php print $row->borndate;?>" class="form-control">
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Confirmar</button>
	</div>
</form>