<!doctype html>
<html lang="en">

<head>
	<title>Kontak Jalumas Banyumas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets') ?>/login/images/lg.png"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url('assets') ?>/kontak/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Kontak Jalumas Banyumas</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-0">Kirimkan pesan kepada Kami</h3>
									<p class="mb-4">Kami akan segera menghubungi anda kembali.</p>

									<div class="mb-4"></div>
									<div class="mb-4">

										<?php if (!empty(session()->getFlashdata('error'))) : ?>
											<div class="alert alert-danger alert-dismissible fade show" role="alert">
												<h5>Periksa Isian Form!</h5>
												</hr />
												<?php echo session()->getFlashdata('error'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php endif; ?>

										<?php if (!empty(session()->getFlashdata('result'))) : ?>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<?php echo session()->getFlashdata('result'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php endif; ?>
									</div>

									<form method="POST" action="<?= base_url('kontak/submit') ?>" id="contactForm" name="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim" placeholder="Nama">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control" name="email_pengirim" id="email_pengirim" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="nope_pengirim" id="nope_pengirim" placeholder="No. WhatsApp">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<select name="subjek" class="form-control" id="subjek">
														<option value="Pendaftaran Agen">Pendaftaran Agen</option>
														<option value="Lainnya">Pesan Umum</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="pesan" class="form-control" id="pesan" cols="30" rows="7" placeholder="Tulis pesan..."></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<!-- <input type="submit" value="Kirim Pesan" class="btn btn-primary" /> -->
													<button type="submit" class="btn btn-primary" aria-label="Left Align">
														<b>Kirim Pesan</b><span class="fa fa-paper-plane fa-lg ml-3" aria-hidden="true"></span>
													</button>
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
								<?php
        							
                     					foreach ($profil as $row) {
                    
                    			?>
									<h3 class="mb-4 mt-md-4">Hubungi Kami</h3>
									
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><?= $row->alamat; ?></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><a href="tel://<?= $row->nope; ?>"><?= $row->nope; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><a href="mailto:<?= $row->email; ?>"><?= $row->email; ?></a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-globe"></span>
										</div>
										<div class="text pl-3">
											<p><a href="http://<?= $row->website; ?>"><?= $row->website; ?></a></p>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url('assets') ?>/kontak/js/jquery.min.js"></script>
	<script src="<?php echo base_url('assets') ?>/kontak/js/popper.js"></script>
	<script src="<?php echo base_url('assets') ?>/kontak/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo base_url('assets') ?>/kontak/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url('assets') ?>/kontak/js/main.js"></script> -->

</body>

</html>