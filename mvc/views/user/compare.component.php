<div class="wraper">
    <div class="navbar__header">
        <?php
        require_once('./mvc/views/user/header.component.php');
        ?>
    </div>
    <div class="body">
        <!-- /banner_bottom_agile_info -->
        <div class="page-head_agile_info_w3l container">
            <div class="container">
                <h3>Comparison <span>Product </span></h3>
                <!--/w3_short-->
                <div class="services-breadcrumb">
                    <div class="agile_inner_breadcrumb">

                        <ul class="w3_short">
                            <li><a href="index.html">Home</a></li>
                        </ul>
                    </div>
                </div>
                <!--//w3_short-->
            </div>
        </div>

        <div class="container">
            <section class="cd-products-comparison-table">
                <div class="cd-products-table">
                        <div class="features">
                            <div class="top-info"></div>
                            <ul class="cd-features-list">
                                <li>Brands</li>
                                <li>Price</li>
                                <li>Material</li>
                                <li>Purity of Material</li>
                                <li>Color</li>
                                <li>Main Gemstone</li>
                                <li></li>

                            </ul>
                        </div>
                        <!-- .features -->

                        <div class="cd-products-wrapper">
                            <ul class="cd-products-columns">
                                <?php
                                    foreach ($data['compare'] as $index => $compare) {
                                        echo '<li class="product">
                                                <div class="top-info">
                                                    <img src="' . str_replace("./public", "/project/public", $compare['thumbnail']) . '" alt="'.$compare['title'].'">
                                                    <h3>'.$compare['title'].'</h3>
                                                </div>
                                                <!-- .top-info -->

                                                <ul class="cd-features-list">
                                                    <li>'.$compare['brand_name'].'</li>
                                                    <li>$'.$compare['price'].'</li>
                                                    <li>'.$compare['material_name'].'</li>
                                                    <li>'.$compare['age'].'</li>
                                                    <li>'.$compare['color'].'</li>
                                                    <li>
                                                        <ul>';
                                        foreach ($compare['gemstone'] as $index => $gemstone) {
                                            echo '<li>'.$gemstone['gemstone_name'].'</li>';
                                        }
                                                            
                                        echo '</ul>
                                            </li>
                                            <li><a href="/project/product/detail/'.$compare['id'].'" class="btn btn-danger">Buy now</a></li>
                                        </ul>
                                    </li>';
                                    }
                                ?>
                            </ul>
                            <!-- .cd-products-columns -->
                        </div>
                        <!-- .cd-products-wrapper -->

                        <ul class="cd-table-navigation">
                            <li>
                                <a href="#0" class="prev "><i class="fas fa-angle-double-left"></i></a>
                            </li>
                            <li>
                                <a href="#0" class="next "><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                </div>
                    <!-- .cd-products-table -->
            </section>
        </div>
        <div class="mt-0 mb-7">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row row-fluid">
                            <div class="col-sm-4">
                                <div class="yolo-service-box">
                                    <div class="service-icon">
                                        <div class="service-icon-border"></div>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="service-icon-duplicate">
                                        <div class="service-icon-border"></div>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="service-text clearfix">
                                        <p class="sub-title">Weekly</p>
                                        <h2 class="title"><strong>Promotions</strong></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="yolo-service-box">
                                    <div class="service-icon">
                                        <div class="service-icon-border"></div>
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="service-icon-duplicate">
                                        <div class="service-icon-border"></div>
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </div>
                                    <div class="service-text clearfix">
                                        <p class="sub-title">Worldwide</p>
                                        <h2 class="title"><strong>Free Shipping</strong></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="yolo-service-box">
                                    <div class="service-icon">
                                        <div class="service-icon-border"></div>
                                        <i class="fas fa-redo-alt"></i>
                                    </div>
                                    <div class="service-icon-duplicate">
                                        <div class="service-icon-border"></div>
                                        <i class="fas fa-redo-alt"></i>
                                    </div>
                                    <div class="service-text clearfix">
                                        <p class="sub-title">In 30 days</p>
                                        <h2 class="title"><strong>Free Returns</strong></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>

    </div>
    <div class="footer mt-5">
            <?php
            require_once('./mvc/views/user/footer.component.php');
            ?>
    </div>
    <?php
        print_r($data['compare']);
    ?>
    <form method="post" name="form"></form>
    <script>
        var form = document.forms['form'];
        deleteProduct = (orderProduct_id) => {
            var deleteConfirm = confirm('Are you sure to delete this product from cart?');
            if (deleteConfirm) {
                // console.log(orderProduct_id);
                form.action = '/project/cart/deleteProduct/' + orderProduct_id;
                form.submit();
            }
        }

        changeQuantity = (id) => {
            var changeForm = document.forms['change-form-' + id];
            // console.log(changeForm);
            changeForm.submit();
        };
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
    <script>
        jQuery(document).ready(function($) {
            function productsTable(element) {
                this.element = element;
                this.table = this.element.children('.cd-products-table');
                this.tableHeight = this.table.height();
                this.productsWrapper = this.table.children('.cd-products-wrapper');
                this.tableColumns = this.productsWrapper.children('.cd-products-columns');
                this.products = this.tableColumns.children('.product');
                this.productsNumber = this.products.length;
                this.productWidth = this.products.eq(0).width();
                this.productsTopInfo = this.table.find('.top-info');
                this.featuresTopInfo = this.table.children('.features').children('.top-info');
                this.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
                this.leftScrolling = false;
                this.filtering = false,
                    this.selectedproductsNumber = 0;
                this.navigation = this.table.children('.cd-table-navigation');
                // bind table events
                this.bindEvents();
            }

            productsTable.prototype.bindEvents = function() {
                var self = this;
                //detect scroll left inside producst table
                self.productsWrapper.on('scroll', function() {
                    if (!self.leftScrolling) {
                        self.leftScrolling = true;
                        (!window.requestAnimationFrame) ? setTimeout(function() {
                            self.updateLeftScrolling();
                        }, 250): window.requestAnimationFrame(function() {
                            self.updateLeftScrolling();
                        });
                    }
                });

                //scroll inside products table
                this.navigation.on('click', 'a', function(event) {
                    event.preventDefault();
                    self.updateSlider($(event.target).hasClass('next'));
                });
            }

            productsTable.prototype.updateNavigationVisibility = function(scrollLeft) {
                (scrollLeft > 0) ? this.navigation.find('.prev').removeClass('inactive'): this.navigation.find('.prev').addClass('inactive');
                (scrollLeft < this.tableColumns.outerWidth(true) - this.productsWrapper.width() && this.tableColumns.outerWidth(true) > this.productsWrapper.width()) ? this.navigation.find('.next').removeClass('inactive'): this.navigation.find('.next').addClass('inactive');
            }


            productsTable.prototype.updateSlider = function(bool) {
                var scrollLeft = this.productsWrapper.scrollLeft();
                scrollLeft = (bool) ? scrollLeft + this.productWidth : scrollLeft - this.productWidth;

                if (scrollLeft < 0) scrollLeft = 0;
                if (scrollLeft > this.tableColumns.outerWidth(true) - this.productsWrapper.width()) scrollLeft = this.tableColumns.outerWidth(true) - this.productsWrapper.width();

                this.productsWrapper.animate({
                    scrollLeft: scrollLeft
                }, 200);
            }

            var comparisonTables = [];
            $('.cd-products-comparison-table').each(function() {
                //create a productsTable object for each .cd-products-comparison-table
                comparisonTables.push(new productsTable($(this)));
            });

            function checkScrolling() {
                var scrollTop = $(window).scrollTop();
                comparisonTables.forEach(function(element) {
                    element.updateTopScrolling(scrollTop);
                });

                windowScrolling = false;
            }

            function checkResize() {
                comparisonTables.forEach(function(element) {
                    element.updateProperties();
                });

                windowResize = false;
            }

            function checkMQ() {
                //check if mobile or desktop device
                return window.getComputedStyle(comparisonTables[0].element.get(0), '::after').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
            }

            function setTranformX(element, value) {
                element.css({
                    '-moz-transform': 'translateX(' + value + 'px)',
                    '-webkit-transform': 'translateX(' + value + 'px)',
                    '-ms-transform': 'translateX(' + value + 'px)',
                    '-o-transform': 'translateX(' + value + 'px)',
                    'transform': 'translateX(' + value + 'px)'
                });
            }
        });
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