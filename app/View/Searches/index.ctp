<section id="howItWork">
	<a id="close"></a>
	<h2>How Grocery Works</h2>
	<p>Know more about your online grocery shopping and make easy shopping</p>
	<div class="clear"></div>
	<aside>
		<img alt="" src="<?php echo $siteUrl; ?>/frontend/images/store_search.png" class="hvr-pulse" />
		<span class="ico"></span>
		<h3>Store Search</h3>
		<p>Know more about your online shopping</p>
	</aside>
	<aside>
		<img alt="" src="<?php echo $siteUrl; ?>/frontend/images/place_order.png" class="hvr-pulse" />
		<span class="ico"></span>
		<h3>Place Order</h3>
		<p>Know more about your online shopping</p>
	</aside>
	<aside>
		<img alt="" src="<?php echo $siteUrl; ?>/frontend/images/schedule_delivery.png" class="hvr-pulse" />
		<span class="ico"></span>
		<h3>Schedule Delivery</h3>
		<p>Know more about your online shopping</p>
	</aside>
	<aside>
		<img alt="" src="<?php echo $siteUrl; ?>/frontend/images/oredr_delivery.png" class="hvr-pulse" />
		<span class="ico"></span>
		<h3>Get Order Delivered</h3>
		<p>Know more about your online shopping</p>
	</aside>
	<div class="clear"></div>
	<!--<div id="txtAni">
		<ul>
			<li>
				<img alt="" src="<?php echo $siteUrl; ?>/frontend/images/arr1.png"/>
				<p>Search here for your favourite local store</p>
			</li>
			<li>
				<img alt="" src="<?php echo $siteUrl; ?>/frontend/images/arr2.png"/>
				<p>Add the items to your cart</p>
			</li>
			<li>
				<img alt="" src="<?php echo $siteUrl; ?>/frontend/images/arr3.png"/>
				<p>Schedule the delivery</p>
			</li>
			<li>
				<img alt="" src="<?php echo $siteUrl; ?>/frontend/images/arr4.png"/>
				<p>Get it delivered to your steps</p>
			</li>
		</ul>
	</div>-->
	<div class="clear"></div>
				<!-- <a href="" id="tryBtn">Try Us Out</a> -->
</section>
<main>
	<section id="searchBar">
	<div class="col-md-4 col-md-offset-4 text-center search_parent">
	    <div class="chillcart_logo"><img src="<?php echo $siteUrl.'/siteicons/logo.png'; ?>" class="img-responsive"></div>
		<h3>Your Favorite Local Stores Online</h3>
		<p>Enter your address to order groceries</p> <?php 

		echo $this->Form->create('Search') ;
			if (!empty($cityList)) {

				echo $this->Form->input('city',
							array('type'=>'select',
							 		'options'=> array($cityList),
							 		'onchange' => 'locationList();',
							 		'id' => 'city',
							 		'empty' => __('Select City'),
							 		'div' => false,
							 		'label'=> false));
			} else {
				echo $this->Form->input('city',
							array('type'=>'select',
							 		'id' => 'city',
							 		'empty' =>  __('Select City'),
							 		'div' => false,
							 		'label'=> false));
			} 

			echo $this->Form->input('area',
						array('type'=>'select',
						 		'id' => 'location',
						 		'empty' => __('Select Area / Zipcode'),
						 		'div' => false,
						 		'label'=> false));

			echo $this->Form->button(__("Let's go to shop"),
                              array('onclick' => 'return locationStore();')); ?>

			<div id="searchError" class="form-error"></div><?php
		echo $this->Form->end(); ?>
    </div>
		<div class="clear"></div>
	</section>
</main>
<div id="video">
	<!--<p>Watch our video here</p>
	<div id="vidImg"></div>-->
	<a href="#" class="hvr-wobble-horizontal">
	<span>Watch our video here</span><img src="<?php echo $siteUrl.'/images/play_icon.png'; ?>" >
	</a>
</div>

<footer>
	<ul>
		<li><a href="">Home</a></li>
		<li><a href="<?php echo $siteUrl.'/aboutus'; ?>">About Us</a></li>
		<li><a href="">Blog</a></li>
		<li><a href="">Partner Portal</a></li>
		<li><a href="">Press</a></li>
		<li><a href="">Locations</a></li>
		<li><a href="<?php echo $siteUrl.'/termsconditions'; ?>">T&C </a></li>
		<li><a href="">FAQ </a></li>
	</ul>
	<div class="clear"></div>
	<a href="" id="facebook" class="hvr-wobble-vertical"></a>
	<a href="" id="twitter" class="hvr-wobble-vertical"></a>
	<a href="" id="gplus" class="hvr-wobble-vertical"></a>
	<a href="" id="youtube" class="hvr-wobble-vertical"></a>
</footer>
<div class="footer_logo text-center">
  <ul id="flexiselDemo4">
      <li><img src="<?php echo $siteUrl.'/images/logoes/mbg_img.png'; ?>" class="img-responsive" ></li>
      <li><img src="<?php echo $siteUrl.'/images/logoes/whole_food_img.png'; ?>" class="img-responsive" ></li>
      <li><img src="<?php echo $siteUrl.'/images/logoes/smart_final_img.png'; ?>" class="img-responsive" ></li>
      <li><img src="<?php echo $siteUrl.'/images/logoes/costco_img.png'; ?>" class="img-responsive" ></li>
      <li><img src="<?php echo $siteUrl.'/images/logoes/birite_img.png'; ?>" class="img-responsive" ></li>
      <li><img src="<?php echo $siteUrl.'/images/logoes/rainbow_img.png'; ?>" class="img-responsive" ></li>
      <li><img src="<?php echo $siteUrl.'/images/logoes/andronicos.png'; ?>" class="img-responsive" ></li>
  </ul>
  <div class="clear"></div>
</div>





<script type="text/javascript">
function locationStore () {
	var city 		= $.trim($("#city").val());
	if(city == ''){
		$("#searchError").html("<?php echo __('Please select city'); ?>");
		$("#city").focus();
		return false;
	}
}

</script>
