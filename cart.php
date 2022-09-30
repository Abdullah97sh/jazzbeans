<?php include_once "methods.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Cart</title>
	<?php include_once "header.php"; ?>

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">
					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">Cart</h1>
						<p class="breadcrumbs">
							<span class="mr-2"><a href="shop.html">Shop</a></span>
							<span>Cart</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									<td class="product-remove">
										<a href="#"><span class="icon-close"></span></a>
									</td>

									<td class="image-prod">
										<div class="img" style="background-image: url(product img)"></div>
									</td>

									<td class="product-name">
										<h3>product name</h3>
										<p>
											short description
										</p>
									</td>

									<td class="price">product price</td>

									<td class="quantity">
										<div class="input-group mb-3">
											<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100" />
										</div>
									</td>

									<td class="total">total price</td>
								</tr>
								<!-- END TR-->
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Cart Totals</h3>
						<p class="d-flex">
							<span>Subtotal</span>
							<span>total price</span>
						</p>
						<p class="d-flex">
							<span>Delivery</span>
							<span>JOD 3.00</span>
						</p>
						<p class="d-flex">
							<span>Discount</span>
							<span>discount amount</span>
						</p>
						<hr />
						<p class="d-flex total-price">
							<span>Total</span>
							<span>total invoice</span>
						</p>
					</div>
					<p class="text-center">
						<a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Related products</h2>
					<p>
						Users also view
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="product-single.html" class="img" style="background-image: url(product img)"></a>
						<div class="text text-center pt-4">
							<h3><a href="product-single.html">product name</a></h3>
							<p>
								short description
							</p>
							<p class="price"><span>product price</span></p>
							<p>
								<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- loader --><?php include_once "footer.php"; ?>
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	</body>

</html>