<?php

require_once 'common/navBar.php';
?>
<style>
    .breadcrumb-area { background-image: url( 'assets/wp-content/uploads/2017/10/3dd.png' );} 
    .breadcrumb-area:before { background: #000000;} 
    .breadcrumb-area:before { opacity: 0.6;} 
    .breadcrumb-area { padding-top: 200px;} 
    .breadcrumb-area { padding-bottom: 110px;} 
    .breadcrumb-padding.pages-p { text-align: center;} 
    .bread-crumbs li, .bread-crumbs li a, .bread-crumbs a { color: #ffffff;} 
    .bread-crumbs li span.current { color: #e2a750;} 
    .bread-crumbs li a:hover { color: #e2a750;} 
    .bread-crumbs li, .bread-crumbs li, .bread-crumbs li a { font-size: 24px;line-height: 29px;} 
    .bread-crumbs li { text-transform: uppercase;} 
</style>
<!-- breadcrumb-area start -->

<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Contact Us</h2>
						<ul class="page-title-link">
							<li><a href="#">Home</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- breadcrumb-area end -->


<div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get in touch</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">Select Service</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="12">Installation Service</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">What is max price?</label>
                                    <select name="select_price" id="select_price" class="selectpicker form-control" data-style="btn-white">
                                        <option value="$100 - $2000">$100 - $2000</option>
                                        <option value="$2000 - $4000">$2000 - $4000</option>
                                        <option value="$4000 - $10000">$4000 - $10000</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-offset-1 col-sm-10 col-md-10 col-sm-offset-1 pd-add" id="saq_div">
					<div class="address-item" id="saq_item">
						<div class="address-icon">
							<i class="icon icon-location2"></i>
						</div>
						<h3>Address</h3>
						<p>Baran Pathar, Haftchinar, Hotel New Sunshine, stadium Road,
							Iqbal Park, Srinagar - 190009 , Kashmir, India</p>
					</div>
					<div class="address-item" id="saq_item">
						<div class="address-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<h3>Email Us</h3>
						<p>irshad.bashir007@gmail.com
							 </p>
					</div>
					<div class="address-item"  id="saq_item">
						<div class="address-icon">
							<i class="icon icon-headphones"></i>
						</div>
						<h3>Call Us</h3>
						<p>+91 9419018941
							<br> www.shootkashmir.com  </p>
					</div>
				</div>
			</div><!-- end row -->
			
        </div><!-- end container -->
    </div><!-- end section -->

<!-- End footer top area -->
<?php

require_once 'common/newFooter.php';
?>

<style>
    #saq_item{
        height:25rem;
        width:25rem
    }
    #saq_div{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-wrap:wrap;
        gap:.5rem
    }
</style>