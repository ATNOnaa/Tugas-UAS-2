<?php 
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  session_start();
  include 'halaman/koneksi.php';
?>
<html>
<head>
	<title>Poject UAS</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<div class="content">
		<nav id="menu">
     		<ul>
        		<li><a href="index.php?page=home">HOME</a></li>
				<li><a href="index.php?page=sejarah">SEJARAH</a></li>
				<li><a href="index.php?page=mysql">MYSQL</a></li>
				<li><a href="index.php?page=demo">DEMO</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="">CONTACT</a>

					<ul class="dropdown-menu">
						<li><a href="https://mail.google.com/mail/u/0/#inbox?compose=new">GMAIL</a></li>
						<li><a href="https://www.instagram.com/ilhamsyah_1704/">INSTAGRAM</a></li>
						<li><a href="https://www.facebook.com/ilhamsyah1704">FACEBOOK</a></li>
						<li><a href="https://api.whatsapp.com/send?phone=6289621488482">WHATSAPP</a></li>
					</ul>
				</li>
    		</ul>

    	<p style="padding: 15px; margin: 0; text-align: justify; line-height: 23px; float: left;
    	width: 3px;"></p>
    	<p style=" padding: 15px; margin: 0; text-align: justify; line-height: px; float: right;
   	 	width: 80px;"></p>
		</nav>
	</div>
	
	<div class="counter" align="right">
		<?php
			$filename = 'counter.txt';
 
			function counter(){     
   	 		global $filename;   
 
    		if(file_exists($filename)){     
        		$value = file_get_contents($filename);  
    		}else{      
        		$value = 0;     
    		}
 
    		file_put_contents($filename, ++$value);     
			}
 
			counter();  
 
			echo "Pengunjung: ".file_get_contents($filename); 
		?>
	</div>
 
	<div class="badan">
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'sejarah':
				include "halaman/sejarah.php";
				break;
			case 'mysql':
				include "halaman/mysql.php";
				break;
			case 'demo':
				include 'halaman/demo.php';
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>

	<div class="footer">
		<div class="footer2">
			<p style="font-size: 13px;">
				<b>Version</b> 1.0 <br>
				Copyright &copy; 2012 <a href="https://www.instagram.com/ilhamsyah_1704/">Ilhamsyah Osmar.</a>
			</p>
		</div>
	</div>

</div>
</body>
</html>