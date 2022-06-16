<meta charset="utf-8"> 
<?php
error_reporting( E_ERROR ); 

if (isset($_POST['username']))			{$username			= $_POST['username'];		if ($username == '')	{unset($username);}}
if (isset($_POST['userphone']))		{$userphone		= $_POST['userphone'];		if ($userphone == '')	{unset($userphone);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}

if (isset($username) ) {
$username=stripslashes($username);
$username=htmlspecialchars($username);
}
if (isset($userphone) ) {
$userphone=stripslashes($userphone);
$userphone=htmlspecialchars($userphone);
}

$message = "
Имя: $username \r\n
Телефон: $userphone
";

$message = wordwrap($message, 70);

$headers = 'From: aqulife@example.com' . "\r\n" .
    'Reply-To: aqulife@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

var_dump(mail('elfyz2016@gmail.com', 'Регистрация заявки - Aqualife', $message, $headers));
echo "<div style='max-width:1024px; margin:0 auto; padding:0 20px; text-align: center;'>
<p style='color:green;'>Уважаемый(ая) <b style='color:red; font-size:24px'>$username</b> Ваше письмо отправленно успешно. Спасибо. <br>Вам перезвонят в течении 2 часов на номер<b style='color:red;'><span style='letter-spacing: 2px;'> $userphone</span></b>.</p>
</div>";
?>
