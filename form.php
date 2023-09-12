<?php

include("das_insert_product.php");

if (isset($_POST['submit'])) {
    $cparts = $_POST['p_category'];
    $p_engine = $_POST['p_engine'];
    $p_price = $_POST['p_price'];
    $p_no = $_POST['p_partno'];
    $p_brand = $_POST['p_bname'];
    $p_partdetails = $_POST['p_partdetails'];
    $p_supplier = $_POST['p_supplier'];
    $p_supplier_date = $_POST['p_date'];
}

// database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "das_inventory_system";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// to ensure that the connection is made
if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}

// using sql to create a data entry query
$sql = "INSERT INTO products (id, p_engine, p_price, p_partno, p_bname, p_partdetails, p_supplier, p_date) VALUES ('0', '$p_engine', '$p_price', '$p_no', '$p_brand', '$p_details', '$p_supplier', '$p_date')";

// send query to the database to add values and confirm if successful
$rs = mysqli_query($con, $sql);
if($rs)
{
    echo "Entries added!";
}

// close connection
mysqli_close($con);

?>