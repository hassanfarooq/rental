<section id="detail-view">
	<div class="container">
		<div class="row">
		<?php if($detail_item > 0) {
			foreach($detail_item as $row) { ?>
				<div class="col-md-6">
					<div class="product-slider-wrapper thumbs-bottom">
						<div class="swiper-container product-slider-main swiper-container-horizontal">
							<div class="swiper-wrapper">
								<div class="swiper-slide swiper-slide-active" style="width: 555px;">
									<div class="easyzoom easyzoom--overlay">
										<a href="<?php echo base_url() . $row['car_image']; ?>" title="">
											<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
										</a>
									</div>
								</div>

								<div class="swiper-slide swiper-slide-next" style="width: 555px;">
									<div class="easyzoom easyzoom--overlay">
										<a href="<?php echo base_url() . $row['car_image']; ?>" title="">
											<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
										</a>
									</div>
								</div>

								<div class="swiper-slide" style="width: 555px;">
									<div class="easyzoom easyzoom--overlay">
										<a href="<?php echo base_url() . $row['car_image']; ?>" title="">
											<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
										</a>
									</div>
								</div>

								<div class="swiper-slide" style="width: 555px;">
									<div class="easyzoom easyzoom--overlay">
										<a href="<?php echo base_url() . $row['car_image']; ?>" title="">
											<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
										</a>
									</div>
								</div>

								<div class="swiper-slide" style="width: 555px;">
									<div class="easyzoom easyzoom--overlay">
										<a href="<?php echo base_url() . $row['car_image']; ?>" title="">
											<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
										</a>
									</div>
								</div>

								<div class="swiper-slide" style="width: 555px;">
									<div class="easyzoom easyzoom--overlay">
										<a href="<?php echo base_url() . $row['car_image']; ?>" title="">
											<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
										</a>
									</div>
								</div>

								<div class="swiper-slide" style="width: 555px;">
									<div class="easyzoom easyzoom--overlay">
										<a href="<?php echo base_url() . $row['car_image']; ?>" title="">
											<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
										</a>
									</div>
								</div>

								<div class="swiper-slide" style="width: 555px;">
									<div class="easyzoom easyzoom--overlay">
										<a href="<?php echo base_url() . $row['car_image']; ?>" title="">
											<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
										</a>
									</div>
								</div>

							</div>
							<div class="swiper-button-prev swiper-button-disabled"><i class="fa fa-chevron-left"></i>
							</div>
							<div class="swiper-button-next"><i class="fa fa-chevron-right"></i>
							</div>
						</div>
						<!-- /.swiper-container -->
						<div class="swiper-container product-slider-thumbs swiper-container-horizontal">
							<div class="swiper-wrapper" style="-webkit-transition: 0ms; -webkit-transform: translate3d(213.75px, 0px, 0px);">
								<div class="swiper-slide swiper-slide-active" style="width: 127.5px; margin-right: 15px;">
									<img src=""<?php echo base_url() . $row['car_image']; ?>"" alt="">
								</div>

								<div class="swiper-slide swiper-slide-next" style="width: 127.5px; margin-right: 15px;">
									<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
								</div>

								<div class="swiper-slide" style="width: 127.5px; margin-right: 15px;">
									<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
								</div>

								<div class="swiper-slide" style="width: 127.5px; margin-right: 15px;">
									<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
								</div>

								<div class="swiper-slide" style="width: 127.5px; margin-right: 15px;">
									<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
								</div>

								<div class="swiper-slide" style="width: 127.5px; margin-right: 15px;">
									<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
								</div>

								<div class="swiper-slide" style="width: 127.5px; margin-right: 15px;">
									<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
								</div>

								<div class="swiper-slide" style="width: 127.5px; margin-right: 15px;">
									<img src="<?php echo base_url() . $row['car_image']; ?>" alt="">
								</div>
							</div>
						</div>
					</div>
					
					<script>
						$(function() { aweProductRender(true); });
					</script>
				</div>
				
				<div class="col-md-6">
                <div class="item-detail-right">
                    <a href="#"><i class="fa fa-chevron-left"></i> return to listing</a>
                    <hr/>
                    <h3><?php echo $row['car_name'] .', ' . $row['manf_name']; ?></h3>
                    <p>available for 3 days</p>
                    <p><?php echo $row['car_description']; ?></p>
                    <p><strong>Special Features:</strong></p>
                    <ul>
                        <li><i class="fa fa-tick"></i> 1914 translation by H. Rackham</li>
                        <li><i class="fa fa-tick"></i> 1914 translation by H. Rackham</li>
                        <li><i class="fa fa-tick"></i> 1914 translation by H. Rackham</li>
                    </ul>
                    <div class="item-price">
                        <span class="amount"><?php echo $row['price_per_day']; ?> </span><span class="perday">PKR per day</span>
                        <button class="btn btn-yellow">Book now</button>
                    </div>
                    <p><strong>Category:</strong> <?php echo $row['manf_name']; ?></p>
                </div>
            </div>
			
		<?php } } else {?>
			<h1>Some Error</h1>
		<?php } ?>
	</div>
    </div>
</section>