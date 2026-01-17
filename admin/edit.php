<?php
include '../db.php';

$message = "";
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $conn->real_escape_string($_POST['title']);
    $category = $conn->real_escape_string($_POST['category']);
    $description = $conn->real_escape_string($_POST['description']);
    $existing_image = $_POST['existing_image'];
    
    $image_path = $existing_image;

    // Image Upload if new one selected
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_dir = "../uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
             $message = "<div class='alert alert-danger'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image_path = "uploads/" . basename($_FILES["image"]["name"]);
            } else {
                $message = "<div class='alert alert-danger'>Sorry, there was an error uploading your file.</div>";
            }
        }
    }

    if(empty($message)) {
        $image_path = $conn->real_escape_string($image_path);
        $sql = "UPDATE news SET title='$title', category='$category', image_path='$image_path', description='$description' WHERE id=$id";
        
        if ($conn->query($sql) === TRUE) {
             header("Location: index.php");
             exit();
        } else {
            $message = "<div class='alert alert-danger'>Error updating record: " . $conn->error . "</div>";
        }
    }
}

$sql = "SELECT * FROM news WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(!$row) {
    echo "News not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Edit News</h2>
    <?php echo $message; ?>
    
    <form action="edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="existing_image" value="<?php echo $row['image_path']; ?>">
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category" required>
                <?php
                $categories = ["General", "Business", "Technology", "Sports", "Adventure", "Agriculture", "Entertainment", "Politics"];
                foreach($categories as $cat) {
                    $selected = ($row['category'] == $cat) ? 'selected' : '';
                    echo "<option value='$cat' $selected>$cat</option>";
                }
                ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="image">News Image (Leave empty to keep current)</label>
            <input type="file" id="image" name="image" accept="image/*">
            <?php if(!empty($row['image_path'])): ?>
                <br><img src="../<?php echo $row['image_path']; ?>" alt="Current Image" width="150" style="margin-top:10px; border-radius:4px;">
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <label for="description">Content / Description</label>
            <textarea id="description" name="description" required><?php echo htmlspecialchars($row['description']); ?></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update News</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>
