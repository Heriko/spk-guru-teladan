<html>
<head>
<title>Pemilihan Guru Terbaikn</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel='icon'  href='img/icon.jpg'></link>
</head>
<body>
<div id="container">


<?php include "header.php"; ?>


<div class="conten">

				<?php
				include "koneksi.php";
					$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from data where id='2'");
					while ($tampil = mysqli_fetch_array($query))
					{
					$isi = $tampil['isi'];
					echo "$isi";
					}
				?>
				<br><br>

</div>


<?php include "footer.php"; ?>



</div>

<br><br>
</body>
</html>