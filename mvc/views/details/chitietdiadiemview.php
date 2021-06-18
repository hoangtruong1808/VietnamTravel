
<div class="chitietdiadiem">
    <div class="chitietdiadiem_ten"><?php echo $data["diadiem"]["ten"] ?></div>
    <div class="chitietdiadiem_noidung"><?php echo $data["diadiem"]["chitiet"] ?>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="chitietdiadiem_img">
                <img id="slider" src="./public/image/<?php echo $data["diadiem"]["urlhinh"] ?>">
                <button class="btn-prev" onclick="prev()"> <i class="fas fa-chevron-left"></i> </button>
                <button class="btn-next" onclick="next()"> <i class="fas fa-chevron-right"></i> </button>
            </div>

            <script>
                var images = [
                    <?php 
                        foreach ($data["image"] as $image)   
                        {
                            echo '"./public/image/'.$image['image'].'",';
                        } 
                    ?>
                ];
                var num = 0;

                function next() {
                    var slider = document.getElementById("slider");
                    num++;
                    if(num >= images.length) {
                        num = 0;
                    }
                    slider.src = images[num];
                }

                function prev() {
                    var slider = document.getElementById("slider");
                    num--;
                    if(num < 0) {
                        num = images.length-1;
                    }
                    slider.src = images[num];
                }
            </script>
            
            
        </div>
        <div class="col-sm-6">
            <div class="chitietdiadiem_chitiet">
                <i class="fas fa-home"> <span><?php echo $data["diadiem"]["ten"] ?></span></i>
            </div>
            <div class="chitietdiadiem_chitiet">
                <i class="fas fa-map-marker-alt"> <span><?php echo $data["diadiem"]["diachi"] ?></span></i>
            </div>
            <div class="chitietdiadiem_chitiet">
                <i class="fas fa-city"> <span><?php echo $data["diadiem"]["thanhpho"] ?></span></i>
            </div>
            <div class="chitietdiadiem_chitiet">
                <i class="fas fa-tablet-alt">  <span><?php echo $data["diadiem"]["loaidiadiem"] ?></span> </i>
            </div>
            <div class="chitietdiadiem_chitiet">
                <i class="fas fa-wifi"> <span><?php echo $data["diadiem"]["tiennghi"] ?></span></i>
            </div>
        </div>
    </div>
    <div class="chitietdiadiem-map">
        <p><b>Vị trí của <?php echo $data["diadiem"]["ten"] ?></b></p>
        <?php echo $data["diadiem"]["urlmap"] ?>
    </div>
    <div class="commentarea">
        <?php if(isset($_SESSION["id"]))
        { ?>
        <form class="comment_form" name="comment" action="./trangchu/comment" method="POST">
            <input type="hidden" name="theloai" value="Địa điểm"></input>
            <input type="hidden" name="idbaiviet" value="<?php echo $data['diadiem']['ID']?>"></input>
            <input type="hidden" name="link" value="./diadiem/chitietdiadiem/<?php echo $data['diadiem']['madiadiem'] ?>/<?php echo $data['diadiem']['ID']?>"></input>
            <div>
                <label>Comment</label>
            </div>
            <div>
                <textarea name="comment-text" class="comment_form--text"></textarea>
            </div>
            <div>
                <input id="btn-comment" type="submit" value="Bình luận">
            </div>
        </form>
        <?php }?>
        <div class="comments">
            <?php foreach ($data["comment"] as $comment)
            {?>
            <div class="comment">
                <div class="comment_user"><b><?php echo $comment['hotenuser']?></b> <div class="date"><?php echo $comment['date']?></div></div>
                <div class="comment_text"><?php echo $comment['text']?></div>
            </div>
            <?php }?>
        </div>
    </div>
</div>