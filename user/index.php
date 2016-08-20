<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CarHunt|Home</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/flickity.min.css">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
	<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
    <link rel="stylesheet" type="text/css" href="css/compare/component.css"/>
	<script src="js/modernizr.custom.js"></script>


</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="header-nav-wrapper">
				<div class="logo">
					<a href="#"><img src="img/logo.png" alt="Synthetica Freebie Peter Finlan"></a>
				</div>
				<div class="primary-nav-wrapper">
					<div class="secondary-nav-wrapper">
						<ul class="secondary-nav">
							<li class="subscribe"><a href="#contact" style="color:white">Contact</a></li>
							<li class="search"><a href="#search" class="show-search"><i class="fa fa-search"></i></a></li>
						</ul>
					</div>
					<div class="search-wrapper">
						<ul class="search">
							<li>
								<input type="text" id="search-input" placeholder="Start typing then hit enter to search">
							</li>
							<li>
								<a href="#" class="hide-search"><i class="fa fa-close"></i></a>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<header class="hero">
		<div class="carousel js-flickity">
			<div class="carousel-cell" style="background-image: url(img/hero-bg-01.jpg);">
				<div class="hero-bg">
					<div class="container-fluid">
						<div class="row" style="">
							<div class="col-md-12 ">
								<h1 class="wp1 text-center">Introducing The New Cruze</h1>
                                <center><a href="#" class="btn primary wp2">Learn more</a></center>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="carousel-cell" style="background-image: url(img/hero-bg-02.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="wp1">Sports Car Legends</h1>
								<a href="#" class="btn primary wp2">Learn More</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="carousel-cell" style="background-image: url(img/hero-bg-03.jpg);">
				<div class="hero-bg">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="wp1">Landrover Series</h1>
								<a href="#" class="btn primary wp2">Learn More</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class='mouse-container'>
			<a href="#selectcar">
				<div class='mouse'>
					<span class='scroll-down'></span>
				</div>
			</a>
		</div>
	</header>
    
    <div class="container" id="selectcar">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
                    <h1><center>Select Preferences</center></h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li data-input-trigger>
                            
							<label class="fs-field-label fs-anim-upper" for="q3" >Select Type</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3b" name="q3" type="radio" value="hatchback"/><label for="q3b" class="radio-hatchback">Hatchback</label></span>
								<span><input id="q3c" name="q3" type="radio" value="sedan"/><label for="q3c" class="radio-sedan">Sedan</label></span>
								<span><input id="q3a" name="q3" type="radio" value="suv"/><label for="q3a" class="radio-suv">SUV</label></span>
                                <span><input id="q3a" name="q3" type="radio" value="sports"/><label for="q3a" class="radio-sports">Sports Cars</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper">Select Brand</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>BRAND</option>
								<option value="audi" data-class="audi">AUDI</option>
								<option value="bmw" data-class="bmw">BMW</option>
								<option value="chevrolet" data-class="chevrolet">CHEVROLET</option>
								<option value="fiat" data-class="fiat">FIAT</option>
								<option value="ford" data-class="ford">FORD</option>
								<option value="honda" data-class="honda">HONDA</option>
								<option value="hyundai" data-class="hyundai">HYUNDAI</option>
								<option value="jaguar" data-class="jaguar">JAGUAR</option>
								<option value="landrover" data-class="landrover">LANDROVER</option>
								<option value="mahindra" data-class="mahindra">MAHINDRA</option>
								<option value="maruthi" data-class="maruthi">MARUTHI</option>
								<option value="mercedes" data-class="mercedes">MERCEDES</option>
								<option value="nissan" data-class="nissan">NISSAN</option>
								<option value="renault" data-class="renault">RENAULT</option>
								<option value="skoda" data-class="skoda">SKODA</option>
								<option value="tata" data-class="tata">TATA</option>
								<option value="toyota" data-class="toyota">TOYOTA</option>
								<option value="volkswagon" data-class="volkswagon">VOLKSWAGON</option>
								<option value="volvo" data-class="volvo">VOLVO</option>
							</select>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper">Select Car</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>CAR</option>
								<option value="#588c75" data-class="audi"></option>
								<option value="#b0c47f" data-class="bmw"></option>
								<option value="#f3e395" data-class="chevrolet"></option>
								<option value="#f3ae73" data-class="fiat"></option>
							</select>
						</li>
						</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Send answers</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

			
		</div><!-- /container -->
		
    <!-- Working Properly -->
    
     <div class="container-fluid">
       <form  action="resultpage.php" method="post"> 
        <section class="compare-section bg-1">
            <h2 class="compare-section__title">Compare</h2><br/>
            <div class="pricing compare-inner">
                
               <div class="pricing__item animate wp2">
                <span class="big">+</span><br/>
                    <div role="form" class="forms">
                        <div class="form-group">
                        <select class="form-control" name="first-choice" id="first-choice">
                            <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="muv">MUV</option>
                            <option value="coupe">Coupe</option>
                        </select>  
                      </div>
                      <br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice" id="second-choice" onchange="get_data()">
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select>  
                      </div>
                      <br/>
                        <div class="form-group">
                        <select class="form-control" id="third-choice" name="third-choice">
                            <option value="" selected="">Car Name</option>
                            
                        </select>  
                        </div>
                </div>
                </div>
                <div class="pricing__item wp2">
                <span class="big">+</span><br/>
                    <div role="form" class="forms">
                        <div class="form-group">
                        <select class="form-control" id="first-choice2" name="first-choice2">
                            <option value="" selected="">Type</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="muv">MUV</option>
                            <option value="coupe">Coupe</option>
                        </select>  
                      </div>
                      <br/>
                        <div class="form-group">
                        <select class="form-control" name="second-choice2" id="second-choice2" onchange="get_data2()" >
                            <option value="" selected="">Brand</option>
                            <option value="audi">AUDI</option>
                            <option value="bmw">BMW</option>
                            <option value="bentley">Bentley</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="fiat">Fiat</option>
                            <option value="ford">Ford</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="jaguar">Jaguar</option>
                            <option value="mahindra">Mahindra</option>
                            <option value="maruthi">Maruthi</option>
                            <option value="merc">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="renault">Renault</option>
                            <option value="skoda">Skoda</option>
                            <option value="tata">TATA</option>
                            <option value="toyota">Toyota</option>
                            <option value="volkswagon">Volkswagon</option>
                            <option value="volvo">Volvo</option>
                        </select>  
                      </div>
                      <br/>
                        <div class="form-group">
                        <select class="form-control" name="third-choice2" id="third-choice2">
                            <option value="" selected="">Car Name</option>
                           
                        </select>  
                        </div>
                </div>
                </div>
            
                </div>
          <input class="btn primary wp2" type="submit" id="submit" name="submit" value="SUBMIT" disabled="true"  />
        </section>
       </form> 
    </div>
    
    
    
    
	<!-- SECTION: Footer -->
	<footer class="has-padding footer-bg" style="background:transparent;">
		<div class="container">
            <div class="row">
				<div class="col-md-12 footer-nav">
				
					<ul class="footer-share">
						<li><a href="#">Licence</a></li>
						<li><a href="#" class="share-trigger"><i class="fa fa-share"></i>Share</a></li>
					</ul>
					<div class="share-dropdown">
						<ul>
							<li><a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	<!-- END SECTION: Footer -->
	<!-- JS CDNs -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script src="http://vjs.zencdn.net/5.4.6/video.min.js"></script>
	<!-- jQuery local fallback -->
	<script>
	window.jQuery || document.write('<script src="js/min/jquery-1.11.2.min.js"><\/script>')
	</script>
	<!-- JS Locals -->
    <script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	<script src="js/min/bootstrap.min.js"></script>
	<script src="js/min/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/min/jquery.waypoints.min.js"></script>
	<script src="js/min/flickity.pkgd.min.js"></script>
	<script src="js/min/scripts-min.js"></script>

<!--Ajax scripts for populating the car models dropdown lists
get_data() populates the first box and get_data2() populates the second box -->	
	<script type="text/javascript">


	function get_data()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("third-choice").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice").value+"&first-choice="+document.getElementById("first-choice").value, true);
		xhttp.send();


	}
</script>


<script type="text/javascript">


	function get_data2()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("third-choice2").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "getter.php?second-choice="+document.getElementById("second-choice2").value+"&first-choice="+document.getElementById("first-choice2").value, true);
		xhttp.send();

		if ((document.getElementById('second-choice2').value!="")&&(document.getElementById('second-choice').value!="")&&(document.getElementById('first-choice').value!="")&&(document.getElementById('first-choice2').value!=""))
			 document.getElementById("submit").disabled=false;
		else
			document.getElementById("submit").disabled=true;
	}
</script>
   
   





</body>

</html>
