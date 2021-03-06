<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <title>Aninotes | Illustrators</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-primary">
            <a href="./index.php" class="navbar-brand">Aninotes</a>
            <div class="navbar-nav mr-auto">
                <a href="./illustrators.php">⬅</a>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-primary">Edit Illustrator</h1>
            </div>
        </div>
        <section class="row">
            <div class="col-md-4 m-auto">
                <form action="">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" class="form-control"
                        required>
                    </div>
                    <div class="form-group">
                        <label for="Source">Source</label>
                        <select name="Name" class="form-control">
                            <option value="Devianart">Devianart</option>
                            <option value="Arstation">Arstation</option>
                            <option value="Anime-pictures">Anime-pictures</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Content">Content</label>
                        <textarea name="Content" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Comments">Comments</label>
                        <input type="url" name="Comments" class="form-control" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block btn-primary">Edit Illustrator</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>