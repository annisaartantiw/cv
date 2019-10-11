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
					<h2 ><span>My App Project</span></h2>
				</div>
            </div>
            
			<div  row>

				<div class="col-md-4">
						<a href="#"><img class="img-responsive" src="<?= base_url('assets/images/botavafix.png');?>" alt=""></a>
						<div class="blog-text">
							<h2 style="margin-left: 1.2cm" ><a href="#">Botava App</a></h2>
							<p><a href="#">Botava is a learning application about herbs and their benefits</a></p>
						</div> 
                </div>
                
				<div class="col-md-4">
						<a href="#"><img class="img-responsive" src="<?= base_url('assets/images/moneyfix.png');?>" alt=""></a>
						<div class="blog-text">
							<h2 style="margin-left: 1.6cm" ><a href="#">MoneyFix</a></h2>
							<p  ><a href="#">money fix is ​​an application to record expenses and income money</a></p>
						</div> 
                </div>
                
				<div style="margin-top: 2%" class="col-md-4">
						<a href="#"><img class="img-responsive" src="<?= base_url('assets/images/orchid.png');?>" alt=""></a>
						<div class="blog-text">
							<h2 style="margin-top:20%"><a href="#">Orchid</a></h2>
							<p  ><a href="#">orchid is an application for buying and selling online, especially flowers</a></p>
						</div> 
                </div>

            </div>
            
		</div>
	</div>

    <?php
	include("Partials/footer.php");
    include("Partials/js.php");
    include("Partials/modal.php");
    ?>

</body>