<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['fullName'];
    $gender = $_POST['gender'];
    $prof = $_POST['profession'];
    $salary=$_POST['salary'];
    $rent1=$_POST['rent1'];
    $rent2=$_POST['rent2'];
    $rent3=$_POST['rent3'];
    
    if (!empty($name) && !empty($gender) && !empty($prof) && !empty($salary) && !empty($rent1) && !empty($rent3))
    {
        $stmt = $conn->prepare("INSERT INTO profile (Name,Gender,Profession,Salary,Home,Car	,Electric) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssdddd", $name, $gender,$prof,$salary,$rent1,$rent2,$rent3);
        $stmt->execute();
        // if($stmt->execute())
        // {
        //     echo "Profiles details added successfully";
        // }
        // else
        // {
        //     echo "Error: " . $stmt->error;
        // }
        $stmt->close();
    }
    else
    {
        echo("Incomplete form data");

    }
}
?>