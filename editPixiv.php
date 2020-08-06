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
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-primary">Edit Pixiv</h1>
            </div>
        </div>
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
                        <button type="submit" class="btn btn-block btn-primary">Edit Pixiv</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>