<html>
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
<title>Tạo hóa đơn</title>
</head>
<body>
<?php
$GiaSP = $_POST['GSP'];
$CanNang = $_POST['CN'];
$ThueTD = 0.08*$GiaSP;
$GiaSPBGT = $GiaSP + $ThueTD;
$LoaiSP = $_POST['LoaiSP'];
switch ($LoaiSP) {
//Hàng Tiêu dùng(quần áo, thực phẩm, sách,đồ chơi,...)
case '1': $PhiShipVN = 2.85*$CanNang; $ThueShipHaiQuan = 0.8*$CanNang; break;
//Giày dép không hộp
case '2':$PhiShipVN = 2.85*$CanNang; $ThueShipHaiQuan = 4; break;
//Giày dép có hộp, boot, giày nam
case '3':$PhiShipVN = 2.85*$CanNang; $ThueShipHaiQuan = 6; break;
//Giày dép nhựa
case '4':$PhiShipVN = 2.85*$CanNang; $ThueShipHaiQuan = 3; break;
//Đồng hồ, Mắt kính
case '5':$PhiShipVN = 2.85*$CanNang; $ThueShipHaiQuan = 0.08*$GiaSPBGT; break;
//Thuốc, vitamin
case '7':$PhiShipVN = 3.5*$CanNang; $ThueShipHaiQuan = 1*$CanNang; break;
//Mỹ phẩm
case '8':$PhiShipVN = 3.5*$CanNang; $ThueShipHaiQuan = 6.5*$CanNang; break;
//Nước hoa dưới 100ml
case '9':$PhiShipVN = 2.85*$CanNang; $ThueShipHaiQuan = 8; break;
//Nước hoa trên 100ml
case '10':$PhiShipVN = 2.85*$CanNang; $ThueShipHaiQuan = 10; break;
//Loại khác
case '11':$PhiShipVN = 2.85*$CanNang; $ThueShipHaiQuan = 0.8*$CanNang; break;
}
$PhiAd = 0.07*$GiaSP;
if ($PhiAd<5){
$PhiAd = 5;
}
else{
$PhiAd = $PhiAd;
}
$GiaVeVN = $GiaSPBGT + $PhiAd + $PhiShipVN + $ThueShipHaiQuan;
//$c = $PhiShipVN + $ThueShipHaiQuan;
//$d = $GiaSPBGT + $PhiAd+$c;
?>

<form method="POST">
<table border="0">
<tr>
<th>Giá sản phẩm</th>
<th>Cân nặng (pound)</th>
<th>Thuế tiêu dùng</th>
<th>Giá sản phẩm bao gồm thuế</th>
<th>Loại sản phẩm</th>
<th>Phí dịch vụ HMV</th>
<th>Phí ship về Sài Gòn</th>
<th>Thuế ship hải quan(tạm tính)</th>
<th>Giá về tới VN(SG)</th>
</tr>
<tr>
<td><input type="text" name="GSP" value="<?php echo @$GiaSP;?>"/></td>
<td><input type="text" name="CN" value="<?php echo @$CanNang;?>"/></td>
<td><input type="text" name ="" value="<?php echo @$ThueTD;?>"/></td>
<td><input type="text" name="GSPBGT" value="<?php echo @$GiaSPBGT;?>"/></td>
<td>
<select name="LoaiSP">
<option value="1">Hàng Tiêu dùng(quần áo, thực phẩm, sách,đồ chơi,...)</option>
<option value="2">Giày dép không hộp</option>
<option value="3">Giày dép có hộp, boot, giày nam</option>
<option value="4">Giày dép nhựa</option>
<option value="5">Đồng hồ, Mắt kính</option>;
<!-- thieu muc 6 -->
<option value="7">Thuốc, vitamin</option>;
<option value="8">Mỹ phẩm</option>;
<option value="9">Nước hoa dưới 100ml</option>;
<option value="10">Nước hoa trên 100ml</option>;
<option value="11">Loại khác</option>;
</select>
</td>
<td><input type="text" name="PDV" value="<?php echo @$PhiAd;?>"/></td>
<td><input type="text" name="PShipVN" value="<?php echo @$PhiShipVN;?>"/></td>
<td><input type="text" name="TShip" value="<?php echo @$ThueShipHaiQuan;?>"/></td>
<td><input type="text" name="GiaVN" value="<?php echo @$GiaVeVN;?>"/></td>
</tr>
<tr>
<td><input type="submit" name="ThemSP "value="+"/></td>
<td></td><td></td><td></td><td></td><td></td><td></td>
<td><input type="submit" name="ThanhTien "value="="/></td>
<td><input type="text" name="ThanhTientxt" value="<?php echo @$GiaVeVN;?>"/></td>
</tr>
</table>
</form>
</body>
</html>