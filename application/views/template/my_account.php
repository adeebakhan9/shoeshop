

		<!-- PAGE-CONTENT START -->
		<section class="page-content">
			<!-- PAGE-BANNER START -->
			<div class="page-banner-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-banner-menu">
								<h2 class="page-banner-title">My Account</h2>
								<ul>
									<li><a href="index.html">home</a></li>
									<li>My Account</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PAGE-BANNER END -->
			<!-- MY-ACCOUNT-AREA START -->
			<div class="my-account-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="panel-group  margin-btm-0" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#personal-info" aria-expanded="true">
											<i class="pe-7s-bookmarks"></i>
											<span>My Personal Information</span>
											</a>
										</h4>
									</div>
									<div id="personal-info" class="panel-collapse collapse in" role="tabpanel">
										<div class="panel-body">
										<?php foreach($details as $val) { ?>
											<form action="<?php echo base_url();?>index.php/main_template/update_user_table" method="post">
												<div class="row">
													<div class="col-md-12">
														<div class="billing-address">
															<div class="row">
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="First Name" value="<?php echo $val['first_name'];?>" name="first_name" />
																</div>
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="Last Name" value="<?php echo $val['last_name'];?>" name="last_name"/>
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="custom-form" placeholder="Office Address" value="<?php echo $val['office_add'];?>" name="office_add"/>
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="custom-form" placeholder="Home Address" value="<?php echo $val['home_add']; ?>" name="home_add"/>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="City" value="<?php echo $val['city']; ?>" name="city"/>
																</div>
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="Country" value="<?php echo $val['country']; ?>" name="country"/>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="Postal code" value="<?php echo $val['zip']; ?>" name="zip"/>
																</div>
															<!--	<div class="col-md-6">
																	<input class="custom-form" type="password" placeholder="Password" />
																</div> -->
															</div>
															<div class="row">
															<!--	<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="Cell Number"  />
																</div> -->
																<div class="col-md-6">
																	<input type="text" class="custom-form" placeholder="Phone Number" name="ph_number" value="<?php echo $val['ph_number'];?>" />
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="custom-form" placeholder="Email" name="email" value="<?php echo $val['email'];?>" />
																</div>
															</div>
															<div class="row">
																<!-- <div class="col-md-12">
																	<textarea class="custom-form" placeholder="Additional information"></textarea>
																</div> -->
															</div>
															<div class="checkbox">
																<!-- <label>
																	<input type="checkbox" name="subscribe" checked="checked"/>
																	I wish to subscribe to the 69 Fashion newsletter. 
																</label> -->
																<label>
																	<input type="checkbox" name="subscribe"/>
																	I have read and agree to the
																	<a href="#"><b>Privacy Policy</b></a>
																</label>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<input type="submit" class="custom-submit-2 save" value="Save" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>
											
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#shipping-info" aria-expanded="false">
											<i class="pe-7s-cart"></i>
											<span>My shipping address</span>
											</a>
										</h4>
									</div>
									<div id="shipping-info" class="panel-collapse collapse" role="tabpanel">
										<div class="panel-body">
											<!-- CHECKOUT-AREA START -->
											<div class="checkout-area">
												<form method="post" action="<?php echo base_url();?>index.php/main_template/add_shipping_address">
													<div class="row">
														<!-- Shipping-Address Start -->
														<div class="col-md-12">
															<div class="shipping-address">
																<div class="row">
																	<div class="col-md-12">
																		<select class="custom-select custom-form">
																			<option>Select Delivery Method</option>
																			<option>Select Delivery Method</option>
																			<option>Select Delivery Method</option>
																		</select>
																	</div>
																</div>
																<!-- <div class="row">
																	<div class="col-md-6">
																		<input class="custom-form" type="text" placeholder="Subash" name="firstname"/>
																	</div>
																	<div class="col-md-6">
																		<input class="custom-form" type="text" placeholder="Chandra" name="lastname"/>
																	</div>
																</div> -->
																<div class="row">
																	<div class="col-md-12">
																		<input type="text" class="custom-form" placeholder="Address"  name="shipping_add" value="<?php echo $val['shipping_add']; ?>"/>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<input type="text" value="<?php echo $val['shipp_city'];?>" name="shipp_city" placeholder="City" class="custom-form"/>
																	</div>
																	<div class="col-md-6">
																		<input type="text" class="custom-form" value="<?php echo $val['shipp_country'];?>" name="shipp_country" placeholder="Country"/>
																	</div>
																</div>
																<div class="row">
																	<!-- <div class="col-md-6">
																		<input class="custom-form" type="text" placeholder="Phone Number" />
																	</div> -->
																	<div class="col-md-6">
																		<input type="text" class="custom-form" name="shipp_zip" value="<?php echo $val['shipp_zip'];?>" placeholder="Zip"/>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		
																	</div>
																	<div class="row">
																<div class="col-md-12">
																	<input type="submit" class="custom-submit-2 save" value="Save" />
																</div>
															</div>
																</div>
															</div>
														</div>
														<!-- Shipping-Address End -->
													</div>
												</form>
												<?php } ?>
											</div>
											<!-- CHECKOUT-AREA END -->								
										</div>
									</div>
								</div>
							</div>					
						</div>
						<div class="col-sm-6">
							<div class="panel-group margin-btm-0" >
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="wishlist.html" >
											<i class="pe-7s-like"></i>
											<span>My Wishlist Information</span>
											</a>
										</h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a href="cart.html">
											<i class="pe-7s-news-paper"></i>
											<span>Order history and details</span>
											</a>
										</h4>
									</div>
								</div>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- MY-ACCOUNT-AREA END -->
			<!-- BRAND-LOGO-AREA START -->
			
			<!-- BRAND-LOGO-AREA END -->
		</section>
		<!-- PAGE-CONTENT END -->
		
		