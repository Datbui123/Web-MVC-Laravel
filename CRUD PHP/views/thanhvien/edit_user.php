<div class="edit-user">
        <h3 style="color: blue">Sửa thành viên</h3>
            <form action="" method="POST">
                <table> 
                    <tr>
                        <td><b>Họ tên:</b></td>
                        <td><input type="text" name="hoten" value="<?php echo $datas[0]?>" placeholder="Sửa họ tên"></td>
                    </tr>
                    <tr>
                        <td><b>Năm sinh:</b></td>
                        <td><input type="text" name="namsinh" value="<?php echo $datas[1]?>" placeholder="Sửa Năm sinh"></td>
                    </tr>
                    <tr>
                        <td><b>Quê Quán:</b></td>
                        <td><input type="text" name="quequan" value="<?php echo $datas[2]?>" placeholder="Sửa Quê quán"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="edit_user" value="Cập nhật"></td>
                    </tr>
                </table>
                
            </form>
            <form  method="GET">
        <table>
            <tr>
                <td><p2>Xem danh sách thành viên: </p2></td>
                <td><input type="submit" name="action" value="list"></td>
            </tr>
    </table>
    </form>
    </div>