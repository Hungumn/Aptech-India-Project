
<div class="wraper">
    <div class="navbar__header">
        <?php
        require_once('./mvc/views/user/header.component.php');
        ?>
    </div>


        <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l container" style="margin-top: 125px;">
        <div class="container">
            <h3>Single <span>Page </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">



                        <ul class="w3_short">
                            <li><a href="index.html">Home</a><i>|</i></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
                <!--//w3_short-->
            </div>
        </div>

        <div class="container">
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <h1>Shopping cart</h1>
                    <div class="goods-page">
                        <div class="goods-data clearfix">
                            <div class="table-wrapper-responsive">
                                <table summary="Shopping cart">
                                    <thead>
                                        <th class="goods-page-image">Image</th>
                                        <th class="goods-page-description">Description</th>
                                        <th class="goods-page-quantity">Quantity</th>
                                        <th class="goods-page-price">Unit price</th>
                                        <th class="goods-page-total" colspan="2">Total</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $totalPrice = 0;
                                        foreach ($data['order'] as $index => $order) {
                                            if($order['id'] == null){
                                                echo '<tr><td colspan="6">The cart currently does not have any products</td></tr>';
                                            }else{
                                                echo '<tr>
                                                        <td class="goods-page-image">
                                                            <a href="/project/product/detail/'.$order['product_id'].'"><img src="' . str_replace("./public", "/project/public", $order['thumbnail']) . '" alt="Berry Lace Dress"></a>
                                                        </td>
                                                        <td class="goods-page-description">
                                                            <h3><a href="/project/product/detail/'.$order['product_id'].'">'.$order['title'].'</a></h3>
                                                            <div class="detail-description">
                                                                <p><span>Material</span> - '.$order['material_name'].'</p>
                                                                <p><span>Color</span> - '.$order['color'].'</p>
                                                                <p><span>Size</span> - '.$order['size'].'</p>
                                                            </div>
                                                        </td>
                                                        <td class="goods-page-quantity">
                                                            <div class="product-quantity">
                                                                <form method="post" name="change-form-'.$order['id'].'" action="/project/cart/updateQuantity/'.$order['id'].'">
                                                                    <input id="product-quantity" type="number" name="quantity" min="1" max="50" value="'.$order['quantity'].'" class="form-control input-sm" onfocusout="changeQuantity('.$order['id'].')">
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td class="goods-page-price">
                                                            <strong><span>$</span>'.$order['price'].'</strong>
                                                        </td>
                                                        <td class="goods-page-total">
                                                            <strong><span>$</span>'.$order['quantity']*$order['price'].'</strong>
                                                        </td>
                                                        <td class="del-goods-col">
                                                            <button class="btn btn-danger" onclick="deleteProduct('.$order['id'].')">X</button>
                                                        </td>
                                                    </tr>';
                                                $totalPrice += ($order['quantity']*$order['price']);
                                            }
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="shopping-total">
                                <ul>
                                    <li>
                                        <em>Sub total</em>
                                        <strong class="price"><span>$</span><?=$totalPrice?></strong>
                                    </li>
                                    <li>
                                        <em>Shipping cost</em>
                                        <strong class="price"><span>$</span>3.00</strong>
                                    </li>
                                    <li class="shopping-total-price">
                                        <em>Total</em>
                                        <strong class="price"><span>$</span><?=$totalPrice + 3?></strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="/project/product"><button class="btn btn-default btn-lg" type="submit">Continue shopping <i class="fa fa-shopping-cart"></i></button></a>
                        <a href=""><button class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button></a>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
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
<form method="post" name="form"></form>
<script>
    var form = document.forms['form'];
    deleteProduct = (orderProduct_id)=>{
        var deleteConfirm = confirm('Are you sure to delete this product from cart?');
        if(deleteConfirm){
            // console.log(orderProduct_id);
            form.action = '/project/cart/deleteProduct/' + orderProduct_id;
            form.submit();
        }
    }
    
    changeQuantity = (id)=>{
        var changeForm = document.forms['change-form-'+id];
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