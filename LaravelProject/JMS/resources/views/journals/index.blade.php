

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
    <!-- <h3 class="text-center text-uppercase text-success my-3">Journal Management System</h3> -->
    <!-- <a href="/categories/create" class='btn btn-success'>Create</a> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Journal Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li> -->
        </ul>
        <form class="d-flex" role="search">
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            <a href="/journals/create" class='btn btn-success'>Add New Journal</a>
        </form>
        </div>
    </div>
    </nav>
    <table class="table">
    <thead>
    <tr>
      <th scope="col">JID</th>
      <th scope="col">Title</th>
      <th scope="col">Editor</th>
      <th scope="col">ISSN</th>
      <th scope="col">PublicationDate</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach($journals as $journal){
    ?>
            <tr>
                <th scope="row">{{ $journal->JID }}</th>
                <td>{{ $journal->Title }}</td>
                <td>{{ $journal->Editor }}</td>
                <td>{{ $journal->ISSN }}</td>
                <td>{{ $journal->PublicationDate }}</td>
                <td>
                    <a href="/journals/{{ $journal->JID }}"><i class="bi bi-eye"></i></a>
                    <a href="/journals/{{ $journal->JID }}/edit"><i class="bi bi-pencil-square"></i></a>
                    <!-- <a href="/journals/{{ $journal->JID }}/destroy"><i class="bi bi-trash3-fill"></i></a> -->
                    <a href="/journals/{{ $journal->JID }}"><i class="bi bi-trash3-fill"></i></a>
                    <!-- <form method="POST" action="/journals/{{ $journal->JID }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="bi bi-trash3-fill"></i></button>
                    </form> -->
                </td>
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