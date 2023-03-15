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
        <h2>List of Clients</h2>
        <a href="/myshop/create.php" class="btn btn-primary" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Addres</th>
                <th>Created At</th>
                <th>Action</th>
            </thead>
            <tbody>
                <td>10</td>
                <td>Bill Gates</td>
                <td>bill.gates@microsoft.com</td>
                <td>+111222333</td>
                <td>New York, USA</td>
                <td>18/05/2022</td>
                <td>
                    <a href="/" class="btn btn-primary btn-sm">Edit</a>
                    <a href="/" class="btn btn-primary btn-sm">Delete</a>
                </td>
            </tbody>
        </table>
    </div>
</body>

</html>