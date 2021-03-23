<?php


require_once __DIR__ . '/vendor/autoload.php';

//Variables
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

// Create new PDF instance

$mpdf = new \Mpdf\Mpdf();

// Create our PDF
$data='';

$data .='<strong>First Name :</strong>'.$firstname .'<br>';
$data .='<strong>Last Name :</strong>'.$lastname .'<br>';
$data .='<strong>Email Address : </strong>'.$email .'<br>';
$data .='<strong>Phone No. :</strong>'.$phone .'<br>';

if($message){
    $data .='<br><strong>Message</strong> <br>'.$message.'<br>';
}

// Write PDF
$mpdf->WriteHTML($data);

// Output to browser
$mpdf->Output($firstname .'.pdf', 'D');

?>