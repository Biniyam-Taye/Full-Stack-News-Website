<?php
include '../db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $category = $conn->real_escape_string($_POST['category']);
    $description = $conn->real_escape_string($_POST['description']);
    
    // Image Upload
    $target_dir = "../uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $image_path = ""; // Default empty
    
    // Check if image file is a actual image or fake image
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Allow certain file formats
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
        $sql = "INSERT INTO news (title, category, image_path, description, publish_date) VALUES ('$title', '$category', '$image_path', '$description', NOW())";
        
        if ($conn->query($sql) === TRUE) {
             header("Location: index.php");
             exit();
        } else {
            $message = "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Add New News</h2>
    <?php echo $message; ?>
    
    <form action="create.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>
        
        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category" required>
                <option value="General">General</option>
                <option value="Business">Business</option>
                <option value="Technology">Technology</option>
                <option value="Sports">Sports</option>
                <option value="Adventure">Adventure</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Politics">Politics</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="image">News Image</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>
        
        <div class="form-group">
            <label for="description">Content / Description</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Save News</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>
