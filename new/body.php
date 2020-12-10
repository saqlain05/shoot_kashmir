     <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner1.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                         <h1>Great Experience To Create Films</h1>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner2.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                         <h1>Great Experience To Create Films</h1>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/banner3.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Great Experience To Create Films</h1>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
	  
	      <!-- Testimonial -->
      <div id="testimonial" class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>News and Events</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div id="testimonial_slider" class="carousel slide banner-bg" data-ride="carousel">
                     <center><div class="contact newsarea">
						<h3>Latest news</h3><br>
						<?php 
						include_once('k-conn.php');
						$query="SELECT news FROM news_data";
						$newsData=mysqli_query($conn,$query);
						while($news=mysqli_fetch_array($newsData)){?>
						
						
						<marquee behavior="scroll" direction="left"><?php echo $news['news'];?> </marquee>
						<br><hr>
						<?php } ?>
						</div></center>
                     </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>Contact Us</h3>
                     <form>
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="Name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Testimonial --> 
	  
      <!-- about  -->
      <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <span>Shoot Kashmir first and reputed line production company, based its registered office in the heart of Srinagar well known for it’s expertise and the quality of work delivered. </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="video-content text-center col-xs-12">
                                <iframe width="871" height="490" src="https://www.youtube.com/embed/HzEAFiXxbGs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><i class="fa fa-play"></i></a>
				  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end abouts -->
      <!-- our projects -->
	  <div class="service">
		<div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Projects </h2>
                  </div>
               </div>
			</div>
            <div class="row">
				<div class="col-md-4">
					<img  src="images/5.jpg" class="zoom img-fluid "  alt="">
				</div>
				<div class="col-md-4">
					<img  src="images/5.jpg" class="zoom img-fluid "  alt="">
				</div>
				<div class="col-md-4">
					<img  src="images/5.jpg" class="zoom img-fluid "  alt="">
				</div>
			</div>
			
         </div>
	  </div>
      <!-- end our projects -->
	  
	 <!-- film in kasmir -->
	  <div class="service">
		<div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Film In Kashmir </h2>
                  </div>
               </div>
			</div>
            <div class="row">
				<div class="col-md-4">
					 <iframe width="400" height="400" src="https://www.youtube.com/embed/HzEAFiXxbGs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><i class="fa fa-play"></i></a>
				 
				</div>
				<div class="col-md-4">
					 <iframe width="400" height="400" src="https://www.youtube.com/embed/HzEAFiXxbGs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><i class="fa fa-play"></i></a>
				 
				</div>
				<div class="col-md-4">
					 <iframe width="400" height="400" src="https://www.youtube.com/embed/HzEAFiXxbGs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><i class="fa fa-play"></i></a>
				 
				</div>
			</div>
			
         </div>
	  </div>
      <!-- end film in kasmir -->
	  
	  
      <!-- service --> 
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Services </h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of <br>using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container margin-r-l">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/image.jpg" class="fancybox" rel="ligthbox">
                        <img  src="images/image.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/image.jpg" class="fancybox" rel="ligthbox">Line Production</a>
                        </span>  
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/security.png" class="fancybox" rel="ligthbox">
                        <img  src="images/security.png" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/security.png" class="fancybox" rel="ligthbox">Security</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/3.png" class="fancybox" rel="ligthbox">
                        <img  src="images/3.png" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/3.png" class="fancybox" rel="ligthbox">Travel and Transportation</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/4.png" class="fancybox" rel="ligthbox">
                        <img  src="images/4.png" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/4.png" class="fancybox" rel="ligthbox">Catering</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="images/5.png" class="fancybox" rel="ligthbox">
                        <img  src="images/5.png" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/5.png" class="fancybox" rel="ligthbox">Locations Scoting</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <figure>
                        <a href="images/6.jpg" class="fancybox" rel="ligthbox">
                        <img src="images/6.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/6.jpg" class="fancybox" rel="ligthbox">Cast And Crew</a>
                        </span>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!-- Download -->
      <div id="download" class="download">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Latest Trailer  </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active"> 
							<div class="video-content text-center col-xs-12">
                                <iframe width="871" height="490" src="https://www.youtube.com/embed/HzEAFiXxbGs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><i class="fa fa-play"></i></a>
						    </div>
						</div>
                        <div class="carousel-item"> 
							<div class="video-content text-center col-xs-12">
                                <iframe width="871" height="490" src="https://youtu.be/3_F3kueVv4I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><i class="fa fa-play"></i></a>
						    </div>
						</div>
                        <div class="carousel-item"> 
							<div class="video-content text-center col-xs-12">
                                <iframe width="871" height="490" src="https://www.youtube.com/watch?v=3_F3kueVv4I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><i class="fa fa-play"></i></a>
						    </div>
						</div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a> <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Download -->
      <!-- our teams -->
	  <div class="service">
		<div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Teams </h2>
                  </div>
               </div>
			</div>
            <div class="row">
				<div class="col-md-4">
					<img  src="images/testimonial-img.png" class="zoom img-fluid "  alt="">
				</div>
				<div class="col-md-4">
					<img  src="images/Arshid shakir pic.jpg" class="zoom img-fluid "  alt="">
				</div>
				<div class="col-md-4">
					<img  src="images/shailas profi pik4.jpg" class="zoom img-fluid "  alt="">
				</div>
				<div class="col-md-4">
					<img  src="images/testimonial-img.png" class="zoom img-fluid "  alt="">
				</div>
				<div class="col-md-4">
					<img  src="images/Arshid shakir pic.jpg" class="zoom img-fluid "  alt="">
				</div>
				<div class="col-md-4">
					<img  src="images/shailas profi pik4.jpg" class="zoom img-fluid "  alt="">
				</div>
			</div>
			
         </div>
	  </div>
      <!-- end our teams -->
  