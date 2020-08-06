<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-primary">
            <a href="./index.php" class="navbar-brand">Aninotes</a>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">Sauces</h1>
            </div>
        </div>
        <section class="row">
            <div class="col-md-12 m-auto">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>Name</th>
                            <th>Viewed</th>
                            <th>Description</th>
                            <th>Comments</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias placeat ea eveniet sunt? Tempore, soluta.</td>
                                <td>No</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sunt impedit officia. Molestiae pariatur quae consequuntur aliquam magni! Inventore, iure!</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sunt impedit officia. Molestiae pariatur quae consequuntur aliquam magni! Inventore, iure!</td>
                                <td><a href="./editSauce.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias placeat ea eveniet sunt? Tempore, soluta.</td>
                                <td>No</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sunt impedit officia. Molestiae pariatur quae consequuntur aliquam magni! Inventore, iure!</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sunt impedit officia. Molestiae pariatur quae consequuntur aliquam magni! Inventore, iure!</td>
                                <td><a href="./editSauce.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias placeat ea eveniet sunt? Tempore, soluta.</td>
                                <td>No</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sunt impedit officia. Molestiae pariatur quae consequuntur aliquam magni! Inventore, iure!</td>
                                <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio sunt impedit officia. Molestiae pariatur quae consequuntur aliquam magni! Inventore, iure!</td>
                                <td><a href="./editSauce.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-12 m-auto pt-3">
                <h3 class="text-center">Add Sauce</h3>
            </div>
        </div>
        <section class="row">
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
                    <div class="form-group"><button class="btn btn-block btn-success">Add Sauce</button></div>
                </form>
            </div>
        </section>
    </div>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
</body>
</html>