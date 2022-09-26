<?php

$artist = $_POST['artist'];
$group = $_POST['group'];
$customer = $_POST['customer'];

if(empty($artist) && empty($group) && empty($customer))
{
	header("Location:search.php?id=non");
	exit();
}

if(empty($artist) && empty($group)){
	header("Location:customer_his.php?id=$customer");
	exit();
}

if(empty($group) && empty($customer)){
	header("Location:artist_artwork.php?id=$artist");
	exit();
}

if(empty($artist) && empty($customer)){
	header("Location:artwork_type.php?id=$group");
	exit();
}
if(empty($artist)){
	header("Location:search.php?id=error");
	exit();
}
if(empty($group)){
	header("Location:search.php?id=error");
	exit();
}
if(empty($customer)){
	header("Location:search.php?id=error");
	exit();
}
header("Location:search.php?id=error");
exit();
?>