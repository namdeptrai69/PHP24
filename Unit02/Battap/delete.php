<?php 
	session_start();
	
	// B1: Lấy mã sản phẩm được chọn
	$maSP = $_GET['MaSp'];

	// Kiểm tra số lượng
	if($_SESSION['cart'][$maSP]['SoLuong'] > 1){
		// Giảm số lượng
		$_SESSION['cart'][$maSP]['SoLuong']--;
		
	}else{
		// Bước 2: Xóa sản phẩm khỏi giỏ hàng
		unset($_SESSION['cart'][$maSP]);
	}

	header("Location: cart.php");
 ?>