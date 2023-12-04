
<?php
 if($_POST)
 {

$user_name;
$user_email;
$messages;

if(isset($_POST['name']))
  $user_name=$_POST['name'];
if(isset($_POST['email']))
  $user_email=$_POST['email'];
if(isset($_POST['message']))
$messages=$_POST['message'];

  $htservername=$_SERVER['HTTP_HOST'];
 // echo "$user_name.' '.$user_email.' '.messages";
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <'.$user_email.'>' . "\r\n";
	//$headers .= 'Bcc: fuad.hasan@chefonline.co.uk' . "\r\n";
	//$to       = "investors@lechefplc.com";
	$to       = "enquiry@bloomingdale.uk";
	//$to       = "sazzad.hossain@chefonline.co.uk";
	$subject  = 'Bloomingdale Enquiry';
	$message  = "<table bgcolor='#D7D7D7' align='center' border='0' cellpadding='0' cellspacing='0' style='width:100%;padding:0;background:#D7D7D7; margin:0; padding:0;'>
				<tr>
					<td>
						<table align='center' border='0' cellpadding='0' cellspacing='0' width='620' style='width:620px;'>
							<tbody>
								<tr style='width:100%;display:block'>
									<td style='width:100%;display:block'><p style='height:30px; color:#fff; margin:0; padding:0; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp; </p></td>
								</tr>
							</tbody>
						</table>
						
						<!-- logo section Start-->
						<table bgcolor='#f3f3f3' align='center' border='0' cellpadding='0' cellspacing='0' width='620' style='width:620px; background:#444444;'>
							<tbody>
								<tr style='width:100%;display:block'>
									<td style='width:100%;display:block'><p style='height:15px; color:#fff; margin:0; padding:0; font-size:4px;font-family:Verdana, Geneva, sans-serif;'>&nbsp; </p></td>
								</tr>
								<tr style='width:100%;display:block'>
									<td style='width:100%;display:block' align='center'>&nbsp;
										<p style='color:#fff; text-align:center; margin:0; padding:0;'> <img width='200' src='https://www.bloomingdale.uk/images/bloomingdale-logo2.png'/></p>&nbsp;
									</td>
								</tr>
								<tr style='width:100%;display:block' id='blankSpace'>
									<td style='width:100%;display:block' align='center'>
										<p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; font-size:4px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
									</td>
								</tr>
								
							</tbody>
						</table>
						<!-- logo section end-->
						
						
						<!-- customer greetings section start-->
						<table bgcolor='#fff'  align='center' border='0' cellpadding='0' cellspacing='0' width='620' style='width:620px; background:#fff;'>
							<tbody>
								<tr style='width:100%;display:block' id='blankSpace'>
									<td style='width:100%;display:block' align='center' colspan='3'>
										<p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
									</td>
								</tr>
								<tr style='width:100%;display:block' id='blankSpace'>
									<td style='width:15px;'>
										<p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; width:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
									</td>
									<td style='width: 590px;'>
										<p style='color:#000; text-align: center; margin:0; padding:0; font-size:14px;font-family:Verdana, Geneva, sans-serif; line-height:20px; margin-bottom:20px; display: block; width: 100%;'><b style='text-align:center; display: block; width: 100%;'>Enquiry Details</b>
											<br />
											<br /></p>
											<p style='color:#000; text-align: left; margin:5px; padding:0; font-size:14px;font-family:Verdana, Geneva, sans-serif; line-height:20px;'>
												<span style='color:#000;'><b>Name:</b> $user_name</span>
												<br />
												<b>Email:</b> <a href='mailto:$user_email' style='color:#000;'>$user_email</a>
												<br />
												<span style='color:#000;'><b>Message:</b> $messages</span>
											</p>
											<br />
											<br />
									</td>
									<td style='width:15px;'>
										<p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; width:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
									</td>
								</tr>
								
								<tr style='width:100%;display:block' id='blankSpace'>
									<td style='width:100%;display:block' align='center' colspan='3'>
										<p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'>&nbsp;  </p>
									</td>
								</tr>
								
							</tbody>
						</table>
						<table align='center' border='0' cellpadding='0' cellspacing='0' width='620' style='width:620px;'>
							<tbody>
								<tr style='width:100%;display:block' id='blankSpace'>
									<td style='width:100%;display:block' align='center' colspan='3'>
										<p style='color:#fff; text-align:center; margin:0; padding:0; height:15px; font-size:14px;font-family:Verdana, Geneva, sans-serif;'> &nbsp; </p>
									</td>
								</tr>
							</tbody>
						</table>
						
						<table bgcolor='#444444' align='center' border='0' cellpadding='0' cellspacing='0' style='width:100%; background:#444444;'>
							<tbody>
								<tr>
									<td><p style='color:#fff; text-align:center; margin:10px; padding:0; font-size:10px;font-family:Verdana, Geneva, sans-serif;'>  Copyright © Bloomingdale 2021. All rights reserved.   </p></td>
								</tr>
							</tbody>
						</table>
						
					</td>
				</tr>
			</table>";
					$message .="</hr>";
					$message .="<br><br>";
					$message .="<p style='text-align:center'>";
					$message .="This email was sent from "."<a href='$htservername'>$htservername </a>";
					$message .="</p>";
	// echo $message;
	// exit;
    $email_succ= mail($to, $subject, $message, $headers);
	if($email_succ){
		echo "sent";
	 }else if(!$email_succ){
		echo "Email sending failed";
	}else{
		echo "not sent";
	}
	

 }
?>