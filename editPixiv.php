<?php 
require_once "./models/DBConnection.php";
require_once "./models/Pixiv.php";
require_once "./utils/FetchModelData.php";
require_once "./utils/QueryStrings.php";
require_once "./utils/TableNames.php";
$con = DBConnection::connect();
if(isset($_GET['id'])){
    $result = FetchModelData::getById($con,intval($_GET['id']), TableNames::PIXIV);
    $pixiv = null;
    if($result){
        $pixiv = $result[0];
    }
}

if(isset($_POST['id'])){
    $pixiv = new Pixiv();
    $pixiv->idPixiv = $_POST['idPixiv'];
    $pixiv->pixivName = $_POST['pixivName'];
    $pixiv->content = $_POST['Content'];
    $pixiv->quality = $_POST['Quality'];
    $pixiv->favorite = $_POST['Favorite'];
    $pixiv->link = $_POST['Link'];
    $id = intval($_POST['id']);
    
    if(($result = $pixiv->update($con,$id)) === true && !is_string($result)){
        $con = null;
        $_SESSION['message'] = "sucess";
        $_SESSION['msg_info'] = "Update Sucessful";
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
    <title>Aninotes | Pixiv</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-primary">
            <a href="./index.php" class="navbar-brand">Aninotes</a>
            <div class="navbar-nav mr-auto">
                <a href="./pixiv.php">⬅</a>
            </div>
        </nav>
        <?php if(isset($_SESSION['message']) && !is_array($result)){?>
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
            <div class="col-md-12 text-center">
                <h1 class="text-primary">Edit Pixiv</h1>
            </div>
        </div>
        <section class="row">
            <div class="col-md-4 m-auto">
                <form action="editPixiv.php" method="POST">
                <input type="hidden" name="id" value="<?= $pixiv != null? $pixiv->Id : ""?>">
                    <div class="form-group">
                        <label for="idPixiv">IdPixiv</label>
                        <input type="number" name="idPixiv" class="form-control"
                        required value="<?= $pixiv != null ? $pixiv->idPixiv : "" ?>">
                    </div>
                    <div class="form-group">
                        <label for="pixivName">Pixiv Name</label>
                        <input type="text" name="pixivName" class="form-control"
                        value="<?= $pixiv != null ? $pixiv->pixivName : ""?>">
                    </div>
                    <div class="form-group">
                        <label for="Content">Content</label>
                        <textarea name="Content" class="form-control" required><?= $pixiv != null ? $pixiv->Content : ""?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Quality">Quality</label>
                            <select name="Quality" class="form-control" >
                                <option value="+" <?php if($pixiv != null && $pixiv->Quality == "+") echo "selected" ?>>+</option>
                                <option value="++" <?php if($pixiv != null && $pixiv->Quality == "++") echo "selected" ?>>++</option>
                                <option value="+++" <?php if($pixiv != null &&  $pixiv->Quality == "+++") echo "selected" ?>>+++</option>
                                <option value="++++" <?php if($pixiv != null &&  $pixiv->Quality == "++++") echo "selected" ?>>++++</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Favorite">Favorite</label>
                            <select name="Favorite" class="form-control">
                                <option value="No" <?php if($pixiv != null && $pixiv->Favorite == "No") echo "selected" ?>>No</option>
                                <option value="F" <?php if($pixiv != null && $pixiv->Favorite == "F") echo "selected" ?>>F</option>
                                <option value="FF" <?php if($pixiv != null && $pixiv->Favorite == "FF") echo "selected" ?>>FF</option>
                                <option value="FF+" <?php if($pixiv != null && $pixiv->Favorite == "FF+") echo "selected" ?>>FF+</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Link">Pixiv Link</label>
                        <input type="url" name="Link" class="form-control" 
                        value="<?= $pixiv != null ? $pixiv->Link : "" ?>"required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block btn-primary">Edit Pixiv</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>