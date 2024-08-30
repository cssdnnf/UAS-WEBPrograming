			<!-- FOOTER -->
			<footer id="footer-1" class="footer division wide-50">
				<div class="container">
					<div class="row">


						<!-- FOOTER INFO -->
						<div class="col-md-5 col-lg-4 col-xl-4">
							<div class="footer-info mb-40">

								<!-- Footer Logo -->
								<div class="footer-logo"><img src="./assets/images/Logo.png" alt="footer-logo"/></div>

								<!-- Footer Copyright -->
								<p>&copy; 2024 Suliid Burger. All Rights Reserved</p>

							</div>	
						</div>	


						<!-- FOOTER CONTACTS -->
						<div class="col-md-7 col-lg-4 col-xl-5">
							<div class="footer-contacts mb-40">
							
								<!-- Address -->
								<p class="p-xl mt-10">Pesanggrahan,</p>
								<p class="p-xl">Jakarta Selatan, Indonesia</p> 

								<!-- Contacts -->
								<p class="p-lg foo-email">Email: <a href="mailto:info@terbawasuasana.com">info@terbawasuasana.com</a></p>
								<p class="p-lg">Call Now: <span class="salmon-color"><a href="tel:6281234567890">(62) 812-3456-7890</a></span></p>

							</div>
						</div>


						<!-- FOOTER INSTAGRAM -->
						<div class="col-md-12 col-lg-4 col-xl-3">
							<div class="footer-img mb-40">

								<!-- Images -->
								<ul class="text-center clearfix">
									<li><a href="#" target="_blank"><img class="insta-img" src="./assets/images/gallery/gallery-01.png" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="./assets/images/gallery/gallery-02.png" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="./assets/images/gallery/gallery-03.png" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="./assets/images/gallery/gallery-04.png" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="./assets/images/gallery/gallery-05.png" alt="insta-img"></a></li>
									<li><a href="#" target="_blank"><img class="insta-img" src="./assets/images/gallery/gallery-06.png" alt="insta-img"></a></li>	
								</ul>
														
							</div>
						</div>	<!-- END FOOTER IMAGES -->


					</div>	  <!-- End row -->
				</div>	   <!-- End container -->										
			</footer>	<!-- END FOOTER-1 -->



        </div>
		<!-- Javascript -->
        <script src="./assets/js/jquery-3.5.1.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/menu.js"></script>
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/materialize.js"></script>
        <script src="./assets/js/jquery.datetimepicker.full.js"></script>
		<script src="./assets/js/jquery.magnific-popup.min.js"></script>
        <script src="./assets/js/custom.js"></script>

		
		<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
		<!-- JavaScript to initialize the map -->
		<script>
			// Initialize the map
			var map = L.map('map').setView([-6.22993, 106.76108], 16); // Set the center of the map to Jakarta
	
			// Add tile layer to the map
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			maxZoom: 19,
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);
	
			var tanriAbengMarker = L.marker([-6.22993, 106.76108]).addTo(map)
			.bindPopup('<b>Toko Pertama</b><br>Jl. Swadarma Raya No.58, Ulujami, Kec. Pesanggrahan, Kota Jakarta Selatan');
	
			var moestopoMarker = L.marker([-6.22887, 106.76120]).addTo(map)
			.bindPopup('<b>Toko Kedua</b><br>Jl. Swadarma Raya No.54 1, RT.1/RW.2, Ulujami, Kec. Pesanggrahan, Kota Jakarta Selatan');
								
			var moestopoMarker = L.marker([-6.23145, 106.76053]).addTo(map)
			.bindPopup('<b>Toko Ketiga</b><br>Jl. Swadarma Raya No.3, RT.3/RW.8, Ulujami, Kec. Pesanggrahan, Kota Jakarta Selatan');
	
		</script>

		<script>
		$(document).ready(function() {
			// Initialize Magnific Popup for image links
			$('.image-link').magnificPopup({
				type: 'image',
				gallery: {
					enabled: true // Enable gallery mode
				},
				zoom: {
					enabled: true, // Enable zoom effect
					duration: 300 // Duration of zoom effect
				}
			});
		});
		</script>
    </body>
</html>