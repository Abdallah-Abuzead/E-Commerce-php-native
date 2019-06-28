
<?php ob_start();
session_start();
include "init.php";?>
    <div class="container">
        <h1 class="text-center">Show Category</h1>
        <div class="row">
            <?php
            $items = getAll("*", "items","where cat_id = {$_GET['id']} and approve = 1");
            foreach ($items as $item){ ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail item-box">
                            <span class="price-tag">$<?php echo $item['price'];?></span>
                            <img class="img-responsive" src="img.png" alt="">
                            <div class="caption">
                                <h3><a href="items.php?id=<?php echo $item['id'];?> "> <?php echo $item['name']; ?></a></h3>
                                <p><?php echo $item['description'];?></p>
                                <div class="date"><?php echo $item['addDate']; ?></div>
                            </div>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
<?php include $tpl."_footer.php"; ob_end_flush();?>