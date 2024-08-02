<!doctype html>

<html lang="en">





<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="">
	 <meta name="description" content="Rotaract Club of Spectrum">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- SITE TITLE -->
	<!-- SITE TITLE -->
	<title>Rotaract Club of Spectrum</title>

	<!-- FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" href="images/current/logo.png" type="image/x-icon">
	<link rel="icon" href="images/current/logo.png" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/current/logo.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/current/logo.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/current/logo.png">
	<link rel="apple-touch-icon" href="images/current/logo.png">
	<link rel="icon" href="images/current/logo.png" type="image/x-icon">

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="css/menu.css" rel="stylesheet">
	<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/datetimepicker.min.css" rel="stylesheet">
	<link href="css/lunar.css" rel="stylesheet">

	<!-- ON SCROLL ANIMATION -->
	<link href="css/animate.css" rel="stylesheet">

	<!-- TEMPLATE CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- RESPONSIVE CSS -->
	<link href="css/responsive.css" rel="stylesheet">
	
	
	
	<style>
		.buttoninstagram {
			background: white;
			position: relative;
			padding: 8px 15px;
			display: flex;
			align-items: center;
			font-size: 17px;
			font-weight: 600;
			text-decoration: none;
			cursor: pointer;
			border: 1px solid #cb0b6b;
			/* border: none; */
			border-radius: 5px;
			outline: none;
			overflow: hidden;
			/* color: white !important; */
			/* box-shadow: 0px 3px 10px rgba(0,0,0,.25); */

		}

		.buttoninstagram span {
			margin: 10px;
		}





		.buttonFacebook {
			background: white;
			position: relative;
			padding: 8px 15px;
			display: flex;
			align-items: center;
			font-size: 17px;
			font-weight: 600;
			text-decoration: none;
			cursor: pointer;
			border: 1px solid #cb0b6b;
			border-radius: 5px;
			outline: none;
			overflow: hidden;
			/* color: white; */
			transition: color 0.3s 0.1s ease-out;
			/* text-align: center; */
		}

		.buttonFacebook svg {
			fill: white;
			height: 25px;
			width: 25px;
		}

		.buttonFacebook span {
			margin: 10px;
		}


		.buttoninstagram:active,
        .buttonFacebook:active {
    background-color: #cb0b6b; /* Replace with your meron color */
    color: white; /* Text color on click */
}
		
.buttoninstagram:hover,
.buttonFacebook:hover {
    background-color: #cb0b6b; /* Replace with your meron color */
    color: white; /* Text color on hover */
}
		


		.cta {
			border: none;
			background: none;
			cursor: pointer;
		}

		.cta span {
			padding-bottom: 7px;
			letter-spacing: 4px;
			font-size: 14px;
			padding-right: 15px;
			text-transform: uppercase;
		}

		.cta svg {
			transform: translateX(-8px);
			transition: all 0.3s ease;
		}

		.cta:hover svg {
			transform: translateX(0);
		}

		.cta:active svg {
			transform: scale(0.9);
		}

		.hover-underline-animation {
			position: relative;
			color: black;
			padding-bottom: 20px;
		}

		.hover-underline-animation:after {
			content: "";
			position: absolute;
			width: 100%;
			transform: scaleX(0);
			height: 2px;
			bottom: 0;
			left: 0;
			background-color: #000000;
			transform-origin: bottom right;
			transition: transform 0.25s ease-out;
		}

		.cta:hover .hover-underline-animation:after {
			transform: scaleX(1);
			transform-origin: bottom left;
		}


		@media (max-width: 990px) {
			.buttoninstagram {
			
				margin-top: 15px;
			
			}

			.buttonFacebook {
			
				margin-top: 15px;
				/* text-align: center; */
			}
		}
	</style>

</head>



<body>




	<!-- PRELOADER SPINNER
		============================================= -->
	<div id="loading" class="loading-black">
		<div id="loading-center"><span class="loader"></span></div>
	</div>




	<!-- STYLE SWITCHER
		============================================= -->
	<div id="stlChanger">
		<div class="blockChanger bgChanger">
			<a href="#" class="chBut ico-35">
				<p class="switch">
					<span class="drk-mode flaticon-moon"></span>
					<span class="lgt-mode flaticon-sum"></span>
				</p>
			</a>
		</div>
	</div> <!-- END SWITCHER -->




	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page">




		<!--@import footer php-->
		<?php include "navbar.php" ?>




		<!-- INNER PAGE HERO
			============================================= -->
		<section id="about-us" class="inner-page-hero division">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="page-hero-txt color--white">
							<h2>About Us</h2>
							<!-- <p>Luxury salon where you will feel unique and special</p> -->
						</div>
					</div>
				</div>
			</div> <!-- End container -->
		</section> <!-- END INNER PAGE HERO -->








		<!-- TEXT CONTENT
			============================================= -->
		<section class="pt-8 ct-01 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- TEXT BLOCK -->
					<div class="col-lg-6 order-last order-lg-2">
						<div class="txt-block left-column wow fadeInRight">



							<!-- Title -->
							<!-- <h2 class="h2-md">About Us</h2> -->

							<!-- Text -->
							<p class="mb-0">
								St. George's Cathedral, established in 1816, stands as a remarkable symbol of God's love for His people and a testament to Chennai city's rich history. Designed by Colonel J.L. Caldwell, the senior engineer at the Presidency, with assistance from Captain De Havilland, the Cathedral is located in the heart of the city. In addition to its architectural brilliance, St. George’s Cathedral played a significant role in church history—the inauguration of the Church of South India occurred here on September 27, 1947. As the mother church for the whole of CSI and the Diocese of Madras, it continues to be a beacon of hope and joy.
							</p>


						</div>
					</div> <!-- END TEXT BLOCK -->


					<!-- IMAGE BLOCK -->
					<div class="col-lg-6 order-first order-lg-2">
						<div class="img-block right-column wow fadeInLeft">
							<img class="img-fluid" src="images/newPhotos/About us.png" alt="content-image">
						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->


		<div style="margin-top:40px;"></div>


	




		<!-- TEXT CONTENT
			============================================= -->
		<section class="pt-8 ct-05 content-section">
			<div class="container smoke--shape">
				<div class="row d-flex align-items-center">


					<!-- TEXT BLOCK -->
					<div class="col-lg-6 order-last order-lg-2">
						<div class="txt-block left-column wow fadeInRight">

							<h2 class="h2-md">History</h2>
							<p>
								The Cathedral’s fascinating history narrates the unwavering journey of believers who joined forces to construct God’s house, fuelled by faith and perseverance.
							</p>
							<p>
								It all began sometime after 1763 when the European officials and merchants began to build houses outside the Fort and there was a need for the church in the neighbourhood where the people lived. A request was raised by Rev Richard Hall Kerr as early as 1807 or perhaps earlier to the Governor to build a church on the Choultry Plain. The money was raised through a lottery fund, contributed both by the Europeans and the locals some of whom were non-Christians. To ensure that the non-Christians also benefitted from the fund, a portion of it was allotted to the upkeep of the roads.
							</p>

							<p>
								The church was designed by Colonel J.L. Caldwell, the company’s senior engineer at the Presidency and Captain De Havilland, his junior carried out the design. The Cathedral was one of the six Churches to be built in India (before 1833) without Government assistance. The Church of England established the Anglican Dioceses of India, Burma and Ceylon in the year 1813 and appointed the first Bishop at Calcutta. When the church was completed in 1815, the Bishop of Calcutta, Rt. Rev. Thomas Fanshaw Middleton consecrated the building to the service of God according to the use of the Church of England on January 8, 1816. St. George’s Church, Choultry Plain, became the Cathedral of the Diocese of Madras in 1835 when Bishop Daniel Corrie was consecrated as the first Bishop of Madras. 
							</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


					<!-- IMAGE BLOCK -->
					<div class="col-lg-6 order-first order-lg-2">
						<div class="ct-05-img right-column wow fadeInLeft">
							<img class="img-fluid" src="images/newPhotos/HistoryNew.png" alt="content-image">
						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->



		<!-- ABOUT-1
			============================================= -->
		<section class="pt-8 about-1 about-section">
			<div class="container">
				<div class="row justify-content-center">


					<!-- TEXT BLOCK -->
					<div class="col-lg-12 col-xl-9" style="width: 100%;">
						<div class="txt-block text-center">

							<!-- Section ID -->
							<!-- <span class="section-id">Indulge Yourself</span>	 -->

							<!-- Title -->
							<h2 class="h2-title">Interesting Facts about the Cathedral</h2>
							<span>Sources: Cotton, Julian James, ICS. List of Inscriptions on Tombs & Monuments in MadrasVol I, 1945, and Frank, Rev. Penny. The Church in Madras, Vol II, 1912.</span>
							<!-- Text -->


						</div>
					</div> <!-- END TEXT BLOCK -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END ABOUT-1 -->





		<!-- 			
					<h2 class="h2-title" style="text-align: center; margin-top:20px; margin-bottom: 20px;"></h2>

					<p></p>
					 -->



		<!-- TEXT CONTENT
			============================================= -->
		<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/bannerImage/INT1.jpg" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<p>
							<p>
							While the architecture is similar to the St Martin-in-the-Fields, London, the spire is 139 feet high and is almost identical in design to that of St. Giles’ in the Fields, London. 
							</p>

							</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->






		<!-- TEXT CONTENT
			============================================= -->
		<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">



					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<div class="about-8-txt left-column">

								<p>
									The turret clock was a present from the Court of Directors to the trustees of St. George’s Cathedral in the year 1828.
								</p>

							</div>
						</div> <!-- END TEXT BLOCK -->


					</div>

					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/bannerImage/Turret clock_new.jpg" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<!-- End row -->
				</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->








		<!-- TEXT CONTENT
			============================================= -->
		<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/newPhotos/Organ.JPG" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<p>
								The organ was obtained from Hills & Sons, London in 1857. An eminent organist, Dr. Garret was appointed as the organist who later became a Professor of Music at Cambridge.
							</p>

							<p>
							Originally, a gallery was built at the west end for the choir, and the organ was placed in a chamber under the spire. In 1887, Mr. Mayne brought the organ from the west to the east end. 
							</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->






		<!-- TEXT CONTENT
			============================================= -->
		<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">



					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<div class="about-8-txt left-column">
								<p>
									In 1871, the congregation gifted a peal of six bells. When Rev. Thomas Foulkes, A Chaplain, heard that the bells put a great strain on the stability of the spire, he presented the Trustees with a chiming apparatus.
								</p>


							</div>
						</div> <!-- END TEXT BLOCK -->


					</div>

					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/newPhotos/Bells.jpg" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<!-- End row -->
				</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->










		<!-- TEXT CONTENT
			============================================= -->
		<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/newPhotos/False roof.jpg" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<p>
								In 1884, the false roof showed signs of decay, and it was decided to renew it with teak wood. The wood was decorated with a pattern in papier-mâché and the whole roof was painted white.
							</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->






		<!-- TEXT CONTENT
			============================================= -->
		<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">



					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<div class="about-8-txt left-column">
								<p>
									The Litany stool, the bishop’s throne, and the different clergy stalls were made according to the taste and skill of Mr. W.S. Whiteside of the Civil Service, whose hobby was wood carving.
								</p>

							</div>
						</div> <!-- END TEXT BLOCK -->


					</div>

					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/newPhotos/Interesting-litany stool (1).png" alt="content-image">
						</div>

					</div>


					<!-- TEXT BLOCK -->
					<!-- End row -->
				</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->



		
		
		
		
		
		
		
		
		
		

		
		
		
		



		<!-- TEXT CONTENT
			============================================= -->
			<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/newPhotos/Marble statues (1).jpg" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<p>
							St. George’s Cathedral serves not only as a place of worship but also as a historical repository, captured in marble and metal. The numerous marble statues and mural tablets inside the cathedral chronicle the contributions of bishops, archbishops, scholars, statesmen, missionaries, and military leaders – individuals who significantly impacted the lives of people in India.
							</p>
							
							

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->



		
		
		
		<!-- TEXT CONTENT
			============================================= -->
			<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">



					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<div class="about-8-txt left-column">
							<p>
							St. George’s Cathedral boasts a lush green landscape, a serene oasis amidst the bustling cityscape. This verdant sanctuary offers a tranquil retreat for contemplation and reflection. The harmonious blend of nature’s artistry with the Cathedral’s majestic architecture creates an atmosphere of divine grace, making the garden not just a visual delight but a spiritual haven as well.
							</p>
							</div>
						</div> <!-- END TEXT BLOCK -->


					</div>

					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/newPhotos/Garden (1).jpg" alt="content-image">
						</div>

					</div>


					<!-- TEXT BLOCK -->
					<!-- End row -->
				</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->



		
		
		
		
		<!-- TEXT CONTENT
			============================================= -->
			<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/newPhotos/Gateway chapel bell (1).jpg" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
						<p>
								The Gateway to the cemetery was constructed in 1882. The unique feature of the Gateway is that it houses a bell of diameter 3’7” and height 4’5”. The tone of the bell is so deep in its resonance that in the old days, whenever it was tolled at a funeral, everyone in Madras, could hear it.
								</p>
							

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->





		<!-- TEXT CONTENT
			============================================= -->
		<section class="shape--02  py-7 ct-02 content-section division">
			<div class="container">
				<div class="row d-flex align-items-center">



					<div class="col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<div class="about-8-txt left-column">
								
								<p>The Cathedral has a large cemetery located in its south-eastern quadrant. The first interment was Elizabeth de Havilland (1818), spouse of Major de Havilland who oversaw the Cathedral’s construction. The cemetery serves as a hallowed ground for many esteemed individuals who have dedicated their lives to the service of both the church and the nation.</p>

							</div>
						</div> <!-- END TEXT BLOCK -->


					</div>

					<!-- IMAGE BLOCK -->
					<div class="col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/newPhotos/Cementry Edited.png" alt="content-image">
						</div>

					</div>


					<!-- TEXT BLOCK -->
					<!-- End row -->
				</div> <!-- End container -->
		</section> <!-- END TEXT CONTENT -->



		
		


	


<p class="h2-title" style="width:82%; margin:20px auto;"><strong>Here are some links on more interesting facts about the Cathedral</strong></p>



<div style="margin-top:40px;">

</div>


<div class="container text-center ">


	<div class="row ">
		<div class="col-lg-3">


			<button class="cta color--black">
				<span class="hover-underline-animation"> See More </span>
				<svg class="color--black" id="arrow-horizontal" xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 46 16">
					<path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(30)"></path>
				</svg>
			</button>




		</div>

		<div class="col-lg-2">



			<button class="buttonFacebook">
				<a target="_blank" href="https://www.thisday.app/story/the-steepled-grandeur-of-chennais-st-georges-cathedral-29118" style="color:#cb0b6b;">
			
					<span>Link 1</span>
				</a>
			</button>






		</div>


		<div class="col-lg-2">


			<button class="buttoninstagram">
				<a style="color: #cb0b6b;" target="_blank" href="https://www.thehindu.com/features/metroplus/society/a-church-chronicle-st-georges-cathedral-turns-200-this-year/article7632942.ece">
				
					<span>Link 2</span></a>
			</button>






		</div>
	</div> <!-- End row -->


</div>



<div style="margin-bottom:40px;">

</div>












		<h2 class="h2-title" style="text-align: center; margin-top:20px; margin-bottom: 20px;">SGC Trust and Pastorate Committee</h2>

		<P style="margin:20px auto; width:82%; ">
			The <strong>St. George’s Cathedral Trust</strong>, a charitable organization, diligently maintains the beautiful cathedral campus. Their care extends to the Cathedral cemetery—a final resting place for church members. Additionally, the Trust operates ‘Nimmadhi Illam,’ a Senior Citizen’s Home in Royapettah. This peaceful haven provides rest and comfort for elderly individuals. The Trust also supports church members in need and extends assistance to other village churches when required.
		</P>

	






		<p class="h2-title" style="width:82%; margin:20px auto;"><strong>The St. George’s Cathedral Trustees are</strong></p>




		<!-- WORKING HOURS
			============================================= -->
		<section class="py-8 ct-table content-section division">
			<div class="container">
				<div class="row d-flex align-items-start">


					<!-- TEXT -->
					<div class="col-lg-6">
						<div class="left-column txt-table wow fadeInRight">



							<table class="table">
								<tbody>
									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Rev. T. Devaputhiran, Chairman & Clergy Trustee</td>

									</tr>
									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mrs. Leonora James (Secretary)</td>

									</tr>
									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span>Mr. John Mathew (Treasurer)</td>

									</tr>

								</tbody>
							</table>


						</div>
					</div>


					<!-- TABLE -->
					<div class="col-lg-6">
						<div class="txt-table right-column wow fadeInLeft">
							<table class="table">
								<tbody>
									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span>Mr. P. Koilpitchai (Trustee)</td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span>Mrs. Stella Alfred (Trustee)</td>

									</tr>
								</tbody>
							</table>
						</div>
					</div> <!-- END TABLE -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END WORKING HOURS -->


		<!-- Text -->
		<p style="margin:20px auto; width:82%; ">
			The <strong>Pastorate Committee</strong> consists of thirteen members elected by the congregation, following the electoral process outlined in the Constitution of The Church of South India. These members serve in an honorary capacity and are primarily responsible for handling administrative tasks related to the Church.
		</p>


		
		

		<!-- WORKING HOURS
			============================================= -->
		<section class="py-8 ct-table content-section division">
			<div class="container">
				<div class="row d-flex align-items-start">


					<!-- TEXT -->
					<div class="col-lg-6">
						<div class="left-column txt-table wow fadeInRight">

							<table class="table">
								<tbody>
									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Rev. T. Devaputhiran, Chairman & Presbyter-in-charge </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Rev. S. Dhavaseeli, Assistant Pastor </td>

									</tr>
									
									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Rev. S. Augustin Premraj, Assistant Pastor </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. Arun David Ambrose - Hon. Secretary </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Dr. Mrs. Mercy Rajasekar - Hon. Treasurer </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. Andrew Apollo - Hon. Asst. Secretary </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Dr. Ms. Amritha Samson </td>

									</tr>

								</tbody>
							</table>


						</div>
					</div>


					<!-- TABLE -->
					<div class="col-lg-6">
						<div class="txt-table right-column wow fadeInLeft">
							<table class="table">
								<tbody>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. Joseph Reginald Isaac </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. Sam Samuel </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. J.J.R. Edwin</td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mrs. Christina Aristotle </td>

									</tr>


									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. John Christopher</td>

									</tr>



									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Dr. Mrs. Mary Thomas</td>

									</tr>


								</tbody>
							</table>
						</div>
					</div> <!-- END TABLE -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END WORKING HOURS -->



		<p style="margin:15px auto; width:82%; font-size: 20px;">
			The <strong>Lay Eucharistic Ministers are</strong> lay people licensed by the bishop to assist the Presbyter-in-chargein administering the elements of Holy Communion, the consecrated bread and wine.
		</p>



		<!-- WORKING HOURS
			============================================= -->
		<section class="py-8 ct-table content-section division">
			<div class="container">
				<div class="row d-flex align-items-start">


					<!-- TEXT -->
					<div class="col-lg-6">
						<div class="left-column txt-table wow fadeInRight">

							<table class="table">
								<tbody>
									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. Dhanraj Stephens </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Dr. Mrs. Mary Thomas </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mrs. Percis Christopher </td>

									</tr>


									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mrs. SarithaSunderraj </td>

									</tr>







								</tbody>
							</table>

						</div>
					</div>


					<!-- TABLE -->
					<div class="col-lg-6">
						<div class="txt-table right-column wow fadeInLeft">
							<table class="table">
								<tbody>



									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. Paul Jayakar </td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Dr. Mrs. Rennet Samson</td>

									</tr>

									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. Shelly Aristotle </td>

									</tr>





								</tbody>
							</table>
						</div>
					</div> <!-- END TABLE -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END WORKING HOURS -->




		<p style="margin:15px auto; width:82%;">
			<strong>Cathedral Sexton</strong>
		</p>





		<section class="py-8 ct-table content-section division">
			<div class="container">
				<div class="row d-flex align-items-start">


					<!-- TEXT -->
					<div class="col-lg-6">
						<div class="left-column txt-table wow fadeInRight">

							<table class="table">
								<tbody>


									<tr>
										<td><span style="position: relative;top: 3px;" class="flaticon-right-arrow"></span> Mr. Samuel Aaron</td>

									</tr>

								</tbody>
							</table>

						</div>
					</div>


					<!-- TABLE -->
					<!-- END TABLE -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END WORKING HOURS -->






		<!-- class="last-tr" -->





		<!--@import footer php-->
		<?php include "footer.php" ?>






	</div> <!-- END PAGE CONTENT -->




	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<script src="js/jquery-3.7.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/datetimepicker.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/request-form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/lunar.js"></script>
	<script src="js/wow.js"></script>

	<!-- Custom Script -->
	<script src="js/custom.js"></script>



	<script>
		$(function() {
			$(".switch").click(function() {
				$("body").toggleClass("theme--dark");
			});
		});
	</script>



</body>




</html>