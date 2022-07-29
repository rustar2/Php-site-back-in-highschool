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
    <form id="form1" action="index2.php" method="POST">
    <div id="anadiv">
	
        <div id="admindiv">
               <?php
 
include("ayar.php");
session_start();
 
//eğer login session kaydı yapılmadan yani giriş yapmadan admin.php sayfamıza erişmek isterlerse buna engel oluyoruz.
 
if(!isset($_SESSION["login"]))
{
 
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
 
}
else
{
echo '<h2 >Hoşgeldin:'.$a."<br></h2>";
echo "<a href=\"logout.php\" Class='button button2'>Oturumu Kapat</a>";
}
?>
            <br />
            <h2 >Üye Bilgileri</h2>
            <table class="auto-style1">
                <tr>
                    <td class="auto-style4">Adı:</td>
                    <td class="auto-style5">
                        <input  Class="inputs"" type="text" name="adi">
                    </td>
                </tr>
                <tr>
                    <td class="auto-style4">Soyadı:</td>
                    <td class="auto-style5">
                        <input Class="inputs" type="text" name="soyadi">
                    </td>
                </tr>
				
				<tr>
                    <td class="auto-style4">Doğum Tarihi</td>
                    <td>
					
						<select  Class="inputes" name="gun" /> 
    <option>1</option>       
    <option>2</option>       
    <option>3</option>       
    <option>4</option>       
    <option>5</option>       
    <option>6</option>       
    <option>7</option>       
    <option>8</option>       
    <option>9</option>       
    <option>10</option>       
    <option>11</option>       
    <option>12</option>       
    <option>13</option>       
    <option>14</option>       
    <option>15</option>       
    <option>16</option>       
    <option>17</option>       
    <option>18</option>       
    <option>19</option>       
    <option>20</option>       
    <option>21</option>       
    <option>22</option>       
    <option>23</option>       
    <option>24</option>       
    <option>25</option>       
    <option>26</option>       
    <option>27</option>       
    <option>28</option>       
    <option>29</option>       
    <option>30</option>       
    <option>31</option>       
  </select>
						 <select  Class="inputes"  name="ay" /> 
							<option>Ocak</option>       
							<option>Şubat</option>       
							<option>Mart</option>       
							<option>Nisan</option>       
							<option>Mayıs</option>       
							<option>Haziran</option>       
							<option>Temmuz</option>       
							<option>Ağustos</option>       
							<option>Eylül</option>       
							<option>Ekim</option>       
							<option>Kasım</option>       
							<option>Aralık</option>       
						</select>
						
  <select  Class="inputes"  name="yil" /> 
    <option>2009</option>       
    <option>2010</option>       
    <option>2011</option>       
    <option>2012</option>       
    <option>2013</option>       
    <option>2014</option>       
    <option>2015</option>       
    <option>2016</option>       
    <option>2017</option>       
    <option>2018</option>       
  </select> 
					
					
					</td>
                </tr>
				
				
				<tr>
                    <td class="auto-style4">E-Mail:</td>
                    <td class="auto-style5">
                        <input Class="inputs" type="text" name="mail">
                    </td>
                </tr>
				
				<tr>
                    <td class="auto-style4">Mesaj:</td>
                    <td class="auto-style5">
                        <textarea Class="inputs" type="text"  name="mesaj"></textarea>
                    </td>
                </tr>
				
				<tr>
                    <td class="auto-style4">Cinsiyet:</td>
                    <td class="auto-style5">
                        Erkek:<input  type="radio" value="Erkek"  name="cins"/>
						Kız:<input  type="radio" value="Kız" name="cins"/>
                    </td>
                </tr>
				
				
				<tr>
                    <td class="auto-style4">Hobiler:</td>
                    <td class="auto-style5">
                        <input  type="checkbox" value="Futbol"  name="hobi"/>Futbol </br>
						<input  type="checkbox" value="Hentbol" name="hobi"/>Hentbol</br>
						<input  type="checkbox" value="Basketbol" name="hobi"/>Basketbol
                    </td>
                </tr>
				
				
				<tr>
                    <td class="auto-style4">İliniz:</td>
                    <td>
					
						 <select  name="il" /> 
							<option>Ankara</option>       
							<option>İstanbul</option>       
							<option>Adana</option>       
							<option>Mersin</option>       
							<option>Samsun</option>       
							<option>Antalya</option>       
							<option>Kocaeli</option>       
							<option>Ağrı</option>       
							<option>Iğdır</option>       
							<option>Aksaray</option>       
							<option>Bolu</option>       
							<option>Rize</option>       
						</select>
						
					
					
					</td>
                </tr>
								
				
				
                <tr>
                    <td class="auto-style4"></td>
                    <td class="auto-style5">
                        <input Class="button button2" type="submit" value="Gonder">
					</td>
                </tr>
              
            </table>

        </div>
    
    </div>
    </form>
 
</body>
</html>