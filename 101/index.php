<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>101 Week CSSA - Semaine 101 AESA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../lib/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="../css/new-age.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a data-en class="navbar-brand page-scroll" href="#page-top">101 WEEK</a>
                <a data-fr class="navbar-brand page-scroll" href="#page-top">SEMAINE 101</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a data-en class="page-scroll" href="#what">101 Week</a>
                        <a data-fr class="page-scroll" href="#what">Semaine 101</a>
                    </li>
                    <li>
                        <a data-en class="page-scroll" href="#the-kit">The Kit</a>
                        <a data-fr class="page-scroll" href="#the-kit">La Trousse</a>
                    </li>
                    <li>
                        <a data-en class="page-scroll" href="#schedule">The Schedule</a>
                        <a data-fr class="page-scroll" href="#schedule">L'horaire</a>
                    </li>
                    <li>
                        <a data-en class="page-scroll" href="#who">Who Are We?</a>
                        <a data-fr class="page-scroll" href="#who">Who Are We?</a>
                    </li>
                    <li>
                        <a data-en class="page-scroll" href="#ticket">Buy the Kit</a>
                        <a data-fr class="page-scroll" href="#ticket">Buy the Kit</a>
                    </li>
                    <li>
                        <a id="lang-button">Français</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="schedule" class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h2 data-en>Register for 101 Week</h2><br>
                        <h2 data-fr>L'horaire</h2><br>
                        <form action="checkout.php" method="post">
	                        <div class="form-group">
	            				<label for="input-text" class="control-label">First Name</label>
	            				<input type="text" class="form-control" name="first-name" placeholder="" />
	          				</div>
	          				<div class="form-group">
	            				<label for="input-text" class="control-label">Last Name</label>
	            				<input type="text" class="form-control" name="last-name" placeholder="" />
	          				</div>
	          				<div class="form-group">
	            				<label for="input-text" class="control-label">Student Number</label>
	            				<input type="number" class="form-control" name="student-num" placeholder="" />
	          				</div>
	          				<div class="form-group">
	            				<label for="input-text" class="control-label">Email (do not use your uottawa email)</label>
	            				<input type="email" class="form-control" name="email" placeholder="" />
	          				</div>
	          				<div class="form-group">
	            				<label for="input-date" class=dcontrol-label">If you have any diatery restrictions (allergies, vegetarianism, lactose intolerance, etc.), please list them here:</label>
	            				<textarea name="diet" class="text_area " rows="4" cols="50"></textarea>
	          				</div>
	          				<div class="form-group">
	            				<label for="input-money" class="control-label">Do you have physical disabilities?</label>
	            				<select name="yes-no" id="physical">
								  <option value="yes">Yes</option>
								  <option value="no">No</option>
								</select>
	          				</div>
	          				<div class="form-group">
	            				<label for="input-date" class=dcontrol-label">If you are currently taking any prescriptions or medications please list them here:</label>
	            				<textarea name="diet" class="text_area " rows="4" cols="50"></textarea>
	          				</div>
	          				<div class="form-group">
	            				<label for="address" class="control-label">Health card Number</label>
	            				<input type="number" class="form-control" id="health-num" placeholder="">
	          				</div>
	          				<div class="form-group">
	            				<label for="input-text" class="control-label">Emergency Contact Name</label>
	            				<input type="text" class="form-control" id="em-name" placeholder="" />
	          				</div>
	          				<div class="form-group">
	            				<label for="input-text" class="control-label">Emergency Contact Phone Number</label>
	            				<input type="text" class="form-control" id="em-num" placeholder="" />
	          				</div
	          				<center><button type="submit" class="btn">Proceed to payment</button></center>	          			</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <footer>
        <div class="container">
            <p data-en>&copy; Computer Science Student Association</p>
            <p data-fr>&copy; Association des Étudiants en Informatique</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/new-age.min.js"></script>

    <script>
    $(document).ready(function() {

        $('#lang-button').click(function(){
          var lang = $('html').attr('lang');
          if(lang == 'en'){
            $('html').attr('lang','fr');
            $('#lang-button').text("English");
            }
          if(lang == 'fr'){
            $('html').attr('lang','en');
            $('#lang-button').text("Français");
        } 
        });
    });
    </script>


</body>

</html>