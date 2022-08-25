<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Delete Record from MySQL Table with AJAX and PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table>
            <caption>Cars Table</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM cars";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                    while($car = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo "#".$car['id'] ?></td>
                        <td><?php echo $car['brand'] ?></td>
                        <td><?php echo $car['model'] ?></td>
                        <td><?php echo $car['color'] ?></td>
                        <td>
                            <button class="remove" data-id="<?php echo $car['id']?>">Remove</button>
                        </td>
                    </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">No record Found</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="assets/jquery-3.0.0.js"></script>
<script src="assets/script.js"></script>
</html>