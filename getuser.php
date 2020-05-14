<?php
$p = $_GET["player"];
$conn = new mysqli("den1.mysql6.gear.host", "redstone", "******", "redstone");
//地址 用户名 密码 数据库名称
if ($conn->connect_error) {
    echo "DB Error";
}
$sql = "SET NAMES utf8";
$conn->query($sql);
$sql = "SELECT logged FROM hs_users WHERE name='" . $p . "'";
//表单名称
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Yes";
} else {
    echo "No";
}
$conn->close();
?>