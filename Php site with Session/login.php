<?php
include("ayar.php");
session_start();
ob_start();
  
 
if(($_POST["ad"]==$a) and ($_POST["sifre"]==$b))
{
 
//eğer bilgiler doğruysa login ismi verdiğimiz session kaydını yapıyoruz.ve session kaydını kullanıcı adıyla şifremize eşitliyoruz.
 
$_SESSION["login"] = "true";
echo $_POST["ad"];
echo $_POST["sifre"];
header("Location:admin.php");
 
}
else
{
 
//diğer durumda hata mesajı verip giriş sayfamıza yönlendiriyoruz.
 
echo "Kullanıcı adı veya Şifre Yanlış.";
header("Refresh: 2; url=index.php");
 
}
 
ob_end_flush();
 
?>