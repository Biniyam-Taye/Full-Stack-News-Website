<?php
include '../db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Dashboard - Manage News</h1>
    
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <a href="../index.php" class="btn btn-secondary" target="_blank">View Website</a>
        <a href="create.php" class="btn btn-primary">+ Add New News</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM news ORDER BY publish_date DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $imagePath = "../" . $row['image_path'];
                    if (!file_exists($imagePath) || empty($row['image_path'])) {
                        $imagePath = "https://via.placeholder.com/80"; // Fallback
                    }
                    
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td><img src='" . $imagePath . "' alt='News Image' width='80' style='border-radius:4px;'></td>";
                    echo "<td>" . substr($row['title'], 0, 50) . "...</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td>" . date('M d, Y', strtotime($row['publish_date'])) . "</td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning' style='padding: 5px 10px; font-size: 14px;'>Edit</a>
                            <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger' style='padding: 5px 10px; font-size: 14px;' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6' style='text-align:center;'>No news items found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
