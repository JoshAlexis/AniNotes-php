<?php 
require_once "./models/DBConnection.php";
require_once "./models/Pixiv.php";

$con = DBConnection::connect();
if(isset($_POST['idPixiv'])){
    $pixiv = new Pixiv();
    $pixiv->idPixiv = strval($_POST['idPixiv']);
    $pixiv->pixivName = $_POST['pixivName'];
    $pixiv->content = $_POST['Content'];
    $pixiv->quality = $_POST['Quality'];
    $pixiv->favorite = $_POST['Favorite'];
    $pixiv->link = $_POST['Link'];

    if(($result = $pixiv->insert($con)) === true){
        $con = null;
        $_SESSION['message'] = "sucess";
        $_SESSION['msg_info'] = "Insert Sucessful";
        header("location: pixiv.php");
    }else{
        $_SESSION['message'] = "error";
        $_SESSION['msg_info'] = $result;
    }
}

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
            <div class="navbar-nav mr-auto">
                <a href="./pixiv.php">⬅</a>
            </div>
        </nav>
        <?php if(isset($_SESSION['message'])){?>
            <div class="row">
                <div class="col-md-4 m-auto pt-4">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <p><?= $result ?></p>
                        <button type="button" class="close" data-diss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php }?>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">Add a Pixiv</h1>
            </div>
        </div>
        <!-- Form Input -->
        <section class="row">
            <div class="col-md-4 m-auto">
                <form method="POST" action="./addPixiv.php">
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
                        <input type="submit" value="addPixiv" class="btn btn-block btn-success"/>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <!-- <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script> --> 
    <script src="./js/app.js"></script>
</body>
</html>