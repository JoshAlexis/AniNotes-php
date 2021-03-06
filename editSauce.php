<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <title>Aninotes | Sauce</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-primary">
            <a href="./index.php" class="navbar-brand">Aninotes</a>
            <div class="navbar-nav mr-auto">
                <a href="./sauces.php">⬅</a>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-primary">Edit Sauce</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Viewed">Viewed</label>
                        <select name="Viewed" class="form-control">
                            <option value="No">No</option>
                            <option value="Si">
                                Si
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Description"></label>
                        <textarea name="Description" cols="30" class="form-control">No Description</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Comments"></label>
                        <textarea name="Comments" cols="30" class="form-control">No Comments</textarea>
                    </div>
                    <div class="form-group"><button class="btn btn-block btn-primary">Add Sauce</button></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>