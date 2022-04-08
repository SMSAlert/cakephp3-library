# cakephp3-library

<h2>Overview</h2> 
Sms Alert Cakephp 3 Library for sending transactional/promotional SMS, through your custom code. Easy to integrate, you just need to write 2 lines of code to send SMS.

<h2>Parameters Details</h2>
<h3>If you have no account on smsalert.co.in, kindly register <a href="https://www.smsalert.co.in/">https://www.smsalert.co.in/</a></h3>
<ul>
        <li>username : SMS Alert User Name</li>
        <li>password : SMS Alert current Password</li>
        <li>senderid : Receiver will see this as sender's ID(for demo account use CVDEMO)</li>
</ul>




<h2>Usage</h2>
<h3>Download zip folder from this github repository. Create a folder Lib here:-  </h3>
yourproject\vendor\cakephp\cakephp\src\ <h3> Extract the folder SmsAlertLib to</h3> yourproject\vendor\cakephp\cakephp\src\Lib\


<h3>Change below variables at yourproject\vendor\cakephp\cakephp\src\Lib\SmsAlertLib\SmsAlertLib.php:</h3>
	$user = "Smsalert username";<br>
	$pass = "Smsalert password";<br>
	$senderid = "Smsalert senderid";

<h3>Call SMS Alert library as shown below in your controller:</h3>
	use Cake\Lib\SmsAlertLib\SmsAlertLib;

<h3>To send sms, Call smsalertlib object and call sendsms function in your controller:</h3>

	$result = SmsAlertLib::sendmsg($phone, $message);


<h3>To Send OTP, Call smsalertlib object and below functions in your controller:</h3>
	
	$result = SmsAlertLib::generate_Otp($mobileno, $template);


<h3>To Verify OTP, Call smsalertlib object and below functions in your controller:</h3>
	
	$result= SmsAlertLib::validate_Otp($otp, $mobileno);


<h2>Support</h2>
Email : <a href="support@cozyvision.com">support@cozyvision.com</a><br>
Phone : 080-1055-1055
