<?php 
	session_start();

	require_once('products.php');
	// B1: Lấy mã sản phẩm được chọn
	$maSP = $_GET['MaSp'];

	// Kiểm tra xem đã có trong giỏ hàng chưa? 
	if (isset($_SESSION['cart'][$maSP])) {
		// Tăng số lượng
		$_SESSION['cart'][$maSP]['SoLuong']++;
		$_SESSION['cart'][$maSP]['time']= date('Y-m-d H:i:s');
	}else{
		// Chưa có trong giỏ hàng
		// B2: Lấy thông tin sản phẩm
		$product = $products[$maSP];
		$product['SoLuong'] = 1;

		// B3: Add vào giỏ hàng
		$_SESSION['cart'][$maSP]  = $product;
		$_SESSION['cart'][$maSP]['time']  =  date('Y-m-d H:i:s');	
	}

	

	
	
	// echo "<pre>";
 //  var_dump($tg);
 //  echo "</pre>";

	header("Location: cart.php");

 ?>