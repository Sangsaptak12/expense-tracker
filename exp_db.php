<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $expname = $_POST['expenseName'];
    $detail = $_POST['details'];
    $amount = $_POST['expenseAmount'];
    $date=$_POST['Date'];
    $category=$_POST['category'];

    if (!empty($expname) && !empty($detail) && !empty($amount) && !empty($date) && !empty($category))
    {
        $stmt = $conn->prepare("INSERT INTO expance (item_name,price,details,add_on,catg) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sdsss", $expname, $amount,$detail,$date,$category);
        if($stmt->execute())
        {
            echo "Expense added successfully";
        }
        else
        {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    else
    {
        echo("Incomplete form data");

    }
}
?>