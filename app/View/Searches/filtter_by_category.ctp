<?php
$main = $subCat = 0;
foreach ($productList as $key => $value) {

    $nextValue = $key+1;
    if ($value['MainCategory']['id'] != $main) {
        $main = $value['MainCategory']['id']; ?>
        <div class="products-category" id="<?php echo $value['MainCategory']['category_name']; ?>">
        <header class="products-header">
            <h4 class="category-name">
                <span> <?php echo $value['MainCategory']['category_name']; ?></span>
            </h4>
            <!-- <a class="more-product-button" href="#">
                <span>More in Fresh Produce</span>
            </a> -->

            <!-- <h5 class="sub_category-name">
							<span><?php echo $value['MainCategory']['category_name']; ?></span>
						</h5> -->
        </header>
        <!-- <ul class="products"> --> <?php
    }



if ($value['SubCategory']['id'] != $subCat) {
    $subCat = $value['SubCategory']['id']; ?>

    <!-- <div class="products-category" id="<?php echo $value['SubCategory']['category_name']; ?>"> -->

    <h5 id="<?php echo $value['SubCategory']['category_name']; ?>" class="sub_category-name">
        <span><?php echo $value['SubCategory']['category_name']; ?></span>
        <div class="more_parent"><a href="#">More In Tea anf Coffee</a></div>
    </h5>

    <ul class="products products_parent"> <?php
}
//LIVE
   // $imageSrc = 'https://s3.amazonaws.com/'.$siteBucket.'/stores/products/home/'.$value['ProductImage'][0]['image_alias'];
    
  //LOCAL  
    $imageSrc = "https://s3-eu-west-1.amazonaws.com/demo.chillcart.images".$siteBucket.'/stores/products/home/'.$value['ProductImage'][0]['image_alias'];
    ?>
    <li class="product searchresulttoshow as_products">
        <div class="product__inner">
            <figure class="product__image" onclick="productDetails(<?php echo $value['Product']['id']; ?>);">
                <!-- <span class="onsale">Sale!</span> -->
                <img src="<?php echo $imageSrc; ?>" onerror="this.onerror=null;this.src='<?php echo $siteUrl."/images/no-imge.jpg"; ?>'" alt="<?php echo $value['Product']['product_name']; ?>" title="<?php echo $value['Product']['product_name']; ?>">
                <!--figcaption>
                    <div class="product-addon">
                        <a href="javascript:void(0);" class="yith-wcqv-button"><span></span><i class="fa fa-plus"></i></a>
                    </div>
                </figcaption-->
            </figure>
            <div class="product__detail">
                <div class="top-section">
                    <h2 class="product__detail-title"><a href="javascript:void(0);"><?php echo $value['Product']['product_name']; ?></a></h2>
                    <div class="product__detail-category">
                        <a href="javascript:void(0);" rel="tag">
						
						<?php 
					/*	
						$product_name = $value['ProductDetail'][0]['sub_name']; 
						
						$quantity = explode(" ",$product_name);
						$get_key =array_search ('Grams', $quantity);
						
						$quantity_value = $quantity[$get_key-1];
						
						if ($value['ProductDetail'][0]['compare_price'] != 0) {
							echo '<del><span class="amount">'.html_entity_decode($this->Number->currency($value['ProductDetail'][0]['orginal_price'], $siteCurrency)).'</span></del>'." ".html_entity_decode($this->Number->currency($value['ProductDetail'][0]['compare_price'], $siteCurrency))." / ". $quantity_value."g";
						}
						else
						{
							echo html_entity_decode($this->Number->currency($value['ProductDetail'][0]['orginal_price'], $siteCurrency))." / ".$quantity_value."g";
						}
                                                
					
                        if ($value['ProductDetail'][0]['compare_price'] != 0) {
                            echo '<del><span class="amount">'. html_entity_decode($this->Number->currency($value['ProductDetail'][0]['orginal_price'], $siteCurrency)).'</span></del>';
                            echo '<ins class="margin-l-5"><span class="amount">'.html_entity_decode($this->Number->currency($value['ProductDetail'][0]['compare_price'], $siteCurrency)).'</span></ins>';
                        } else {
                            echo html_entity_decode($this->Number->currency($value['ProductDetail'][0]['orginal_price'], $siteCurrency));
                        }
						*/
						
						?>
                            
                            <?php
					if ($value['Product']['price_option'] != 'single') {  
                            ?>
						<select id="select_product_<?php echo $value['ProductDetail'][0]['id']; ?>" class="select_product_data" >
                                                    
                                       <?php
					foreach ($value['ProductDetail'] as $pr_key => $pr_value) { 
                                            
                                                $product_name = $pr_value['sub_name']; 
                                                
						//echo $product_name."</br>";
                                                
						$quantity = explode(" ",$product_name);
						$get_key =array_search ('Grams', $quantity);
						
						$quantity_value = $quantity[$get_key-1];
						
						if ($pr_value['compare_price'] != 0) {
                                                    ?>
                                                    
                                                    <option value="<?php echo $pr_value['id']; ?>"><?php 
                                                    
                                                    echo '<del><span class="amount">'.html_entity_decode($this->Number->currency($pr_value['orginal_price'], $siteCurrency)).'</span></del>'." ".html_entity_decode($this->Number->currency($pr_value['compare_price'], $siteCurrency))." / ". $quantity_value."g";
                                                    
                                                    ?></option> 
                                                  <?php  
							
						}
						else
						{
                                                    
                                                    ?>
                                                    <option value="<?php echo $pr_value['id']; ?>"><?php 
                                                    
                                                    echo html_entity_decode($this->Number->currency($pr_value['orginal_price'], $siteCurrency))." / ".$quantity_value."g";
                                                    
                                                    ?></option> 
                                                    <?php
                                                    
							
						}
                                            
                                            ?>
						
                                        <?php } ?>
						  
                                                  
						</select>
                            
                                        <?php }else{ 
                                                
                            
                                        $product_name = $value['ProductDetail'][0]['sub_name']; 
						
						$quantity = explode(" ",$product_name);
						$get_key =array_search ('Grams', $quantity);
						
						$quantity_value = $quantity[$get_key-1];
						
						if ($value['ProductDetail'][0]['compare_price'] != 0) {
							echo '<del><span class="amount">'.html_entity_decode($this->Number->currency($value['ProductDetail'][0]['orginal_price'], $siteCurrency)).'</span></del>'." ".html_entity_decode($this->Number->currency($value['ProductDetail'][0]['compare_price'], $siteCurrency))." / ". $quantity_value."g";
						}
						else
						{
							echo html_entity_decode($this->Number->currency($value['ProductDetail'][0]['orginal_price'], $siteCurrency))." / ".$quantity_value."g";
						}
                            
                                            
                                        } ?>
                            
                            
						</a>
                    </div>

                    <?php if ($value['ProductDetail'][1]['sub_name']) { ?>
                  <!--      <div class="show-on-hover">
                            <?php foreach ($value['ProductDetail'] as $keyVal => $val) {
                                if ($keyVal != 0) { ?>
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div  style="display:block">
                                            <a href="javascript:void(0);" rel="nofollow" class="add_to_wishlist">

                                                <?php


                                                echo '<p class="contain"> '.$val['sub_name']. ' : ';

                                                if ($val['compare_price'] != 0) {
                                                    echo '<s>'. html_entity_decode($this->Number->currency($val['orginal_price'], $siteCurrency)).'</s> ';
                                                    echo '<span class="margin-l-5">'.html_entity_decode($this->Number->currency($val['compare_price'], $siteCurrency)).'</span>';
                                                } else {
                                                    echo html_entity_decode($this->Number->currency($val['orginal_price'], $siteCurrency));
                                                }

                                                echo '</p>';

                                                ?>
                                            </a>
                                        </div>

                                    </div>
                                    <?php
                                }
                            } ?>


                        </div>  -->
                    <?php } ?>


                    <div class="clear"></div>

                </div>
                <div class="bottom-section">
	                <span class="price product__detail-price">
	                	<?php
						/*
                        if ($value['ProductDetail'][0]['compare_price'] != 0) {
                            echo '<del><span class="amount">'. html_entity_decode($this->Number->currency($value['ProductDetail'][0]['orginal_price'], $siteCurrency)).'</span></del>';
                            echo '<ins class="margin-l-5"><span class="amount">'.html_entity_decode($this->Number->currency($value['ProductDetail'][0]['compare_price'], $siteCurrency)).'</span></ins>';
                        } else {
                            echo html_entity_decode($this->Number->currency($value['ProductDetail'][0]['orginal_price'], $siteCurrency));
                        } 
						*/
						?>

           			</span>
                    <div class="product__detail-action new_add_to_cart">
                        <a href="javascript:void(0);" rel="nofollow" class="button add_to_cart_button ">
                            <?php if ($value['Product']['price_option'] == 'single') { //echo "<pre>";print_r($value);die();
                                if($value['ProductDetail'][0]['quantity'] != 0){?>
                                    <!--  <span class="prodAddprice" onclick="addToCart(<?php //echo $value['ProductDetail'][0]['id']; ?>);" >
										<b class=""><?php //echo __('Add'); ?></b> <i class="fa fa-plus plushide"></i></span> -->
										
										
										<div class="as_inlist" style="display:none;">
											<div class="size-buttons_as">
												<button id="minus_button_<?php echo $value['ProductDetail'][0]['id']; ?>" class="minus-button">
												  <i class="fa fa-minus"></i>
												</button>
												<em id="em_<?php echo $value['ProductDetail'][0]['id']; ?>" class="ic-number">
                                                                                                    
                                                                                              <?php 
                                                                                              
                                                                                              if(!empty($shopCart_data)){
                                                                                                
                                                                                                  
                                                                                                  $found = false;
                                                    foreach ($shopCart_data as $key => $data) {
                                                        if ($data["ShoppingCart"]["product_id"] == $value['ProductDetail'][0]['id']) {
                                                            // The item has been found => add the new points to the existing ones
                                                            echo  trim($data["ShoppingCart"]["product_quantity"]);
                                                            $found = true;
                                                            break; // no need to loop anymore, as we have found the item => exit the loop
                                                        }
                                                    }

                                                    if ($found === false) {

                                                         echo trim(0);

                                                    }
                                                                                             }else{
                                                                                                 echo trim(0);
                                                                                             }
                                                                                              
                                                                                              ?>      
                                                                                                </em>
												<button id="add_button_<?php echo $value['ProductDetail'][0]['id']; ?>" onclick="addToCart(<?php echo $value['ProductDetail'][0]['id']; ?>);">
												  <i class="fa fa-plus plushide"></i>
												</button>
											</div>
										</div>
										
										
                                <?php } else {?>
                                    <span class="prodAddprice outofstock">
									   <b class="">
									   <?php echo __('Out of Stock'); ?>
									   </b> 
									   <i class=""></i>
									   </span>
                                <?php }

                            } else { ?>
                                <!-- <span class="prodAddprice" onclick="productDetails(<?php //echo $value['Product']['id']; ?>);" ><b class=""><?php //echo __('Add'); ?></b> <<i class="fa fa-plus plushide"></i>></span> -->
								
								
										<div class="as_inlist" style="display:none;">
											<div class="size-buttons_as">
												<button id="minus_button_<?php echo $value['ProductDetail'][0]['id']; ?>" class="minus-button">
												  <i class="fa fa-minus"></i>
												</button>
												<em id="em_<?php echo $value['ProductDetail'][0]['id']; ?>" class="ic-number">
                                                       <?php 
                                                                                              
                                                                                              if(!empty($shopCart_data)){
                                                                                                
                                                                                                  
                                                                                                   $found = false;
                                                    foreach ($shopCart_data as $key => $data) {
                                                        if ($data["ShoppingCart"]["product_id"] == $value['ProductDetail'][0]['id']) {
                                                            // The item has been found => add the new points to the existing ones
                                                            echo  trim($data["ShoppingCart"]["product_quantity"]);
                                                            $found = true;
                                                            break; // no need to loop anymore, as we have found the item => exit the loop
                                                        }
                                                    }

                                                    if ($found === false) {
                                                         echo trim(0);
                                                    }
    
                                                                                                
                                                                                             }else{
                                                                                                 echo trim(0);
                                                                                             }
                                                                                              
                                                                                              ?>                                                
                                                                                                
                                                                                                
                                                                                                </em>
												<button id="add_button_<?php echo $value['ProductDetail'][0]['id']; ?>" onclick="addToCart(<?php echo $value['ProductDetail'][0]['id']; ?>);">
												  <i class="fa fa-plus plushide"></i>
												</button>
											</div>
										</div>
								
								
                                <?php

                            } ?>

                            <!--<i class="fa fa-plus plushide"></i>-->
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </li>

    <?php
if (!isset($productList[$nextValue]['SubCategory']['id']) || $productList[$nextValue]['SubCategory']['id'] != $subCat) { ?>
    </ul>
    <!-- </div> -->
    <div class="clr"></div> <?php
}

    if (!isset($productList[$nextValue]['MainCategory']['id']) || $productList[$nextValue]['MainCategory']['id'] != $main) { ?>
        <!-- </ul> -->
        </div>
        <div class="clr"></div> <?php
    }

} ?>