<?php 
	print '
	<h1>Contact Form</h1>
	<div id="contact">
		<iframe src="https://www.google.com/maps/@45.8114366,15.8716168,17z" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>
			
			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>';
?>