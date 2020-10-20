<div class="content-wrapper">
    <aside class="sidebar">
        <div style="font-size:18px; color:#efefef;margin-bottom:15px;margin-left:-5px;">Categories</div>
        <?php foreach ($subcategories as $value){?>
            <div class="subcategories <?php echo ($subcategory != 'all' && $subcategory == $value) ? 'subcategoryactive' : '';?>">
            <a href="<?php echo ($subcategory != $value) ? base_url("/category/tables/$value") : '#';?>" >
                <?php echo ucwords(str_replace('_', ' ', $value)); ?>
            </a>
            </div>
        <?php } ?>
    </aside>

    <div class="container productcontainer">
        <div class="product row">
            <div class="productimage">
                <img src="<?php echo base_url('/images/bg_2.jpg')?>" alt="First slide">
            </div>
            <div class="productdesc">
                <h3>THIS IS A TITLE</h3>
            </div>
        </div>
        <div class="product row">
            <div class="productimage">
                <img src="<?php echo base_url('/images/chair_3.jpg')?>" alt="First slide">
            </div>
            <div class="productdesc"></div>
        </div>
        <div class="product row">
            <div class="productimage">
                <img src="<?php echo base_url('/images/chair_1.jpg')?>" alt="First slide">
            </div>
            <div class="productdesc"></div>
        </div>
    </div>
</div>