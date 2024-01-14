<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- Add the link to the Bootstrap CSS file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<?php 
include __DIR__.('./includes/navbar.php');
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Replace with your product image -->
                <img src="<?= URL_DIR ?>public/assets/images/bkog.png" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Product Title</h2>
                <h4>Product Category</h4>
                <h3>Product Price</h3>
                <p>Product Description</p>
                <form>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" min="1">
                    </div>
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Add the link to the Bootstrap JS file -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>