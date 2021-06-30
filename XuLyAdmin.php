
<div class="col-lg-14" style="border:1px black solid;width:100%">
<td>
    <table class="table table-light ">
        <thead class="thead-light ">
            <tr>
                <th>Ảnh </th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Nhà Xuất Bản</th>
                <th>Tác Giả</th>
                <th>Số Trang</th>
                <th>Hình thức</th>
                <th>Kích thước</th>
                <th>Giới thiệu sách</th>
                <th>Ngày tạo </th>
                <th>Ngày cập nhật</th>
                <th>Sửa </th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php 
while($product=mysqli_fetch_assoc($sql_product)){
            ?>
            <tr>
                <td style="width: 200px; ">
                    <img width="100% " src="<?=$product['image']?>"></td>
                <td>  <?=$product['name']?></td>
                <td> <?=$product['price']?></td>
                <td><?=$product['created_time']?></td>
                <td><?=$product['last_updated']?></td>
                <td>
                    <a href="admin.php?id=<?=$product['id']?>&action=update">Sửa</a>
                </td>
                <td>
                    <a href="admin.php?id=<?=$product['id']?>&action=delete_product">Xóa</a>
                </td>
                <td style="width: 200px;height:200px">
                    <?=$product['info']?>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <hr>
                </td>
            </tr>
       <?php 
        } 
     ?>   
</tbody>
</table
</td>
</div>
