<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Stock</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Add New Stock</h1>
    <form id="stockForm" enctype="multipart/form-data">
      <label for="category">Category:</label>
      <input type="text" id="category" name="category" required>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="price">Price:</label>
      <input type="number" id="price" name="price" step="0.01" required>

      <label for="image">Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required>

      <button type="submit">Add Stock</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
