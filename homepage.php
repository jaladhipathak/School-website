<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./font-awesome.min.css">
<link rel="stylesheet" href="./css">
  <link href="https://fonts.googleapis.com/css?family=Shrikhand&amp;subset=gujarati" rel="stylesheet">
  <link rel="stylesheet" href="./normalize.min.css">

  <link rel="stylesheet prefetch" href="nav.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <style>
body {
  font-family: "Open Sans", Helvetica, sans-serif;
}
.navbar {
  opacity: 0.8;
  margin-bottom: 0;
  background-color: #fff;
  -webkit-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
.navbar-container {
	position: relative;
}
.navbar .navbar-nav li a {
  font-size: 14px;
  text-transform: uppercase;
  color: #2E1C05;
  -webkit-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
.navbar-brand {
  font-size: 25px;
  -webkit-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
.navbar-scroll {
  opacity: 1;
}
#top-social-menu {
  display: none;
}
@media (min-width: 768px) {
  .navbar {
    height: 120px;
  }
  .navbar-nav>li>a {
    padding: 0;
    margin-top: 25px;
    margin-left: 25px;
    line-height: 70px;
  }
  .navbar-brand {
    font-size: 28px;
    padding: 0;
    height: 120px;
    line-height: 120px;
  }
  #top-social-menu {
    display: initial;
  }
  /* Navbar when scrolled */
  .navbar-scroll {
    height: 92px;
  }
  .navbar-scroll .navbar-brand {
    height: 70px;
    line-height: 70px;
  }
  .navbar-scroll .navbar-nav>li>a {
    opacity: 1;
    padding: 0;
    margin-top: 20px;
  }
}
/* # Hover Link Effect
================================ */
@media (min-width: 768px) {
  .navbar-nav>li>a::after {
    position: absolute;
    top: 80%;
    left: 0;
    width: 100%;
    height: 1px;
    background: #2E1C05;
    content: '';
    opacity: 0;
    -webkit-transition: height 0.3s, opacity 0.3s, -webkit-transform 0.3s;
    transition: height 0.3s, opacity 0.3s, -webkit-transform 0.3s;
    transition: height 0.3s, opacity 0.3s, transform 0.3s;
    transition: height 0.3s, opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
  }
  .navbar-nav>li>a:hover::after,
  .navbar-nav>li>a:focus::after {
    height: 2px;
    opacity: 1;
    -webkit-transform: translateY(0px);
            transform: translateY(0px);
  }
}
/* # Section Full Width Image
================================ */
.full-width-img {
  background: url('IMG_2229-2-01.jpeg') no-repeat center center;
  background-size: cover;
  text-align: center;
  padding-top: 100px;
  height: 450px;
  color: #fff;
}
.box {
	background: rgba(0, 0, 0, 0.4);
  border: 3px solid #000;
  color: #fff;
  text-align: center;
  margin-top: 10px;
  padding: 10px 20px;
}
.subheading-text {
  list-style: none;
  font-size: 35px;
  line-height: 50px;
}
@media (max-device-width:767px){
	html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
	.small{
		padding-left: 27%;
	}
			  
}
		  @media(max-device-width:1199px min-device-width:769px){
			  .logo1199{
				  margin-left: -50%;
			  }
			  .small{
					padding-left: 27%;
				}
			  .navbar-brand{
				  position: fixed;
				  margin-right: 20%;
				  
			  }
			  .subheading-text.li {
					font-size: 50px;
					line-height: 70px;
					font-family: 'Shrikhand', cursive;
				  }
			  .navbar-nav{
				  margin-right: 20px;
			  }
		  }
@media (min-width: 768px) {
  .full-width-img {
    padding-top: 110px;
    height: 1000px;
  }
  .subheading-text {
    font-size: 62px;
    line-height: 70px;
    font-family: 'Shrikhand', cursive;
  }
  .new{
    font-family: 'Shrikhand', cursive;
    line-height: 70px;
    font-size: 110px;
  }
  .box {
    margin-top: 100px;
    padding: 80px 20px;
  }
	.small{
		padding-left: 3%;
	}
}
/* # Section Black, White
================================ */
.section-black,
.section-white {
	padding: 50px 0;
	color: #fff;
	line-height: 1.7;
}
.section-black h3,
.section-white h3 {
	margin-bottom: 60px;
}
.section-black p,
.section-white p {
  margin-bottom: 60px;
}
.section-black {
	background: -webkit-linear-gradient(#363437, #121112);
	background: linear-gradient(#363437, #121112);
}
.section-white {
	background: -webkit-linear-gradient(#ffffff, #f3f3f3);
	background: linear-gradient(#ffffff, #f3f3f3);
  color: #0e0d0e;
}
.fa {
  padding: 20px;
  font-size: 30px;
  text-align: center;
  text-decoration: none;
  margin: 1px 50px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
	text-decoration: none;
}

.fa-facebook {
 	margin-left: 300px;
 	backface-visibility: 0;
  color: white;
}

.fa-twitter {
  backface-visibility: 0;
  color: white;
}

.fa-google {
  backface-visibility: 0;
  color: white;
}
.fa-instagram {
  backface-visibility: 0;
  color: white;
}
    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no">

  <header>
		<nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
			<div class="container navbar-container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="logo.png" class="img-responsive logo1199" style="margin-top: 10px"></a>
				<img src="logo3.png" class="img-responsive small" style="width: 587px;height: 55px; margin-left: 17px; margin-top: 30px;">
        </div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Home</a></li>
						<li><a href="abt_us.html">About Us</a></li>
						<li><a href="faculty.htm">Faculty</a></li>
						<li><a href="con_us.html">Contact Us</a></li>
            <li><a href="student activity corner.html">Gallery</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<section class="full-width-img">
		<div class="container">
			<div class="box">
				<ul class="subheading-text">
				<div class="new" style="float: left;">&nbsp;&nbsp;“&nbsp;</div><li style="float: left;">માનવીય મૂલ્યોનું જતન <br>&nbsp;&nbsp;એજ શિક્ષણ&nbsp;</li><br><div class="new" style="float: left;">”</div>
          <li><br></li>
          <li></li>
				</ul>
				</div>
			</div>
		</section>

<section class="section-black">
			<div class="container">
				<h3>News</h3>

				<p>
					
					<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "daxinamurti";

						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "SELECT date, news FROM newstable order by date desc";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo $row["date"]. " ". $row["news"]. "<br>";
							}
						} else {
							echo "0 results";
						}

						mysqli_close($conn);
					?>
					
				</p>
			</div>
		</section>
		<section class="section-white">
			<div class="container">
				<h3>Vision and Mission</h3>

				<p>We strive to provide our students with natural and peaceful environment and make them aware of their potential and enhance their skills which help them in achieving their goals and contribute to the betterment of the society.</p>

				<p> The School prepares students to understand, contribute to, and succeed in a rapidly changing society, thus making the world a better and more just place. We will ensure that our students develop both the skills a sound education provides and the competencies essential for success and leadership in the emerging creative economy. We will also lead in generating practical and theoretical knowledge that enables people to better understand our world and improve conditions for local and global communities.</p>

				<p> Our vision aligns with shifts in the global economy, society, and environment, which animate our mission and our values:

Creativity, innovation, and a desire to challenge the status quo, both in what and how we teach and in the intellectual ambitions of the school itself.
Social engagement, orienting students' academic experiences to help them become critically engaged citizens dedicated to solving problems and contributing to the public good
The New School must embrace these principles and innovate to address shifts in the global economy, society, and environment that require individuals to grapple with complex problems, pursue more fluid and flexible career pathways, and collaboratively create change.</p>
			</div>
		</section>

		<section class="section-black">
			<div class="container">
				<h3>Principal's Message</h3>

				<p> In the words of Dalai Lama, "When educating the minds of our youth, we must not forget to educate their hearts”. As the instructional leader of Shri Daxinamurti Gijubhai Vinay Mandir, we focus on discovering, developing and drawing out the hidden talents and the magic lying dormant inside all of its students. From academics to co-curricular activities, perseverance and a never-say-die spirit are entrenched in the heart of every student not only making them good students but brilliant human beings. In today’s dynamic world, a 360 degree development and grooming is of supreme importance and through our campus we are creating an environment for future leaders, entrepreneurs and professional who possess skills and aptitudes in an array of functional disciplines.</p>

				<p>I am very happy with the progress the School has made by imbibing in its students value based education synergized with modern teaching-learning methods to produce a generation of well informed and emotionally sound generation. I am positive that in times to come we will continue this journey with elevated enthusiasm and persistently provide a platform of holistic learning to the young generation of learners.</p>

				<p>We spare no efforts to make the educational experience of our students meaningful and relevant to the socio-economic needs of the times & to equip our youth to face the challenges of the future for leading the society from the front, while ensuring that at the same time they are enjoying their experience of learning.

My very competent team of teachers strive to focus on each and every child, monitor and mentor them, appreciate their achievement and encourage them to overcome their shortcomings. I urge all the teachers to create appropriate, meaningful and participative learning situations, inculcating life skills in the impressionable children and appreciating their smallest efforts with all generosity and broadness of vision.</p>
			</div>
		</section>

		<section class="section-white">
			<div class="container">
				<h3>Why Daxinamurti?</h3>

				<p>Shri Daxinamurti Gijubhai Vinay Mandir is a part of the 106 years old Daxinamurti institute. The world famous tutors Shri Nanabhai Bhatt, Shri Haribhai Trivedi and Shri Gijubhai Badheka laid the foundation stones of the institutes and we strive to abide by their motto.</p>

				<p>All-round development of students and qualified faculties help in building a brighter future for them. Our motto is to serve the nation by enlightening the minds of the youth.</p>

				<p>Classes equipped with Smart Boards, CCTV cameras and A.C. ensure proper and comfotable environment optimal for students.</p>
			</div>
		</section>
		<section class="section-black">
			<div class="container">
				<a href="https://www.facebook.com/dakshinamurtibvn/" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-instagram"></a>
				<h5 style="text-align: center;margin-top: 20px;margin-bottom: 10px;">Designed and Created by: Dhvanit Trivedi and Jaladhi Pathak.</h5>
			</div>
		</section>
    <script src="./stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js.download"></script>

  <script src="./jquery.min.js.download"></script>
<script src="./bootstrap.min.js.download"></script>

    <script>
    $(window).scroll(function () {
	var sc = $(window).scrollTop()
	if (sc > 150) {
		$("#main-navbar").addClass("navbar-scroll")
	} 
	else {
		$("#main-navbar").removeClass("navbar-scroll")
	}
});
  //# sourceURL=pen.js
  </script>

  
  



 </body></html>