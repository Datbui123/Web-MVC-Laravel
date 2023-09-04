<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Thành Viên</title>
</head>
<body>
    <div class="add-new-user">
        <h3 style="color: blue">Thêm thành viên mới</h3>
            <form action="" method="POST">
                <table> 
                    <tr>
                        <td><b>Họ tên:</b></td>
                        <td><input type="text" name="hoten" placeholder="Nhập Họ Tên"></td>
                    </tr>
                    <tr>
                        <td><b>Năm sinh:</b></td>
                        <td><input type="text" name="namsinh" placeholder="Nhập Năm sinh"></td>
                    </tr>
                    <tr>
                        <td><b>Quê Quán:</b></td>
                        <td><input type="text" name="quequan" placeholder="Nhập Quê quán"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="add_user" value="Thêm"></td>
                    </tr>
                </table>
                
            </form>
    </div>
    <p style="color: orange"><b>Lựa chọn chức năng theo yêu cầu:</b></p>
    <form  method="GET">
        <table>
            <tr>
                <td><p2>Xem danh sách thành viên: </p2></td>
                <td><input type="submit" name="action" value="list"></td>
            </tr>
    </table>
    </form>
</body>
</html>