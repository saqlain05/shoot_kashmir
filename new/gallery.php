<?php

// require_once 'common/header.php';
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
						<h2>Gallery</h2>
						<ul class="page-title-link">
							<li><a href="#">Home</a></li>
							<li><a href="#">Galety</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- breadcrumb-area end -->
<section id="wrapper-content" class="wrapper-content"><div id="layers-widget-ftage-gallerys-6" class="gallery-area widget clearfix content-vertical-massive1   ">
        <div class="container clearfix">
            <div class="section-title title-divider clearfix medium text-right ">
                <h3 class="heading">
                    GALLERY  </h3>
                <div class="excerpt">
                    <p>It is a long established fact that a reader will be distracted readable</p>  </div>
            </div>
        </div>
        <!-- style filter  -->		
        <!-- Filter Nav Cat-->							
        <div class="container">
            <div class="gallery-menu">
                <ul id="filter" class="filter_menu filter_menu_right">
                    <li class="current_menu_item" data-filter="*">
                        All            </li>
                    <li class="filter" data-filter=".location">
                        Location              </li>
                    <li class="filter" data-filter=".production">
                        Production              </li>
                    <li class="filter" data-filter=".shooting">
                        Shooting              </li>
                    <li class="filter" data-filter=".studio">
                        Studio              </li>
                </ul>
            </div>
            <!-- gallery_menu End --> 				
        </div>								
        <!-- Filter post Query-->
        <div class="container">
            <div class="grid new">	
				  <?php
                    	include_once('k-conn.php');
						$query="SELECT imageName FROM gallery";
						$imageData=mysqli_query($conn,$query);
						while($image=mysqli_fetch_array($imageData)){
							$url="gallery_images/".$image['imageName'];
							?>		
					
                <div class="grid-item  gallery-hover cols column span-3  production " data-cols="4">
                    <!-- start copy -->	
                    <div class="ht-gallery-3 ht-gallery thumbnail-body">
                        <!-- single gallery item -->	
                        <div class="gallery-effect">
                            <div class="ht-gallery-thumb">
                                <img width="600" height="600" src="<?php echo $url;?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset= " ""sizes="(max-width: 600px) 100vw, 600px" />          	
                                <!-- gallery content  area -->
                                <div class="gallery-hover-effect">
                                    <div class="ht-gallery-content">
                                        <!-- gallery icon -->
                                        <a class="gallery-icon venobox" data-gall="mygallery" href="">
                                            <i class="icofont icofont-search-alt-1">
                                            </i>
                                        </a>												
                                        <!-- end gallery icon -->
                                    </div>
                                    <div class="ht-gallery-content-deltails">
                                    </div>
                                </div>
                                <!-- end gallery content  area -->
                            </div>
                        </div>
                        <!-- end single gallery item -->	
                    </div>
                    <!-- end copy -->
                </div>										
               <?php } ?>									
                
                										
               									
            </div>
            <!-- /row -->
        </div>
        <style id="layers_widget_ftage-gallerys_inline_css" type="text/css"> /* INLINE WIDGET CSS */
            #layers-widget-ftage-gallerys-6 { background-repeat: no-repeat;background-position: center;}
        </style><style type="text/css">	
            #layers-widget-ftage-gallerys-6 .excerpt p{
                color:#666;
            }
            #layers-widget-ftage-gallerys-6 .filter_menu li {
                color: #333333;
                background: #ffffff;
                border-radius: 0px;
                border: 0px solid #e2a750;
                font-size: 14px;
                padding: px px;
            }
            #layers-widget-ftage-gallerys-6 .filter_menu li.current_menu_item,
            #layers-widget-ftage-gallerys-6 .filter_menu li:hover
            {
                color:#e2a750;
                background:;
                border-color:;
            }
            #layers-widget-ftage-gallerys-6 .ht-gallery-thumb::before{
                background:#000;
                opacity:0;
            }
            #layers-widget-ftage-gallerys-6 .ht-gallery:hover .ht-gallery-thumb::before{
                opacity: 0.9;
            }
            #layers-widget-ftage-gallerys-6 .gallery-icon {
                border: 0px solid #ffffff;
                border-radius: 100%;
                color: #ffffff;
                box-shadow:0 1px 4px -1px #111;
                font-size:30px;
            }
            #layers-widget-ftage-gallerys-6 .gallery-icon:before {
                background:;
                border-radius: 100%;
            }
            #layers-widget-ftage-gallerys-6 .gallery-icon:hover{
                color:#e2a750;
                background:;
                border-color:;
            }
            #layers-widget-ftage-gallerys-6 .ht-gallery-content > h2,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content-deltails > h2,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content-deltails > h2 > a,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content > h2 a,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content2 > h2,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content2 > h2 a	
            {
                color: #fff;
                font-size: 14px;
            }
            #layers-widget-ftage-gallerys-6 .ht-gallery-content > h2:hover,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content-deltails > h2:hover a,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content-deltails > h2 > a:hover,				
            #layers-widget-ftage-gallerys-6 .ht-gallery-content > h2 a:hover,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content2 > h2:hover,
            #layers-widget-ftage-gallerys-6 .ht-gallery-content2 > h2 a:hover	
            {
                color: #000;
            }
            #layers-widget-ftage-gallerys-6 .category-name {
                color: #fff;
                font-size: 14px;
            }
            #layers-widget-ftage-gallerys-6 .ht-gallery-content > h2, .ht-gallery-content2 > h2, .category-name{
                text-align: center;
            }
            #layers-widget-ftage-gallerys-6 .ht-gallery-content > h2, .ht-gallery-content2 > h2, .ht-gallery-content-deltails > h2 {
                text-transform: uppercase;
            }
            #layers-widget-ftage-gallerys-6 .category-name {
                text-transform: capitalize;
            }
            #layers-widget-ftage-gallerys-6 .ht-gallery-3 .ht-gallery-content-deltails{
                left: 0px;
                bottom: 0px;
                right: 0px;
            }
            #layers-widget-ftage-gallerys-6 .ht-gallery-content2{
                background-color:#fffffff;
                border-color:#dcd9d9}
            #layers-widget-ftage-gallerys-6 .ht-gallery:hover .ht-gallery-content2{
                border-bottom-color:#e2a750}
            #layers-widget-ftage-gallerys-6 .ht-gallery-3 .ht-gallery-content-deltails::before{
                background-color:#fffffff;
                opacity:1;
            }
        </style>
    </div>
    
</section>
<?php

require_once 'common/newFooter.php';
?>