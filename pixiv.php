<?php 
require_once "./models/DBConnection.php";
require_once "./utils/FetchModelData.php";
require_once "./utils/TableNames.php";
$con = DBConnection::connect();
$pixivList = FetchModelData::fetchAllPixiv($con,TableNames::PIXIV);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button{
            -webkit-appearance: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-primary">
            <a href="./index.php" class="navbar-brand">Aninotes</a>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">Pixiv</h1>
            </div>
        </div>
        <section class="row">
            <div class="col-md-12 m-auto">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>Name</th>
                            <th>IdPixiv</th>
                            <th>Content</th>
                            <th>Quality</th>
                            <th>Favorite</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach($pixivList as $pixiv) {?>
                            <tr>
                                <td><?= $pixiv->pixivName ?></td>
                                <td>
                                    <a href="<?= $pixiv->Link ?>" target="_blank">
                                        <?= $pixiv->idPixiv ?>
                                    </a>
                                </td>
                                <td><?= $pixiv->Content ?></td>
                                <td><?= $pixiv->Quality ?></td>
                                <td><?= $pixiv->Favorite ?></td>
                                <td><a href="./editPixiv.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-12 m-auto pt-3">
                <h2 class="text-center text-primary">Add Pixiv</h2>
            </div>
        </div>
        <!-- Form Input -->
        <section class="row">
            <div class="col-md-4 m-auto">
                <form action="">
                    <div class="form-group">
                        <label for="idPixiv">IdPixiv</label>
                        <input type="number" name="idPixiv" class="form-control"
                        required>
                    </div>
                    <div class="form-group">
                        <label for="pixivName">Pixiv Name</label>
                        <input type="text" name="pixivName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Content">Content</label>
                        <textarea name="Content" class="form-control" required></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Quality">Content</label>
                            <select name="Quality" class="form-control">
                                <option value="+">+</option>
                                <option value="++">++</option>
                                <option value="+++">+++</option>
                                <option value="++++">++++</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Favorite">Favorite</label>
                            <select name="Favorite" class="form-control">
                                <option value="No">No</option>
                                <option value="F">F</option>
                                <option value="FF">FF</option>
                                <option value="FF+">FF+</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Link">Pixiv Link</label>
                        <input type="url" name="Link" class="form-control" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block btn-success">Add Pixiv</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script> 
</body>
</html>