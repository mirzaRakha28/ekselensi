<section id="services" style="padding-top: 56px;padding-bottom: 38px;"><!-- Paradise Slider -->
	<div id="fw_al_001" class="carousel slide ps_slide_y ps_indicators_y swipe_y ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2500">

		<!-- Indicators -->
		<ol class="carousel-indicators">
        <?php for ($i=0; $i < count($slider); $i++) : ?>
            <li data-target="#fw_al_001" data-slide-to="<?=$i?>" class="border border-primary <?= $i==0 ? 'active' : 'not' ?>"></li>
        <?php endfor ?>
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">

			<?php $counter =1; foreach ($slider as $slide) : ?>
                <!-- First Slide -->
                <div class="carousel-item <?php if($counter == 1){ echo 'active';} ?>">
    
                    <!-- Slide Background -->
                    <img src="<?= base_url('assets/img/').$slide->gambar ?>" alt="fw_al_001_01">
    
                    <!-- Slide Text Layer -->
                    <div class="fw_al_001_slide">
                        <!-- <h3 data-animation="animated fadeInUp">HELLO WORLD</h3> -->
                        <h1 data-animation="animated fadeInUp"><?= $slide->title ?></h1>
                        <p data-animation="animated fadeInUp"><?= $slide->subtitle ?></p>
                        <form action="<?=base_url('product/product')?>" method="post">
                            <input type="hidden" name="productId" value="<?= intval($slide->link) > 0 ? intval($slide->link) : '#' ?>">
                            <button type="submit" class="btn btn-outline-primary btn-lg rounded" data-animation="animated fadeInUp" <?= intval($slide->link)==0 ? 'disabled' : 'actived' ?>>Cek Promo</button>
                        </form>
                    </div>
                </div>
                <!-- End of Slide -->
                <?php $counter++ ?>
            <?php endforeach ?>

			

		</div><!-- End of Wrapper For Slides -->

	</div> <!-- End Paradise Slider -->

	


 <!-- End -->
        <div class="container">
            <div class="row" style="margin-top: 74px;">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Layanan</h2>
                    <h3 class="text-muted section-subheading">Layanan yang kami sediakan</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fas fa-print fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Printing</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-6"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fas fa-pen-nib fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                
            </div>
        </div>
    </section>
    <div class="highlight-blue" style="padding-top: 14px;background-color: rgb(245,146,16);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="margin-bottom: -5px;">Tata Cara Pemesanan</h2>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="<?= base_url('ekselensi/tata_cara') ?>" style="margin-bottom: -31px;">Lihat disini!</a></div>
        </div>
    </div>
    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Filosofi</h2>
                <p class="text-center"> Filosofi Usaha</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-handshake-o icon"></i>
                    <h3 class="name">Integritas</h3>
                    <p class="description">Aktivitas usaha Ekselensi Printing and Design dilakukan berdasarkan prinsip “Satu Kata, Satu Perbuatan”, serta menjunjung tinggi kejujuran dan etika bisnis.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Ketepatan Waktu</h3>
                    <p class="description">Aktivitas usaha Ekselensi Printing and Design dilakukan sesuai janji dan tenggat waktu yang disepakati dengan klien.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="far fa-thumbs-up icon"></i>
                    <h3 class="name">Customizable</h3>
                    <p class="description">Aktivitas usaha Ekselensi Printing and Design diupayakan untuk menghasilkan kualitas cetakan terbaik guna memenuhi harapan dan tingkat kepuasan klien.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="far fa-smile-beam icon"></i>
                    <h3 class="name">Keramahan</h3>
                    <p class="description">Aktivitas usaha Ekselensi Printing and Design mengutamakan keramahan berinteraksi yang santun dan tulus.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-blue" style="background-color: rgb(245,144,18);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Tentang Kami</h2>
                <p class="text-center"><br>Ekselensi Digital Printing adalah perusahaan yang bergerak di bidang digital printing dengan format besar/lebar dan kecil. Kami merupakan perusahaan yang menyediakan layanan digital printing 24 jam di Jakarta.<br><br></p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="<?= base_url('ekselensi/about') ?>">Selanjutnya</a></div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p><img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>