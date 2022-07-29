<html>
<head >
    <link href="css/loginStyle.css" rel="stylesheet" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>index</title>
    <style type="text/css">
        .auto-style4 {
            text-align: right;
            width: 94px;
            height: 35px;
        }
        .auto-style5 {
            height: 35px;
            width: 297px;
        }

        </style>
    
</head>
<body>

<form>
    <div id="anadiv">
        <div id="uyediv">
               <?php
echo "Adınız: ".$_POST['adi'].'</br>';
echo "Soyadınız: ".$_POST['soyadi'].'</br>';
echo "Doğum Tarihiniz: ".$_POST['gun'].$_POST['ay'].$_POST['yil'].'</br>';
echo "E-mailiniz: ".$_POST['mail'].'</br>';
echo "Mesajınız: ".$_POST['mesaj'].'</br>';
echo "Cinsiyetiniz: ".$_POST['cins'].'</br>';

echo "Hobiniz: ".$_POST['hobi'].'</br>';
echo "İl: ".$_POST['il'].'</br>';
?>


        </div>
    
    </div>
    </form>
 
</body>
</html>