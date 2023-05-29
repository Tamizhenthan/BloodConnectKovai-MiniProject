<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "Script executed.";

if (isset($_POST['save_Btn'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $health = $_POST['healthid'];
    $bloodgroup = $_POST['bloodgroup'];
    $address = $_POST['address'];
    $region = $_POST['region'];
    $aadharno = $_POST['aadharno'];
    $status = "active";

    // Validate and sanitize the data as needed

    $host = 'localhost';
    $dbname = 'bck';
    $username = 'root';
    $db_password = ''; // Use a different variable name for the database password

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO register (name, age, gender, mobile, healthid, bloodgroup, address, region, aadharno, status) VALUES (:name, :age, :gender, :mobile, :healthid, :bloodgroup, :address, :region, :aadharno, :status)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':healthid', $health);
        $stmt->bindParam(':bloodgroup', $bloodgroup);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':region', $region);
        $stmt->bindParam(':aadharno', $aadharno);
        $stmt->bindParam(':status', $status);
        $stmt->execute();

        header('Location: loginpath.html');
        exit();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die(); // Stop the script execution after displaying the error message
    }
}
?>
