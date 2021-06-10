<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<br>
<br>
<br>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:20px; color:#09F"><b>TOUR PACKAGES</b></td></tr>
<?php


/*$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
*/?>
    
</table>
<b><a href='subcat.php'>tour booking</a></b>
</div>

<div style="width:500px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Welcome to Go Travel & Tourism Ltd</td></tr>
<tr><td class="paraText" width="900px"><p>Nurtured from the seed of a single great idea - to empower the traveller - go travel and tourism is a pioneer in India’s online travel industry. Founded in the year 2000 by Deep Kalra, go travel and tourism came to life to empower the Indian traveller with instant bookings and comprehensive choices. The company initiated its journey serving the US-India travel market offering a range of best-value products and services powered by technology and round-the-clock customer support.</p>

<p>After consolidating its position in the market as a brand recognised for its reliability and transparency, We launched its India operations in 2005. With more and more Indians initiating to transact online with IRCTC and new opportunities with the advent of low cost carriers, go travel and tourism offered travellers the convenience of booking travel online with a few clicks.</p>

<p>Go Travel and tourism's rise has been led by the vision and the spirit of each one of its employees, for whom no idea was too big and no problem too difficult. With untiring determination, go travel and tourism has proactively diversified its product offering, adding a variety of online and offline products and services. go travel and tourism has stayed ahead of the curve by continually evolving its technology to meet the ever-changing demands of the rapidly developing global travel market, steadily establishing itself as India’s leading online travel company.</p>
</td><td style="background-image:url(); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="500px" height="150px" >< &nbsp;&nbsp;&nbsp; </div	></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>