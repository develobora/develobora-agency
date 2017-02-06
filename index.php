<?php ob_start(); ?> <!-- funkcja na wywołanie ciasteczka -->
<!DOCTYPE HTML>
<html lang="pl">	
	<head>
		<meta charset="UTF-8" />
		<title>Moja strona</title>
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet" type="text/css" />	
		<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />		
	</head>
	<body>
	<!--************************[ Logo ]************************-->
		<div class="topSite center">
			<div class="logo alignCenter left">
				<a href="/">
					<img src="images/free_log.png" alt="" />
					<span id="logo" href="#">develobora.com</span>
				</a>
			</div>
	<!--************************[ Contact ]************************-->		
			<div class="contact right">
				<div class="top">
					<div class="item phone"><a href="tel:+48 123 456 789">+48 123 456 789</a></div>
					<div class="item mail"><a href="mailto:biuro@firma.pl">biuro@firma.pl</a></div>
					<div class="item adres">
						<a target="_blank" href="https://www.google.com/maps?q=ul. Lorem Ipsum 28, Kraków">
							<span>ul. Lorem Ipsum 28<strong>12-456 Kraków</strong></span>
						</a>
					</div>	
				</div>
	<!--************************[ Nav-Menu ]************************-->
				<nav class="menu">
					<a class="mobileMenu" href="#mobile" onClick="Tmpl.menuMobile(); return false">Menu mobilne <span></span></a>
					<ul>
						<li><a href="">Strona główna</a></li>
						<li class="parent"><a href="#" onClick="Tmpl.submenu() ;return false">Oferta</a>
							<ul>								
								<li><a href="#">identyfikacja wizualna</a></li>
								<li><a href="#">strony www</a></li>
								<li><a href="#">pozycjonowanie</a></li>
								<li><a href="#">social media</a></li>
								<li><a href="#">uslugi hostingowe</a></li>
								<li><a href="#">public relations</a></li>
							</ul>
						</li>
						<li><a href="">O nas</a></li>
						<li><a href="">Portfolio</a></li>
						<li><a href="">Kontakt</a></li>				
					</ul>
				</nav>
			</div>		
		</div>
	<!--************************[ Slider ]************************-->
		<div class="owlSlider">
			<div class="slider alignCenter">
				<h3><span>Lor em psum dolor sit amet</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim purus enim, non rutrumenim tincidunt vitae. Nunc faucibus nisl ante, ac posuere tortocondimentum sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim purus enim, non rutrumenim tincidunt vitae.</p>
				<a href="#slider-link">więcej</a>
			</div>
			<div class="slider alignCenter">
				<h3><span>Lor em psum dolor sit amet1</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim purus enim, non rutrumenim tincidunt vitae. Nunc faucibus nisl ante, ac posuere tortocondimentum sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim purus enim, non rutrumenim tincidunt vitae.</p>
				<a href="#slider-link">więcej</a>
			</div>
			<div class="slider alignCenter">
				<h3><span>Lor em psum dolor sit amet2</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim purus enim, non rutrumenim tincidunt vitae. Nunc faucibus nisl ante, ac posuere tortocondimentum sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim purus enim, non rutrumenim tincidunt vitae.</p>
				<a href="#slider-link">więcej</a>
			</div>
			<div class="slider alignCenter">
				<h3><span>Lor em psum dolor sit amet3</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim purus enim, non rutrumenim tincidunt vitae. Nunc faucibus nisl ante, ac posuere tortocondimentum sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dignissim purus enim, non rutrumenim tincidunt vitae.</p>
				<a href="#slider-link">więcej</a>
			</div>
		</div>
	<!--************************[ Offer ]************************-->
		<div class="offer center alignCenter">
			<h2 class="headerTopElement">Oferta</h2>
			<ul>
				<li>
					<a href="#">
						<img src="images/offer/www.png" alt="" />
						<span>Tworzenie Stron Internetowych</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/offer/seo.png" alt="" />
						<span>Pozycjonowanie</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/offer/graphic.png" alt="" />
						<span>Identyfikacja wizualna</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/offer/social.png" alt="" />
						<span>Social Media</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/offer/hosting.png" alt="" />
						<span>Usługo Hostingowe</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/offer/pr.png" alt="" />
						<span>Public Relations</span>
					</a>
				</li>
			</ul>
		</div>
	<!--************************[ Form-Contact ]************************-->
		<div class="contactform center">
			<h2 class="headerTopElement alignCenter redHeader">Formularz kontaktowy</h2>			
			<form action="" method="POST" >
				<div class="left">
					<div class="text">
						<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
						<p>Integer mi quam, placerat in blandit ut, suscipit ac dui.</p>
					</div>
					<div class="row">
						<input type="text" name="username" placeholder="Imię, nazwisko *" />
					</div>
					<div class="row parentRow">
						<input type="number" class="left" name="phone" placeholder="Telefon *" />
						<input type="email" class="right" name="emailadres" placeholder="E-mail *" />
					</div> 
				</div>
				<div class="right">
					<textarea placeholder="Wiadomość *" name="contentText"></textarea>
					<div class="submitElement alignRight">
						<p class="info">( <span>*</span> ) - aenean accumsan molestie dolor</p>
						<button type="submit" name="subbutton">wyślij</button>	
					</div>
				</div>
			</form>
		</div>
	<!--************************[ About-Us ]************************-->
		<div class="aboutus">
			<div class="center">
				<div class="left">
					<h2 class="headerTopElement alignCenter whiteHeader">O nas</h2>
					<div class="image"></div>
				</div>
				<div class="right">
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
					<p>Integer mi quam, placerat in blandit ut, suscipit ac dui. Pellentesque sapien erat, porttitor nec massa a, lacinia vulputate dolor. Aenean accumsan molestie dolor, interdum sodales felis. Nulla vel ultricies ipsum, in mattis arcu. Donec in massa urna.</p>
					<p><strong>Proin ac pharetra arcu. </strong></p>
					<ul>
						<li>morbi facilisis varius diam in ultrices duis aliquam nibh</li>
						<li>velit, vel elementum leo commodo sed.</li>
						<li>praesent id purus risus. Sed auctor, dui id efficitur porttitor</li>
						<li>vitae viverra diam sed mauris orci,</li>
					</ul>
					<div class="link alignRight">
						<a href="#aboutus-link" class="alignCenter" onClick="Tmpl.setc()"; return false>czytaj więcej </a>
					</div>
				</div>
			</div>
		</div>
	<!--************************[ Testimonials ]************************-->
		<div class="testimonials center alignCenter">
			<h2 class="headerTopElement alignCenter violetHeader">Opinie</h2>
			<div class="owlContainer">
				<div class="container center">
					<p>Nulla commodo semper mauris, at imperdiet sem tincidunt sed. Vestibulum nisi augue, tempus et feugiat in, lobortis quis diam. Curabitur congue lorem sapien, ac ultricies libero iaculis non. Nulla nec leo auctor, efficitur augue vitae, cursus sem.Sed porttitor vehicula laoreet. Nulla orci erat, consectetur eget rhoncus sit amet, ornare in nisi.Suspendisse imperdiet volutpat quam, at venenatis nulla condimentum vel. Sed velit ex, feugiat quis orci.</p>
					<strong>Jan Kowalski - Moja firma</strong>
				</div>
				<div class="container center">
					<p>Nulla commodo semper mauris, at imperdiet sem tincidunt sed. Vestibulum nisi augue, tempus et feugiat in, lobortis quis diam. Curabitur congue lorem sapien, ac ultricies libero iaculis non. Nulla nec leo auctor, efficitur augue vitae, cursus sem.Sed porttitor vehicula laoreet. Nulla orci erat, consectetur eget rhoncus sit amet, ornare in nisi.Suspendisse imperdiet volutpat quam, at venenatis nulla condimentum vel. Sed velit ex, feugiat quis orci.</p>
					<strong>Jan Kowalski1 - Moja firma</strong>
				</div>
				<div class="container center">
					<p>Nulla commodo semper mauris, at imperdiet sem tincidunt sed. Vestibulum nisi augue, tempus et feugiat in, lobortis quis diam. Curabitur congue lorem sapien, ac ultricies libero iaculis non. Nulla nec leo auctor, efficitur augue vitae, cursus sem.Sed porttitor vehicula laoreet. Nulla orci erat, consectetur eget rhoncus sit amet, ornare in nisi.Suspendisse imperdiet volutpat quam, at venenatis nulla condimentum vel. Sed velit ex, feugiat quis orci.</p>
					<strong>Jan Kowalski2 - Moja firma</strong>
				</div>
				<div class="container center">
					<p>Nulla commodo semper mauris, at imperdiet sem tincidunt sed. Vestibulum nisi augue, tempus et feugiat in, lobortis quis diam. Curabitur congue lorem sapien, ac ultricies libero iaculis non. Nulla nec leo auctor, efficitur augue vitae, cursus sem.Sed porttitor vehicula laoreet. Nulla orci erat, consectetur eget rhoncus sit amet, ornare in nisi.Suspendisse imperdiet volutpat quam, at venenatis nulla condimentum vel. Sed velit ex, feugiat quis orci.</p>
					<strong>Jan Kowalski3 - Moja firma</strong>
				</div>
			</div>
		</div>		
	<!--************************[ Footer ]************************-->
		<div class="footer">
			<div class="center">
			<?php if(@$_COOKIE['ciacho'] != "czekolada" ) { ?>
				<div id="ciacho">
					<p><span>Strona zawiera ciasteczka</span></p>
					<a href="" onClick="Tmpl.setc(), Tmpl.cookies(); return false">Ok rozumiem</a>
				</div>
			<?php } ?>
			
				<p class="left"><strong id="logo">develobora.com </strong> - agencja interaktywna / 2016</p>
				<p class="right"><strong>Wszystkie prawa zastrzeżone</strong> (c)</p>
			</div>
		</div>

<!-- scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/Tmpl.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript">
	Tmpl.testimonials();
</script>

	</body>
</html>
