<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?php echo base_url('assets/css/product.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="col-md-12">
        <h1> Edit Product</h1>
        <form action="" method="POST">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-group">
                    <label> Name</label>
                    <input class="form-control" name="name" placeholder="Enter Product Name" value="<?php echo $product -> name; ?>">
                </div>
                <div class="form-group">
                    <label> Price</label>
                   <input class="form-control" name="price" placeholder="Enter Product Price" value="
                   <?php echo $product -> price; ?>">
                </div>
                <div class="form-group">
                    <label>Company Name</label>
                    <input class="form-control" name="company_name" placeholder="Enter Product Quantity" value="<?php echo $product -> company_name; ?>">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input class="form-control" name="quantity" placeholder="Enter Product Quantity" value="<?php echo $product -> quantity; ?>">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter Product Description"><?php echo $product -> description; ?></textarea>
                </div>
                <button class="btn btn-warning" name="update">Update Product </button>
            </div>
        </form>
    </div>

</body>
</html>
