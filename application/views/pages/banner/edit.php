<br></br><br></br><br></br><br></br><div class="container">
	<div class="row mt-4">
		<div class="col">
			<h2  class="text-center">Update Banner</h2>
		</div>
	</div>

	<div class="row bg-light p-3 mt-4">
		<div class="col">

			<?= form_open_multipart(base_url('banner/edit/' . $banner['id'])) ?>
				<input type="hidden" name="id" value="<?= $banner['id'] ?>">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Head Banner</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="head" value="<?= $banner['head'] ?>">
						<?= form_error('head', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Content Banner</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="content" value="<?= $banner['content'] ?>">
						<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Text Color</label>
					<div class="col-sm-10">
						<select class="form-control" name="text_color">
							<option value="text-dark">Black</option>
							<option value="text-light">White</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Link Button</label>
					<div class="col-sm-10">
						<select class="form-control" name="product_id">
							<?php foreach($games as $g) : ?>
								<option value="<?= $g['id'] ?>"><?= $g['name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Banner Image</label>
					<br>
					<div class="col-sm-10">
						<?php if(!empty($banner['image'])) : ?>
							<img src="<?= base_url('images/banner/'. $banner['image']) ?>" width="300">
						<?php else: ?>
							No Image
						<?php endif; ?>
						<br> <br>
						<input name="image" type="file" class="form-control-file">
						<?php if($this->session->flashdata('image_error')) :  ?>
							<small class="form-text text-danger">
								<?= $this->session->flashdata('image_error') ?>
							</small>
						<?php endif ?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="<?= base_url('banner') ?>" class="btn btn-secondary btn-sm">
							<i class="fa fa-arrow-left mr-1"></i>
							Back
						</a>
						<button type="submit" class="btn btn-info btn-sm float-right">
							<i class="fa fa-save mr-2"></i>
							Update
						</button>
					</div>
				</div>
			<?= form_close() ?>			
		</div>
	</div>
</div>

<br></br><br></br>
       <footer>
                <div class="footer-top footer-bg">
                    <!-- newsletter-area -->
                    <div class="newsletter-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="newsletter-wrap">
                                        <div class="section-title newsletter-title">
                                            <h2>Our <span>Newsletter</span></h2>
                                        </div>
                                        <div class="newsletter-form">
                                            <form action="#">
                                                <div class="newsletter-form-grp">
                                                    <i class="far fa-envelope"></i>
                                                    <input type="email" placeholder="Enter your email...">
                                                </div>
                                                <button>SUBSCRIBE <i class="fas fa-paper-plane"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- newsletter-area-end -->
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget mb-50">
                                    <div class="footer-logo mb-35">
                                        <a href="#"><img src="images/logo/log2.png" alt=""></a>
                                    </div>
                                    <div class="footer-text">
                                        <p>Toko Game Paling Kece yang dikelola oleh Pt.MakmurAbadi.</p>
                                        <div class="footer-contact">
                                            <ul>
                                                <li><i class="fas fa-map-marker-alt"></i> <span>Alamat : </span>Sentolo Pride</li>
                                                <li><i class="fas fa-headphones"></i> <span>Nomer Ponsel : </span>+62 882 1482 0191</li>
                                                <li><i class="fas fa-envelope-open"></i><span>Email : </span><a href="#" class="__cf_email__" data-cfemail="2a43444c456a4f524f475a464f04494547">[&#160;makmurfaizal33@gmail.com]</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="footer-widget mb-50">
                                    <div class="fw-title mb-35">
                                        <h5>Products</h5>
                                    </div>
                                    <div class="fw-link">
                                        <ul>
                                            <li><a href="#">Adventure (5)</a></li>
                                            <li><a href="#">Moba (3)</a></li>
                                            <li><a href="#">FPS (12)</a></li>
                                            <li><a href="#">RPG (21)</a></li>
                                            <li><a href="#">Puzzle (7)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="footer-widget mb-50">
                                    <div class="fw-title mb-35">
                                        <h5>Need Help?</h5>
                                    </div>
                                    <div class="fw-link">
                                        <ul>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Refund Policy</a></li>
                                            <li><a href="#">Affiliate</a></li>
                                            <li><a href="#">FAQUse Cases</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget mb-50">
                                    <div class="fw-title mb-35">
                                        <h5>Follow us</h5>
                                    </div>
                                    <div class="footer-social">
                                        <ul>
                                            <li><a href="https://www.facebook.com/muhammadfaizal.makmur"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/makmurpp"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://id.pinterest.com/muhammadfaizalmakmur/_saved/"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="https://id.linkedin.com/in/muhammad-faizal-makmur-514226222"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-widget mb-50">
                                    <div class="fw-title mb-35">
                                        <h5>Newsletter Sign Up</h5>
                                    </div>
                                    <div class="footer-newsletter">
                                        <form action="#">
                                            <input type="text" placeholder="Enter your email">
                                            <button><i class="fas fa-rocket"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                            <div class="copyright text-info p-3">
                                <small class="text-info p-3">Copyright &copy; Game.STORE 2022 | Repost by <a href='https://id.linkedin.com/in/muhammad-faizal-makmur-514226222' title='makmurgame.com' target='_blank'>MakmurGame.com</a></small>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-none d-md-block">
                                <div class="payment-method-img text-right">
                                    <img src="img/images/card_img.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>