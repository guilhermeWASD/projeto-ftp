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
					print "<script>alert('New user added');</script>";
					print "<script>location.href='?page=list';</script>";
				}else{
					print "<script>alert('signup failed');</script>";
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
					print "<script>alert('updated successfuly');</script>";
					print "<script>location.href='?page=list';</script>";
				}else{
					print "<script>alert('update failed');</script>";
					print "<script>location.href='?page=list';</script>";
				}
				break;

			case "delete":
				$sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];
				
				$res = $conn->query($sql);
				
				if($res==true){
					print "<script>alert('Deleted successfuly');</script>";
					print "<script>location.href='?page=list';</script>";
				}else{
					print "<script>alert('Can't delete');</script>";
					print "<script>location.href='?page=list';</script>";
				}

				break;
			}

			
	?>