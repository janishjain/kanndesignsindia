<div class="content-wrapper">
    <div class="sidebar">
        <div style="font-size:18px; color:#efefef;margin-bottom:15px;margin-left:-5px;">Categories</div>
        <?php foreach ($subcategories as $value){?>
            <div class="subcategories <?php echo ($subcategory != 'all' && $subcategory == $value) ? 'subcategoryactive' : '';?>">
            <a href="<?php echo ($subcategory != $value) ? base_url("/category/tables/$value") : '#';?>" >
                <?php echo ucwords(str_replace('_', ' ', $value)); ?>
            </a>
        </div>
        <?php } ?>
    </div>

    <div class="productcontainer">
        <div class="product">
            <div class="productimage"></div>
            <div class="productdesc"></div>
        </div>
    </div>
    <div class="productcontainer">
        <div class="product">
            <div class="productimage"></div>
            <div class="productdesc"></div>
        </div>
    </div><div class="productcontainer">
        <div class="product">
            <div class="productimage"></div>
            <div class="productdesc"></div>
        </div>
    </div><div class="productcontainer">
        <div class="product">
            <div class="productimage"></div>
            <div class="productdesc"></div>
        </div>
    </div>

</div>