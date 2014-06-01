<html>
<head>

</head>
<body>
<?php
$lacze=mysql_connect('localhost','ziom','ziomek');
$baza=mysql_select_db('sklep',$lacze);

$FNAME=			$_POST['firstname'];
$LNAME=			$_POST['lastname']; 
$DATE=			$_POST['dob']; 
$MAIL=			$_POST['email_address'];  
$PHONE=			$_POST['telephone']; 
$NAME_COMPANY=	$_POST['company']; 
$NIP =			$_POST['nip']; 
$ADDRESSLINE =	$_POST['street_address']; 
$ZIPCODE =		$_POST['postcode']; 
$TOWN =			$_POST['city']; 
$COUNTRY =		$_POST['country'];
$LOGIN =		$_POST['login']; 
$PASSWORD =		$_POST['password'];
$REPASSWORD =	$_POST['confirmation']; 
$REGULAMIN =	$_POST['agree']; 
$NEWSLETTER =	$_POST['newsletter']; 


$zpt="INSERT INTO customer(FNAME,LNAME,DATE,MAIL,PHONE,NAME_COMPANY,NIP,ADDRESSLINE,ZIPCODE,TOWN,COUNTRY,LOGIN,PASSWORD,REPASSWORD,REGULAMIN,NEWSLETTER)
 values('$FNAME','$LNAME','$DATE','$MAIL','$PHONE','$NAME_COMPANY','$NIP','$ADDRESSLINE','$ZIPCODE','$TOWN','$COUNTRY','$LOGIN','$PASSWORD','$REPASSWORD','$REGULAMIN','$NEWSLETTER')";

if($REGULAMIN=='1')
	{  $rezultat= mysql_query($zpt);
		header("Location: index.html");}
ELSE
{ ECHO "NIE ZATWIERDZILES REGULAMINU";}


?> 

</body>
</html>