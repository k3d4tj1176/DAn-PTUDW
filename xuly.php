<?php
	include('ketnoi.php');
	$id = $_GET['id'];
	$_ProductName = $_POST['_ProductName'];
	$_Price = $_POST['_Price'];
	$_Category = $_POST['_Category'];
	$_ImageUrl = $_FILES['_ImageUrl']['name'];
	$_ImageUrl_tmp = $_FILES['_ImageUrl']['tmp_name'];
	move_uploaded_file($_ImageUrl_tmp,'images/'.$_ImageUrl);
	if(isset($_POST['them'])){
		//them
		$sql = "insert into product(ProductName,Price,Category,ImageUrl) values ('$_ProductName','$_Price','$_Category','$_ImageUrl') ";
		mysql_query($sql);
		header('location:quanlisp.php');
		}
		elseif(isset($_POST['sua'])){
			//sua
		$sql = "update product set ProductName = '$_ProductName',Price = '$_Price', Category = '$_Category', ImageUrl = '$_ImageUrl'   where ID = '$id' ";
			mysql_query($sql);
			header('location:quanlisp.php');
			}
		else{
			//xoa
			$sql = "delete from product where ID = '$id' ";
			mysql_query($sql);
			header('location:quanlisp.php');
			}
?>

