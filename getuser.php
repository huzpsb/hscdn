<?php
$p = $_GET["player"];
$conn = new mysqli("den1.mysql6.gear.host", "redstone", "******", "redstone");
//��ַ �û��� ���� ���ݿ�����
if ($conn->connect_error) {
    echo "DB Error";
}
$sql = "SET NAMES utf8";
$conn->query($sql);
$sql = "SELECT logged FROM hs_users WHERE name='" . $p . "'";
//������
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        echo "Yes";
} else {
    echo "No";
}
$conn->close();
?>