<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Inventory Management System</h1>

    <h2>Add New Item</h2>
    <form method="POST" action="">
        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name" required>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" required>
        <input type="submit" name="action" value="Add Item">
    </form>

    <h2>Update Item Quantity</h2>
    <form method="POST" action="">
        <label for="update_item_id">Item ID:</label>
        <input type="number" id="update_item_id" name="update_item_id" required>
        <label for="new_quantity">New Quantity:</label>
        <input type="number" id="new_quantity" name="new_quantity" required>
        <input type="submit" name="action" value="Update Quantity">
    </form>

    <h2>Remove Item</h2>
    <form method="POST" action="">
        <label for="remove_item_id">Item ID:</label>
        <input type="number" id="remove_item_id" name="remove_item_id" required>
        <input type="submit" name="action" value="Remove Item">
    </form>

    <h2>Current Inventory</h2>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inventory_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];

        if ($action == "Add Item") {
            $item_name = $_POST['item_name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $sql = "INSERT INTO inventory (item_name, quantity, price) VALUES ('$item_name', $quantity, $price)";
            if ($conn->query($sql) === TRUE) {
                echo "New item added successfully<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } elseif ($action == "Update Quantity") {
            $item_id = $_POST['update_item_id'];
            $new_quantity = $_POST['new_quantity'];
            $sql = "UPDATE inventory SET quantity=$new_quantity WHERE id=$item_id";
            if ($conn->query($sql) === TRUE) {
                echo "Item quantity updated successfully<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } elseif ($action == "Remove Item") {
            $item_id = $_POST['remove_item_id'];
            $sql = "DELETE FROM inventory WHERE id=$item_id";
            if ($conn->query($sql) === TRUE) {
                echo "Item removed successfully<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    $sql = "SELECT * FROM inventory";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Value</th>
                </tr>";
        $total_value = 0;
        while ($row = $result->fetch_assoc()) {
            $item_total_value = $row["quantity"] * $row["price"];
            $total_value += $item_total_value;
            echo "<tr>
                    <td>{$row["id"]}</td>
                    <td>{$row["item_name"]}</td>
                    <td>{$row["quantity"]}</td>
                    <td>{$row["price"]}</td>
                    <td>$item_total_value</td>
                </tr>";
        }
        echo "<tr>
                <td colspan='4'>Total Inventory Value</td>
                <td>$total_value</td>
            </tr>";
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
