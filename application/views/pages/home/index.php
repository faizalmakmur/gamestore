<!-- Carousel -->
<br></br><br></br><br></br><div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php $no = 0;?>
		<?php foreach($banners as $b) : ?>
			<?php $no++;  ?>
			<div class="carousel-item <?php if($no <= 1) { echo "active"; } ?>" style="margin-top: 70px;">
				<img src="<?= base_url() ?>images/banner/<?= $b['image'] ?>" class="d-block w-100">
				<div class="carousel-caption d-none d-md-block  <?= $b['text_color'] ?>">
					<h3 class="text-uppercase"><?= $b['head'] ?></h3>
					<h5 class="mt-3"> <?= $b['content'] ?></h5>
					<a href="<?= base_url('home/detail/' . $b['product_id']) ?>" class="btn btn-success badge-pill mt-3" style="color:white;" style="width:200px">ORDER NOW</a>
				</div>
			</div>
		<?php endforeach ?> 
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- End of Carousel -->

<!-- List Item -->
<div class="container" style="background-color:#1d1624 ;">
	<div class="row mt-5">
		<div class="col">
			<h2 style="color:white;" class="head">Latest releases</h2>
			<hr>
		</div>
	</div>

	<div class="row mb-5">
		<?php foreach($games as $game) : ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
				<div class="card">
					<img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>">
					<div class="card-body">
						<h6 class="card-title font-weight-bold" style="color: black;"><?= $game['name'] ?></h6>
						<h6 class="text-muted"><?= ucfirst($game['edition']) ?> Edition</h6>
						<h3 class="text-center text-warning price mt-4"style="color:black;">Rp.<?= number_format($game['price'], 2, ', ', '.'); ?></h3>
						<a href="<?= base_url('home/detail/' . $game['id']) ?>" style="color:black;" class="btn btn-outline-info btn-sm btn-block mt-3">See More</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- End of List Item -->
<div class="container" id="adventure" >
	<div class="row mt-5">
		<div class="col">
			<h2 style="color:white;" class="head">Adventure</h2>
			<hr>
		</div>
	</div>

	<div class="row mb-5">
		<?php foreach($games as $game) : ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
				<div class="card">
					<img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>">
					<div class="card-body">
						<h6 class="card-title font-weight-bold" style="color: black;"><?= $game['name'] ?></h6>
						<h6 class="text-muted"><?= ucfirst($game['edition']) ?> Edition</h6>
						<h3 class="text-center text-warning price mt-4"style="color:black;">Rp.<?= number_format($game['price'], 2, ', ', '.'); ?></h3>
						<a href="<?= base_url('home/detail/' . $game['id']) ?>" style="color:black;" class="btn btn-outline-info btn-sm btn-block mt-3">See More</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<div class="container" id="moba">
	<div class="row mt-5">
		<div class="col">
			<h2 style="color:white;" class="head">Moba</h2>
			<hr>
		</div>
	</div>

	<div class="row mb-5">
		<?php foreach($games as $game) : ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
				<div class="card">
					<img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>">
					<div class="card-body">
						<h6 class="card-title font-weight-bold" style="color: black;"><?= $game['name'] ?></h6>
						<h6 class="text-muted"><?= ucfirst($game['edition']) ?> Edition</h6>
						<h3 class="text-center text-warning price mt-4"style="color:black;">Rp.<?= number_format($game['price'], 2, ', ', '.'); ?></h3>
						<a href="<?= base_url('home/detail/' . $game['id']) ?>" style="color:black;" class="btn btn-outline-info btn-sm btn-block mt-3">See More</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<div class="container" id="fps">
	<div class="row mt-5">
		<div class="col">
			<h2 style="color:white;" class="head">FPS</h2>
			<hr>
		</div>
	</div>

	<div class="row mb-5">
		<?php foreach($games as $game) : ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
				<div class="card">
					<img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>">
					<div class="card-body">
						<h6 class="card-title font-weight-bold" style="color: black;"><?= $game['name'] ?></h6>
						<h6 class="text-muted"><?= ucfirst($game['edition']) ?> Edition</h6>
						<h3 class="text-center text-warning price mt-4"style="color:black;">Rp.<?= number_format($game['price'], 2, ', ', '.'); ?></h3>
						<a href="<?= base_url('home/detail/' . $game['id']) ?>" style="color:black;" class="btn btn-outline-info btn-sm btn-block mt-3">See More</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<div class="container" id="rpg">
	<div class="row mt-5">
		<div class="col">
			<h2 style="color:white;" class="head">RPG</h2>
			<hr>
		</div>
	</div>

	<div class="row mb-5">
		<?php foreach($games as $game) : ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
				<div class="card">
					<img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>">
					<div class="card-body">
						<h6 class="card-title font-weight-bold" style="color: black;"><?= $game['name'] ?></h6>
						<h6 class="text-muted"><?= ucfirst($game['edition']) ?> Edition</h6>
						<h3 class="text-center text-warning price mt-4"style="color:black;">Rp.<?= number_format($game['price'], 2, ', ', '.'); ?></h3>
						<a href="<?= base_url('home/detail/' . $game['id']) ?>" style="color:black;" class="btn btn-outline-info btn-sm btn-block mt-3">See More</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<div class="container" id="puzzle">
	<div class="row mt-5">
		<div class="col">
			<h2 style="color:white;" class="head">Puzzle</h2>
			<hr>
		</div>
	</div> 

	<div class="row mb-5">
		<?php foreach($games as $game) : ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
				<div class="card">
					<img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>">
					<div class="card-body">
						<h6 class="card-title font-weight-bold" style="color: black;"><?= $game['name'] ?></h6>
						<h6 class="text-muted"><?= ucfirst($game['edition']) ?> Edition</h6>
						<h3 class="text-center text-warning price mt-4"style="color:black;">Rp.<?= number_format($game['price'], 2, ', ', '.'); ?></h3>
						<a href="<?= base_url('home/detail/' . $game['id']) ?>" style="color:black;" class="btn btn-outline-info btn-sm btn-block mt-3">See More</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<!-- Footer -->
<?php $this->load->view('layouts/_footer') ?>
<!-- End of footer -->
