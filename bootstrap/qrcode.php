<?Php
require_once("lib/PromptPayQR.php");

$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 20; // Set QR code size to 8
$PromptPayQR->id = '004999055464720'; // PromptPay ID
$PromptPayQR->amount = 200.25; // Set amount (not necessary)
echo '<img src="'. $PromptPayQR->generate().'" />';
echo "ควย";
?>
