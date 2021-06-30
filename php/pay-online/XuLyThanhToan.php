<table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th class="table__th-name">Tên sản phẩm </th>
                    <th class="table__th">Giá</th>
                    <th class="table__th">Số lượng</th>
                    <th class="table__th">Thành tiền</th>
                    <th></th>
                </tr>
               
            </thead>
            <tbody>
                <?php 
                           $_SESSION['all-price']=($_SESSION['number']*$_SESSION['price']);
                           $ulr= "user=".$_GET['user']."&id=".$_GET['id']."&phone=".$_GET['phone']."&number=".$_SESSION['number']."&price=".$_SESSION['price'];
                            include('../../connect.php');
                            mysqli_set_charset($connect, "utf8");
                            $sql_product= mysqli_query($connect,"Select * from `product` where id = ".$_GET['id']."");
                            while($product=mysqli_fetch_assoc($sql_product)){
                                $_SESSION['all-price'] = $_GET['number']*$_SESSION['price'];
                                ?>
                <form action="pay-online.php?id=<?=$_GET['id']?>" method="POST">
                    <tr>
                        <td class="d-flex flex-row  table-active"><img src="<?=$product['image']?>" style="height:160px; width:120px; border: 1px solid; margin-right:50px">
                            <p class="d-flex product__info">
                                <?=$_SESSION['product-name']=$product['name'] ?>
                            </p>
                        </td>
                        <td style="height:160px;">
                            <p class="d-flex product__info">
                                <?=number_format($_SESSION['price'],0,".",".")?> Đồng
                            </p>
                        </td>
                        <td class="table-active" style="height:160px;">
                            <p class="d-flex product__info">
                                <?=$_GET['number']?>
                            </p>
                        </td>
                        <td class=""    style="height:160px;">
                            <p class="d-flex product__info">
                                <?=number_format($_SESSION['all-price'],0,".",".")?> Đồng
                            </p>
                        </td>
                        <td class="table-active">
                                 <div class="form-group">
                                         <div class="col-sm-offset-2">
                                                 <button type="submit" style="margin-top:60px" name="delete_product" class="btn">Xóa</button>
                                         </div>
                                </div>
                        </td>
                    </tr>   
                </form>
            <tr>
            
                 <td>
                 
                     <button type="submit" class="btn__submit" name="next" style="width: max-content">Chỉnh sửa</button>
                     <button type="submit" name="return_detail" onclick="returnDetail(<?=$_GET['id']?>)" class="btn__return" style="width: max-content">Quay lại trang trước</button>
                </td>                      

            </tr>     
                    <?php } ?>
            </tbody>
        </table>
      