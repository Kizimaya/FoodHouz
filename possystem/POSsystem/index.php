
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<link rel="stylesheet" type="text/css" href="css/css1.css">

<body>

<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
	}
?>

<?php

if($_SESSION['access']=='Salesperson'){
	header('location:sales1.php');
	}
?>

<div id="container">
<div id="header">
<table cellspacing="0" width="100%" border="0" cellpadding="20px">
<tr>
	<td width="56%">
    <table width="41%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <th scope="col"><font size="12px">P</font><span style="font-size: 18px;">oint <b>O</b>f <b>S</b>ale System</span></th>
	    </tr>
	  </table></td>
    <td style="font-size:14px;">
      <table width="93%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        	<th scope="col">Welcome: <?php echo $_SESSION['access'];?></th>
          	<th scope="col"><?php
			$Today = date('y:m:d',time());
			$new = date('l, F d, Y', strtotime($Today));
			echo $new;
			?></th>
          	<th scope="col" width="20px"><a href="logout.php">
            <input type="button" id="btnadd" value="Logout" align="middle" src="" />
          	</a></th>
        </tr>
  </table></td>
    </tr>

</table>
</div>

<br><br><br><br><br>
<!-- Footer -->
<div id = "headnav"> 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>

	<td width="1053" height="62">
	<table width="669" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <th width="90" height="62" scope="col"><a href="index.php">Dashboard</a></th>
	    <th width="50" scope="col"><a href="sales.php">Sales</a></th>
	    <th width="80" scope="col"><a href="products.php">Products</a></th>
	    <th width="90" scope="col"><a href="customers.php">Customers</a></th>
	    <th width="90" scope="col"><a href="supplier.php">Supplier</a></th>
	    <th width="112" scope="col"><a href="salesreport.php">Sales Report</a></th>
	    </tr>
	  </table>
      </td>
      
      <td width="13">
      <table border="0" cellspacing="0" cellpadding="0">
      	<tr>
        	<td align="left" style="color:#FFF">
            <?php
			$date_time=date("h:i:sa");
			
			echo $date_time;
			?>
            </td>
        </tr>
      </table>
      </td>

</tr>
</table>
</div>
<br><br><br><br>
<div id="bdcontainer">
<table border="0" cellpadding="0" cellspacing="10" align="center">
	<tr>
    	<td><a href="sales.php"><input type="button" id="bdnav1"></a></td>
        <td><a href="products.php"><input type="button" id="bdnav2"></a></td>
        <td><a href="customers.php"><input type="button" id="bdnav3"></a></td>
    </tr>
    <tr>
    	<td><a href="supplier.php"><input type="button" id="bdnav4"></a></td>
        <td><a href="salesreport.php"><input type="button" id="bdnav5"></a></td>
        <td><a href="logout.php"><input type="button" id="bdnav6"></a></td>
    </tr>
</table>
</div>

<div id="footer">
<table border="0" cellpadding="15px" align="center"; style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
<tr>
	<td>
    	
    </td>
</tr>
</table>
</div>

</div>

</body>
</html>
