<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>

					<!-- ///////////////////// -->
					<div class="carousel-inner">
						<?php
						$select = "SELECT * FROM products ORDER BY price LIMIT 3";
						$result = $con->query($select);
						$x = 0;

						foreach ($result as $pro) { ?>
							<div class="item <?php
												if ($x === 0) {
													echo "active";
													$x++;
												};
												?>
							">
								<div class="col-sm-6">
									<h1><span><?= $pro['name'] ?></span></h1>
									<h2>$<?= $pro['price'] ?></h2>
									<p><?= $pro['description'] ?></p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="admin/image/<?= $pro['image'] ?>" class="girl img-responsive" alt="" style="width: 350px; height: 400px " />
								</div>
							</div>
						<?php
						} ?>
					</div>
					<!-- ///////////////////// -->

					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section><!--/slider-->