@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>music-project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
    <!-- <a href="#">Blog</a> -->
    <!-- <a href="/categories">Category</a> -->
    <h3 class="text-center text-uppercase text-success my-3">music-project</h3>
    <!-- <a href="/categories/create">Create New Category</a> -->
    <a href="/categories/create" class='btn btn-success'>Thêm</a>
    <table class="table">
    <thead>
    <tr>
      <th scope="col">Mã thể loại</th>
      <th scope="col">Tên thể loại</th>
      <th scope="col">Xem</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach($categories as $category){
    ?>
            <tr>
                <th scope="row">{{ $category->ma_tloai }}</th>
                <td>{{ $category->ten_tloai }}</td>
                <td>
                    <a href="/categories/{{ $category->ma_tloai }}"><i class="bi bi-eye"></i></a>
                </td>
                <td>
                    <a href="/categories/{{ $category->ma_tloai }}/edit"><i class="bi bi-pencil-square"></i></a>
                </td>
                <!-- <td>
                    <a href="/categories/{{ $category->ma_tloai }}"><i class="bi bi-trash3-fill"></i></a>
                </td> -->
                <td>
                    <form method="POST" action="/categories/{{ $category->ma_tloai }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="bi bi-trash3-fill"></i></button>
                    </form>
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