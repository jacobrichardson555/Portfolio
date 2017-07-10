<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$timeline = $_POST['timeline'];
$budget = $_POST['budget'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
	header('Location: error.html');
    #echo "Name and email are mandatory!";
    exit;
}
if (filter_var($visitor_email, FILTER_VALIDATE_EMAIL) === false)
{
	header('Location: error.html');
	exit;
}
if(IsInjected($visitor_email))
{
	header('Location: error.html');
	exit;
}

$email_from = 'jacobrichardson555@gmail.com';
$email_subject = "New Inquiry";
$email_body = "Name: $name.\n".
							"email: $visitor_email.\n".
							"timeline: $timeline.\n".
							"budget: $budget.\n".
              "Message: $message\n\n\n".

$to = "jacobrichardson555@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
$visitor_headers = "MIME-Version: 1.0" . "\r\n";
$visitor_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$visitor_headers .= "From: $to \r\n";
$visitor_headers .= "Reply-To: $to \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
#mail($to,$visitor_email_subject,$visitor_email_body,$visitor_headers);
$visitor_email_subject = "Thank you for your inquiry!";
$visitor_email_body = "
<html>
	<body>
	<style>
@media screen and (max-width: 900px){
	.main{
		width: 100%;
	}
}
</style>
<table cellpadding='0' cellspacing='0' width='100%'>
<tr>
	<td>
		<table cellpadding='0' cellspacing='0' width='900' bgcolor='#ccc' align='center' class='main'>
			<tr>
				<td align='center' height='100' style='padding: 20px;'><h1>Thank you $name!</h1></td>
			</tr>
			 <tr>
				<td style='padding: 20px 0;'>
					<table width='95%' align='center' border='1' bordercolor='#555' ></table>
				</td>
			</tr>
			 <tr>
				<td align='center' style='padding: 40px;'>
					<h3>This is to confirm that I have recieved your inquiry.</h3><br />
					<h3>If you have any other questions or concerns, please do not hesitate to contact me directly at jacobrichardson555@gmail.com or via my cell phone at 501-772-3923.</h3><br />
					<h3>Thank you again and have a great day!</h3>
				</td>
			</tr>
			<tr>
				<td>
					<table cellpadding='0' cellspacing='0' border='1' align='center' width='50%'>
						<tr>
						<td align='center' width='50%'>Name</td><td align='center' width='50%'>$name</td>
						</tr>
						<tr>
						<td align='center' width='50%'>email</td><td align='center' width='50%'>$visitor_email</td>
						</tr>
						<tr>
						<td align='center' width='50%'>Timeline</td><td align='center' width='50%'>$timeline</td>
						</tr>
						<tr>
						<td align='center' width='50%'>Budget</td><td align='center' width='50%'>$budget</td>
						</tr>
						<tr>
						<td align='center' width='50%'>Comments</td><td align='center' width='50%'>$message</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style='padding: 50px 0 20px;'>
					<table width='95%' align='center' border='1' bordercolor='#555' ></table>
				</td>
			</tr>
			<tr>
				<td align='center' style='padding: 10px 0 30px'>
					<p><img src='http://www.alt-codes.net/images/copyright-symbol.png' alt='copyright' width='10' style='position: relative; top: -10px;' /><a href='#'>Jacob Richardson</a> 2017</p>
					<a href='https://www.facebook.com/jacob.richardson.399?pnref=about.overview.rel'><img src='http://www.freeiconspng.com/uploads/facebook-logo-png-black-image--23.png' alt='facebooklogo' width='60'/></a>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
	</body>
</html>";

mail($visitor_email,$visitor_email_subject,$visitor_email_body,$visitor_headers);
//done. redirect to thank-you page.
header('Location: thankyou.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
