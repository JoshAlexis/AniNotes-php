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
    <link rel="stylesheet" href="./styles/bootstrap.min.css?1.0">
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
        <?php if(isset($_SESSION['message'])){?>
            <div class="row">
                <div class="col-md-4 m-auto pt-4">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p><?= $_SESSION['msg_info'] ?></p>
                        <button type="button" class="close" data-diss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php session_unset(); }?>
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
                                <td><a href="./editPixiv.php?id=<?= $pixiv->Id ?>" class="btn btn-primary">Edit</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-12 text-center mt-4 mb-4">
                <a class="btn btn-primary" href="./addPixiv.php">Add Pixiv</a>
            </div>
        </div>
        <!-- Form Input -->
    </div>
    <!-- <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>  -->
    <script src="./js/app.js?1.0"></script>
</body>
</html>