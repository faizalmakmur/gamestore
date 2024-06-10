
<header style="position: fixed; z-index: 100; width: 100%;">
            <div class="header-top-area d-none d-lg-block">
                <div class="container-fluid container-full-padding">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="header-top-offer">
                                <a class="navbar-brand" href="<?= base_url('home') ?>">
			                        <img src="<?= base_url() ?>/images/logo/logo11.png" width="170" height="57" class="d-inline-block align-top " alt="logo" loading="lazy">
		                        </a>
                                <p>Exclusive Game For Today ! Offer</p>
                                <span class="coming-time" data-countdown="2020/6/20"></span> 
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-top-right">
                                <div class="header-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/muhammadfaizal.makmur"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/makmurpp"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://id.pinterest.com/muhammadfaizalmakmur/_saved/"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="https://id.linkedin.com/in/muhammad-faizal-makmur-514226222"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="header-top-action">
                                    <ul>
                                        <li>
                                            <div class="header-top-mail">
                                                <p><span>|</span><i class="far fa-envelope"></i><a href="#"><span class="__cf_email__" data-cfemail="cea7a0a8a18ea9abada1a7a0a8a1e0ada1a3">[email&#160;protected]</span></a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="header-user-login">
                                                <a href="http://localhost/gstore/login"><i class="fas fa-user"></i>Login</a>
                                            </div>
											<div class="header-user-login">
                                                <a href="http://localhost/gstore/register"><i class="fas fa-user"></i>Sign up</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<?php if($this->session->login == TRUE) : ?>
					<!-- Jika yg login user -->
					<?php if($this->session->userdata('role') == 2) : ?>
						
						<div id="sticky-header" class="main-header">
                <div class="container-fluid container-full-padding" >
                    <div class="row">
                        <div class="col-12">
                            <div class="main-menu">
                                <nav>
                                    <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                        <ul>
                                            <li class="#"><a href="http://localhost/gstore/home" style="color:white;">Home</a>

                                            </li>
                                            <li><a style="color:white;" href="#">Genre</a>
                                                <ul class="submenu">
                                                    <li><a href="#adventure">Adventure</a></li>
                                                    <li><a href="#moba">Moba</a></li>
                                                    <li><a href="#fps">FPS</a></li>
													<li><a href="#rpg">RPG</a></li>
													<li><a href="#puzzle">Puzzle</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a style="color:white;" href="#contact">contact</a></li>

											<li>
												<a style="color:white;" class="nav-item nav-link mr-4 active" href="<?= base_url('cart') ?>">
													<i class="fas fa-shopping-cart"></i>
												</a>
											</li>
											<li>
												<a style="color:white;" class="nav-link mr-3" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fas fa-user"></i>
												</a>
												<ul class="submenu">
													<li>
														<a class="dropdown-item" href="<?= base_url('profile') ?>">
															<i class="fas fa-user-cog"></i>
															Profile
														</a>
													</li>
													<li>
														<a class="dropdown-item" href="<?= base_url('myorder') ?>">
															<i class="fas fa-shopping-bag"></i>
															My Orders
														</a>
													</li>
													<li>
														<a class="dropdown-item" href="<?= base_url('profile/password') ?>">
															<i class="fas fa-key"></i>
															Change Password 
														</a>
													</li>
													<li>
														<a class="dropdown-item" href="<?= base_url('logout') ?>">
															<i class="fas fa-sign-out-alt"></i>
															Logout
														</a>
													</li>
												</ul>
											</li>
                                        </ul>
                                    </div>
                                    
                                    <!-- <div class="header-action">
                                        <ul>
                                            
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div> -->
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                        <!-- <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form>
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
					<!-- Jika admin -->
					<?php else : ?>
						<div id="sticky-header" class="main-header">
                <div class="container-fluid container-full-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-menu" >
                                <nav>
                                    <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                        <ul>
                                        <li class="#"><a href="http://localhost/gstore/home" style="color:white;">Home</a>

                                        </li>
											<li><a style="color:white;">Manage</a>
												<ul class="submenu">
													<li><a href="<?= base_url('banner') ?>">Banner</a></li>
													<li><a href="<?= base_url('product') ?>">Product</a></li>
													<li><a href="<?= base_url('order') ?>">Order</a></li>
													<li><a href="<?= base_url('user') ?>">Users</a></li>
												</ul>
											</li>

											<li><a style="color:white;">Account</a>
												<ul class="submenu">
													<li><a href="<?= base_url('profile') ?>">Profil</a></li>
													<li><a href="<?= base_url('profile/password') ?>">Change Password</a></li>
													<li><a href="<?= base_url('logout') ?>">Logout</a></li>
												</ul>
											</li>
                                        </ul>
                                    </div>
                                    <!-- <div class="header-action">
                                        <ul>
                                            
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div> -->
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                        <!-- <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form>
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>    

						
					<?php endif ?>
				<?php else: ?>
                    <a class="nav-item nav-link mr-3 active" href="<?= base_url('login') ?>">LOGIN</a>
					<a class="nav-item nav-link mr-3 active" href="<?= base_url('register') ?>">REGISTER</a>	
				<?php endif ?>
			</div>
		</div>
	</div>
</nav>
</header>