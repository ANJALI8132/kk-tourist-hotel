<?php
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

if(isset($_POST['submit']) and !empty($_POST['submit'])){
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $requests=$_POST['requests'];
    $ip=get_client_ip();

    $mail1_subject="KK Tourist Hotel Appointment Enquiry, " . $name;
    $mail1_txt="Name :" . $name . "<br>" . "Last Name :" . $lname . "<br>" . "E-Mail :" . $email . "<br>" . "Phone :" . $phone . "<br>" . "Check In :" . $checkin . "<br>" .  "Check Out :" . $checkout . "<br>" . "Requests :" . $requests . "<br>" . "IP :" . $ip . "<br>";




// More headers
$headers .= 'From: <kktouristhome007@gmail.com>' . "\r\n";

$to = "cyril.viralmafia@gmail.com, kktouristhome007@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmailerrajadhani.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);

    if($complete){
        header("location:index?id=1");
    }
}


?>