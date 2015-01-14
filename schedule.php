<?php 
	require_once('templates.php');
	displayHeader(4);

	if (isset($_POST['email'])) {

		$msg = "Name: ".$_POST['firstName']." ".$_POST['lastName'].
		"\nEmail: ".$_POST['email'].
		"\nPhone: ".$_POST['phone'].
		"\n\nAddress: ".$_POST['address'].
		"\nBest Time: ".$_POST['time'].
		"\n\nDescription:\n".$_POST['description'];

		mail("mcarmi4@uic.edu", "Snow Job", $msg);
		header("LOCATION: schedule.php?submitted=true");
	}
?>
<div id="pageContent">
	<?php if (!isset($_GET['submitted'])) : ?>
	<form action="" method="post">
		<table cellspacing="20" id="contactTable">
			<tr>
				<td colspan="2"><h2>Schedule Snow Removal</h3></td>
			</tr>
			<tr>
				<td colspan="2">
					<input id="newCustomer" type="checkbox" style="float:left; margin:7px 10px 0 0; cursor:pointer" />
					<label id="newCustomerLabel" class="formSectionTitle" style="color:rgb(81, 153, 168); font-weight:bold; font-size: 18px; cursor:pointer"> Returning Customer</label>
				</td>
			</tr>
			<tr>
				<td>
					<label class="formSectionTitle">Name <span style="color:#f00">*</span></label>
					<br>
					<input style="width: 190px;" type="text" name="firstName">
					<br>
					<label class="formInputDescription">First</label>
				</td>
				<td>
					<br>
					<input style="width: 190px;" type="text" name="lastName">
					<br>
					<label class="formInputDescription">Last</label>
				</td>
				<td rowspan="4" style="vertical-align:top;padding-left:50px">
					<p>
						This is one option for scheduling snow removal through us. We thought a web form would simplify the process for some users so this form gives you the means to do so.
						<br><br>
						Another option for communication is via text message or phone call to Matt Carmichael at (847) 970-1573. 
					</p>
				</td>
			</tr>
			<tr class="newCustomerSection">
				<td colspan="2">
					<label class="formSectionTitle">Email <span style="color:#f00">*</span></label>
					<br>
					<input type="text" name="email">
				</td>
			</tr>
			<tr class="newCustomerSection">
				<td colspan="2">
					<label class="formSectionTitle">Phone Number <span style="color:#f00">*</span></label>
					<br>
					<input type="text" name="phone">
				</td>
			</tr>
			<tr class="newCustomerSection">
				<td colspan="2">
					<label class="formSectionTitle">Address <span style="color:#f00">*</span></label>
					<br>
					<input type="text" name="address">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label class="formSectionTitle">Best Time<span style="color:#f00">*</span></label>
					<br>
					<input type="text" name="time" placeholder="i.e. ASAP, After 5:00pm">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label class="formSectionTitle">Job Descrition <span style="color:#f00">*</span></label>
					<br>
					<label class="formInputDescription">i.e. Driveway with an average front and long back sidewalks</label>
					<br>
					<textarea rows="12" class="formTextArea" name="description"></textarea>
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
</div>
<?php else : ?>
	<br><br>
	<p style="text-align: center"> Schedule form submitted! We will get back to you as soon as possible and let you know when we can make it! For contact about this specific job contact Matt Carmichael at (847) 970-1573.</p>
	<br><br>
</div>
<?php endif; ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="functions.js"></script>

<script>
	$('document').ready(function(){
		$('form').submit(function(event){
			validateScheduleForm(event);
		});
		$("#newCustomer").click(function(){
			newCustomerCheckBox();
		});
		$("#newCustomerLabel").click(function(){
			if($("#newCustomer").prop('checked')){
				$("#newCustomer").prop('checked', false);
			}else{
				$("#newCustomer").prop('checked', true);
			}
			newCustomerCheckBox();
		});
	});
</script>
<?php displayFooter(); ?>