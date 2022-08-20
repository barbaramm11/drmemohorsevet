<html>
<head>
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Contact Form</title>
<link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
</head>

<h3>Contact us</h3>
            <form id="contact-form" method="post" action="contact.php" role="form">
              <input type="text" id="name" name="name" class="form-control mb-4 px-0" placeholder="Full name">
              <input type="email" id="name" name="name" class="form-control mb-4 px-0" placeholder="Email address">
              <textarea name="message" id="message" class="form-control mb-4 px-0" placeholder="Message"></textarea>
              <div class="form-group">
    <label>What do you need?</label> 
    <div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="consultation"> 
        <label for="checkbox_0" class="custom-control-label">In-person Consultation</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="interview"> 
        <label for="checkbox_1" class="custom-control-label">Interview</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_2" type="checkbox" class="custom-control-input" value="emergency"> 
        <label for="checkbox_2" class="custom-control-label">Emergency</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_3" type="checkbox" class="custom-control-input" value="videocall"> 
        <label for="checkbox_3" class="custom-control-label">Video call</label>
      </div>
    </div>
  </div> 

  <?php
if (! empty($displayMessage)) {
    ?>
            <div class="row">
				<div class="col-md-8">
					<div id="statusMessage" class="alert alert-success mt-3"
						role="alert"><?php echo $displayMessage; ?>
					</div>
				</div>
			</div>
<?php
}
?>
		</form>
	</div>
	<script type="text/javascript" src="./js/validation.js"></script>
</body>
</html>