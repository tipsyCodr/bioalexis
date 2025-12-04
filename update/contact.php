<?php require_once('couch/cms.php'); ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<?php require_once 'partials/head.php' ?>
</head>

<body>
	<?php require_once 'partials/navbar.php' ?>

	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Contact Us</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact Us -->
	<section class="contact-us section">
		<div class="container">
			<div class="inner">
				<div class="row">

					<!-- LEFT: MAP -->
					<div class="col-lg-6">
						<div class="contact-us-left">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.687579934642!2d81.60625737926729!3d21.24423393007581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde70df853c3%3A0xa6c26dca36388e0b!2sNational%20Corporate%20Park%2C%20Geeta%20Nagar%2C%20Choubey%20Colony%2C%20Ramkund%2C%20Raipur%2C%20Chhattisgarh%20492001!5e0!3m2!1sen!2sin!4v1728316046461!5m2!1sen!2sin"
								style="border:0;width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>

					<!-- RIGHT: FORM -->
					<div class="col-lg-6">
						<div class="contact-us-form">
							<h2>Contact With Us</h2>
							<p>If you have any questions please feel free to contact us.</p>
							<?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
								<div style="padding:10px; background:#d4edda; color:#155724;">
									✅ Your message has been sent successfully.
								</div>
							<?php endif; ?>

							<?php if (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
								<div style="padding:10px; background:#f8d7da; color:#721c24;">
									❌ Failed to send email. Please try again later.
								</div>
							<?php endif; ?>

							<!-- SIMPLE PHP FORM (NO COUCH CMS FORM) -->
							<form class="form" method="post" action="mail/mail.php">

								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" name="name" placeholder="Name" required>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<input type="email" name="email" placeholder="Email" required>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" name="phone" placeholder="Phone" required>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" name="subject" placeholder="Subject" required>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<textarea name="message" placeholder="Your Message" required></textarea>
										</div>
									</div>

									<div class="col-12">
										<div class="form-group login-btn">
											<button type="submit" class="btn">Send</button>
										</div>
									</div>
								</div>

							</form>
							<!-- END FORM -->

						</div>
					</div>

				</div>
			</div>

			<div class="contact-info">
				<div class="row">

					<!-- single-info -->
					<div class="col-lg-4 col-12">
						<div class="single-info">
							<i class="icofont icofont-ui-call"></i>
							<div class="content">
								<h3 style="padding:0px">+(91) 8827268754</h3>
								<h3 style="padding-top:5px;">0771-4053284</h3>
								<p style="padding:0px">info@bioalexis.com</p>
							</div>
						</div>
					</div>

					<!-- single-info -->
					<div class="col-lg-4 col-12">
						<div class="single-info">
							<i class="icofont-google-map"></i>
							<div class="content">
								<h3>Raipur 492001</h3>
								<p style="padding:0;">Office no 201, National Corporate Park, GE Road, Raipur 492001</p>
							</div>
						</div>
					</div>

					<!-- single-info -->
					<div class="col-lg-4 col-12">
						<div class="single-info">
							<i class="icofont icofont-wall-clock"></i>
							<div class="content">
								<h3 style="padding:0px">Mon - Sat: 10:30am - 7pm</h3>
								<p style="padding:0px">Sunday Closed</p>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!--/ End Contact Us -->

	<?php require_once 'partials/footer.php'; ?>
	<?php require_once 'partials/scripts.php'; ?>

</body>

</html>
<?php COUCH::invoke(); ?>