<?php
// print_r($data['product']);
// print_r($data['product_gemstone']);
?>
<style>
    .navbar_header{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #fff;
        z-index: 3;
    }
    .container{
        margin-top: 50px;
    }
</style>
<div class="wraper">
    <div class="navbar_header">
        <?php
        require_once('./mvc/views/user/header.component.php');
        ?>

    </div>

    <div class="container">
        <div class="page-head_agile_info_w3l container">
            <div class="container">
                <h3><?= $data['product']['category_name'] ?></h3>
                <!--/w3_short-->
                <div class="services-breadcrumb">
                    <div class="agile_inner_breadcrumb">

                        <ul class="w3_short">
                            <li><a href="/project">Home</a><i>|</i></li>
                            <li><a href="/project/product/category/<?=$data['product']['category_id']?>"><?= $data['product']['category_name'] ?></a></li>
                        </ul>
                    </div>
                </div>
                <!--//w3_short-->
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <?php
                            echo '<img src="' . str_replace("./public", "/project/public", $data['product']['thumbnail']) . '" alt="' . $data['product']['title'] . '">';

                            foreach ($data['thumbnail'] as $index => $thumbnail) {
                                echo '<img src="' . str_replace("./public", "/project/public", $thumbnail['thumbnail']) . '" alt="' . $data['product']['title'] . '">';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="img-select">
                        <?php
                        echo '<div class="img-item">
                                    <a href="#" data-id="0">
                                        <img src="' . str_replace("./public", "/project/public", $data['product']['thumbnail']) . '" alt="' . $data['product']['title'] . '">
                                    </a>
                                </div>';

                        $index = 1;
                        foreach ($data['thumbnail'] as $thumbnail) {
                            echo '<div class="img-item">
                                        <a href="#" data-id="' . ($index++) . '">
                                            <img src="' . str_replace("./public", "/project/public", $thumbnail['thumbnail']) . '" alt="' . $data['product']['title'] . '">
                                        </a>
                                    </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 detail_product">
                <form name="form" method="post" action="/project/cart/addCart/<?= $data['product']['id'] ?>">
                    <div class="product-content">
                        <h2 class="product-title"><?= $data['product']['title'] ?></h2>
                        <a href="/project/product" class="product-link">visit store</a>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>4.7(21)</span>
                        </div>

                        <div class="product-price">
                            <p class="new-price"><span>$<?= $data['product']['price'] ?> </span></p>
                        </div>

                        <div class="product-detail">
                            <h2>about this item: </h2>
                            <ul>
                                <li>Category: <span><?= $data['product']['category_name'] ?></span></li>
                                <li>Size: <span>
                                        <?php
                                        foreach ($data['product_size'] as $index => $product_size) {
                                            echo '<div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size_id" value="'.$product_size['id'].'" required>
                                                    <label class="form-check-label">
                                                        ' . $product_size['size'] . '
                                                    </label>
                                                </div>';
                                        }
                                        ?>
                                    </span></li>
                                <li>Available: <span>in stock</span></li>
                                <li><span class="option-item">Product prices vary depending on the weight of gold and gemstones</span></li>
                                <li><span class="option-item">Exchange products within 48 hours at PNJ stores</span></li>
                                <li><span class="option-item">Free express delivery within 1-7 days</span></li>
                            </ul>
                        </div>

                        <div class="purchase-info">
                            <input type="number" min="0" max="5" value="1" name="quantity">
                            <button type="button" class="btn btn-primary" onclick="addCart()">
                                Add to Cart <i class="fas fa-shopping-cart"></i>
                            </button>
                            <a href="/project/compare/addCompare/<?=$data['product']['id']?>" type="button" class="btn btn-danger">
                                Compare <i class="fas fa-random"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="description">
            <section>
                <div class="introduce">
                    <div class="grid">
                        <div class="yolo-title title-center yolo-title-margin-bottom">
                            <span class="content__tophead">Description</span>
                        </div>
                    </div>
                </div>
                <details>
                    <summary>Details</summary>
                    <div class="product-detail">
                            <ul>
                                <li>Material: <span><?= $data['product']['material_name'] ?></span></li>
                                <?php
                                if ($data['product']['color'] != null) {
                                    echo '<li>Color: <span>' . $data['product']['color'] . '</span></li>';
                                }
                                if ($data['product']['age'] != null) {
                                    echo '<li>Purity of Material: <span>' . $data['product']['age'] . '</span></li>';
                                }
                                ?>
                                       
                                <li>Main Gemstone: <span><?php
                                    foreach ($data['product_gemstone'] as $gemstone) {
                                        echo   $gemstone['gemstone_name'] ;
                                    }
                                    ?>
                                    </span></li>
                                <li>Thương hiệu : <span><?= $data['product']['brand_name'] ?> </span></li>
                            </ul>
                        </div>
                </details>
                <details>
                    <summary>After-purchase service</summary>
                    <p>
                        <b>6 months free warranty</b>
                    </p>
                    <p>Free ultrasound and polishing by dedicated machine for life</p>
                    <p>Free ultrasound and polishing by dedicated machine for life For products that are oxidized and discolored, they will be cleaned by ultrasonic cleaning with a specialized machine (ultrasonic, no cement) <br> free of charge for life
                        at the store.​<br> Free polishing for life. Wedding rings will be warranted, renewed, polished, free poker for life.​<br> Free change of CZ stone and synthetic stone​<br> Free replacement of CZ stone and synthetic stone during
                        the warranty period.​​​<br> * Warranty does not apply to the following cases:​​​<br> - The production chain, shaker is broken; severely deformed or damaged - Customer provides incorrect invoice retrieval information.​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​</p>
                </details>
                <details>
                    <summary>Product Description
                    </summary>
                    <p><?= $data['product']['description'] ?></p>
                </details>
                <details>
                    <summary>FAQs
                    </summary>
                    <p>Lorem ipsum dolor sit amet, eu alia suscipit mei. Reque iriure delectus vix id, ex sed forensibus suscipiantur. In eos exerci mollis apeirian, an qui latine alienum. Ad mea libris maluisset, consul assueverit sea ex. </p>
                </details>
            </section>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i> </button>
    </div>
    <div class="footer mt-5">
        <?php
        require_once('./mvc/views/user/footer.component.php');
        ?>
    </div>
    <div class="media-button">
        <div id="share-circle">
            <div id="share1" class="share facebook" onclick="icon_select('share1');"><span class="icon-facebook"><i class="fab fa-facebook-messenger"></i></span></div>
            <div id="share2" class="share twitter" onclick="icon_select('share2');"><span class="icon-twitter"><i class="fad fa-phone"></i></span></div>
            <div id="share3" class="share googleplus" onclick="icon_select('share3');"><span class="icon-google-plus"><i class="fal fa-calendar-alt"></i></span></div>
            <div id="share4" class="share linkedin" onclick="icon_select('share4');"><span class="icon-linkedin2"></span><i class="fab fa-telegram"></i></div>

            <div id="share-button">
                <span id="shareicon" class="icon-share" onclick="share_expand();"><i class="far fa-phone-square-alt"></i></span>
                <span id="xicon" class="icon-x" style="display: none;" onclick="share_close();"><i class="fas fa-times"></i></span>
            </div>
        </div>
    </div>
</div>
<!-- submit size form -->
<script>
    var form = document.forms['form'];
    addCart = () => {
        form.submit();
    }
</script>
<!-- product img -->
<script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 0;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 0) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
</script>
<script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
<script>
    // Big red button
    var redbutton = document.getElementById('share-button');
    var sharebutton = document.getElementById('shareicon');
    var xbutton = document.getElementById('xicon');

    // Mini share buttons
    var share1 = document.getElementById('share1');
    var share2 = document.getElementById('share2');
    var share3 = document.getElementById('share3');
    var share4 = document.getElementById('share4');


    function share_expand() {
        // Animation for the big red button with the share icon
        redbutton.className = 'share-button button-expand';
        sharebutton.className = 'icon-share share-expand';
        xbutton.style.display = 'block';
        xbutton.className = 'icon-x x-expand';

        // Opening the mini share buttons
        setTimeout(function() {
            share1.className = 'share facebook opened';
            share2.className = 'share twitter opened';
            share3.className = 'share googleplus opened';
            share4.className = 'share linkedin opened';

        }, 300);

        // setTimeout for the big red button with the share icon
        setTimeout(function() {
            sharebutton.className = 'icon-share closed';
            xbutton.className = 'icon-x expanded';
            sharebutton.style.display = 'none';
        }, 1000);
    }

    function share_close() {
        // Animation for the big red button with the share icon
        redbutton.className = 'share-button button-close';
        xbutton.className = 'icon-x x-close';
        sharebutton.style.opacity = '0';
        sharebutton.style.display = 'block';
        sharebutton.className = 'icon-share share-close';

        // Closing the mini share buttons
        share1.className = 'share facebook nodelay';
        share2.className = 'share twitter nodelay';
        share3.className = 'share googleplus nodelay';
        share4.className = 'share linkedin nodelay';



        // setTimeout for the big red button with the share icon
        setTimeout(function() {
            sharebutton.style.opacity = '1';
            sharebutton.className = 'icon-share';
            xbutton.className = 'icon-x';
            xbutton.style.display = 'none';

            // Closing the mini share buttons
            share1.className = 'share facebook';
            share2.className = 'share twitter';
            share3.className = 'share googleplus';
            share4.className = 'share linkedin';

        }, 1000);
    }
</script>