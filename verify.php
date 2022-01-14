<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				if($row['status']){
					if(password_verify($password, $row['password'])){
						if($row['type']){
							$_SESSION['admin'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];
						}
					}
					else{
						$_SESSION['error'] = 'Incorrect Password!';
					}
				}
				else{
					$_SESSION['error'] = 'Account is Not Activated!';
				}
			}
			else{
				$_SESSION['error'] = 'This Email is Not Found!';
			}
		}
		catch(PDOException $e){
			echo "There is Some Problem in Connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Please Input Data Correctly!';
	}

	$pdo->close();

	header('location: login.php');

?>