<?php
include 'dbconnection.php';	 
$selected_val = $_POST['rating'];
if (isset($_GET['rating'])){$keyword =$_GET['rating']; }
$query = "Select * from guide where rating = '".selected_val."' ";
$result = $conn->query($query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ratings Viewer</title>
    </head>
    <body>
        <div align="center">
            <table border="0">
                <thead>
                    <tr>
                        <th>Name : </th>
                        <th>Cost : </th>
                        <th>Expirience : </th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                
                                <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                                <td><input type="text" name="cost" value="<?php echo $row['cost']; ?>"></td>
                                <td><input type="text" name="expiriencce" value="<?php echo $row['exp']; ?>" ></td>
                                <td><input type="text" name="rating" value="<?php echo $row['rating']; ?>" ></td>

        <?php
    }
                    }
$conn->close();
?>
                    </tbody>
            </table>
        </div>
    </body>
</html>
?>