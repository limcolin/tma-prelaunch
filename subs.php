<?
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$email = @ trim ($_POST['email']);

//mailchimp add subscrible
include_once 'MailChimp.php';
$MailChimp = new \DrewM\MailChimp\MailChimp('b1a5d9ad15baa89581242ac2fa824993-us15');

$result = $MailChimp->post('lists/def3dfc163/members', array(
                'email_address'     => $email,
                'status'            => 'subscribed',
            ));

//$result = $MailChimp->get('lists');
/*
if ($MailChimp->success()) {
    print_r($result);
} else {
    echo $MailChimp->getLastError();
    print_r($MailChimp->getLastResponse());
}
*/
header ("Location: thanks_sub.html");
?>