<?php
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['key'])) {
    $del1 = $_GET['key'];

    // Fetch user details
    $sql = "SELECT * FROM logindetails WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $del1);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Assign fetched values to variables
    $username = $row["username"];
    $name = $row["name"];
    $email = $row["email"];
    $password = $row["password"];
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get updated values from the form
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Update user details
    $sql = "UPDATE logindetails SET name=?, email=?, password=? WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $username);
    $stmt->execute();

    // Redirect to a confirmation page or wherever you want
    header("location: http://localhost/webPrograming/getdata.php");
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>Edit Details</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-6">
                <div class="p-xl-5">
                    <form method="post">
                        <h2>Edit details</h2>
                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="username" id="username" value="<?php echo htmlspecialchars($username); ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" value="<?php echo htmlspecialchars($password); ?>" required>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
