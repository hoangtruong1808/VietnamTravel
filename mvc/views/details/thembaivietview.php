<div class="themcapnhattour">
    <h3>Thêm bài viết mới</h3>
    <form action="./taikhoan/processthembaiviet" method="POST" enctype="multipart/form-data">
        <div class="row">       
            <div class="col-sm-6"> 
                <div class="form">             
                    <label>Tiêu đề</label>
                    <div><input type="form" name="tieude" required></input></div>
                </div>
                <div class="form">
                    <label>Tiêu đề không dấu</label>
                    <div><input type="form" name="tieudekhongdau" required></input></div>
                </div>
                <div class="form">
                    <label>Ảnh mô tả</label>
                    <div><input type="file" name="baiviet-img" required></input></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form">             
                    <label>Thể loại</label>
                    <div>
                        <select  name="theloai" style="height: 30px;">
                            <option value='2'>
                                Khám phá
                            </option>
                            <option value='3'>
                                Di sản
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form">             
                    <label>Loại bài viết</label>
                    <div>
                        <select  name="loaibaiviet" style="height: 30px;">
                            <option value='1'>
                                Điểm đến
                            </option>
                            <option value='2'> 
                                Ẩm thực
                            </option>
                            <option value='3'>
                                Lễ hội
                            </option>
                            <option value='4'>
                                Di sản tư liệu
                            </option>
                            <option value='5'>
                                Di sản vật thể
                            </option>
                            <option value='6'>
                                Di sản phi vật thể
                            </option>
                        </select>
                    </div>
                </div>           
            </div>        
        </div>
        <div class="row"> 
            <div class="form">
                <label>Tóm tắt</label>
                    <div>
                        <textarea rows="3" name="tomtat" style="width: 100%; height: 150px" required></textarea>
                    </div>
                </div>
        </div>
        <div class="row"> 
            <div class="form">
                <label>Nội dung bài viết</label>
                    <div><textarea rows="3" name="content" required></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('content');
                        </script>
                    </div>
                </div>
        </div>
        <input class="btn-themtour" type="submit" value="Thêm" name="btn-thembaiviet">
        <p id="ketqua"><?php echo $data["result"]?></p>
    </form>
</div>