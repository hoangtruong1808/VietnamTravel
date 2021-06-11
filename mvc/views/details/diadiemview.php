                <div class="diadiemview">
                    <div class="row">
                    <?php foreach($data["diadiem1"] as $diadiem)
                    {?>
                        <div class="col-sm-4">
                            <div class="diadiemview__menu">
                                <a href="./diadiem/chitietdiadiem/<?php echo $diadiem["madiadiem"]?>/<?php echo $diadiem["ID"]?>"><img src="./public/image/<?php echo $diadiem["urlhinh"]?>"></a>
                                <div class="thanhpho"><a href="./diadiem/chitietdiaddiem/<?php echo $diadiem["madiadiem"]?>"> <?php echo $diadiem["loaidiadiem"]?> -</a> <a href="./diadiem/boloc/thanhpho/<?php echo $diadiem["thanhpho"]?>"> <?php echo $diadiem["thanhpho"]?> </a></div>
                                <div class="diadiem"><a href="./diadiem/chitietdiadiem/<?php echo $diadiem["madiadiem"]?>"> <?php echo $diadiem["ten"]?> </a></div>
                                <div class="diachi"><?php echo $diadiem["diachi"]?></div> 
                            </div>
                        </div>
                    <?php
                    }?>
                    </div>
                    <div class="row">
                    <?php foreach($data["diadiem2"] as $diadiem)
                    {?>
                        <div class="col-sm-4">
                            <div class="diadiemview__menu">
                                <a href="./diadiem/chitietdiadiem/<?php echo $diadiem["madiadiem"]?>/<?php echo $diadiem["ID"]?>"><img src="./public/image/<?php echo $diadiem["urlhinh"]?>"></a>
                                <div class="thanhpho"><a href="./diadiem/chitietdiaddiem/<?php echo $diadiem["madiadiem"]?>"> <?php echo $diadiem["loaidiadiem"]?> -</a> <a href="./diadiem/boloc/thanhpho/<?php echo $diadiem["thanhpho"]?>"> <?php echo $diadiem["thanhpho"]?> </a></div>
                                <div class="diadiem"><a href="./diadiem/chitietdiadiem/<?php echo $diadiem["madiadiem"]?>"> <?php echo $diadiem["ten"]?> </a></div>
                                <div class="diachi"><?php echo $diadiem["diachi"]?></div> 
                            </div>
                        </div>
                    <?php
                    }?>
                    </div>
                    <div class="row">
                    <?php foreach($data["diadiem3"] as $diadiem)
                    {?>
                        <div class="col-sm-4">
                            <div class="diadiemview__menu">
                                <a href="./diadiem/chitietdiadiem/<?php echo $diadiem["madiadiem"]?>/<?php echo $diadiem["ID"]?>"><img src="./public/image/<?php echo $diadiem["urlhinh"]?>"></a>
                                <div class="thanhpho"><a href="./diadiem/chitietdiaddiem/<?php echo $diadiem["madiadiem"]?>"> <?php echo $diadiem["loaidiadiem"]?> -</a> <a href="./diadiem/boloc/thanhpho/<?php echo $diadiem["thanhpho"]?>"> <?php echo $diadiem["thanhpho"]?> </a></div>
                                <div class="diadiem"><a href="./diadiem/chitietdiadiem/<?php echo $diadiem["madiadiem"]?>"> <?php echo $diadiem["ten"]?> </a></div>
                                <div class="diachi"><?php echo $diadiem["diachi"]?></div> 
                            </div>
                        </div>
                    <?php
                    }?>
                    </div>
                </div>
    <div class="phantrang">
        <?php 
            for ($i=1; $i<=$data["sopage"]; $i++)
            {
                echo "<a href='./diadiem/page/$i' ><span>$i</span></a>";
            }
        ?>
    </div>