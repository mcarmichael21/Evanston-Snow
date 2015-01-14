<?php 
	require_once('templates.php');
	displayHeader(3);

	if (isset($_POST['email'])) {

		$msg = "Name: ".$_POST['firstName']." ".$_POST['lastName'].
		"\nEmail: ".$_POST['email'].
		"\n\nMessage:\n".$_POST['message'];

		mail("mcarmi4@uic.edu", "Snow Contact", $msg);
		header("LOCATION: contact.php?submitted=true");
	}
?>
<div id="smallBanner"></div>
<div id="pageContent">
	<?php if (!isset($_GET['submitted'])) : ?>
	<form action="" method="post">
		<table cellspacing="20" id="contactTable">
			<tr>
				<td colspan="2"><h2>Contact Form</h3></td>
			</tr>
			<tr>
				<td>
					<label class="formSectionTitle">Name <span style="color:#f00">*</span></label>
					<br>
					<input style="width: 200px;" type="text" name="firstName">
					<br>
					<label class="formInputDescription">First</label>
				</td>
				<td>
					<br>
					<input style="width: 200px;" type="text" name="lastName">
					<br>
					<label class="formInputDescription">Last</label>
				</td>
				<td rowspan="4" style="vertical-align:top;padding-left:50px">
					<p>
						This form will put you in contact with Matt Carmichael. 
						<br><br>
						Another form of contact is via text message or phone call at 
						<br>
						(847) 970-1573.
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label class="formSectionTitle">Prefered Method of Contact <span style="color:#f00">*</span></label>
					<br>
					<input type="radio" name="method" value="Text Message" style="margin:8px 0" checked>
					<label class="radioOption"> Text Message</label><br>
					<input type="radio" name="method" value="Email" style="margin:8px 0">
					<label class="radioOption"> Email</label><br>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label id="emailPhone" class="formSectionTitle">Phone <span style="color:#f00">*</span></label>
					<br>
					<input type="text" name="email">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label class="formSectionTitle">Message <span style="color:#f00">*</span></label>
					<br>
					<textarea rows="12" class="formTextArea" name="message"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" id="formButton">
					<p id="formError">*Please correct the highlighted fields</p>
				</td>
			</tr>
		</table>
	</form>
<?php else : ?>
	<br><br>
	<p style="text-align: center"> Contact form submitted! We will get back to you as soon as possible!</p>
	<br><br>
<?php endif; ?>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
	$('document').ready(function(){
		$("input[name='method']").change(function(){
			if ($("input[name='method']:checked").val() == "Text Message") {
				$("#emailPhone").html("Phone <span style='color:#f00'>*</span>");
			}else{
				$("#emailPhone").html("Email <span style='color:#f00'>*</span>");
			}
		});
	});
</script>
<script src="functions.js"></script>
<script>
	$('document').ready(function(){
		$('form').submit(function(event){
			validateContactForm(event);
		});	
	});
</script>
<?php displayFooter(); ?>