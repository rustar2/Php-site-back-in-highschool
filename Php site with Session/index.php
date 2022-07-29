<!DOCTYPE HTML>
<html>
<head >
    <link href="css/loginStyle.css" rel="stylesheet" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Giriş Sayfası</title>
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
    <form id="form1" action="login.php" method="POST">
    <div id="anadiv">
        <div id="uyediv">
               
            <br />
            <h2 >Kullanıcı Girişi</h2>
            <table class="auto-style1">
                <tr>
                    <td class="auto-style4">Kullanıcı Adı:</td>
                    <td class="auto-style5">
                        <input  Class="inputs"" type="text" name="ad" placeholder="Kulanıcı Adınız">
                    </td>
                </tr>
                <tr>
                    <td class="auto-style4">Şifre:</td>
                    <td class="auto-style5">
                        <input Class="inputs" type="text" name="sifre" placeholder="Parolanız">
                    </td>
                </tr>
                <tr>
                    <td class="auto-style4"></td>
                    <td class="auto-style5">
                        <input Class="button button2" type="submit" value="Giriş">
					</td>
                </tr>
              
            </table>

        </div>
    
    </div>
    </form>
 
</body>
</html>

