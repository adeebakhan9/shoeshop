<script type="text/javascript">

   <!--
      // Form validation code will come here.
      function validate()
      {
      
	 // alert(ddcsdc); exit;
         if( document.enquiry_form.first_name.value == "" )
         {
            alert( "Please provide your name!" );
            document.enquiry_form.first_name.focus() ;
            return false;
         }
          if( document.enquiry_form.last_name.value == "" )
         {
            alert( "Please provide your last name!" );
            document.enquiry_form.last_name.focus() ;
            return false;
         }
         
         
         if( document.enquiry_form.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.enquiry_form.email.focus() ;
            return false;
         }
          
           if( document.enquiry_form.ph_number.value == "" )
         {
            alert( "Please provide your Phone Number!" );
            document.enquiry_form.ph_number.focus() ;
            return false;
         }
         
        var firstpassword=document.enquiry_form.password2.value;  
var secondpassword=document.enquiry_form.password.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  
         
        
         return( true );
      }
      
      
     
      
   //-->
</script>
			<!-- Mobile-menu start -->
			<div class="mobile-menu-area hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">home</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="#">Home pages</a></li>
												<li><a href="index.html">Homepage Version 1</a></li>
												<li><a href="index-2.html">Homepage Version 2</a></li>
											</ul>
										</li>
										<li><a href="shop.html">mens</a></li>
										<li><a href="shop-list.html">womens</a></li>
										<li><a href="shop.html">shop</a></li>
										<li><a href="blog.html">blog</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="#">Blog pages</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single-blog</a></li>
											</ul>
										</li>
										<li><a href="#">Pages</a>
											<ul class="submenu">
												<li class="submenu-title"><a href="#">All pages</a></li>
												<li><a href="shop.html">Shop</a></li>
												<li><a href="shop-list.html">Shop-List</a></li>
												<li><a href="single-product.html">Single Product</a></li>
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="my-account.html">My Account</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="single-blog.html">Single-Blog</a></li>
												<li><a href="about.html">About</a></li>
												<li><a href="contact.html">Contact Us</a></li>
											</ul>
										</li>
										<li><a href="contact.html">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-menu end -->			
		</header>
		<!-- HEADER-AREA END -->

		<!-- PAGE-CONTENT START -->
		<section class="page-content">
			<!-- PAGE-BANNER START -->
			<div class="page-banner-area  margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-banner-menu">
								<h2 class="page-banner-title">Login</h2>
								<ul>
									<li><a href="index.html">home</a></li>
									<li>Login</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PAGE-BANNER END -->
			<!-- LOGIN-AREA START -->
			<div class="lognin-area">
				<div class="container">
					<div class="row">
					   
						<!-- Registered-Customers Start -->
						<div class="col-md-6">
						 <p><?php echo $this->session->flashdata('incorrect_login_msg'); ?></p>
						<p><?php echo $this->session->flashdata('register_success'); ?></p>
							<form  method="post" action="<?php echo base_url(); ?>index.php/main_template/login" >
								<div class="registered-customers">
									<h2 class="login-title">REGISTERED CUSTOMERS</h2>
									<div class="registered">
										<p>If you have an account with us, Please log in.</p>
										<div class="row">
											<div class="col-md-12">
												<input type="text" class="custom-form" name="username" placeholder="Email Address" />
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<input type="password" class="custom-form"  name="password" placeholder="Password" />
											</div>
										</div>
										<p><label class="forgot"><a href="#">Forgot your password?</a></label></p>
										<input type="submit" class="custom-submit-2" value="login" />
									</div>
								</div>
							</form>
						</div>
						<!-- Registered-Customers End -->
						<div class="col-md-6">
							<form action="<?php echo base_url();?>index.php/main_template/registration" method="post" onsubmit="return(validate());" id="enquiry_form" name="enquiry_form">
								<div class="new-customers">
									<h2 class="login-title">NEW CUSTOMERS</h2>
									<div class="row">
										<div class="col-sm-6">
											<input type="text" class="custom-form" placeholder="First Name" name="first_name" />
										</div>
										<div class="col-sm-6">
											<input type="text" class="custom-form" placeholder="Last Name" name="last_name"/>
										</div>
									</div>
									
								
									<div class="row">
										<div class="col-sm-12">
											<input type="text" class="custom-form" placeholder="Phone Number" name="ph_number" />
										</div>
									
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input class="custom-form" type="text" placeholder="Email" name="email" />
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input class="custom-form" type="password" placeholder="Password"  name="password2"/>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<input class="custom-form" type="password" placeholder="Confirm Password" name="password" />
										</div>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" checked="checked" name="create-account"/>
											Sign up for our newsletter!
										</label>
										<label>
											<input type="checkbox" name="billing-address"/>
											Receive special offers from our partners!
										</label>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<input type="submit" class="custom-form custom-submit no-margin" value="register" />
										</div>
										<div class="col-sm-6">
											<input type="submit" class="custom-form custom-submit no-margin" value="clear" />
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- LOGIN-AREA END -->
			<!-- BRAND-LOGO-AREA START -->
			
			<!-- BRAND-LOGO-AREA END -->
		</section>
		<!-- PAGE-CONTENT END -->

