<?php
include('header.php');
include('validateForm.php');
if (!isStaff()) {
    header("Location: /");
}

if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';

?>

<h1>Received orders</h1><br>

<container>
    <form action="" method="get">
        

        <label for="search">Search by Mobile Number:</label>
        <input type="text" name="search" id="search" value="<?php echo $search; ?>">
        <button type="submit" class="btn btn-submit btn-primary btn-sm">Search</button><br><br>

        <label for="sort">Sort by:</label>
        <select name="sort" id="sort" onchange="this.form.submit()">
            <option value="id" <?php echo ($sort === 'id') ? 'selected' : ''; ?>>ID</option>
            <option value="date" <?php echo ($sort === 'date') ? 'selected' : ''; ?>>Pickup Date</option>
            <option value="lname" <?php echo ($sort === 'lname') ? 'selected' : ''; ?>>Last Name</option>
        </select>
    </form>

    <?php
    $sql = "SELECT * FROM reservation";
    $result = $conn->query($sql);

    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "sehs4517";

    $conn = new mysqli($host_name, $user_name, $password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sortColumn = '';

    switch ($sort) {
        case 'id':
            $sortColumn = 'id ASC';
            break;
        case 'date':
            $sortColumn = 'pickup ASC';
            break;
        case 'lname':
            $sortColumn = 'lname ASC';
            break;
        default:
            $sortColumn = 'id ASC';
            break;
    }

    $query = "SELECT * FROM reservation";

    if (!empty($search)) {
        $query .= " WHERE mobile LIKE '%$search%'";
    }

    $query .= " ORDER BY $sortColumn";

    
    $result = $conn->query($query);
    ?>
    <table style="width:90%; border: black solid;  margin: 40px 60px; ">
        <thead>
            <tr style="background-color:#0d6efd; color:#ffffff;">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Model</th>
                <th>Store</th>
                <th>Pickup Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr class="orders">';
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['fname'] . "</td>";
                    echo "<td>" . $row['lname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['mobile'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['store'] . "</td>";
                    echo "<td>" . $row['pickup'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No records found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</container>

<?php
// Close the database connection
$conn->close();
?>
