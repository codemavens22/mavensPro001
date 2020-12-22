<?php 

if (isset($_POST['btn-send'])) {



	$UserName = $_POST['UName'];
	$Email = $_POST['Email'];
	$subject = $_POST['Subject'];
	$Msg = $_POST['msg'];

	if (empty($UserName) || empty($Email) || empty($subject) || empty($Msg)) {

		header('Location: contactus.php?error');
		
	}
	else
	{
		$to = "codemavens22@gmail.com";

		if (mail($to, $subject, $Msg,$Email)) {

			header('Location: contacus.php?success');
		}

	}

}



 ?>