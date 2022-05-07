<?php

define ("EXP",6000000); 

setlocale (LC_CTYPE, 'es_ES');

ini_set ("display_errors",false);

ini_set ("memory_limit","-1");



include_once 'lib/mysqlclass.php';

include_once 'lib/funciones.php';



(isset($_GET['s'])) ? $getsalir_id=$_GET['s'] :$getsalir_id='';



if ($getsalir_id==1){

	session_start();

	session_destroy();

	$sesioncerrada  = "<span style='color: red'>Cerrada la sesion correctamente</span>";

}





$conexion = new ConexionBd();



$arrresultado = $conexion->doSelect("

	banner_id, banner_nombre, banner_texto1, banner_texto2, banner_texto3, banner_img, banner_fechareg, banner_activo, banner_eliminado,

	banner_orden

	","banner						

		",

		"banner_eliminado = '0' and tipobanner_id = '1'", null, "banner_orden asc");



$cont = 0;

$n=0;

//added 2808 

$bannerhtml = "";

$bannerlista = "";

foreach($arrresultado as $i=>$valor){



	$banner_id = utf8_encode($valor["banner_id"]);

	$banner_nombre = utf8_encode($valor["banner_nombre"]);

	$banner_texto1 = utf8_encode($valor["banner_texto1"]);

	$banner_texto2 = utf8_encode($valor["banner_texto2"]);

	$banner_texto3 = utf8_encode($valor["banner_texto3"]);

	$banner_img = utf8_encode($valor["banner_img"]);

	$banner_fechareg = utf8_encode($valor["banner_fechareg"]);

	$banner_activo = utf8_encode($valor["banner_activo"]);

	$banner_orden = utf8_encode($valor["banner_orden"]);



	$banner0 ="";

	$banner1 ="";

	$banner2 ="";

	$banner3 ="";



	if ($n=="0"){

		$colortextobanner = " style = 'color: #fff' ";

	}



	if ($banner_nombre!=""){

		$banner0 ="

				<div class='cap-title slide2 wow bounceInDown' data-wow-duration='.9s' data-wow-delay='.5s'>

					<h3><span $colortextobanner>$banner_nombre</span></h3>

				</div>

		";

	}



	if ($banner_texto1!=""){

		$banner1 ="

				<div class='cap-title wow bounceInRight' data-wow-duration='3s' data-wow-delay='0s'>

					<h2><span class='no-p-laft' $colortextobanner>$banner_texto1</span></h2>

				</div>

		";

	}



	if ($banner_texto2!=""){

		$banner2 ="

				<div class='cap-title wow bounceInRight' data-wow-duration='3s' data-wow-delay='0s'>

					<h2><span class='no-p-laft' $colortextobanner>$banner_texto2</span></h2>

				</div>

		";

	}



	if ($banner_texto3!=""){

		$banner3 ="

				<div class='cap-title wow bounceInRight' data-wow-duration='3s' data-wow-delay='0s'>

					<h2><span class='no-p-laft' $colortextobanner>$banner_texto3</span></h2>

				</div>

		";

	}



	if ($cont=="0"){

		$align ="text_left";	

		$cont = 1;

	}else{

		$align ="text_right";	

		$cont = 0;

	}



	$bannerhtml .="

			<div id='htmlcaption$banner_id' class='nivo-html-caption slider-caption-1 home2' style='max-height: 200px;'>

				<div class='slider-progress'></div>								

				<div class='slide1-text $align'  style='max-height: 200px'>

					<div class='middle-text'>

						

					</div>	

				</div>						

			</div>

	";



	$bannerlista .="

		<img src='arch/$banner_img' alt='main slider' title='#htmlcaption$banner_id' style='max-height: 440px'/>

	";



	$n = $n +1;



}







?>

<!DOCTYPE html>

<html class="no-js" lang="es">

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>GRUNISAC | Productos Destacados | Computadoras Portatiles , Computadoras Personales, Impresoras  Peru</title>



		<meta name="title" content="computadoras portatiles en peru,computadoras personales en peru,impresoras multifuncionales en peru, impresoras peru, equipos de computo en peru,placas madre en peru,laptops peru,impresoras laser peru,ploter de gran formato peru,tarjetas de video en peru,laptop gaming,impresoras matriciales,computadoras de marca,impresoras ,multifuncionales peru,monitores y televisores peru,proyectores epson peru,escaner hp peru,servidores y redes,tablets lenovo,acesorios de computo,disco duro ,portatiles toshiba,portatiles msi,accesorios de servidoresJuliaca, Puno, Peru">



		<meta name="Abstract" content="computadoras portatiles en peru,computadoras personales en peru,impresoras multifuncionales en peru,impresoras peru,  equipos de computo en peru,placas madre en peru,laptops peru,impresoras laser peru,ploter de gran formato peru,tarjetas de video en peru,laptop gaming,impresoras matriciales,computadoras de marca,impresoras ,multifuncionales peru,monitores y televisores peru,proyectores epson peru,escaner hp peru,servidores y redes,tablets lenovo,acesorios de computo,disco duro ,portatiles toshiba,portatiles msi,accesorios de servidoresJuliaca, Puno, Peru">



		<meta name="DC.title" content="computadoras portatiles en peru,computadoras personales en peru,impresoras multifuncionales en peru, impresoras peru,   equipos de computo en peru,placas madre en peru,laptops peru,impresoras laser peru,ploter de gran formato peru,tarjetas de video en peru,laptop gaming,impresoras matriciales,computadoras de marca,impresoras ,multifuncionales peru,monitores y televisores peru,proyectores epson peru,escaner hp peru,servidores y redes,tablets lenovo,acesorios de computo,disco duro ,portatiles toshiba,portatiles msi,accesorios de servidoresJuliaca, Puno, Peru">



		<meta name="Description" content="GRUNISAC - GRUPO DE NEGOCIOS INTERNACIONLES S.A.C. es una empresa dedicada a la venta de equipos requeridos en el área de TI, prestación de servicios en soporte y asesoría para la adquisición de nuevas tecnologías o mejoramiento de las existentes, cubriendo eventos en el área de informática, que afecte los procesos y las funciones normales de la empresa. Asi GRUNISAC comercializa: computadoras portatiles en peru, computadoras personales en peru, impresoras peru, grunisac.com">



		<meta name="keywords" content="computadoras portatiles en peru,computadoras personales en peru,impresoras multifuncionales en peru, impresoras peru,   equipos de computo en peru,placas madre en peru,laptops peru,impresoras laser peru,ploter de gran formato peru,tarjetas de video en peru,laptop gaming,impresoras matriciales,computadoras de marca,impresoras ,multifuncionales peru,monitores y televisores peru,proyectores epson peru,escaner hp peru,servidores y redes,tablets lenovo,acesorios de computo,disco duro ,portatiles toshiba,portatiles msi,accesorios de servidoresJuliaca, Puno, Peru">



        <meta name="viewport" content="width=device-width, initial-scale=1">



        <link  href="img/logosolo.png" rel="icon">

		

 		<!-- google font  -->

		<link  href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>



		<!-- Bootstrap CSS

		============================================ -->      

        <link  rel="stylesheet" href="css/bootstrap.min.css">

        

		<!-- owl.carousel CSS

		============================================ -->      

        <link  rel="stylesheet" href="css/owl.carousel.css">

        

		<!-- owl.theme CSS

		============================================ -->      

        <link  rel="stylesheet" href="css/owl.theme.css">

           	

		<!-- owl.transitions CSS

		============================================ -->      

        <link  rel="stylesheet" href="css/owl.transitions.css">

        

		<!-- font-awesome.min CSS

		============================================ -->      

        <link  rel="stylesheet" href="css/font-awesome.min.css">

        

 		<!-- animate CSS

		============================================ -->         

        <link  rel="stylesheet" href="css/animate.css">

 		<!-- meanmenu CSS

		============================================ --> 		

        <link  rel="stylesheet" href="css/meanmenu.min.css">		

 		<!-- nivo-slider css -->

		<link  rel="stylesheet" href="css/nivo-slider.css">       

 		<!-- normalize CSS

		============================================ -->        

        <link  rel="stylesheet" href="css/normalize.css">

 		<!-- fancyBox 

		============================================ -->         

        <link  rel="stylesheet" href="css/jquery.fancybox.css">         

        <!-- main CSS

		============================================ -->          

        <link  rel="stylesheet" href="css/main.css">

        

        <!-- style CSS

		============================================ -->          

        <link  rel="stylesheet" href="style.css?v=2">

        

        <!-- responsive CSS

		============================================ -->          

        <link  rel="stylesheet" href="css/responsive.css">

        

        

        <link  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet" />

        <link  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet" />



        <!---- Carrousel Marcas  

        ========================================== ---->

        <link  rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

        <link  rel="stylesheet" type="text/css" href="amazonmenu/amazonmenu.css">

        <link  rel="stylesheet" type="text/css" href="css/carrousel.css">



     

        <link  rel="stylesheet" type="text/css" href="css/mediaqueries.css">

<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-KQXF4HF');</script>

<!-- End Google Tag Manager -->

    </head>

    <body>

	<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQXF4HF"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->

    <!--Start header  area -->  

	<?php include_once "header.php"; ?>



	<section class="main-slider-area">

			<div class="row">

				<div class="col-sm-12">

					<div class="slider">

						<div id="mainSlider" class="nivoSlider slider-image">

							<?php echo $bannerlista; ?>

						</div>

						

						<?php echo $bannerhtml; ?>

						

						

					</div>

				</div>

			</div>

	</section>



	

	<?php include_once "include_beneficios.php"; ?>										

			





	<div class="shop-area shop_mg">

		<div class="container">

			

			<div class="row">



				<div class="col-lg-3 col-md-3 col-sm-3 mobile-hidden">

					

					<?php include_once "include_sidebar.php"; ?>



				</div>

				

				<!-- shop-left-sidebar start -->

				<!-- shop-content start -->

				<div class="col-lg-9 col-md-9 col-sm-12">

					<!-- start toolbar area -->

					

					<!--end shop toolbar -->

					<div class="clear"></div>

					

					

					<div class="toolbar fix" style="margin-top: 0px">

						<div class="pagee">



							<div class="row">

								<div class="col-md-3" style="padding-right: 0px; text-align: center;">

									<a href="#">

										<p class="block_subtitle" style="margin-bottom: 0px; background: #767676; font-size: 16px; padding-left: 0px">Recién llegados</p>	

									</a>

								</div>

								

							</div>



							<div class="row">

								<div class="gred_view">			



                                    <div id="owl-example3" class="owl-carousel" style="padding-left: 8px;">

										<?php 												

												include("include_productosclasif1.php");												

											?>

									</div>









														

								</div>

							</div>

										

						</div>

					</div>

					

					<div class="toolbar fix" style="margin-top: 25px">

						<div class="pagee">



							<div class="row">

								<div class="col-md-3" style="padding-right: 0px; text-align: center;">

									<a href="#">

										<p class="block_subtitle" style="margin-bottom: 0px; background: #767676; font-size: 16px; padding-left: 0px">Más vendidos</p>	

									</a>

								</div>

								

							</div>



							<div class="row">

								<div class="gred_view">			



                                    <div id="owl-example4" class="owl-carousel" style="padding-left: 8px;">

										<?php 												

												include("include_productosclasif2.php");												

											?>

									</div>









														

								</div>

							</div>

										

						</div>

					</div>

					

					<div class="toolbar fix" style="margin-top: 25px">

						<div class="pagee">



							<div class="row">

								<div class="col-md-3" style="padding-right: 0px; text-align: center;">

									<a href="#">

										<p class="block_subtitle" style="margin-bottom: 0px; background: #767676; font-size: 16px; padding-left: 0px">Más visitados</p>	

									</a>

								</div>

								

							</div>



							<div class="row">

								<div class="gred_view">			



                                    <div id="owl-example5" class="owl-carousel" style="padding-left: 8px;">

										<?php 												

												include("include_productosclasif3.php");												

											?>

									</div>









														

								</div>

							</div>

														<?php include_once "include_banner1.php"; ?>



										

						</div>

					</div>



					<div class="toolbar fix" style="margin-top: 25px">

						<div class="pagee">



							<div class="row">

								<div class="col-md-3" style="padding-right: 0px; text-align: center;">

									<a href="#">

										<p class="block_subtitle" style="margin-bottom: 0px; background: #767676; font-size: 16px; padding-left: 0px">Productos Destacados</p>	

									</a>

								</div>

								

							</div>



							<div class="row">

								<div class="gred_view">			



                                    <div id="owl-example" class="owl-carousel" style="padding-left: 8px;">

									<?php 												

										include("include_productosclasif4.php");												

									?>

									</div>









														

								</div>

							</div>

										

						</div>

						

					</div>





					



					<?php include_once "include_banner2.php"; ?>







					<div class="toolbar fix" style="margin-top: 25px">

						<div class="pagee">



							<div class="row">

								<div class="col-md-3" style="padding-right: 0px; text-align: center;">

									<a href="#">

										<p class="block_subtitle" style="margin-bottom: 0px; background: #767676; font-size: 16px; padding-left: 0px;">Productos en Tránsito</p>	

									</a>

								</div>

								

							</div>



							<div class="row">

								<div class="gred_view">			



                                    <div id="owl-example2" class="owl-carousel" style="padding-left: 8px;">

									<?php include "include_productosclasif5.php"; ?>

									</div>









														

								</div>

							</div>

										

						</div>

						

					</div>



					<div class="toolbar fix" style="margin-top: 25px">

						<div class="pagee">



							<div class="row">

								<div class="col-md-12" style="padding-right: 0px; text-align: center;">

									<a href="#">

										<p class="block_subtitle" style="margin-bottom: 0px; background: #767676; font-size: 16px; padding-left: 0px">Llevando estos productos tienes descuentos</p>	

									</a>

								</div>

								

							</div>



							<div class="row">

								<div class="gred_view">			



									<?php include "include_productosclasif6.php"; ?>

                                        



								</div>

								

							</div>

<div class="modal fade" id="empModal" role="dialog">

    <div class="modal-dialog">

 

     <!-- Modal content-->

     <div class="modal-content">

      <div class="modal-header">

        <h4 class="modal-title">Productos de esta promoción</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>

      <div class="col-md-12">

            <div class="modal-body">

            </div>

      </div>

      <div class="modal-footer">

            

      	<div class='col-md-12' style='text-align: center;'>

				<button class='button btn-cart' data-dismiss="modal"><span style='background: #000'>

											Cerrar ventana

										</span></button>

				

			</div>

	    </div>



     </div>

    </div>

     



						</div>

						

					</div>

					

					<?php include_once "include_banner3.php"; ?>

					

				</div>				

				<!-- end shop-content start -->

			</div>	



		</div>	

	</div>



	<?php include_once "include_marcas.php"; ?>



	<?php include_once "include_informes.php"; ?>





	<?php include_once "include_formaspago.php"; ?>



	

	<!-- end static middle area -->



	<?php include_once "footer.php"; ?>	

	    <!-- End end footer  -->

        <!-- JS -->      

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>



        <script  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

        <script  src="js/vendor/modernizr-2.8.3.min.js"></script>



        <!---- Dependencias para el carrousel  

        ========================================== ---->

        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

        <script  src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

 		<!-- jquery-1.11.3.min js

		============================================ -->         



        <link  rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

        <script  src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

        <!---- CarrouselMarcas ------------>

	    <script  src="js/carrousel.js"></script>



		<!-- fancybox js

		============================================ -->		

		<script  src="js/jquery.fancybox.pack.js"></script> 	              

 		<!-- bootstrap js

		============================================ -->         

        <script src="js/bootstrap.min.js"></script>      

   		<!-- owl.carousel.min js

		============================================ -->       

        <script  src="js/owl.carousel.min.js"></script>

   		<!-- scrollup js

		============================================ --> 		

        <script  src="js/jquery.scrollup.min.js"></script>       			

   		<!-- countdown js

		============================================ -->         

        <script  src="js/jquery.countdown.min.js"></script>		

		<!-- plugins js

		============================================ -->         

        <script  src="js/plugins.js"></script>

        <!-- price_slider js -->

        <script  src="js/price_slider.js"></script>

		<!-- meanmenu js

		============================================ -->  		

        <script  src="js/jquery.meanmenu.min.js"></script> 	

        <!-- counterup js

		============================================ -->  		

        <script  src="js/jquery.counterup.min.js"></script>

		<script  src="js/waypoints.min.js"></script>

		<!-- nivoslider js -->

		<script  src="js/jquery.nivo.slider.pack.js"></script>        



	    </script>        



   		<!-- wow js

		============================================ -->       

        <script  src="js/wow.js"></script>

		<script>

			new WOW().init();

			// Este es el método que vamos a llamar

            // cada vez que se detecte una intersección

            function onScrollEvent(entries, observer) {

                entries.forEach(function(entry) {

                    if (entry.isIntersecting) {

                        var attributes = entry.target.attributes;

                        var src = attributes['data-src'].textContent;

                        entry.target.src = src;

                        entry.target.classList.add('visible');

                    }

                });

            }



            // Utilizamos como objetivos todos los

            // elementos que tengan la clase lazyLoad,

            // que vimos en el HTML de ejemplo.

            var targets = document.querySelectorAll('.lazyLoad');



            // Instanciamos un nuevo observador.

            var observer = new IntersectionObserver(onScrollEvent);



            // Y se lo aplicamos a cada una de las

            // imágenes.

            targets.forEach(function(entry) {

                observer.observe(entry);

            });

		</script>

		<script  src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver"></script>

   		<!-- main js

		============================================ -->		

        <script  src="js/main.js"></script>		



        <script  src="js/func.js"></script>	





		<script  src="amazonmenu/amazonmenu.js">



		/* =====================================

		 ** Amazon Side Bar Menu- by JavaScript Kit (www.javascriptkit.com)

		 ** Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code

		===================================== */



		</script>



        <script>

$(document).ready(function() {

$("#owl-example").owlCarousel({

navigation: true, // Show next and Anterior buttons

slideSpeed: 300,

margin: 10,

paginationSpeed: 400,

autoplay: false,

items: 4,

center: true,

itemsDesktop : [1199,3],

itemsDesktopSmall : [979,3],

itemsTablet: 1,

itemsMobile: 1,

loop: true,

nav: true,

      navigationText : ['<span class="fa-stack"><a class="btn prev"><strong style="color: #FFF;"><</strong></a></span>','<span class="fa-stack"><a class="btn next"><strong style="color: #FFF;">></strong></a></span>'],

responsive: {

600: {

items: 1,

center: true

}

}

    

});



$("#owl-example2").owlCarousel({

navigation: true, // Show next and Anterior buttons

slideSpeed: 300,

margin: 10,

paginationSpeed: 400,

autoplay: false,

items: 4,

center: true,

itemsDesktop : [1199,3],

itemsDesktopSmall : [979,3],

itemsTablet: 1,

itemsMobile: 1,

loop: true,

nav: true,

      navigationText : ['<span class="fa-stack"><a class="btn prev"><strong style="color: #FFF;"><</strong></a></span>','<span class="fa-stack"><a class="btn next"><strong style="color: #FFF;">></strong></a></span>'],

responsive: {

600: {

items: 1,

center: true

}

}

});



$("#owl-example3").owlCarousel({

navigation: true, // Show next and Anterior buttons

slideSpeed: 300,

margin: 10,

paginationSpeed: 400,

autoplay: false,

items: 4,

center: true,

itemsDesktop : [1199,3],

itemsDesktopSmall : [979,3],

itemsTablet: 1,

itemsMobile: 1,

loop: true,

nav: true,

      navigationText : ['<span class="fa-stack"><a class="btn prev"><strong style="color: #FFF;"><</strong></a></span>','<span class="fa-stack"><a class="btn next"><strong style="color: #FFF;">></strong></a></span>'],

responsive: {

600: {

items: 1,

center: true

}

}

    

});



$("#owl-example5").owlCarousel({

navigation: true, // Show next and Anterior buttons

slideSpeed: 300,

margin: 10,

paginationSpeed: 400,

autoplay: false,

items: 4,

center: true,

itemsDesktop : [1199,3],

itemsDesktopSmall : [979,3],

itemsTablet: 1,

itemsMobile: 1,

loop: true,

nav: true,

      navigationText : ['<span class="fa-stack"><a class="btn prev"><strong style="color: #FFF;"><</strong></a></span>','<span class="fa-stack"><a class="btn next"><strong style="color: #FFF;">></strong></a></span>'],

responsive: {

600: {

items: 1,

center: true

}

}

    

});



$("#owl-example4").owlCarousel({

navigation: true, // Show next and Anterior buttons

slideSpeed: 300,

margin: 10,

paginationSpeed: 400,

autoplay: false,

items: 4,

center: true,

itemsDesktop : [1199,3],

itemsDesktopSmall : [979,3],

itemsTablet: 1,

itemsMobile: 1,

loop: true,

nav: true,

      navigationText : ['<span class="fa-stack"><a class="btn prev"><strong style="color: #FFF;"><</strong></a></span>','<span class="fa-stack"><a class="btn next"><strong style="color: #FFF;">></strong></a></span>'],

responsive: {

600: {

items: 1,

center: true

}

}

    

});



});



$('.modalinfo').click(function(){

   

   var userid = $(this).data('id');



   // AJAX request

   $.ajax({

    url: 'ajaxfile.php',

    type: 'post',

    data: {userid: userid},

    success: function(response){ 

      // Add response in Modal body

      $('.modal-body').html(response);



      // Display Modal

      $('#empModal').modal('show'); 

    }

  });

 });

 

</script>

		<script>



		jQuery(function(){

			amazonmenu.init({

				menuid: 'mysidebarmenu'

			})

		})



		</script>	

<script data-ad-client="ca-pub-2361501062998210" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>



		<script  src="amazonmenu/amazonmenu.js">



		/* =====================================

		 ** Amazon Side Bar Menu- by JavaScript Kit (www.javascriptkit.com)

		 ** Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code

		===================================== */



		</script>





		<script>



		jQuery(function(){

			amazonmenu.init({

				menuid: 'mysidebarmenu'

			})

		})



		</script>

<script data-ad-client="ca-pub-2361501062998210" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	

    </body>

</html>

