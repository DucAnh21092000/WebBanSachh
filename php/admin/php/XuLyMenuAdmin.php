    
<?php

switch ($_GET['action']) {
   //  Xóa sản phẩm
    case 'delete_product':
        $sql_delete_product = mysqli_query($connect,"DELETE FROM `product` WHERE `product`.`id` = ".$_GET['id']."");
       if($row ==null){
           echo "<b> Chưa có sản phẩm nào !</b>";
               }
       if($sql_delete_product){
        echo "
        <script>
            alert('Xóa sản phẩm thành công !');
            window.location.replace('./admin.php?action=product');
            </script>
            ";}
            else{
               echo "
               <script>
                   alert('Xóa sản phẩm thất bại !');
                   window.location.replace('./admin.php?action=product');
                   </script>
                   ";
            }
        break;  
          //  Lưu thay đổi sản phẩm
    case 'update_product':
       $sql_delete_product = mysqli_query($connect,"UPDATE `product` 
                                                    SET `name`='".$_POST['product-name']."',`image`=[value-3],
                                                    `price`='".$_POST['product-price']."',
                                                    `last_updated`=[value-14] WHERE `id` = ".$_GET['id']."");
      if($row ==null){
          echo "<b> Chưa có sản phẩm nào !</b>";
              }
      if($sql_delete_product){
       echo "
       <script>
           alert('Cập nhật sản phẩm thành công !');
           window.location.replace('./admin.php?action=product');
           </script>
           ";}
           else{
              echo "
              <script>
                  alert('Cập nhật sản phẩm thất bại !');
                  window.location.replace('./admin.php?action=product');
                  </script>
                  ";
           }
       break; 
       //  Xóa thành viên 
        case 'delete_member':
           $sql_delete_member = mysqli_query($connect,"DELETE FROM `member` WHERE `member`.`id` = ".$_GET['id']."");
          if($sql_delete_member){
           echo "
           <script>
               alert('Xóa thành viên thành công !');
               window.location.replace('admin.php?action=member');
               </script>
               ";}
               else{
                  echo "
                  <script>
                      alert('Xóa thành viên thất bại !');
                      window.location.replace('admin.php?action=member');
                      </script>
                      ";
               }
           break;  
           // Danh sách sản phẩm 
        case 'product' :
           ?>
       <div class="col-lg-9">
           <table class="table">
               <thead class=" thead-light ">
                   <tr>
                       <th class="text-center ">Danh sách sản phẩm </th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td class="d-flex flex-column ">
                           <div class=" ">
                               <div class=" d-flex justify-content-lg-end ">
                                   <button type="submit " class="btn btn-primary ">Thêm sản phẩm</button>
                               </div>
                           </div>
                           <form class="navbar-form pull-right ">
                               <input type="text " style="width: 200px; ">
                               <button type="submit " class="btn btn-default ">Tìm kiếm</button>
                           </form>
                           <b class="d-flex justify-content-lg-end ">Có tất cả <?=$row?> sản phẩm</b>
                       </td>

                   </tr>
               </tbody>
           </table>
       </div>
       
<div class="col-lg-14" style="border:1px black solid;width:100%">
<td>
   <table class="table table-light ">
       <thead class="thead-light ">
           <tr>
               <th>Ảnh </th>
               <th>Tên sản phẩm</th>
               <th>Giá</th>
               <th>Số lượng</th>
               <th>Nhà Xuất Bản</th>
               <th>Nhà phát hành</th>
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
                   <img class="product-image" width="100% " src="<?=$product['image']?>"></td>
               <td> <p class="product-name"> <?=$product['name']?> </p></td>
               <td> <p class="product-price"><?=$product['price']?></p></td>
               <td><p class="product-number"><?=$product['number']?></p></td>
               <td> <p class="product-publishing_company"><?=$product['publishing_company']?></p></td>
               <td><p class="product-publisher"> <?=$product['publisher']?></p></td>
               <td><p class="product-author"><?=$product['author']?></p> </td>
               <td> <p class="product-numberPage"><?=$product['number_of_page']?></p></td>
               <td> <p class="product-form"><?=$product['form']?></p></td>
               <td> <p class="product-size"><?=$product['size']?></p></td>
               <td style="width:200px;">
               <p class="product-info-demo" onload="getProduct(<?=$product['id']?>)"> <?=$product['info']?></p>
                    <span class="textcomplete<?=$abc=$product['id'] ?>"><?=$product['info']?></span>
                        <span class="textmore<?=$abc=$product['id']?>" onclick="show()">Đọc thêm...</span>
               </td>
               <td><?=$product['created_time']?></td>
               <td><?=$product['last_updated']?></td>
               <td>
                   <a href="admin.php?id=<?=$product['id']?>&action=update">Sửa</a>
               </td>
               <td>
                   <a href="admin.php?id=<?=$product['id']?>&action=delete_product">Xóa</a>
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
</table>
</td>
</div>

<?php
           break; 
             // Sửa Danh sách sản phẩm 

        case 'update' :
           $sql_product_update= mysqli_query($connect,"select * from `product` where id  =".$_GET['id']."");
?>
          <div class="col-lg-9">
           <table class="table">
               <thead class=" thead-light ">
                   <tr>
                       <th class="text-center ">Danh sách sản phẩm </th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td class="d-flex flex-column ">
                           <div class=" ">
                               <div class=" d-flex justify-content-lg-end ">
                                   <button type="submit " class="btn btn-primary ">Thêm sản phẩm</button>
                               </div>
                           </div>
                           <form class="navbar-form pull-right ">
                               <input type="text " style="width: 200px; ">
                               <button type="submit " class="btn btn-default ">Tìm kiếm</button>
                           </form>
                           <b class="d-flex justify-content-lg-end ">Có tất cả <?=$row?> sản phẩm</b>
                       </td>

                   </tr>
               </tbody>
           </table>
       </div>
       
<div class="col-lg-14" style="border:1px black solid;width:100%">
<td>
   <table class="table table-light ">
       <thead class="thead-light ">
           <tr>
               <th>Ảnh </th>
               <th>Tên sản phẩm</th>
               <th>Giá</th>
               <th class="">Số lượng</th>   
               <th>Nhà Xuất Bản</th>
               <th>Nhà phát hành</th>
               <th>Tác Giả</th>
               <th>Số Trang</th>
               <th>Hình thức</th>
               <th>Kích thước</th>
               <th>Giới thiệu sách</th>
               <th>Cập nhật</th>
           </tr>
       </thead>
       <tbody>
           <?php 
while($product=mysqli_fetch_assoc($sql_product_update)){
           ?>
           <tr>
               <td style="width: 200px;" class="d-flex flex-column">
                   <img class="product-image" width="100% " src="<?=$product['image']?>"> 
                       <form action="./admin.php?id=<?=$_GET['id']?>&action=update" method="POST" class="">
                            <input type="file" name="upload-product" id="upload-product" style="display: none;">
                                     <div class="mt-3">
                                         <label for="upload-product" class="pr-3 ml-2 pl-3 text-center btn-upload"> Upload</label>
                                         <button type="submit" name="submit-upload" class="pr-3 pl-3 btn btn-primary btn-sm"> Save  </button> 
                                    </div>
                                    <?php
                                         require_once('./XuLyUploadAnh.php');
                                    ?>
                       </form>
                </td>
               <td> <p class="product-name" contenteditable=""> <?=$product['name']?> </p></td>
               <td> <p class="product-price" contenteditable=""><?=$product['price']?></p></td>
               <td><p class="product-number" contenteditable=""><?=$product['number']?></p></td>
               <td> <p class="product-publishing_company"  contenteditable=""><?=$product['publishing_company']?></p></td>
               <td><p class="product-publisher"  contenteditable=""> <?=$product['publisher']?></p></td>
               <td><p class="product-author"  contenteditable=""><?=$product['author']?></p> </td>
               <td> <p class="product-numberPage"  contenteditable=""><?=$product['number_of_page']?></p></td>
               <td> <p class="product-form"  contenteditable=""><?=$product['form']?></p></td>
               <td> <p class="product-size"  contenteditable=""><?=$product['size']?></p></td>
               <td style="width:200px;">
               <p class="product-info-demo" onload="getProduct(<?=$product['id']?>)"> <?=$product['info']?></p>
                    <span class="textcomplete<?=$abc=$product['id'] ?>"><?=$product['info']?></span>
                        <span class="textmore<?=$abc=$product['id']?>" onclick="show()">Đọc thêm...</span>
               </td>
               <td>
                   <a href="./admin.php?id=<?=$product['id']?>&action=update_product">Lưu</a>
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
</table>
</td>
</div>
<?php
           break; 
           // Danh sách thành viên 
           case 'member' : 
                               
           if($row_member ==0){
               echo "<b> Chưa có thành viên  nào !</b>";
                   }
                   else {
?>
 <div class="col-lg-9">
           <table class="table">
               <thead class=" thead-light ">
                   <tr>
                       <th class="text-center ">Danh sách thành viên </th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td class="d-flex flex-column ">
                           <form class="navbar-form pull-right ">
                                   <input type="text " style="width: 200px; ">
                               <button type="submit " class="btn btn-default ">Tìm kiếm</button>
                           </form>
                           <b class="d-flex justify-content-lg-end ">Có tất cả <?=$row_member?> thành viên</b>
                       </td>

                       <tr style="border:1px black solid">
                           <td>
                               <table class="table table-light ">
                                   <thead class="thead-light ">
                                       <tr>
                                           <th>ID </th>
                                           <th>Email</th>
                                           <th>Full name</th>
                                           <th>Password </th>
                                           <th>PhoneNumber</th>
                                           
                                           <th>Xóa</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php 
   
   while($member=mysqli_fetch_assoc($sql_member)){
                                       ?>
                                       <tr>
                                           <td>
                                            <?=$member['id']?></td>
                                           <td> <p class="col-sm-3"><?=$member['email']?></p></td>
                                           <td> <?=$member['fullname']?></td>
                                           <td><?=$member['password']?></td>
                                           <td><?=$member['phone']?></td>
                                           <td>
                                               <a href="admin.php?id=<?=$member['id']?>&action=delete_member">Xóa</a>
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
                       </table>
                       </td>
                   </tr>
                   </tr>
               </tbody>
           </table>
       </div>
<?php
                   }

               break;        
    default:
$sql_product= mysqli_query($connect,"select * from `product`");
?>
   <div class="col-lg-9">
           <table class="table">
               <thead class=" thead-light ">
                   <tr>
                       <th class="text-center ">Danh sách sản phẩm </th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td class="d-flex flex-column ">
                           <div class=" ">
                               <div class=" d-flex justify-content-lg-end ">
                                   <button type="submit " class="btn btn-primary ">Thêm sản phẩm</button>
                               </div>
                           </div>
                           <form class="navbar-form pull-right ">
                               <input type="text " style="width: 200px; ">
                               <button type="submit " class="btn btn-default ">Tìm kiếm</button>
                           </form>
                           <b class="d-flex justify-content-lg-end ">Có tất cả <?=$row?> sản phẩm</b>
                       </td>

                   </tr>
               </tbody>
           </table>
       </div>
       
<div class="col-lg-14" style="border:1px black solid;width:100%">
<td>
   <table class="table table-light ">
       <thead class="thead-light ">
           <tr>
               <th>Ảnh </th>
               <th>Tên sản phẩm</th>
               <th>Giá</th>
               <th>Số lượng</th>
               <th>Nhà Xuất Bản</th>
               <th>Nhà phát hành</th>
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
                   <img class="product-image" width="100% " src="<?=$product['image']?>"></td>
               <td> <p class="product-name"> <?=$product['name']?> </p></td>
               <td> <p class="product-price"><?=$product['price']?></p></td>
               <td><p class="product-number" ><?=$product['number']?></p></td>
               <td> <p class="product-publishing_company"><?=$product['publishing_company']?></p></td>
               <td><p class="product-publisher"> <?=$product['publisher']?></p></td>
               <td><p class="product-author"><?=$product['author']?></p> </td>
               <td> <p class="product-numberPage"><?=$product['number_of_page']?></p></td>
               <td> <p class="product-form"><?=$product['form']?></p></td>
               <td> <p class="product-size"><?=$product['size']?></p></td>
               <td style="width:200px;">
               <p class="product-info-demo" onload="getProduct(<?=$product['id']?>)"> <?=$product['info']?></p>
                    <span class="textcomplete<?=$abc=$product['id'] ?>"><?=$product['info']?></span>
                        <span class="textmore<?=$abc=$product['id']?>" onclick="show()">Đọc thêm...</span>
               </td>
               <td><?=$product['created_time']?></td>
               <td><?=$product['last_updated']?></td>
               <td>
                   <a href="admin.php?id=<?=$product['id']?>&action=update">Sửa</a>
               </td>
               <td>
                   <a href="admin.php?id=<?=$product['id']?>&action=delete_product">Xóa</a>
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
</table>
</td>
</div>

<?php
        break;
}
?>