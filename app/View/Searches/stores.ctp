<div class="container">
	<div class="searchshopContent">
	<?php if ($orderSuccess == 'success') {?>
		<div class="modal fade" id="thanksmsg"> 
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header menuCartHeader clearfix">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
							<h2> <?php echo __('Thank You'); ?></h2>
					</div>
					<div class="modal-body menuInner clearfix">
						<div class="alert alert-success">
							<h1 class="no-border no-margin no-padding"><?php 
								echo __('Your Order Placed Successfully', true); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?> 

		<div class="store_title"><h1> <?php echo __('Select store to start shopping...!', true); ?> </h1></div>
		
		<ul class="products search_stores"> <?php
			foreach ($storeList as $key => $value) { ?>

				<li class="product">
				    <div class="product__inner">
				        <figure class="product__image" >
				            <div class="product_tl"><h2 class="product__detail-title"><a href="javascript:void(0);"><?php echo $value['Store']['store_name']; ?></a></h2></div>
				        	<a href="<?php echo $siteUrl.'/shop/'.$value['Store']['seo_url'].'/'.$value['Store']['id']; ?>">
				            <!-- <span class="discount_image"><span>17% OFF</span></span> -->
                                                    
                                                    
				            <!--LIVE CODE--->
							<!--	<img alt="<?php echo $value['Store']['store_name']; ?>" src="https://s3.amazonaws.com/<?php echo $siteBucket.'/storelogos/'.$value['Store']['store_logo']; ?>" onerror="this.onerror=null;this.src='<?php echo $siteUrl."/frontend/images/no_store.jpg"; ?>'"> -->
                                            
                                            <!--LOCAL CODE-->
                                 <?php $img_url =  "https://s3-eu-west-1.amazonaws.com/demo.chillcart.images/".$siteBucket."storelogos/".$value['Store']['store_logo']; ?>                   
                                                    <img alt="<?php echo $value['Store']['store_name']; ?>" src="<?php echo $img_url; ?>" onerror="this.onerror=null;this.src='<?php echo $siteUrl."/frontend/images/no_store.jpg"; ?>'">
                            <div class="store_bott">
                               <div class="product__detail-category">
                               				               		<a rel="tag" href="javascript:void(0);"> <?php

                               				               		if ($value['Store']['minimum_order'] != 0) {
                               				               			echo __('Min Order').' - '. $this->Number->currency($value['Store']['minimum_order'], $siteCurrency);
                               				               		} ?> </a> <?php

                               									$ratio = $value['Store']['rating'] * 20;?>
                               									<span class="review_rating_outer">
                               										<span class="review_rating_grey"></span>
                               										<span class="review_rating_green" style="width:<?php echo $ratio;?>%;"></span>
                               									</span>
                               				               	</div>
                            <div class="clearfix"></div>
                            </div>
				            <figcaption>
				                <div class="product-addon">
				                    <a class="yith-wcqv-button" href="<?php echo $siteUrl.'/shop/'.$value['Store']['seo_url'].'/'.$value['Store']['id']; ?>"><span></span><i class="fa fa-check"></i></a>
				                </div>
				            </figcaption>
				          </a>
				          <div class="clearfix"></div>
				        </figure>
				        <div class="shopping_bott text-left">
                        	<h6>Organic Speciality store</h6>
                        	<p>Deliveries available 11am-10pm, 7 Days</p>
                        </div>

				    </div>
			   	</li>
				 <?php
			} ?>
		</ul>


		<div class="page-header page-header-with-icon text-center st_bottom">
			<h6><?php echo __('Or', true); ?></h6>
			<h2>
				<a class="btn btn-default btn-md bold hvr-float-shadow" onclick="changeLocation();">
					<i class="fa fa-map-marker"></i> <?php echo __('Change Location', true); ?></a>
			</h2>

		</div>
		
		<h2 class="text-center">
			
		</h2>
		
	</div>
</div>

<div class="footer_2">
   <div class="lf_footer">
     <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Partner Portal</a></li>
        <li><a href="#">Press</a></li>
        <li><a href="#">Locations T&C</a></li>
        <li><a href="#">FAQ</a></li>
     </ul>
     <div class="clearfix"></div>
   </div>
   <div class="rt_footer">
     <ul>
       <li><a href="#"></a></li>
       <li><a href="#" class="twitter_i"></a></li>
       <li><a href="#" class="google_i"></a></li>
       <li><a href="#" class="youtube_i"></a></li>
     </ul>
   </div>
   <div class="clearfix"></div>
</div>