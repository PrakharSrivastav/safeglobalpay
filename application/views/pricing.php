<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("common/header");
?>
<script>


	function pages_func()
	{
		var c1 = document.getElementById("pages").value;
		var z=parseInt(c1)
		var tot=parseInt(document.getElementById("pages_price").value);
		//alert(tot);
		document.getElementById("pages_price").value =c1	
		subTotal(tot);
		sumTotal(c1);

	}


	function photo_gallery_func() {
        // this is the function I need to call
        if(document.getElementById('photo_gallery').checked == true)
        {
        	var c2=document.getElementById("photo_gallery").value;

        	document.getElementById("photo_gallery_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('photo_gallery').checked == false)
        {
        	var c2=document.getElementById("photo_gallery_price").value;

        	document.getElementById("photo_gallery_price").value =0;
        	subTotal(c2);

        }
    }


    function online_form_func() {
        // this is the function I need to call
        if(document.getElementById('online_form').checked == true)
        {
        	var c2=document.getElementById("online_form").value;

        	document.getElementById("online_form_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('online_form').checked == false)
        {
        	var c2=document.getElementById("online_form_price").value;

        	document.getElementById("online_form_price").value =0;
        	subTotal(c2);

        }
    }
//========================= Website analytics ============================== 
function website_analytics_func() {
        // this is the function I need to call
        if(document.getElementById('website_analytics').checked == true)
        {
        	var c2=document.getElementById("website_analytics").value;

        	document.getElementById("website_analytics_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('website_analytics').checked == false)
        {
        	var c2=document.getElementById("website_analytics_price").value;

        	document.getElementById("website_analytics_price").value =0;
        	subTotal(c2);

        }
    }

//========================= Website analytics ============================== 
function website_analytics_func() {
        // this is the function I need to call
        if(document.getElementById('website_analytics').checked == true)
        {
        	var c2=document.getElementById("website_analytics").value;

        	document.getElementById("website_analytics_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('website_analytics').checked == false)
        {
        	var c2=document.getElementById("website_analytics_price").value;

        	document.getElementById("website_analytics_price").value =0;
        	subTotal(c2);

        }
    }


//========================= Flash Manager ============================== 
function flash_image_func() {
        // this is the function I need to call
        if(document.getElementById('flash_image').checked == true)
        {
        	var c2=document.getElementById("flash_image").value;

        	document.getElementById("flash_image_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('flash_image').checked == false)
        {
        	var c2=document.getElementById("flash_image_price").value;

        	document.getElementById("flash_image_price").value =0;
        	subTotal(c2);

        }
    }

//========================= Site Map  ============================== 
function site_map_func() {
        // this is the function I need to call
        if(document.getElementById('site_map').checked == true)
        {
        	var c2=document.getElementById("site_map").value;

        	document.getElementById("site_map_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('site_map').checked == false)
        {
        	var c2=document.getElementById("site_map_price").value;

        	document.getElementById("site_map_price").value =0;
        	subTotal(c2);

        }
    }

//========================= you tube  ============================== 
function you_tube_func() {
        // this is the function I need to call
        if(document.getElementById('you_tube').checked == true)
        {
        	var c2=document.getElementById("you_tube").value;

        	document.getElementById("you_tube_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('you_tube').checked == false)
        {
        	var c2=document.getElementById("you_tube_price").value;

        	document.getElementById("you_tube_price").value =0;
        	subTotal(c2);

        }
    }

//========================= search engine  ============================== 
function search_engine_func() {
        // this is the function I need to call
        if(document.getElementById('search_engine').checked == true)
        {
        	var c2=document.getElementById("search_engine").value;

        	document.getElementById("search_engine_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('search_engine').checked == false)
        {
        	var c2=document.getElementById("search_engine_price").value;

        	document.getElementById("search_engine_price").value =0;
        	subTotal(c2);

        }
    }


//========================= Paypal Button  ============================== 
function paypal_button_func() {
        // this is the function I need to call
        if(document.getElementById('paypal_button').checked == true)
        {
        	var c2=document.getElementById("paypal_button").value;

        	document.getElementById("paypal_button_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('paypal_button').checked == false)
        {
        	var c2=document.getElementById("paypal_button_price").value;

        	document.getElementById("paypal_button_price").value =0;
        	subTotal(c2);

        }
    }

//========================= product_quantity  ============================== 
function product_quantity_func() {
        // this is the function I need to call
        if(document.getElementById('product_quantity').checked == true)
        {
        	var c2=document.getElementById("product_quantity").value;

        	document.getElementById("product_quantity_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('product_quantity').checked == false)
        {
        	var c2=document.getElementById("product_quantity_price").value;

        	document.getElementById("product_quantity_price").value =0;
        	subTotal(c2);

        }
    }

//========================= product_quantity  ============================== 
function product_quantity_func() {
        // this is the function I need to call
        if(document.getElementById('product_quantity').checked == true)
        {
        	var c2=document.getElementById("product_quantity").value;

        	document.getElementById("product_quantity_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('product_quantity').checked == false)
        {
        	var c2=document.getElementById("product_quantity_price").value;

        	document.getElementById("product_quantity_price").value =0;
        	subTotal(c2);

        }
    }
//========================= product_quantity  ============================== 
function product_catlog_func() {
        // this is the function I need to call
        if(document.getElementById('product_catlog').checked == true)
        {
        	var c2=document.getElementById("product_catlog").value;

        	document.getElementById("product_catlog_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('product_catlog').checked == false)
        {
        	var c2=document.getElementById("product_catlog_price").value;

        	document.getElementById("product_catlog_price").value =0;
        	subTotal(c2);

        }
    }

//========================= back_end_cms_func  ============================== 
function back_end_cms_func() {
        // this is the function I need to call
        if(document.getElementById('back_end_cms').checked == true)
        {
        	var c2=document.getElementById("back_end_cms").value;

        	document.getElementById("back_end_cms_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('back_end_cms').checked == false)
        {
        	var c2=document.getElementById("back_end_cms_price").value;

        	document.getElementById("back_end_cms_price").value =0;
        	subTotal(c2);

        }
    }

//========================= search_capability  ============================== 
function search_capability_func() {
        // this is the function I need to call
        if(document.getElementById('search_capability').checked == true)
        {
        	var c2=document.getElementById("search_capability").value;

        	document.getElementById("search_capability_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('search_capability').checked == false)
        {
        	var c2=document.getElementById("search_capability_price").value;

        	document.getElementById("search_capability_price").value =0;
        	subTotal(c2);

        }
    }

//========================= dynamic_pages  ============================== 
function dynamic_pages_func() {
        // this is the function I need to call
        if(document.getElementById('dynamic_pages').checked == true)
        {
        	var c2=document.getElementById("dynamic_pages").value;

        	document.getElementById("dynamic_pages_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('dynamic_pages').checked == false)
        {
        	var c2=document.getElementById("dynamic_pages_price").value;

        	document.getElementById("dynamic_pages_price").value =0;
        	subTotal(c2);

        }
    }


//========================= dynamic_photo_func  ============================== 
function dynamic_photo_func() {
        // this is the function I need to call
        if(document.getElementById('dynamic_photo').checked == true)
        {
        	var c2=document.getElementById("dynamic_photo").value;

        	document.getElementById("dynamic_photo_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('dynamic_photo').checked == false)
        {
        	var c2=document.getElementById("dynamic_photo_price").value;

        	document.getElementById("dynamic_photo_price").value =0;
        	subTotal(c2);

        }
    }	

//========================= dynamic_seo_func  ============================== 
function dynamic_seo_func() {
        // this is the function I need to call
        if(document.getElementById('dynamic_seo').checked == true)
        {
        	var c2=document.getElementById("dynamic_seo").value;

        	document.getElementById("dynamic_seo_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('dynamic_seo').checked == false)
        {
        	var c2=document.getElementById("dynamic_seo_price").value;

        	document.getElementById("dynamic_seo_price").value =0;
        	subTotal(c2);

        }
    }	

//========================= dynamic_menu_func  ============================== 
function dynamic_menu_func() {
        // this is the function I need to call
        if(document.getElementById('dynamic_menu').checked == true)
        {
        	var c2=document.getElementById("dynamic_menu").value;

        	document.getElementById("dynamic_menu_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('dynamic_menu').checked == false)
        {
        	var c2=document.getElementById("dynamic_menu_price").value;

        	document.getElementById("dynamic_menu_price").value =0;
        	subTotal(c2);

        }
    }

//========================= dynamic_flash_func  ============================== 
function dynamic_flash_func() {
        // this is the function I need to call
        if(document.getElementById('dynamic_flash').checked == true)
        {
        	var c2=document.getElementById("dynamic_flash").value;

        	document.getElementById("dynamic_flash_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('dynamic_flash').checked == false)
        {
        	var c2=document.getElementById("dynamic_flash_price").value;

        	document.getElementById("dynamic_flash_price").value =0;
        	subTotal(c2);

        }
    }	

//========================= dynamic_flash_func  ============================== 
function custom_shop_func() {
        // this is the function I need to call
        if(document.getElementById('custom_shop').checked == true)
        {
        	var c2=document.getElementById("custom_shop").value;

        	document.getElementById("custom_shop_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('custom_shop').checked == false)
        {
        	var c2=document.getElementById("custom_shop_price").value;

        	document.getElementById("custom_shop_price").value =0;
        	subTotal(c2);

        }
    }

//========================= member_area_func  ============================== 
function member_area_func() {
        // this is the function I need to call
        if(document.getElementById('member_area').checked == true)
        {
        	var c2=document.getElementById("member_area").value;

        	document.getElementById("member_area_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('member_area').checked == false)
        {
        	var c2=document.getElementById("member_area_price").value;

        	document.getElementById("member_area_price").value =0;
        	subTotal(c2);

        }
    }

//========================= member_area_func  ============================== 
function custom_image_func() {
        // this is the function I need to call
        if(document.getElementById('custom_image').checked == true)
        {
        	var c2=document.getElementById("custom_image").value;

        	document.getElementById("custom_image_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('custom_image').checked == false)
        {
        	var c2=document.getElementById("custom_image_price").value;

        	document.getElementById("custom_image_price").value =0;
        	subTotal(c2);

        }
    }		
//========================= member_area_func  ============================== 
function lifetime_func() {
        // this is the function I need to call
        if(document.getElementById('lifetime').checked == true)
        {
        	var c2=document.getElementById("lifetime").value;

        	document.getElementById("lifetime_price").value =c2;
        	sumTotal(c2);	
        }

        else if(document.getElementById('lifetime').checked == false)
        {
        	var c2=document.getElementById("lifetime_price").value;

        	document.getElementById("lifetime_price").value =0;
        	subTotal(c2);

        }
    }								
// Function for add and subtract price 

function sumTotal(n)
{
	var tot=parseFloat(document.getElementById("total").value);

	total=tot+parseFloat(n);
	document.getElementById("total").value =total;
}


function subTotal(n)
{
	var tot=parseFloat(document.getElementById("total").value);

	total=tot-parseFloat(n);
	document.getElementById("total").value =total;
}




</script>
<!-- Start Page Banner -->
<div class="page-banner no-subtitle">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Pricing Tables</h2>
			</div>
			<div class="col-md-6">
				<ul class="breadcrumbs">
					<li><a href="#">Home</a></li>
					<li>Pricing Tables</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Page Banner -->




<!-- Start Pricing Table Section -->
<div class="pricing-section" style="padding-top:60px; padding-bottom:60px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Start Big Heading -->
				<div class="big-title text-center">
					<h1>We Have Nice Pricing Plans For <strong>You!</strong></h1>
				</div>
				<!-- End Big Heading -->

				<!-- Text -->
				<!--<p class="text-center" style="margin-bottom:20px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>-->
			</div>
		</div>

		<div class="row pricing-tables">

			<?php if($id=='starter') { ?>


			<div class="col-md-12 col-sm-12">
				<div class="pricing-table">

					<div class="plan-name">
						<h3>Starter Silver $99 </h3>
					</div>



					<div>


						

						<div class="col-md-12 col-sm-12 btn-danger plan-heading">
							<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
							<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
							<div class="col-md-3 col-sm-3"> 	</div>
							<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
						</div>



						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Html </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<select name="pages" id="pages" onChange="pages_func()" >
									<option value="30" selected="selected" > 1 Page </option>
									<option value="50" > 3 Page </option>
									<option value="70" > 5 Page </option>
									<option value="100" > 7 Page </option>
									<option value="120" > 10 Page </option>
									<option value="150" > 15 Page </option>
									<option value="500" > 50 Page </option>
									<option value="800" > Unlimited Page </option>

								</select>

							</div>
							<div class="col-md-3 col-sm-3">  <input type="hidden" value="150" id="pages_price" readonly="true"> 	</div>
						</div>


						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Photo Gallery </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
								<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

							</div>
							<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Online Form </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
								<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

							</div>
							<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
						</div>

						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Design Revisions</div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								Unlimited

							</div>
							<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
						</div>



						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Website Analytics </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
								<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

							</div>
							<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
						</div>

						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
								<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

							</div>
							<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
						</div>


						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Site Map </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<i class="fa fa-check green bigger-130"></i>

							</div>
							<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
						</div>

						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
								<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

							</div>
							<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
								<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

							</div>
							<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
						</div>


						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="199" id="paypal_button" name="paypal_button" onClick="paypal_button_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Products Quantity </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Products Catalog </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="199" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="399" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Search Capability </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="199" id="search_capability" name="search_capability" onClick="search_capability_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="399" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="399" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="199" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> 	</div>
						</div>


						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="399" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="199" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="599" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Members Area </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="299" id="member_area" name="member_area" onClick="member_area_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="member_area_price" name="member_area_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12 alert-info ">
							<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
						</div>

						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  Annual Support </div>
							<div class="col-md-3 col-sm-3"> Description	</div>
							<div class="col-md-3 col-sm-3"> 
								<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

							</div>
							<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
						</div>




						<div class="col-md-12 col-sm-12">
							<div class="col-md-3 col-sm-3">  </div>
							<div class="col-md-3 col-sm-3">	</div>
							<div class="col-md-3 col-sm-3"> 


							</div>
							<div class="col-md-3 col-sm-3"> 
								<div class="plan-signup">
									Total $ <input type="text" value="99" id="total" readonly="true"> 	</div>
								</div>


							</div>
							
							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  </div>
								<div class="col-md-3 col-sm-3">	</div>
								<div class="col-md-3 col-sm-3"> 


								</div>
								<div class="col-md-3 col-sm-3"> 
									<div class="plan-signup">
										<a href="checkout.php" class="btn btn-danger"> Check Out </a>
									</div>
								</div>


							</div>
							
							
							<div class="clearfix"> &nbsp; </div>
						</div>


						

					</div>
				</div>

				<?php } ?>

				<!--  Starter Gold $599   -->
				<?php if($id=='starter_gold') { ?>


				<div class="col-md-12 col-sm-12">
					<div class="pricing-table">

						<div class="plan-name">
						<h3>Starter Gold $199 </h3>
						</div>

						

						<div>



							
							<div class="col-md-12 col-sm-12 btn-danger plan-heading">
								<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
								<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
								<div class="col-md-3 col-sm-3"> 	</div>
								<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
							</div>

							

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Html </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<select name="pages" id="pages" onChange="pages_func()" >

										<option value="450" selected="selected" > 3 Page </option>
										<option value="750" > 5 Page </option>
										<option value="1050" > 7 Page </option>
										<option value="1500" > 10 Page </option>
										<option value="2250" > 15 Page </option>
										<option value="7500" > 50 Page </option>
										<option value="10000" > Unlimited Page </option>

									</select>

								</div>
								<div class="col-md-3 col-sm-3">  <input type="hidden" value="450" id="pages_price" readonly="true"> 	</div>
							</div>

							
							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Photo Gallery </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
									<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

								</div>
								<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Online Form </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
									<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

								</div>
								<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
							</div>

							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Design Revisions</div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									Unlimited

								</div>
								<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
							</div>



							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Website Analytics </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
									<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

								</div>
								<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
							</div>

							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
									<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

								</div>
								<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
							</div>


							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Site Map </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<i class="fa fa-check green bigger-130"></i>

								</div>
								<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
							</div>

							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
									<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

								</div>
								<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
									<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

								</div>
								<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
							</div>


							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="199" id="paypal_button" name="paypal_button" onClick="paypal_button_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Products Quantity </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Products Catalog </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="199" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="399" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Search Capability </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="199" id="search_capability" name="search_capability" onClick="search_capability_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="399" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="399" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="199" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> 	</div>
							</div>


							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="399" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="199" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="599" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Members Area </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="299" id="member_area" name="member_area" onClick="member_area_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="member_area_price" name="member_area_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12 alert-info ">
								<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  Annual Support </div>
								<div class="col-md-3 col-sm-3"> Description	</div>
								<div class="col-md-3 col-sm-3"> 
									<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

								</div>
								<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
							</div>



							
							<div class="col-md-12 col-sm-12">
								<div class="col-md-3 col-sm-3">  </div>
								<div class="col-md-3 col-sm-3">	</div>
								<div class="col-md-3 col-sm-3"> 


								</div>
								<div class="col-md-3 col-sm-3"> 
									<div class="plan-signup">
										Total $ <input type="text" value="199" id="total" readonly="true"> 	</div>
									</div>


								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  </div>
									<div class="col-md-3 col-sm-3">	</div>
									<div class="col-md-3 col-sm-3"> 


									</div>
									<div class="col-md-3 col-sm-3"> 
										<div class="plan-signup">
											<a href="checkout.php" class="btn btn-danger"> Check Out </a>
										</div>
									</div>


								</div>


								<div class="clearfix"> &nbsp; </div>
							</div>
							
							


						</div>
					</div>

					<?php } ?>



					<!--  Starter  Platinum $799  -->
					<?php if($id=='starter_platinum') { ?>


					<div class="col-md-12 col-sm-12">
						<div class="pricing-table">
							
							<div class="plan-name">
								<h3>Starter Platinum $299 </h3>
							</div>
							

							
							<div>
								
								


								<div class="col-md-12 col-sm-12 btn-danger plan-heading">
									<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
									<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
									<div class="col-md-3 col-sm-3"> 	</div>
									<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
								</div>
								

								
								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Html </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<select name="pages" id="pages" onChange="pages_func()" >

											<option value="750" selected="selected" > 5 Page </option>
											<option value="1050" > 7 Page </option>
											<option value="1500" > 10 Page </option>
											<option value="2250" > 15 Page </option>
											<option value="7500" > 50 Page </option>
											<option value="10000" > Unlimited Page </option>

										</select>

									</div>
									<div class="col-md-3 col-sm-3">  <input type="hidden" value="750" id="pages_price" readonly="true"> 	</div>
								</div>
								

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Photo Gallery </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
										<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

									</div>
									<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
								</div>
								
								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Online Form </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
										<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

									</div>
									<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
								</div>

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Design Revisions</div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										Unlimited

									</div>
									<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
								</div>



								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Website Analytics </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
										<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

									</div>
									<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
								</div>

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
										<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

									</div>
									<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
								</div>


								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Site Map </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<i class="fa fa-check green bigger-130"></i>

									</div>
									<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
								</div>

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
										<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

									</div>
									<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
										<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

									</div>
									<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
								</div>


								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="199" id="paypal_button" name="paypal_button" onClick="paypal_button_func()">

									</div>
									<div class="col-md-3 col-sm-3">  $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Products Quantity </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Products Catalog </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="199" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="399" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Search Capability </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="199" id="search_capability" name="search_capability" onClick="search_capability_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="399" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="399" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="199" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> 	</div>
								</div>


								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="399" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="199" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="599" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Members Area </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="299" id="member_area" name="member_area" onClick="member_area_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="member_area_price" name="member_area_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12 alert-info ">
									<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  Annual Support </div>
									<div class="col-md-3 col-sm-3"> Description	</div>
									<div class="col-md-3 col-sm-3"> 
										<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

									</div>
									<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
								</div>

								
								

								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-3">  </div>
									<div class="col-md-3 col-sm-3">	</div>
									<div class="col-md-3 col-sm-3"> 


									</div>
									<div class="col-md-3 col-sm-3"> 
										<div class="plan-signup">
											Total $ <input type="text" value="299" id="total" readonly="true"> 	</div>
										</div>
										

									</div>

									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  </div>
										<div class="col-md-3 col-sm-3">	</div>
										<div class="col-md-3 col-sm-3"> 


										</div>
										<div class="col-md-3 col-sm-3"> 
											<div class="plan-signup">
												<a href="checkout.php" class="btn btn-danger"> Check Out </a>
											</div>
										</div>
										

									</div>


									<div class="clearfix"> &nbsp; </div>
								</div>




							</div>
						</div>

						<?php } ?>
						

						<!--  Business Silver $899  -->
						<?php if($id=='business_silver') { ?>
						
						
						<div class="col-md-12 col-sm-12">
							<div class="pricing-table">

								<div class="plan-name">
									<h3>Business Silver $399 </h3>
								</div>



								<div>




									<div class="col-md-12 col-sm-12 btn-danger plan-heading">
										<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
										<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
										<div class="col-md-3 col-sm-3"> 	</div>
										<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
									</div>



									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Html </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<select name="pages" id="pages" onChange="pages_func()" >

												<option value="1050" selected="selected" > 7 Page </option>
												<option value="1500" > 10 Page </option>
												<option value="2250" > 15 Page </option>
												<option value="7500" > 50 Page </option>
												<option value="10000" > Unlimited Page </option>

											</select>

										</div>
										<div class="col-md-3 col-sm-3">  <input type="hidden" value="1050" id="pages_price" readonly="true"> 	</div>
									</div>


									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Photo Gallery </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
											<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

										</div>
										<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
									</div>

									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Online Form </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
											<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

										</div>
										<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Design Revisions</div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											Unlimited

										</div>
										<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
									</div>
									
									
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Website Analytics </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
											<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

										</div>
										<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
											<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

										</div>
										<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
									</div>
									
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Site Map </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<i class="fa fa-check green bigger-130"></i>

										</div>
										<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
											<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

										</div>
										<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
											<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

										</div>
										<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
									</div>
									
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="199" id="paypal_button" name="paypal_button" onClick="paypal_button_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Products Quantity </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Products Catalog </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="199" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="399" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Search Capability </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="199" id="search_capability" name="search_capability" onClick="search_capability_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="399" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="399" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="199" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> 	</div>
									</div>
									
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="399" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="199" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="599" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Members Area </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="299" id="member_area" name="member_area" onClick="member_area_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="member_area_price" name="member_area_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12 alert-info ">
										<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
									</div>
									
									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  Annual Support </div>
										<div class="col-md-3 col-sm-3"> Description	</div>
										<div class="col-md-3 col-sm-3"> 
											<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

										</div>
										<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
									</div>
									



									<div class="col-md-12 col-sm-12">
										<div class="col-md-3 col-sm-3">  </div>
										<div class="col-md-3 col-sm-3">	</div>
										<div class="col-md-3 col-sm-3"> 


										</div>
										<div class="col-md-3 col-sm-3"> 
											<div class="plan-signup">
												Total $ <input type="text" value="399" id="total" readonly="true"> 	</div>
											</div>


										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  </div>
											<div class="col-md-3 col-sm-3">	</div>
											<div class="col-md-3 col-sm-3"> 


											</div>
											<div class="col-md-3 col-sm-3"> 
												<div class="plan-signup">
													<a href="checkout.php" class="btn btn-danger"> Check Out </a>
												</div>
											</div>


										</div>


										<div class="clearfix"> &nbsp; </div>
									</div>




								</div>
							</div>

							<?php } ?>

							<!--  Business Gold $1599  -->
							<?php if($id=='business_gold') { ?>


							<div class="col-md-12 col-sm-12">
								<div class="pricing-table">

									<div class="plan-name">
										<h3>Business Gold $499 </h3>
									</div>



									<div>




										<div class="col-md-12 col-sm-12 btn-danger plan-heading">
											<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
											<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
											<div class="col-md-3 col-sm-3"> 	</div>
											<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
										</div>



										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Html </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<select name="pages" id="pages" onChange="pages_func()" >

													<option value="1500" selected="selected" > 10 Page </option>
													<option value="2250" > 15 Page </option>
													<option value="7500" > 50 Page </option>
													<option value="10000" > Unlimited Page </option>

												</select>

											</div>
											<div class="col-md-3 col-sm-3">  <input type="hidden" value="1500" id="pages_price" readonly="true"> 	</div>
										</div>


										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Photo Gallery </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
												<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

											</div>
											<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Online Form </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
												<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

											</div>
											<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
										</div>

										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Design Revisions</div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												Unlimited

											</div>
											<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
										</div>



										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Website Analytics </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
												<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

											</div>
											<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
										</div>

										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
												<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

											</div>
											<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
										</div>


										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Site Map </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<i class="fa fa-check green bigger-130"></i>

											</div>
											<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
										</div>

										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
												<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

											</div>
											<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
												<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

											</div>
											<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
										</div>


										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="199" id="paypal_button" name="paypal_button" onClick="paypal_button_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Products Quantity </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Products Catalog </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="199" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="399" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Search Capability </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="199" id="search_capability" name="search_capability" onClick="search_capability_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="399" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="399" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="199" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> 	</div>
										</div>


										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="399" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="199" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="599" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Members Area </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="299" id="member_area" name="member_area" onClick="member_area_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="member_area_price" name="member_area_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12 alert-info ">
											<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  Annual Support </div>
											<div class="col-md-3 col-sm-3"> Description	</div>
											<div class="col-md-3 col-sm-3"> 
												<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

											</div>
											<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
										</div>




										<div class="col-md-12 col-sm-12">
											<div class="col-md-3 col-sm-3">  </div>
											<div class="col-md-3 col-sm-3">	</div>
											<div class="col-md-3 col-sm-3"> 


											</div>
											<div class="col-md-3 col-sm-3"> 
												<div class="plan-signup">
													Total $ <input type="text" value="499" id="total" readonly="true"> 	</div>
												</div>


											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  </div>
												<div class="col-md-3 col-sm-3">	</div>
												<div class="col-md-3 col-sm-3"> 


												</div>
												<div class="col-md-3 col-sm-3"> 
													<div class="plan-signup">
														<a href="checkout.php" class="btn btn-danger"> Check Out </a>
													</div>
												</div>


											</div>


											<div class="clearfix"> &nbsp; </div>
										</div>




									</div>
								</div>

								<?php } ?>

								<!--  Business Platinum $1999 -->
								<?php if($id=='business_platinum') { ?>


								<div class="col-md-12 col-sm-12">
									<div class="pricing-table">

										<div class="plan-name">
											<h3>Business Platinum $599 </h3>
										</div>



										<div>




											<div class="col-md-12 col-sm-12 btn-danger plan-heading">
												<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
												<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
												<div class="col-md-3 col-sm-3"> 	</div>
												<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
											</div>



											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Html </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<select name="pages" id="pages" onChange="pages_func()" >


														<option value="2250" selected="selected" > 15 Page </option>
														<option value="7500" > 50 Page </option>
														<option value="10000" > Unlimited Page </option>


													</select>

												</div>
												<div class="col-md-3 col-sm-3">  <input type="hidden" value="2250" id="pages_price" readonly="true"> 	</div>
											</div>


											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Photo Gallery </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
													<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

												</div>
												<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Online Form </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
													<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

												</div>
												<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
											</div>

											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Design Revisions</div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													Unlimited

												</div>
												<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
											</div>



											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Website Analytics </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
													<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

												</div>
												<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
											</div>

											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
													<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

												</div>
												<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
											</div>


											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Site Map </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<i class="fa fa-check green bigger-130"></i>

												</div>
												<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
											</div>

											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
													<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

												</div>
												<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
													<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

												</div>
												<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
											</div>


											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="199" id="paypal_button" name="paypal_button" onClick="paypal_button_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Products Quantity </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Products Catalog </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="199" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="399" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Search Capability </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="199" id="search_capability" name="search_capability" onClick="search_capability_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="399" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="399" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="199" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> 	</div>
											</div>


											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="399" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="199" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="599" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Members Area </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="299" id="member_area" name="member_area" onClick="member_area_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="member_area_price" name="member_area_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12 alert-info ">
												<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  Annual Support </div>
												<div class="col-md-3 col-sm-3"> Description	</div>
												<div class="col-md-3 col-sm-3"> 
													<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

												</div>
												<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
											</div>




											<div class="col-md-12 col-sm-12">
												<div class="col-md-3 col-sm-3">  </div>
												<div class="col-md-3 col-sm-3">	</div>
												<div class="col-md-3 col-sm-3"> 


												</div>
												<div class="col-md-3 col-sm-3"> 
													<div class="plan-signup">
														Total $ <input type="text" value="599" id="total" readonly="true"> 	</div>
													</div>


												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  </div>
													<div class="col-md-3 col-sm-3">	</div>
													<div class="col-md-3 col-sm-3"> 


													</div>
													<div class="col-md-3 col-sm-3"> 
														<div class="plan-signup">
															<a href="checkout.php" class="btn btn-danger"> Check Out </a>
														</div>
													</div>


												</div>


												<div class="clearfix"> &nbsp; </div>
											</div>




										</div>
									</div>

									<?php } ?>

									<!--  Online Store (1) $2599 -->
									<?php if($id=='online_store1') { ?>


									<div class="col-md-12 col-sm-12">
										<div class="pricing-table">

											<div class="plan-name">
												<h3> Online Store (1) $499 </h3>
											</div>



											<div>




												<div class="col-md-12 col-sm-12 btn-danger plan-heading">
													<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
													<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
													<div class="col-md-3 col-sm-3"> 	</div>
													<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
												</div>



												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Html </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<select name="pages" id="pages" onChange="pages_func()" >

															<option value="7500" selected="selected" > 50 Page </option>
															<option value="10000" > Unlimited Page </option>

														</select>

													</div>
													<div class="col-md-3 col-sm-3">  <input type="hidden" value="7500" id="pages_price" readonly="true"> 	</div>
												</div>


												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Photo Gallery </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
														<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Online Form </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
														<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
												</div>

												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Design Revisions</div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														Unlimited

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
												</div>



												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Website Analytics </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
														<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
												</div>

												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
														<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
												</div>


												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Site Map </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<i class="fa fa-check green bigger-130"></i>

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
												</div>

												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
														<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
														<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
												</div>


												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
														<!--<input type="checkbox" value="199" id="paypal_button" name="paypal_button" onClick="paypal_button_func()">-->

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true"> -->	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Products Quantity </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3">  25 
														<!--<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">-->

													</div>
													<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true">--> 	</div>
												</div>

												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Products Catalog </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="199" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="399" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Search Capability </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="199" id="search_capability" name="search_capability" onClick="search_capability_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="399" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="399" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="199" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> 	</div>
												</div>


												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="399" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="199" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="599" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Members Area </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="299" id="member_area" name="member_area" onClick="member_area_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="member_area_price" name="member_area_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12 alert-info ">
													<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
												</div>

												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  Annual Support </div>
													<div class="col-md-3 col-sm-3"> Description	</div>
													<div class="col-md-3 col-sm-3"> 
														<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

													</div>
													<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
												</div>




												<div class="col-md-12 col-sm-12">
													<div class="col-md-3 col-sm-3">  </div>
													<div class="col-md-3 col-sm-3">	</div>
													<div class="col-md-3 col-sm-3"> 


													</div>
													<div class="col-md-3 col-sm-3"> 
														<div class="plan-signup">
															Total $ <input type="text" value="499" id="total" readonly="true"> 	</div>
														</div>


													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  </div>
														<div class="col-md-3 col-sm-3">	</div>
														<div class="col-md-3 col-sm-3"> 


														</div>
														<div class="col-md-3 col-sm-3"> 
															<div class="plan-signup">
																<a href="checkout.php" class="btn btn-danger"> Check Out </a>
															</div>
														</div>


													</div>


													<div class="clearfix"> &nbsp; </div>
												</div>




											</div>
										</div>

										<?php } ?>

										<!--  Online Store (2) $3599 -->
										<?php if($id=='online_store2') { ?>


										<div class="col-md-12 col-sm-12">
											<div class="pricing-table">

												<div class="plan-name">
													<h3> Online Store (2) $599 </h3>
												</div>



												<div>




													<div class="col-md-12 col-sm-12 btn-danger plan-heading">
														<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
														<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
														<div class="col-md-3 col-sm-3"> 	</div>
														<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
													</div>



													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Html </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<select name="pages" id="pages" onChange="pages_func()" >

																<option value="7500" selected="selected" > 50 Page </option>
																<option value="10000" > Unlimited Page </option>

															</select>

														</div>
														<div class="col-md-3 col-sm-3">  <input type="hidden" value="7500" id="pages_price" readonly="true"> 	</div>
													</div>


													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Photo Gallery </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Online Form </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Design Revisions</div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															Unlimited

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
													</div>



													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Website Analytics </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
													</div>


													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Site Map </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<i class="fa fa-check green bigger-130"></i>

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
													</div>


													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<i class="fa fa-check green bigger-130"></i>

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Products Quantity </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3">  100
															<!--<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> -->	</div>
													</div>

													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Products Catalog </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="499" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="2499" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Search Capability </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="199" id="search_capability" name="search_capability" onClick="search_capability_func()">-->

														</div>
														<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> -->	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="1199" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">-->

														</div>
														<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="1999" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true">--> 	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
															<!--<input type="checkbox" value="499" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">-->

														</div>
														<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> -->	</div>
													</div>


													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<input type="checkbox" value="399" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">

														</div>
														<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> 	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<input type="checkbox" value="199" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()">

														</div>
														<div class="col-md-3 col-sm-3">   $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true"> 	</div>
													</div>

													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<input type="checkbox" value="599" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">

														</div>
														<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> 	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Members Area </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<input type="checkbox" value="299" id="member_area" name="member_area" onClick="member_area_func()">

														</div>
														<div class="col-md-3 col-sm-3">   $ <input type="text" id="member_area_price" name="member_area_price" readonly="true"> 	</div>
													</div>

													<div class="col-md-12 col-sm-12 alert-info ">
														<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

														</div>
														<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
													</div>

													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  Annual Support </div>
														<div class="col-md-3 col-sm-3"> Description	</div>
														<div class="col-md-3 col-sm-3"> 
															<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

														</div>
														<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
													</div>




													<div class="col-md-12 col-sm-12">
														<div class="col-md-3 col-sm-3">  </div>
														<div class="col-md-3 col-sm-3">	</div>
														<div class="col-md-3 col-sm-3"> 


														</div>
														<div class="col-md-3 col-sm-3"> 
															<div class="plan-signup">
																Total $ <input type="text" value="599" id="total" readonly="true"> 	</div>
															</div>


														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  </div>
															<div class="col-md-3 col-sm-3">	</div>
															<div class="col-md-3 col-sm-3"> 


															</div>
															<div class="col-md-3 col-sm-3"> 
																<div class="plan-signup">
																	<a href="checkout.php" class="btn btn-danger"> Check Out </a>
																</div>
															</div>


														</div>


														<div class="clearfix"> &nbsp; </div>
													</div>




												</div>
											</div>

											<?php } ?>


											<!--  Online Store (3) $4599 -->
											<?php if($id=='online_store3') { ?>


											<div class="col-md-12 col-sm-12">
												<div class="pricing-table">

													<div class="plan-name">
														<h3> Online Store (3) $799 </h3>
													</div>



													<div>




														<div class="col-md-12 col-sm-12 btn-danger plan-heading">
															<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
															<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
															<div class="col-md-3 col-sm-3"> 	</div>
															<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
														</div>



														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Html </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  unlimited Page
																<!--<select name="pages" id="pages" onChange="pages_func()" >
																	
																	<option value="50" selected="selected" > 50 Page </option>
																	<option value="100" > Unlimited Page </option>
																	
																</select>-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" value="15" id="pages_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Photo Gallery </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Online Form </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Design Revisions</div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																Unlimited

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
														</div>



														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Website Analytics </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Site Map </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<i class="fa fa-check green bigger-130"></i>

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<i class="fa fa-check green bigger-130"></i>

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Products Quantity </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  unlimited
																<!--<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Products Catalog </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="2499" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Search Capability </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="899" id="search_capability" name="search_capability" onClick="search_capability_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1199" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1999" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> -->	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()"> -->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="2499" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Members Area </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="member_area" name="member_area" onClick="member_area_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="member_area_price" name="member_area_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<input type="checkbox" value="99" id="custom_image" name="custom_image" onClick="custom_image_func()">

															</div>
															<div class="col-md-3 col-sm-3">   $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true"> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Annual Support </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<input type="checkbox" value="399" id="lifetime" name="lifetime" onClick="lifetime_func()">

															</div>
															<div class="col-md-3 col-sm-3">   $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> 	</div>
														</div>




														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  </div>
															<div class="col-md-3 col-sm-3">	</div>
															<div class="col-md-3 col-sm-3"> 


															</div>
															<div class="col-md-3 col-sm-3"> 
																<div class="plan-signup">
																	Total $ <input type="text" value="799" id="total" readonly="true"> 	</div>
																</div>


															</div>

															<div class="col-md-12 col-sm-12">
																<div class="col-md-3 col-sm-3">  </div>
																<div class="col-md-3 col-sm-3">	</div>
																<div class="col-md-3 col-sm-3"> 
																	

																</div>
																<div class="col-md-3 col-sm-3"> 
																	<div class="plan-signup">
																		<a href="checkout.php" class="btn btn-danger"> Check Out </a>
																	</div>
																</div>


															</div>


															<div class="clearfix"> &nbsp; </div>
														</div>




													</div>
												</div>

												<?php } ?>


												<!-- Website (CMS 1) $3599 -->
												<?php if($id=='website_cms1') { ?>


												<div class="col-md-12 col-sm-12">
													<div class="pricing-table">

														<div class="plan-name">
															<h3> Website (CMS 1) $899 </h3>
														</div>



														<div>




															<div class="col-md-12 col-sm-12 btn-danger plan-heading">
																<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
																<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
																<div class="col-md-3 col-sm-3"> 	</div>
																<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
															</div>



															<div class="col-md-12 col-sm-12">
																<div class="col-md-3 col-sm-3">  Html </div>
																<div class="col-md-3 col-sm-3"> Description	</div>
																<div class="col-md-3 col-sm-3">  unlimited Page
																<!--<select name="pages" id="pages" onChange="pages_func()" >
																	
																	<option value="50" selected="selected" > 50 Page </option>
																	<option value="100" > Unlimited Page </option>
																	
																</select>-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" value="15" id="pages_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Photo Gallery </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Online Form </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Design Revisions</div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																Unlimited

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
														</div>



														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Website Analytics </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Site Map </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<i class="fa fa-check green bigger-130"></i>

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<i class="fa fa-check green bigger-130"></i>

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Products Quantity </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  unlimited
																<!--<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Products Catalog </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="2499" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Search Capability </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="899" id="search_capability" name="search_capability" onClick="search_capability_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1199" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1999" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> -->	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()"> -->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="2499" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Members Area </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="member_area" name="member_area" onClick="member_area_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="member_area_price" name="member_area_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="299" id="custom_image" name="custom_image" onClick="custom_image_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Annual Support </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1199" id="lifetime" name="lifetime" onClick="lifetime_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> -->	</div>
														</div>




														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  </div>
															<div class="col-md-3 col-sm-3">	</div>
															<div class="col-md-3 col-sm-3"> 


															</div>
															<div class="col-md-3 col-sm-3"> 
																<div class="plan-signup">
																	Total $ <input type="text" value="899" id="total" readonly="true"> 	</div>
																</div>


															</div>

															<div class="col-md-12 col-sm-12">
																<div class="col-md-3 col-sm-3">  </div>
																<div class="col-md-3 col-sm-3">	</div>
																<div class="col-md-3 col-sm-3"> 
																	

																</div>
																<div class="col-md-3 col-sm-3"> 
																	<div class="plan-signup">
																		<a href="checkout.php" class="btn btn-danger"> Check Out </a>
																	</div>
																</div>


															</div>


															<div class="clearfix"> &nbsp; </div>
														</div>




													</div>
												</div>

												<?php } ?>

												<!-- Website (CMS 2) $4599 -->
												<?php if($id=='website_cms2') { ?>


												<div class="col-md-12 col-sm-12">
													<div class="pricing-table">

														<div class="plan-name">
															<h3> Website (CMS 2) $999 </h3>
														</div>



														<div>




															<div class="col-md-12 col-sm-12 btn-danger plan-heading">
																<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
																<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
																<div class="col-md-3 col-sm-3"> 	</div>
																<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
															</div>



															<div class="col-md-12 col-sm-12">
																<div class="col-md-3 col-sm-3">  Html </div>
																<div class="col-md-3 col-sm-3"> Description	</div>
																<div class="col-md-3 col-sm-3">  unlimited Page
																<!--<select name="pages" id="pages" onChange="pages_func()" >
																	
																	<option value="50" selected="selected" > 50 Page </option>
																	<option value="100" > Unlimited Page </option>
																	
																</select>-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" value="15" id="pages_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Photo Gallery </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Online Form </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Design Revisions</div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																Unlimited

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
														</div>



														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Website Analytics </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Site Map </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<i class="fa fa-check green bigger-130"></i>

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<i class="fa fa-check green bigger-130"></i>

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Products Quantity </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  unlimited
																<!--<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Products Catalog </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="2499" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Search Capability </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="899" id="search_capability" name="search_capability" onClick="search_capability_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1199" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1999" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> -->	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()"> -->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="2499" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Members Area </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="member_area" name="member_area" onClick="member_area_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="member_area_price" name="member_area_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="299" id="custom_image" name="custom_image" onClick="custom_image_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Annual Support </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1199" id="lifetime" name="lifetime" onClick="lifetime_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> -->	</div>
														</div>




														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  </div>
															<div class="col-md-3 col-sm-3">	</div>
															<div class="col-md-3 col-sm-3"> 


															</div>
															<div class="col-md-3 col-sm-3"> 
																<div class="plan-signup">
																	Total $ <input type="text" value="999" id="total" readonly="true"> 	</div>
																</div>


															</div>

															<div class="col-md-12 col-sm-12">
																<div class="col-md-3 col-sm-3">  </div>
																<div class="col-md-3 col-sm-3">	</div>
																<div class="col-md-3 col-sm-3"> 
																	

																</div>
																<div class="col-md-3 col-sm-3"> 
																	<div class="plan-signup">
																		<a href="checkout.php" class="btn btn-danger"> Check Out </a>
																	</div>
																</div>


															</div>


															<div class="clearfix"> &nbsp; </div>
														</div>




													</div>
												</div>

												<?php } ?>


												<!-- Website (CMS 3) $4599 -->
												<?php if($id=='website_cms3') { ?>


												<div class="col-md-12 col-sm-12">
													<div class="pricing-table">

														<div class="plan-name">
															<h3> Website (CMS 3) $1099 </h3>
														</div>



														<div>




															<div class="col-md-12 col-sm-12 btn-danger plan-heading">
																<div class="col-md-3 col-sm-3"> <h3> Features </h3> </div>
																<div class="col-md-3 col-sm-3"> <h3> Description </h3>	</div>
																<div class="col-md-3 col-sm-3"> 	</div>
																<div class="col-md-3 col-sm-3">  <h3>	Price	 </h3></div>
															</div>



															<div class="col-md-12 col-sm-12">
																<div class="col-md-3 col-sm-3">  Html </div>
																<div class="col-md-3 col-sm-3"> Description	</div>
																<div class="col-md-3 col-sm-3">  unlimited Page
																<!--<select name="pages" id="pages" onChange="pages_func()" >
																	
																	<option value="50" selected="selected" > 50 Page </option>
																	<option value="100" > Unlimited Page </option>
																	
																</select>-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" value="15" id="pages_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Photo Gallery </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="photo_gallery" name="photo_gallery" onClick="photo_gallery_func()"  >-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="photo_gallery_price" name="photo_gallery_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Online Form </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="online_form" name="online_form" onClick="online_form_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="online_form_price" name="online_form_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Design Revisions</div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																Unlimited

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="design_revision_price" value="10" name="design_revision_price" readonly="true">--> 	</div>
														</div>



														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Website Analytics </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="website_analytics" name="website_analytics" onClick="website_analytics_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="website_analytics_price" name="website_analytics_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Flash Image Rotator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="flash_image" name="flash_image" onClick="flash_image_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="flash_image_price" name="flash_image_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Site Map </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<i class="fa fa-check green bigger-130"></i>

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="site_map_price" name="site_map_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Embed You Tube Videos </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="you_tube" name="you_tube" onClick="you_tube_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="you_tube_price" name="you_tube_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Search Engine Submission </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="10" id="search_engine" name="search_engine" onClick="search_engine_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="search_engine_price" name="search_engine_price" readonly="true">--> 	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Payment Gateway Integration	 </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> 
																<i class="fa fa-check green bigger-130"></i>

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="paypal_button_price" name="paypal_button_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Products Quantity </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  unlimited
																<!--<input type="checkbox" value="99" id="product_quantity" name="product_quantity" onClick="product_quantity_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_quantity_price" name="product_quantity_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Products Catalog </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="product_catlog" name="product_catlog" onClick="product_catlog_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="product_catlog_price" name="product_catlog_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Back-End Platform (CMS) </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="2499" id="back_end_cms" name="back_end_cms" onClick="back_end_cms_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="back_end_cms_price" name="back_end_cms_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Search Capability </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="899" id="search_capability" name="search_capability" onClick="search_capability_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="search_capability_price" name="search_capability_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Pages Creator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1199" id="dynamic_pages" name="dynamic_pages" onClick="dynamic_pages_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="dynamic_pages_price" name="dynamic_pages_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Dynamic SEO </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1999" id="dynamic_seo" name="dynamic_seo" onClick="dynamic_seo_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_seo_price" name="dynamic_seo_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Menu Control </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_menu" name="dynamic_menu" onClick="dynamic_menu_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_menu_price" name="dynamic_menu_price" readonly="true"> -->	</div>
														</div>


														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Dynamic Photo Gallery </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_photo" name="dynamic_photo" onClick="dynamic_photo_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_photo_price" name="dynamic_photo_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Dynamic Flash Banner </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3"> <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="dynamic_flash" name="dynamic_flash" onClick="dynamic_flash_func()"> -->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="dynamic_flash_price" name="dynamic_flash_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Custom Shopping Cart </div>

															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="2499" id="custom_shop" name="custom_shop" onClick="custom_shop_func()">-->

															</div>
															<div class="col-md-3 col-sm-3"> <!--  $ <input type="text" id="custom_shop_price" name="custom_shop_price" readonly="true"> -->	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Members Area </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="499" id="member_area" name="member_area" onClick="member_area_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="member_area_price" name="member_area_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12 alert-info ">
															<div class="col-md-3 col-sm-3">  Custom Image Rotator </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="299" id="custom_image" name="custom_image" onClick="custom_image_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="custom_image_price" name="custom_image_price" readonly="true">--> 	</div>
														</div>

														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  Annual Support </div>
															<div class="col-md-3 col-sm-3"> Description	</div>
															<div class="col-md-3 col-sm-3">  <i class="fa fa-check green bigger-130"></i>
																<!--<input type="checkbox" value="1199" id="lifetime" name="lifetime" onClick="lifetime_func()">-->

															</div>
															<div class="col-md-3 col-sm-3">  <!-- $ <input type="text" id="lifetime_price" name="lifetime_price" readonly="true"> -->	</div>
														</div>




														<div class="col-md-12 col-sm-12">
															<div class="col-md-3 col-sm-3">  </div>
															<div class="col-md-3 col-sm-3">	</div>
															<div class="col-md-3 col-sm-3"> 


															</div>
															<div class="col-md-3 col-sm-3"> 
																<div class="plan-signup">
																	Total $ <input type="text" value="1099" id="total" readonly="true"> 	</div>
																</div>


															</div>

															<div class="col-md-12 col-sm-12">
																<div class="col-md-3 col-sm-3">  </div>
																<div class="col-md-3 col-sm-3">	</div>
																<div class="col-md-3 col-sm-3"> 
																	

																</div>
																<div class="col-md-3 col-sm-3"> 
																	<div class="plan-signup">
																		<a href="checkout.php" class="btn btn-danger"> Check Out </a>
																	</div>
																</div>


															</div>


															<div class="clearfix"> &nbsp; </div>
														</div>




													</div>
												</div>

												<?php } ?>


											</div>

										</div>
									</div>
									<!-- End Pricing Table Section -->
									<?php
									$this->load->view("common/footer");
									?>