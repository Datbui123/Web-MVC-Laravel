<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Book Management System</h3>
        <!-- <a href="<?= DOMAIN.'app/views/article/add.php' ?>" class='btn btn-success'>Add/a> -->
        <table class="table">
  <thead>
    <tr>
      <th scope="col">BookID</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">ISBN</th>
      <th scope="col">PublictionDate</th>
      <th scope="col">Genre</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($books as $book){
    ?>
            <tr>
                <th scope="row"><?= $book->getBookId(); ?></th>
                <td><?= $book->getTitle(); ?></td>
                <td><?= $book->getAuthor(); ?></td>
                <td><?= $book->getISBN(); ?></td>
                <td><?= $book->getPublicationDate(); ?></td>
                <td><?= $book->getGenre(); ?></td>
            </tr>
    <?php
        }
    ?>
  </tbody>
</table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>