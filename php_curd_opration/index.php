<?php
include 'config.php';

$sql = "SELECT id, name, last_name, email, mobile_number FROM users  ORDER by id desc";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}

$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

$jsonData = json_encode($rows);
echo $jsonData;



$serialNumber = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CURD OPRATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary text-center">PHP CURD OPRATION</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 m-2">
                <a href="add.php"><button class='btn btn-secondary'>ADD CUSTOMERS</button></a>
            </div>
        </div>
        <div class="row">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>LAST NAME</th>
                        <th>EMAIL</th>
                        <th>MOBILE NUMBER</th>
                        <th>UPDATE</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rows as $row) {
                        echo "<tr>";
                        echo "<td>" . $serialNumber . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["last_name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["mobile_number"] . "</td>";
                        echo "<td><a href='update.php?id=" . $row["id"] . "' class='btn btn-info'>UPDATE</a></td>"; 
                        echo "<td><a href='#' onclick='confirmDelete(" . $row["id"] . ")' class='btn btn-danger'>DELETE</a></td>";
                        echo "</tr>";
                        $serialNumber++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete(userId) {
            var confirmed = confirm("Are You Sure You Want To Delete This Customer?");
            if (confirmed) {
                window.location.href = 'delete-db.php?id=' + userId;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
