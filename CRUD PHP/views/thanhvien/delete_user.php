<div class="edit-user">
        <h3 style="color: blue">Xóa thành viên</h3>
            <form action="" method="POST">
                <table> 
                    <tr>
                        <td><b>Họ tên:</b></td>
                        <td><input style="color:red" type="text" name="hoten" value="<?php echo $datas[0]?>" readonly></td>
                    </tr>
                    <tr>
                        <td><b>Năm sinh:</b></td>
                        <td><input style="color:red" type="text" name="namsinh" value="<?php echo $datas[1]?>" readonly><td>
                    </tr>
                    <tr>
                        <td><b>Quê Quán:</b></td>
                        <td><input style="color:red" type="text" name="quequan" value="<?php echo $datas[2]?>" readonly></td>
                    </tr>
                    <tr>
                        <td><p3 style ="color:red"><b>Bạn chắc chắn muốn xóa chứ?</b></p3></td>
                        <td><input style="color:red" type="submit" name="delete_user" value="CÓ"></td>
                    </tr>
                </table>
                
            </form>
            <form  method="GET">
        <table>
            <tr>
                <td><p2><b>Hủy xóa và quay lại trang list: </b></p2></td>
                <td><input type="submit" name="action" value="list"></td>
            </tr>
    </table>
    </form>
    </div>