<?php
include 'config.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT id, name, last_name, email, mobile_number FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $mobile_no = $row['mobile_number'];
    } else {
    
        echo "User not found.";
        exit();
    }
} 

?>

<html>
<head>
    <title>UPDATE USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="update-db.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3 mt-5">
                <label for="name" class="form-label">Name :-</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name :-</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :-</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="mobile_no" class="form-label">Mobile Number :-</label>
                <input type="text" class="form-control" id="mobile_no" name="mobile_number" value="<?php echo $mobile_no; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php"class="btn  btn-info" >BACK TO HOME</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>