<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'furniture_shop');

    if ($conn->connect_error) {
        die('Database connection failed: ' . $conn->connect_error);
    }

    // Retrieve form data
    $category = $conn->real_escape_string($_POST['category']);
    $name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageName = uniqid() . '_' . $_FILES['image']['name'];
        $imagePath = 'uploads/' . $imageName;

        // Create uploads directory if it doesn't exist
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        // Move the uploaded file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            // Insert data into the database
            $stmt = $conn->prepare("INSERT INTO stock (category, name, price, image_path) VALUES (?, ?, ?, ?)");
            $stmt->bind_param('ssds', $category, $name, $price, $imagePath);

            if ($stmt->execute()) {
                echo "success";
            } else {
                echo "Database insertion failed: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "No image uploaded or upload error.";
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
