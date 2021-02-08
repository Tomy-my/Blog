
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Tomy : Contact</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="icon" type="image/png" href="images/favicon.png"/>

</head>
<body>
<div class="navbar">
                <div class="logo">
                    <a href="article.php">
                        <div id="T">T</div>
                        <div id="O">O</div>
                        <div id="M">M</div>
                        <div id="Y">Y</div></a> <br> &nbsp  
                        <div id="pho">Photographie</div>
                </div>
                <a href="index.php" class="home">HOME</a>
                <div class="photo">
                    <a href="#" class="photo">PHOTOGRAPHIES</a>
                <div class="liste">
                    <ul>
                    <a href="paysages.php"><li>Paysage</li></a>
                    <a href="papillon.php"><li>Papillon</li></a>
                    <a href="voiture.php"><li>Voiture</li></a>
                    <a href="#"><li>En création</li></a>
                    </ul>
                </div>
                </div>
                <a href="contact.php" class="contact">CONTACT</a>
			</div>
			
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="post" action="./controller/controller_contact.php">
				<span class="contact1-form-title">
					Formulaire de contact
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" name="envoi">
						<span>
							Envoyer le forumulaire
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>




    </body>
</html>