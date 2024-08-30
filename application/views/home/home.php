
			<!-- Home -->
            <section id="MainBanner" class="bg-fixed ">
				<div class="container">
					<div class="row d-flex align-items-center">
                        <div class="col-md-6 col-lg-6">
							<div class="mb-40">
								<img class="img-fluid" src="./assets/images/menu/Burger/menu-burger-04.png" alt="promo-image" />
							</div>
						</div>
						<div class="col-md-6 col-lg-6 mt-5 justify-content-center">
							<div class="box-11-txt mb-40 white-color">
								<h4>Restaurant</h4>
								<h2 class="h2-lg">SULIID BURGER</h2>
								<p class="p-md">Menyantap burger yang lezat dan inovatif dengan citarasa yang memikat.</p>
								<a href="#Menu" class="btn btn-lg btn-red tra-white-hover">Order Now</a>


								<?php if ($this->session->userdata('user_id')): ?>
									<a href="<?php echo site_url('admin'); ?>" class="btn btn-lg btn-yellow tra-white-hover">Dashboard</a>
								<?php else: ?>
									<a href="<?php echo site_url('login'); ?>" class="btn btn-lg btn-yellow tra-white-hover">Login</a>
								<?php endif; ?>

							</div>
						</div>
					</div> 	
				</div>
			</section>

