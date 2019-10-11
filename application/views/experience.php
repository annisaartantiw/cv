<?php
    include("Partials/head.php");
    include("Partials/navbar.php");
	include("Partials/sidebar.php");
?>

<style>
     /* The actual timeline (the vertical ruler) */
.timeline-education {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline-education::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container-timeline {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container-timeline::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left1 {
  left: 0;
}

/* Place the container to the right */
.right1 {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left1::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right1::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right1::after {
  left: -16px;
}

/* The actual content */
.content-timeline {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
/* Place the timelime to the left */
  .timeline-education::after {
    left: 31px;
  }

/* Full-width containers */
  .container-timeline {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

/* Make sure that all arrows are pointing leftwards */
  .container-timeline::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

/* Make sure all circles are at the same spot */
  .left1::after, .right1::after {
    left: 15px;
  }

/* Make all right containers behave like the left ones */
  .right1 {
    left: 0%;
  }
}
     </style>

<body>

<div id="fh5co-contact" class="fh5co-no-pd-top">
		<div class="container">
			<div class="row animate-box">
				<div style="margin-top: 2cm" class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2 ><span>My Experience</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 col-padded-right">
					<form action="#">
						<div class="form-group row">
							<div class="timeline-education">
                                <div class="container-timeline left1">
                                  <div class="content-timeline">
                                    <h2>Industrial Practice</h2>
                                    <p>Ezy Industries</p>
                                    <p>I have practiced industrial work in ezy industries for 6 months. There I worked on an Android-based project.</p>
                                  </div>
                                </div>
                                <div class="container-timeline right1">
                                  <div class="content-timeline">
                                    <h2>Program Learning</h2>
                                    <p>SMK CODING</p>
                                    <p>I once participated in a 5-week SMK coding program which was attended every Saturday and Sunday.</p>
                                  </div>
                                </div>
                                <div class="container-timeline left1">
                                    <div class="content-timeline">
                                      <h2>Industrial Practice</h2>
                                      <p>Ezy Campus</p>
                                      <p>I have participated in EZY CAMPUS activities that make android applications</p>
                                    </div>
                                  </div>
                                  <div class="container-timeline right1">
                                    <div class="content-timeline">
                                      <h2>Outside Activities</h2>
                                      <p>AWS Seminar</p>
                                      <p>  I once attended an AWS seminar at another school</p>
                                    </div>
                                  </div>
                              </div>
						</div>
					</form>
				</div>
				
				<aside id="sidebar">
					<div class="col-md-3">
						<div class="side animate-box">
							<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
								<h2><span>About Me</span></h2>
							</div>
							<div class="fh5co-staff">
								<img src="<?=base_url('assets/images/fotobiodata4.jpg');?>" alt="Free HTML5 Templates by FreeHTML5.co">
								<h3>Annisa Artanti Widyadhana</h3>
								<strong class="role">Web Developer</strong>
								<p>Welcome to my website. Let's get to know myself further to increase relations. Let's start our collaboration from here..</p>
								<ul class="fh5co-social-icons">
									<li><a href="<?=base_url('https://www.instagram.com/artaantii/');?>"><i class="icon-instagram"></i></a></li>
									<li><a href="<?=base_url('https://twitter.com/annisaartanti77');?>"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
									<li><a href="<?=base_url('https://github.com/annisaartantiw');?>"><i class="icon-github"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</aside>

			</div>
		</div>
	</div>

    <?php
	include("Partials/footer.php");
    include("Partials/js.php");
    include("Partials/modal.php");
    ?>

</body>