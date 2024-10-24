<?php

$server = 'db403-mysql';
    $username = 'root';
    $password = 'P@ssw0rd';
    $db = 'northwind';
    $conn = new mysqli($server, $username, $password, $db );
    if ($conn->connect_errno) {
    die($conn->connect_error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <form>
    <label for="category">
      <select name="category" id="category">
            <option value="Beverages">Beverages</option>
            <option value="Condiments">Condiments</option>
            <option value="Confections">Confections</option>
            <option value="Dairy Products">Dairy Products</option>
            <option value="Grains/Cereals">Grains/Cereals</option>
            <option value="Meat/Poultry">Meat/Poultry</option>
            <option value="Produce">Produce</option>
            <option value="Seafood">Seafood</option>
        </select>
        </label>
        <input type="submit" value="Search" name="submit">
        </form>
<?php
     $sql = 'select CategoryName, CategoryNameID
     from categories';
     $conn->close();
// ทำข้อสอบหลังจาก comment ของแต่ละข้อ
// 1. (2 คะแนน) เขียนคำสั่ง php เพื่อติดต่อฐานข้อมูล northwind
// 2. (3 คะแนน) เขียนคำสั่ง php เพื่อดึงข้อมูล CategoryName และ CategoryID จากตาราง categories
# 3. (5 คะแนน) เพิ่ม element option ใน element select เพื่อแสดงตัวเลือกเป็น CategoryName และค่าที่ได้เป็น CategoryID 
# ตัวอย่างการเพิ่ม element options
# <option value="CategoryID">CategoryName</option> 
?>
</body>
</html>

