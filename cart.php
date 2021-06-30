<div class="cart container">
        <?php include('XuLyThanhToan.php');
        ?>
   </div>      

        <div class="pay-body d-flex flex-row ">

            <div class="pay-body__header container">
                <b class="text-center pay-body__header-text">
                        Nhập thông tin người thanh toán
                </b>
                <div class="pay-body__header-info container">

                    <div class=" input-group ">
                        <span class="input-group-addon " id="prefixId ">Họ và tên</span>
                        <input type="text " name="name " id="name " class="form-control " placeholder=" " aria-describedby="prefixId ">
                    </div>

                    <div class="input-group ">
                        <span class="input-group-addon " id="prefixId ">Số điện thoại</span>
                        <input type="text " name="name " id="name " class="form-control " placeholder=" " aria-describedby="prefixId ">
                    </div>

                    <div class="input-group ">
                        <span class="input-group-addon " id="prefixId ">Email:</span>
                        <input type="text " name="name " id="name " class="form-control " placeholder=" " aria-describedby="prefixId ">
                    </div>

                    <div class="form-check mb-3 ">
                        <label id="_label " for=" " class="required ">Địa chỉ</label>
                        <textarea id=" " name=" " rows="5 " class="form-control "></textarea>
                    </div>
                    <div class="form-check mb-3 ">
                        <label id="_label " for=" " class="required ">Thông điệp</label>
                        <textarea id=" " name=" " rows="5 " class="form-control "></textarea>
                    </div>
                    <hr>
                    <div class="form-group ">
                        <div class="col-sm-10 col-sm-offset-2 ">
                            <button type="submit " class="btn btn-primary ">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column pay-body__right ">
                <div class="pay-body__receiver container-fluid ">
                    <p class="pay-body__receiver-text ">
                        Người nhận tiền
                    </p>
                    <table style="width: 100%; ">
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Người đại diện
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    (Chưa xác thực)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Email:
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    dinhanh21092000@gmail.com
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Điện thoại
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    0582842388
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pay-body__receiver container-fluid">
                    <p class="pay-body__receiver-text ">
                        Thông tin thanh toán
                    </p>
                    <table style="width: 100%; ">
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Sản phẩm
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    12335346
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Hình thức thanh toán
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    12335346
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="info__text text-success ">
                                    Giá trị
                                </p>
                            </td>
                            <td>
                                <p class="info__profile text-capitalize ">
                                    <lable style="background: rgb(112, 238, 150);border-radius: 20px; ">
                                        11342 Đồng
                                    </lable>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="container-fluid">
                    <b>Thông tin người thanh toán </b>
                    <p> Vui lòng nhập chính xác ! Các thông tin sẽ được sử dụng để giao nhận sản phẩm </p>
                </div>

                <div class="pay-body__receiver container ">
                    <b class="pay-body__receiver-text ">Hình thức Thanh toán </b>
                    <p> Vui lòng nhập chính xác ! Các thông tin sẽ được sử dụng để giao nhận sản phẩm </p>
                    <form action="# " method="Post ">
                        <div class="form-check mb-3">
                            <input id="" name="" type="checkbox" class="form-check-input" value="" />
                            <label id="_label" class="form-check-label" for="">Thanh toán bằng tiền mặt</label>
                        </div>
                        <div class="form-check mb-3 ">
                            <input id="" name="" type="checkbox" class="form-check-input" value="" />
                            <label id="_label " class="form-check-label " for=" ">Thanh toán online</label>
                        </div>
                        <button type="submit " class="btn btn-primary ">Xác nhận</button>

                    </form>

                </div>

            </div>
        </div>
