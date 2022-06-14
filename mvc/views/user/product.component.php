<div class="wraper">
    <div class="navbar__header">
        <?php
        require_once('./mvc/views/user/header.component.php');
        ?>
    </div>

    <div class="body">
        <div class="page-head_agile_info_w3l container">
            <div class="container">
                <h3><?=$data['title']?></h3>
                <!--/w3_short-->
                <div class="services-breadcrumb">
                    <div class="agile_inner_breadcrumb">

                        <ul class="w3_short">
                            <li><a href="/project">Home</a><i>|</i></li>
                            <li><?=$data['title']?></li>
                        </ul>
                    </div>
                </div>
                <!--//w3_short-->
            </div>
        </div>
        

        <div class="container filter ">
            <div class="container-filter">
                <div class="container-filter__item">
                    Brands
                    <i class="container-filter__icon-down fas fa-chevron-down"></i>
                    <ul class="container-filter__list">
                        <?php
                        foreach ($data['brand'] as $brand) {
                            echo '<li class="container-filter__list-item">
                                        ' . $brand['brand_name'] . '
                                    </li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="container-filter__item">
                    Material
                    <i class="container-filter__icon-down fas fa-chevron-down"></i>
                    <ul class="container-filter__list">
                        <?php
                        foreach ($data['material'] as $material) {
                            echo '<li class="container-filter__list-item">
                                        ' . $material['material_name'] . '
                                    </li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="container-filter__item">
                    Price
                    <i class="container-filter__icon-down fas fa-chevron-down"></i>
                    <ul class="container-filter__list">
                        <li class="container-filter__list-item">
                            <div data-role="main" class="ui-content">
                                <form method="post" action="/action_page_post.php">
                                    <div data-role="rangeslider">
                                        <label for="price-min">Price:</label>
                                        <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                                        <label for="price-max">Price:</label>
                                        <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
                                    </div>
                                    <input type="submit" data-inline="true" value="Submit">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container-filter__item">
                    Purify of gold
                    <i class="container-filter__icon-down fas fa-chevron-down"></i>
                    <ul class="container-filter__list">
                        <li class="container-filter__list-item">
                            10K
                        </li>
                        <li class="container-filter__list-item">
                            14K
                        </li>
                        <li class="container-filter__list-item">
                            18K
                        </li>
                        <li class="container-filter__list-item">
                            22K
                        </li>
                        <li class="container-filter__list-item">
                            24K
                        </li>
                    </ul>
                </div>
                <div class="container-filter__item">
                    Main gemstone
                    <i class="container-filter__icon-down fas fa-chevron-down"></i>
                    <ul class="container-filter__list">
                        <?php
                        foreach ($data['gemstone'] as $gemstone) {
                            echo '<li class="container-filter__list-item">
                                        ' . $gemstone['gemstone_name'] . '
                                    </li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="container-filter__item">
                    Material color
                    <i class="container-filter__icon-down fas fa-chevron-down"></i>
                    <ul class="container-filter__list">
                        <li class="container-filter__list-item">
                            Rose Gold
                        </li>
                        <li class="container-filter__list-item">
                            White Gold
                        </li>
                        <li class="container-filter__list-item">
                            Yellow Gold
                        </li>
                        <li class="container-filter__list-item">
                            Rhodium
                        </li>
                        <li class="container-filter__list-item">
                            Don't Care!
                        </li>
                    </ul>
                </div>
                <div class="container-filter__item sort" >
                    Sort by
                    <i class="container-filter__icon-down fas fa-chevron-down"></i>
                    <ul class="container-filter__list">
                        <li class="container-filter__list-item">
                            Newest Arrivals
                        </li>
                        <li class="container-filter__list-item">
                            Price Low to High
                        </li>
                        <li class="container-filter__list-item">
                            Price High to Low
                        </li>
                        <li class="container-filter__list-item">
                            Best Selling
                        </li>
                        <li class="container-filter__list-item">
                            Rating High to Low
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="products container">
            <div class="row mb-5">
                <?php
                foreach ($data['product'] as $index => $product) {
                    echo '<div class="col-xs-6 col-md-3 mb-5">
                            <div class="product product--sale">
                                <div class="product-img-info">
                                    <a href="/project/product/detail/'.$product['id'].'" class="product__link">
                                        <img src="' . str_replace("./public", "/project/public", $product['thumbnail']) . '" class="product__img" alt="">
                                        <div class="product__sale">
                                            SALE!
                                        </div>
                                    </a>
                                    <div class="item-box-hover">
                                        <div class="cart-wrap">
                                            <i class="fas fa-shopping-cart"></i> ADD TO COMPARE
                                        </div>
                                        <div class="box-inner v-center">
                                            <a href="" class="box-inner__item wishlist">
                                                <i class="fas fa-heart"></i>
                                                <div class="icon-script">Add to Wishlist</div>
                                            </a>
                                            <a href="/project/compare/addCompare/'.$product['id'].'" class="box-inner__item compare">
                                                <i class="fas fa-random"></i>
                                                <div class="icon-script">Comparision</div>

                                            </a>
                                            <a href="/project/product/detail/' . $product['id'] . '" class="box-inner__item view">
                                                <i class="fas fa-eye"></i>
                                                <div class="icon-script">Quick View</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="product__name">' . $product['title'] . '</a>
                                <div class="product__price">
                                    <span class="old-price">$ 9.00</span>
                                    <span class="new-price">$ '.$product['price'].'</span>
                                </div>
                                <div class="product__rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
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
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i> </button>
    </div>
</div>
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
<script>
    const navMobileBtn = document.querySelector('.js-mobile-btn')
    const mobileMenu = document.querySelector('.js-mobile-menu')
    var mobileOverlay = document.querySelector('.mobile-menu-overlay')

    navMobileBtn.onclick = function() {
        mobileMenu.style.transform = "scaleY(1)";
        mobileOverlay.style.display = "block";
    }

    mobileOverlay.onclick = function() {
        mobileMenu.style.transform = "scaleY(0)";
        mobileOverlay.style.display = "none";
    }
</script>