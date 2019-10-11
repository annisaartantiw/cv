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
					<h2 ><span>My Education</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 col-padded-right">
					<form action="#">
						<div class="form-group row">
							<div class="timeline-education">
                                <div class="container-timeline left1">
                                  <div class="content-timeline">
                                    <h2>Elementary School</h2>
                                    <p>SDN TASIKMADU 2  (2007-2013)</p>
                                  </div>
                                </div>
                                <div class="container-timeline right1">
                                  <div class="content-timeline">
                                    <h2>Junior High School</h2>
                                    <p>SMPN 4 MALANG    (2014-2017)</p>
                                  </div>
                                </div>
                                <div class="container-timeline left1">
                                    <div class="content-timeline">
                                      <h2>Vocational High School</h2>
                                      <p>SMKN 5 MALANG  (2007-2013)</p>
                                      <p>
                                        In this school I began to know "NGODING". Here I started to learn code in class 10 using various kinds of programming languages, starting from JAVA, C ++, PHP, and others. Then continue learning HTML and CSS.</p>
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

