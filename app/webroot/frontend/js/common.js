setTimeout(function () {
    $('#flashMessage').fadeOut();
}, 3000);


$(document).ready(function () {

    $(".title-filter").click(function () {
        $(".searchMenuFormList").toggleClass("in");
    });

    var extensions = {

        "sFilterInput": "form-control inline-block margin-l-10 width-auto",
        "sLengthSelect": "form-control inline-block margin-l-10 margin-r-10 width-auto"
    }
    // Used when bJQueryUI is false
    $.extend($.fn.dataTableExt.oStdClasses, extensions);
    // Used when bJQueryUI is true
    //$.extend($.fn.dataTableExt.oJUIClasses, extensions);

    $('.datatable-common').dataTable({
        columnDefs: [
            {
                "bSortable": false,
                "aTargets": ["no-sort"]
            }
        ],
        "order": [[0, 'desc']]
    });


    $('.selectpicker').selectpicker();

    cart();
    var windowHeight = $(window).height();
    $(".indexBnner").css("height", windowHeight + "px");
    $(".bannerrelative").css("min-height", (windowHeight - $(".indexheader").height()));


    var menuDetailHeader = $(".detailheader").height();
    var menuRightHei = (windowHeight - menuDetailHeader);
    $(".rightSideBar").css("min-height", menuRightHei + "px");

    $(".cartDropdown").click(function () {
        $("#cart-sidebar").toggleClass('in');
        $(".btn-cart-toggle span").toggleClass('fa-angle-double-right');
        $(".btn-cart-toggle span").toggleClass('fa-angle-double-left');
    });
    $(".btn-cart-toggle").click(function () {
        //console.log("mani mn");
        $("#cart-sidebar").toggleClass('in');
        $(".btn-cart-toggle span").toggleClass('fa-angle-double-right');
        $(".btn-cart-toggle span").toggleClass('fa-angle-double-left');
    });

    $(".menuclose_mobile").click(function () {
        $(".dropdown.menuDropdown").removeClass('open');
    });


    $('.maincategory li').on('click', function (e) {

        $(this).children('ul').toggle();
        $(this).siblings('li').find('ul').hide();

        if ($(this).children('ul').css('display') == 'block') {
            $('.maincategory li a').removeClass("active");
            $(this).children('ul li a').addClass("active");
        }
        else {
            $(this).children('ul li a').removeClass("active");
        }

        e.stopPropagation();
    });


    /* Cart height */
    var carthei = $(window).height() - ($(".header").outerHeight() + $(".cart-checkout").outerHeight());
    var cartheiMob = $(window).height() - ( $(".mobile_cart").outerHeight() );
    //var cartheiMob = $(window).height() ;

    if ($(window).width() > 767) {
        $(".cart-items").css("height", carthei);
    }
    else {
        $(".cart-items").css({"height": cartheiMob});
    }


    //alert(carthei);

    /* add note scirpt */

    $(".add-note").click(function () {
        $(this).next(".edit-special-instructions").removeClass('hide');
    });


    /* Cancel note scirpt */

    $(".cancelinst").click(function () {
        $(this).parent().addClass('hide');
    });

    $(".title-categories,.close_category,.subcategories li").click(function () {
        $(".category_mobile").toggleClass('open');
    });


    //$(".cart-items").click(function(){
    var windowHeight = $(window).height();

    /* My Account Tab Script */
    $(".myaccount-tabs a").click(function () {
        $(".myaccount-tabs a").removeClass("active");
        $(".myorderTab").hide();
        $(this).addClass("active");
        var activeTab = $(this).attr("id");
        $("#" + activeTab + "_content").show()
    });

    $(".profile-box .edit").click(function () {
        $(this).prev(".formLabel").hide();
        $(this).hide();
        $(this).next(".textbox").show();
        $(this).next().next(".lableclose").show();
    });

    $(".profile-box .lableclose").click(function () {
        $(this).prev().prev().prev(".formLabel").show();
        $(this).prev().prev(".edit").show();
        $(this).hide();
        $(this).prev(".textbox").hide();
    });

    $(".checkoutWrapper .editAdrr").click(function () {
        $(".checkoutWrapper .editAdrr").removeClass('active');
        $(this).addClass('active');

    });

    $(".paymentWrapper .editpayment").click(function () {
        $(".paymentWrapper .editpayment").removeClass('active');
        $(this).addClass('active');

    });


    $('.intnumber').keypress(function (event) {

        var key = window.event ? event.keyCode : event.which;

        if ($(this).val() == '') {
            if (key == 48) {
                return false;
            }
        }
        if (key == 8 || key == 37 || key == 39 || key == 0) {
            return true;
        }
        else if (key == 46) {
            return true;
        }
        else if (key >= 48 && key <= 57) {
            return true;
        }
        else if ((key >= 65 && key <= 90) || (key >= 97 && key <= 122 )) {
            return false;
        }
        else {
            return false;
        }
    });
	
	
	var $forgotvalidator =  $("#UserSignupForm").validate({
				rules: {
				   "data[Customer][first_name]": {
						required: true
					},
					"data[Customer][last_name]": {
						required: true
					},
		            "data[Customer][customer_email]": {
						required: true,
		                email:true
					},
		            "data[User][UserPassword_2]": {
						required: true
		                
					},
		            "data[User][confir_password]": {
						required: true
					//	equalTo: '#UserPassword'
					},
		            "data[Customer][customer_phone]": {
						required: true,
						number : true
					}
				},
				messages: { 
				  "data[Customer][first_name]": {
						required: "Please enter firstname",
					},
					"data[Customer][last_name]": {
					required: "Please enter lastname",
					},
		            "data[Customer][customer_email]": {
						required: "Please enter email",
						email : "Please enter a valid email address",
					},
		            "data[User][password]": {
					 	required: "Please enter password",
		                
					},
		            "data[User][confir_password]": {
						required: "Please enter confirm password",
						//equalTo: "Please enter the same value again",		                
					},
		            "data[Customer][customer_phone]": {
						required: "Please enter phone number",
						number : "Please enter valid phone number",

					}

				}
			});

	
	
	
	$("#UserSignupForm").submit(function(e){
		
		e.preventDefault();
		
		
		if($("#UserSignupForm").valid()){
			
			var fromdata = $(this).serializeArray();
			$.post(rp + 'signup', {data : fromdata}, function (response) {
				
				$("div.login_logo h3").after("<span class='success_msg' style='color:green;'>Please check your email and activate your account. </span>");
				
				setTimeout(after_submit_signupform,2000);
				
			});
			
		} else{
			return false;
		}
	});
	
	$("#forgot_password").on("click",function(){
	
		$("div#loginform").css("display","none");
		$("div#forgotform").css("display","block");
		
	});
	
	$(".login").on("click",function(){
	
		$("div#loginform").css("display","block");
		$("div#forgotform").css("display","none");
		
	});
        

});

$("body").on("change","select.select_product_data",function(){
      
  var dataid = $(this).val();
   
   var quantity_data = 0;
    
    $.ajax({
        async: false,
        type: "POST",
        global: false,
        url: rp + 'searches/get_productdetails',
        data: { 'id': dataid},
        success: function (data) {
            quantity_data = data;
        }
    });
    
            
       $(this).parent().parent().parent().parent().find("div.size-buttons_as").empty();
       
       var html_data1 = '<button id="minus_button_'+dataid+'" class="minus-button"><i class="fa fa-minus"></i></button><em id="em_'+dataid+'" class="ic-number">'+quantity_data+'</em><button id="add_button_'+dataid+'" onclick="addToCart('+dataid+');"><i class="fa fa-plus plushide"></i></button>';
    
    $(this).parent().parent().parent().parent().find("div.size-buttons_as").append(html_data1);
       
            
});

$("body").on("mouseover",".product__inner",function(){
$(this).find("div.as_inlist").css( "display", "block" );
});

$("body").on("mouseout",".product__inner",function(){
$(this).find("div.as_inlist").css( "display", "none" );
});

function after_submit_signupform(){

	$("#UserSignupForm input#CustomerFirstName").val("");
	$("#UserSignupForm input#CustomerLastName").val("");
	$("#UserSignupForm input#CustomerCustomerEmail").val("");
	$("#UserSignupForm input#UserPassword_2").val("");
	$("#UserSignupForm input#UserConfirPassword").val("");
	$("#UserSignupForm input#CustomerCustomerPhone").val("");
	$("span.success_msg").remove();
	
	$("a#submitdata").trigger("click");
	
}

function locationList() {
    var id = $('#city').val();
    $.post(rp + 'searches/locations', {'id': id, 'model': 'Location'}, function (response) {
        $("#location").html(response);
    });
}



function productDetails(id) {
    $.post(rp + 'searches/productdetails', {'id': id}, function (response) {
        var data = response.split("||@@||");
        $("#addCartPop").html(data[1]);
        $("#addCartPop").modal('show');
        $("#quantity").TouchSpin({
            initval: 1,
            min: 1,
            max: data[0]

        });
    });
}

function variantDetails() {
    var id = $("#productVariant").val();
    $.post(rp + 'searches/variantDetails', {'id': id}, function (response) {
        $('#addcart_failed').hide();
        var data = response.split("||@@||");
        $("#productVariantDetails").html();
        $("#productVariantDetails").html(data[1]);
        $("#quantity").TouchSpin({
            initval: 1,
            min: 1,
            max: data[0]

        });
    });
}

function addToCart(id) {
    
    //alert(id);
    //return false;
    $.post(rp + 'searches/cartProduct', {'id': id, 'quantity': '1'}, function (response) {
           
        if (response != 0) {
            cart();
            $('.cart_notification').fadeIn();
            setTimeout(function () {
                $('.cart_notification').fadeOut();
            }, 1000);
            
            var em_value = $("em#em_"+id).text();
            var new_em_value = parseInt($.trim(em_value))+1;
            $("em#em_"+id).text(new_em_value);
            if(new_em_value > 1){
                 $("button#minus_button_"+id).attr("onclick","product_qtyDecrement("+id+");");
            }
            if(new_em_value == 1){
                 $("button#minus_button_"+id).attr("onclick","deleteCart("+response+","+id+");");
            }
            
            //if(new_em_value == 1){
            //     $("button#minus_button_"+response).attr("onclick","deleteCart("+id+","+response+");");
           // }
            

        } else {

            $('.cart_failedNotification').fadeIn();
            setTimeout(function () {
                $('.cart_failedNotification').fadeOut();
            }, 1000);
        }

    });
}

function variantCart() {

    var id = $('#productVariant').val();
    var quantity = $('#quantity').val();

    $.post(rp + 'searches/cartProduct', {'id': id, 'quantity': quantity}, function (response) {
        if (response == 'Success') {
            cart();
            $('#addCartPop').modal('hide');
            $('.cart_notification').fadeIn();
            $('#addcart_failed').hide();
            setTimeout(function () {
                $('.cart_notification').fadeOut();
            }, 1000);

        } else {
            $('#addcart_failed').show();
        }


    });
}

function addnote(id) {
    $(id).next(".edit-special-instructions").removeClass('hide');
}
function cancelnote(id) {
    $(id).parent(".edit-special-instructions").addClass('hide');
}

function description(id) {
    var productDescription = $('#productDescription' + id).val();
    $.post(rp + 'searches/descriptionAdd', {'id': id, 'productDescription': productDescription}, function (response) {
        $("#" + id).parent(".edit-special-instructions").addClass('hide');
    });

}

function cart() {

    //alert('RR');

    $.post(rp + 'searches/cart', {}, function (response) {
        var data = response.split("||@@||");

        $("#cartCount").html(data[0]);
        total = parseFloat(data[1]).toFixed(2);
        $(".cartTotal").html(format(total));

        $("#cartdetailswrapper").html(data[2]);
        $(".cart-items").mCustomScrollbar();

        var carthei = $(window).height() - ($(".header").outerHeight() + $(".cart-checkout").outerHeight());
        //var cartheiMob = $(window).height();
        var cartheiMob = $(window).height() - ( $(".mobile_cart").outerHeight() );

        if ($(window).width() > 767) {
            $(".cart-items").css("height", carthei);
        }
        else {
            $(".cart-items").css({"height": cartheiMob});
        }
    });
}

var format = function (num) {
    var str = num.toString().replace("Mani", ""), parts = false, output = [], i = 1, formatted = null;
    //alert(str);
    if (str.indexOf(".") > 0) {
        parts = str.split(".");
        str = parts[0];
    }
    str = str.split("").reverse();
    for (var j = 0, len = str.length; j < len; j++) {
        if (str[j] != ",") {
            output.push(str[j]);
            if (i % 3 == 0 && j < (len - 1)) {
                output.push(",");
            }
            i++;
        }
    }
    formatted = output.reverse().join("");
    return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
};

function deleteCart(id,product_id) {
    $.post(rp + 'searches/deleteCart', {'id': id}, function (response) {
        cart();
        
        $("button#minus_button_"+product_id).removeAttr("onclick");
        $("em#em_"+product_id).text(0);
       
    });
}

function qtyIncrement(id) {
    $.post(rp + 'searches/qtyUpdate', {'id': id, 'type': 'increment'}, function (response) {
        cart();
        
            var em_value = $("em#em_"+response).text();
            var new_em_value = parseInt($.trim(em_value))+1;
            $("em#em_"+response).text(new_em_value);
            if(new_em_value == 2){
                 $("button#minus_button_"+response).attr("onclick","qtyDecrement("+response+");");
            }
            if(new_em_value == 1){
                 $("button#minus_button_"+response).attr("onclick","deleteCart("+id+","+response+");");
            }
        
    });
}


function qtyDecrement(id) {
    $.post(rp + 'searches/qtyUpdate', {'id': id, 'type': 'decrement'}, function (response) {
        cart();
	    
            var em_value = $("em#em_"+response).text();
            var new_em_value = parseInt($.trim(em_value))-1;
            $("em#em_"+response).text(new_em_value);
            if(new_em_value < 1){
                 $("button#minus_button_"+response).removeAttr("onclick");
            }
            
             if(new_em_value == 1){
                 $("button#minus_button_"+response).attr("onclick","deleteCart("+id+","+response+");");
            }
            
		
    });
}

function product_qtyDecrement(id){
    
     $.post(rp + 'searches/product_qtyUpdate', {'id': id, 'type': 'decrement'}, function (response) {
        cart();
		
            var em_value = $("em#em_"+id).text();
            var new_em_value = parseInt($.trim(em_value))-1;
            $("em#em_"+id).text(new_em_value);
            if(new_em_value < 1){
                 $("button#minus_button_"+id).removeAttr("onclick");
            }
            
             if(new_em_value == 1){
                 
                 $("button#minus_button_"+id).attr("onclick","deleteCart("+response+","+id+");");
            }
		
    });
    
}

function changeLocation() {
    var line = 'Are you sure want to change Location ?';
    if (confirm(line)) {
        $.post(rp + 'searches/changeLocation', {'location': 'location'}, function (response) {
            window.location.href = rp;
        });

    } else {
        return false;
    }
}


function citiesList() {
    var id = $('#CustomerAddressBookStateId').val();
    $.post(rp + '/stores/locations', {'id': id, 'model': 'City'}, function (response) {
        $("#CustomerAddressBookCityId").html(response);
    });
}

function locationLists() {
    var id = $('#CustomerAddressBookCityId').val();
    $.post(rp + '/stores/locations', {'id': id, 'model': 'Location'}, function (response) {
        $("#StoreStoreZip").html(response);
        $("#CustomerAddressBookLocationId").html(response);
    });
}


$(window).load(function () {
    /* all available option parameters with their default values */
    if ($(window).width() > 767) {
        $(".cart-items,.leftsideBar_scroller").mCustomScrollbar({
            setWidth: false,
            setHeight: false,
            setTop: 0,
            setLeft: 0,
            axis: "y",
            scrollbarPosition: "inside",
            scrollInertia: 950,
            autoDraggerLength: true,
            autoHideScrollbar: false,
            autoExpandScrollbar: false,
            alwaysShowScrollbar: 0,
            snapAmount: null,
            snapOffset: 0,
            mouseWheel: {
                enable: true,
                scrollAmount: "auto",
                axis: "y",
                preventDefault: false,
                deltaFactor: "auto",
                normalizeDelta: false,
                invert: false,
                disableOver: ["select", "option", "keygen", "datalist", "textarea"]
            },
            scrollButtons: {
                enable: false,
                scrollType: "stepless",
                scrollAmount: "auto"
            },
            keyboard: {
                enable: true,
                scrollType: "stepless",
                scrollAmount: "auto"
            },
            contentTouchScroll: 25,
            advanced: {
                autoExpandHorizontalScroll: false,
                autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
                updateOnContentResize: true,
                updateOnImageLoad: true,
                updateOnSelectorChange: false,
                releaseDraggableSelectors: false
            },
            theme: "light",
            callbacks: {
                onInit: false,
                onScrollStart: false,
                onScroll: false,
                onTotalScroll: false,
                onTotalScrollBack: false,
                whileScrolling: false,
                onTotalScrollOffset: 0,
                onTotalScrollBackOffset: 0,
                alwaysTriggerOffsets: true,
                onOverflowY: false,
                onOverflowX: false,
                onOverflowYNone: false,
                onOverflowXNone: false
            },
            live: false,
            liveSelector: null
        });

    }

});

function offerDetails(id) {
    $.post(rp + 'searches/storeOffer', {'id': id}, function (response) {
        $("#addCartPop").html(response);
        $("#addCartPop").modal('show');
    });
}

function minOrderStore() {

    $.post(rp + '/searches/storeMinOrderCheck', function (response) {

        alert(response);
    });

    return false;
}


$(document).ready(function () {

    $(".searchFilterResults").keyup(function () {

        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;

        // Loop through the comment list
        $(".searchresulttoshow").each(function () {

            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();

                // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });

        // Update the count
        //var numberItems = count;
        //$("#filter-count").text("Number of Comments = "+count);
    });
});
$(window).load(function () {
    fillter();
    function fillter() {
        var getvalue = $('#check').val();
        if ($.trim(getvalue) == '') {
            return false;

        } else {
            var splits = getvalue.split('_');
            var id = splits[0];
            var storeid = splits[1];
            $.post(rp + 'searches/filtterByCategory', {'id': id, 'storeid': storeid}, function (response) {
                $("#filtterByCategory").append(response);
                $('.remove_' + id).remove();
                fillter();

            });
        }

    }


});