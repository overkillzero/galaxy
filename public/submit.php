<?php
$money = isset($_GET['money']) ? $_GET['money'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$pid = isset($_GET['pid']) ? $_GET['pid'] : '';
$out_trade_no = isset($_GET['out_trade_no']) ? $_GET['out_trade_no'] : '';

$out_trade_no = substr($out_trade_no, -8);

$qrCodeData = "https://momosv3.apimienphi.com/api/QRCode?phone=$pid&amount=$money&note=HT4G$out_trade_no";

echo "<center>Số tài khoản:</span> <b>$pid</b><br></center>";
echo "<center>Chủ tài khoản: <b>$name</b><br></center>";
echo "<center>Số tiền: <b>{$money}đ</b><br></center>";
echo "<center>Nội dung: <b>HT4G$out_trade_no</b><br></center>";

echo "<center><img src='$qrCodeData' width='300'></center>"
?>
