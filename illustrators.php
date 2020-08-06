<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-primary">
            <a href="./index.php" class="navbar-brand">Aninotes</a>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">Illustrators</h1>
            </div>
        </div>
        <section class="row">
            <div class="col-md-12 m-auto">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>Name</th>
                            <th>Source</th>
                            <th>Content</th>
                            <th>Comments</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Illustrator name</td>
                                <td>Devianart</td>
                                <td>Azur lane, girls, Honkai, Fate, fantasy, bb</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci consequuntur illo odit animi libero fugit.</td>
                                <td><a href="./editIllustrator.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                            <tr>
                                <td>Illustrator name</td>
                                <td>Devianart</td>
                                <td>Azur lane, girls, Honkai, Fate, fantasy, bb</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci consequuntur illo odit animi libero fugit.</td>
                                <td><a href="./editIllustrator.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                            <tr>
                                <td>Illustrator name</td>
                                <td>Devianart</td>
                                <td>Azur lane, girls, Honkai, Fate, fantasy, bb</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci consequuntur illo odit animi libero fugit.</td>
                                <td><a href="./editIllustrator.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                            <tr>
                                <td>Illustrator name</td>
                                <td>Devianart</td>
                                <td>Azur lane, girls, Honkai, Fate, fantasy, bb</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci consequuntur illo odit animi libero fugit.</td>
                                <td><a href="./editIllustrator.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                            <tr>
                                <td>Illustrator name</td>
                                <td>Devianart</td>
                                <td>Azur lane, girls, Honkai, Fate, fantasy, bb</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci consequuntur illo odit animi libero fugit.</td>
                                <td><a href="./editIllustrator.php" class="btn btn-primary">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-12 m-auto pt-3">
                <h2 class="text-center text-primary">Add Illustrator</h2>
            </div>
        </div>
        <!-- Form Input -->
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
                        <button type="submit" class="btn btn-block btn-success">Add Illustrator</button>
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