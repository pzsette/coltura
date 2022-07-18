<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Coltura</title>
	<link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
		<meta name="description" content="Coltura.it descrizione">
		<meta name="keywords" content="Coltura, vestiti, abbigliamento">
		<link rel="icon" href="img/favicon.png" />
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/268db6c06d.js" crossorigin="anonymous"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
	<style type="text/css">


	@font-face {
		font-family: Coltura;
		src: url(Coltura.dfont);
	}

	p {
		font-family: Coltura !important;
	}

	html {
		min-height:100%;/* make sure it is at least as tall as the viewport */
    	position:relative;
	}

	body{
    	height:100%;
	}
	
	@media (max-width: 767px) {
		#tf-video {
			margin-left: 30%; 
		}
	}

	hr { margin-right: 15% !important; margin-left: 15% !important}


	#inputForm {
	  font-family: Coltura !important;
	  position: absolute;
	  display: none;
	  width: 100%;
	  height: 100%;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  background-color: rgba(0,0,0,0.7);
	  z-index: 2;
	  cursor: pointer;
	}

	#btnLogin:hover {
		color:black;
		text-decoration: none;
  		cursor: pointer;
	}

	#sub {
	  margin-left: 95%;
	  border: none; /* Remove borders */
	  color: white; /* White text */
	  font-size: 20px; /* Set a font size */
	  cursor: pointer; /* Mouse pointer on hover */
	}

	/* Darker background on mouse-over */
	#sub:hover {
	  	color:white;
		text-decoration: none;
  		cursor: pointer;
	}

	.form-control{
	    color: #ccc;
	    background: transparent;
	    border: none;
	    height: none !important;
	    border-bottom: 1px solid rgba(255,255,255,.2);
	}
	.form-control:focus{
	    outline: none;
	    box-shadow: none;
	}
	.form-control::placeholder{
		overflow: visible;
	    color: #ccc;
	    font-size: 12px;
	    font-weight: 400;
	}
	</style>
</head>
	<body data-spy="scroll" data-target=".navbar">
		<div id="inputForm">
			<div class="container" style="margin-top: 23%">
			  <a href="#" id="sub"><i class="fa fa-close"></i></a>
				<center style="margin-top: 4%">
					<p style="font-size:25px; font-family: Coltura; color: white">per collaborare, per informazioni, per consigliare:</p>
					<div class="col-lg-offset-1 col-lg-10" style="margin-top: 5%">
						<form action="contactForm.php" method="post" role="form" data-toggle="validator">
						  <div class="form-group">
							<input type="text" class="form-control" name="nome" id="nome" placeholder="nome" required>
							<div class="help-block with-errors"></div>
						  </div>
						  <div class="form-group">
							<input type="email" class="form-control" name="email1" id="email1" placeholder="email" required>
							<div class="help-block with-errors"></div>
						  </div>
						  <div class="form-group">
							<input type="text" class="form-control" name="oggetto" id="oggetto" placeholder="oggetto" required>
							<div class="help-block with-errors"></div>
						  </div>
						  <div class="form-group">
							<textarea type="text" rows="5" class="form-control" name="messaggio" id="messaggio" placeholder="messaggio" required></textarea>
							<div class="help-block with-errors"></div>
						  </div>
						  <button type="submit" name="submit" class="btn btn-default">invia</button>
						</form>
					</div>
				</center>
			</div>
		</div>
		<div class="container">
			<div id="tf-manifesto" style="margin-top: 10%">
				<a href="collection.html"><img src="logo-home-due.jpeg" style="position:relative; display:block; margin-left: auto;margin-right: auto;width: 40%;"></a>
				<div class="row" style="margin-top:20%;">
					<div class="col-lg-offset-1 col-lg-10" style="position: relative;">
						<p style="font-size: 15px; font-family: Coltura; text-align: center">
										mai tranquilli sempre agitati<br>
										mai soddisfatti,sempre alla ricerca<br>
										mai vincolati,sempre indipendenti<br>
										noi siamo così<br> 
										irrequieti, aperti, liberi<br>
										il mondo<br>
										è il teatro delle nostre esperienze<br>
										noi siamo i protagonisti ma anche i tecnici<br>
										ci curiamo che ogni nostra scena sia degna di essere vissuta<br>
										e<br>
										lasci un ricordo in chi la vive assieme a noi
						</p>	
					</div>
				</div>
			</div>

			<div id="tf-video" style="position: relative;">
				<div class="col-md-12" style="margin-top: 16%;">
					<div class="col-md-offset-9 col-md-3">
						<div class="embed-responsive embed-responsive-16by9">
							<a href="index.php"><video width="240" height="180" autoplay muted loop>
								<source src="videos/coltura41.mp4" type="video/mp4" >
									Your browser does not support the video tag.
							</video></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="footer" style="margin-top: 10%; margin-bottom: 10%">
				<div class="container">
					<hr>
					<center><a href="#" id="btnLogin"><p style="font-family: Coltura;">union</p></a></center>
				</div>
		</footer>


		<script language="javascript" type="text/javascript">
			$(document).ready(function() {
				$('#btnLogin').click(function() {
					 $('#inputForm').show();
					 $('#tf-video').css("z-index", "-1");
				});
				$('#sub').click(function() {
					 $('#inputForm').hide();
					 $('#tf-video').css("z-index", "0");
				});
			});
		</script>

	</body>
</html>