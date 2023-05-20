<?php
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessege = "";
$succsessMessege = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    do {
        if (empty($name || $email || $phone || $address)) {
            $errorMessege = "All fields are required";
            break;
        }

        // add new client to the database
        $name = "";
        $email = "";
        $phone = "";
        $address = "";

        $succsessMessege = "New client added successfully";
    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <?php
        //break
        if (!empty($errorMessege)) {
            echo "<div class='alert alert-danger' role='alert'>
            $errorMessege
            </div>";
        }
        ?>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6>
                        <input type=" text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-6>
                        <input type=" text" class="form-control" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-6>
                        <input type=" text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-6>
                        <input type=" text" class="form-control" name="address" value="<?php echo $address; ?>">
                            </div>
                            <div class="row mb-3">
                                <div class="offset-sm-3 col-sm-3 d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="col-sm-3 d-grid">
                                    <a class="btn btn-outline-secondary" href="/myshop/index.php" role="button">Cancel</a>
                                </div>
                            </div>

        </form>
    </div>
</body>

</html>