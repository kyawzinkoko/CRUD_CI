<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?php echo base_url('assets/css/product.css'); ?>" rel="stylesheet">
    <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-12">
        <h1> Show Products</h1>
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Company Name</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($products As $product): ?>
                    <tr>
                        <td><?php echo $product -> name; ?></td>
                        <td><?php echo $product -> price; ?></td>
                        <td><?php echo $product -> company_name; ?></td>
                        <td><?php echo $product -> quantity; ?></td>
                        <td><?php echo $product -> description; ?></td>
                        <td>
                            <a href="<?php echo base_url('index.php/product/update'); ?>" class="btn btn-info"><i class="far fa-edit"></i></a>
                            <button class="btn btn-danger" name="delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div class="col-md-6">
                <a href="<?php echo base_url('index.php/product/create'); ?>" class="btn btn-primary">Back Create</a>
            </div>

        </div>

    </div>

</body>
</html>
