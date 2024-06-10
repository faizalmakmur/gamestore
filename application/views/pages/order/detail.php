<br></br><br></br><br></br><br></br><div class="container">
	<div class="row justify-content-center mt-4">
		<div class="col-12">
			<div class="card">
				<h5 style="color:black;" class="card-header text-center"><strong>Detail Order #<?= $order['invoice'] ?></strong></h5>
				<div class="card-body">
					<ul>
						<li>Tanggal 	: <?= $order['date'] ?></li>
						<li>Nama    	: <?= $order['name'] ?></li>
						<li>Nomor Ponsel: <?= $order['phone'] ?></li>
						<li>Alamat  	: <?= $order['address'] ?></li>
						<li>Status  	: 
							<?php if($order['status'] == 'waiting') : ?>
								<span class="badge badge-primary"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'paid') : ?>
								<span class="badge badge-warning text-light"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'delivered') : ?>
								<span class="badge badge-info"><?= $order['status'] ?></span>
							<?php elseif($order['status'] == 'cancel') : ?>
								<span class="badge badge-danger"><?= $order['status'] ?></span>
							<?php endif; ?>
						</li>
					</ul>

					<table class="table table-bordered text-center">
						<thead class="thead-dark">
							<tr>
								<th>Game</th>
								<th>Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($order_detail as $od) : ?>
								<tr>
									<td>
										<img src="<?= base_url('images/game/' . $od['image']) ?>" style="width:200px">
									</td>
									<td><h5>Rp. <?= number_format($od['price'], 2, ',', '.') ?></h5></td>
								</tr>
							<?php endforeach ?>
						</tbody>
						<tfoot class="bg-success text-light">
							<tr>
								<td><strong>Total</strong></td>
								<td><h5><strong>Rp. <?= number_format(array_sum(array_column($order_detail, 'subtotal')), 2, ',', '.') ?></strong></h5></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="card-footer">
					<form action="<?= base_url("order/update/" . $order['id']) ?>" method="post">
						<input type="hidden" name="id" value="<?= $order['id'] ?>">
						<div class="input-group">
							<select name="status" class="form-control">
								<option value="waiting" <?= $order['status'] == 'waiting' ? 'selected' : '' ?>>Waiting</option>
								<option value="paid" <?= $order['status'] == 'paid' ? 'selected' : '' ?>>Paid</option>
								<option value="delivered" <?= $order['status'] == 'delivered' ? 'selected' : '' ?>>Delivered</option>
								<option value="cancel" <?= $order['status'] == 'cancel' ? 'selected' : '' ?>>Cancel</option>
							</select>
							<div class="input-group-append">
								<button class="btn btn-info" type="submit">Save</button>
							</div>
						</div>
					</form>
        		</div>
			</div>
		</div>
	</div>

	<?php if(isset($order_confirm)) : ?>
		<div class="row mt-3 mb-5">
			<div class="col-8">
				<div class="card">
					<h5 class="card-header">Konfirmasi Pembayaran</h5>
					<div class="card-body">
						<p>Nomer Akun: <strong class="text-info"><?= $order_confirm['account_name'] ?></strong></p>
						<p>Nama Akun : <strong class="text-info"><?= $order_confirm['account_number'] ?></strong></p>
						<p>Nominal	 : <strong class="text-info">Rp. <?= number_format($order_confirm['nominal'], 2, ',', '.') ?></strong></p>
						<p>Catatan	 : <strong class="text-info"><?= $order_confirm['note'] ?></strong></p>
					</div>
				</div>
			</div>

			<div class="col-4 text-center">
				<img src="<?= base_url('images/payments/' . $order_confirm['image']) ?>" height="200px">
			</div>
		</div>
	<?php endif ?>
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