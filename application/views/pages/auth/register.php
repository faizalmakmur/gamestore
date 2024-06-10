<br></br><br></br><br></br><br></br>
<div class="container">
	<div class="row justify-content-center mt-4">
		<div class="col-5">
			<div class="card">
				<div class="card-body" style="background-color:#2e2d2f;">
					<div class="row justify-content-center">
						<div class="col-10">
							<form action="<?= base_url('register/register') ?>" method="POST" class="form-signin">
								<div class="text-center">
									<img class="mb-2" href="#" src="<?= base_url() ?>images/logo/logo11.png" width="210" height="72">
								</div>
			
								<h1 style="color:white;" class="h3 mb-3 font-weight-normal text-center">Signup Form</h1>
                                <h1 style="color:white;" class="h5 mb-3 font-weight-normal text-center">It's quick and easy.</h1>

								<?php $this->load->view('layouts/_alert') ?>

								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Nama lengkap">
									<?= form_error('name', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email">
									<?= form_error('email', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
									<?= form_error('password', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password">
									<?= form_error('password2', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
                                <input type="checkbox" name="hobi[]" value="function"> I would like to receive news, surveys and special offers from Games Store<br>
                                <input type="checkbox" name="hobi[]" value="Sepak Bola"> I have read and agree to the <a href="#">terms of service</a><br>
                                
    
								<button style="background-color:#002b63; color:white"class="btn btn-lg btn-info btn-block" type="submit">Register</button>
                                <br></br>
                                <div class="link login-link text-center">Already a member? <a href="http://localhost/gstore/login">Login here</a></div>
							</form>
						</div>
					</div>
				</div>
			</div>
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