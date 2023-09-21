	<?php
		switch ($_REQUEST["action"]) {
			case "signup":
				$username = $_POST["username"];
				$email = $_POST["email"];
				$txtpassword = md5($_POST["txtpassword"]);
				$borndate = $_POST["borndate"];
				
				$sql = "INSERT INTO users(username, email, txtpassword, borndate) VALUES
				('{$username}', '{$email}', '{$txtpassword}', '{$borndate}')";

				$res = $conn->query($sql);
				
				if($res==true){
					print "<script>alert('Novo usuário adicionado');</script>";
					print "<script>location.href='?page=list';</script>";
				}else{
					print "<script>alert('Cadastro falhou');</script>";
					print "<script>location.href='?page=list';</script>";
				}
				break;
				
			case "edit":
				$username = $_POST["username"];
				$email = $_POST["email"];
				$txtpassword = md5($_POST["txtpassword"]);
				$borndate = $_POST["borndate"];
				
				$sql = "UPDATE users SET 
								username = '{$username}',
								email = '{$email}',
								txtpassword = '{$txtpassword}',
								borndate = '{$borndate}'
							WHERE
								id=".$_REQUEST["id"];

				$res = $conn->query($sql);
				
				if($res==true){
					print "<script>alert('Atualizado com sucesso');</script>";
					print "<script>location.href='?page=list';</script>";
				}else{
					print "<script>alert('Atualização falhou');</script>";
					print "<script>location.href='?page=list';</script>";
				}
				break;

			case "delete":
				$sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];
				
				$res = $conn->query($sql);
				
				if($res==true){
					print "<script>alert('Deletado com sucesso');</script>";
					print "<script>location.href='?page=list';</script>";
				}else{
					print "<script>alert('Não foi possível deletar');</script>";
					print "<script>location.href='?page=list';</script>";
				}

				break;
			}

			
	?>