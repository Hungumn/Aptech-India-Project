<!-- header -->
<div class="navbar__heading">
    <div class="navbar_heading_search">
        <div class="navbar__search">
            <form action="">
                <input type="text" class="input_search" placeholder="Enter keywords ...">

                <div class="header-search-history" >
                    <div class="history_search_item">
                        
                        <h3 class="header-search-history-heading">
                            <img class="img-lazyload" src="https://cdn.pnj.io/images/image-update/layout/mobile/icon-toptrending.svg" alt="Top tìm kiếm">
                            <span>Top Search</span>
                        </h3>
                        <ul class="header-search-history-list">
                        <?php
                            foreach($data['category'] as $item){
                                echo '
                                            <li class="header-search-history-item">
                                                <a href="/project/product/category/'. $item['id'].'">' . $item['category_name'] . '</a>
                                            </li>
                                            
                                            ';
                                        }
                                        ?>
                        </ul>
                    
                    </div>
                    <div class="history_search_item">

                        <h3 class="header-search-history-heading">
                            <img class="img-lazyload" src="https://cdn.pnj.io/images/image-update/layout/mobile/icon-toptrending.svg" alt="Dịch Vụ Hot">
                            <span>Service Hot</span>
                        </h3>
                        <ul class="header-search-history-list">
                            <li class="header-search-history-item">
                                <a href="">EGrift</a>
                            </li>
                            <li class="header-search-history-item">
                                <a href="">Freeship</a>
                            </li>
                            <li class="header-search-history-item">
                                <a href="">Trả góp 0%</a>
                            </li>
                            <li class="header-search-history-item">
                                <a href="">VNpay -5%</a>
                            </li>
                            <li class="header-search-history-item">
                                <a href="">Giao hàng 3h</a>
                            </li>
                            
                        </ul>
                    </div>
                    
                </div>
            </form>

        </div>
        
                        

        <button class="navbar_search_button">
            <i class="fas fa-search search__icon"></i>
        </button>

    </div>
    <div class="header__logo">
        <a href="/project">
            <img src="https://vnje.com/wp-content/uploads/2021/05/VNJE-logo.png" alt="" class="header__logo-img hide-on-mobile-tablet">
        </a>
    </div>
    <div class="navbar_heading_action">

        <ul class="action__column">
            <?php
            if ($data['user'] == null) {
                echo '<li><a class="navbar_heading_action_item navbar__login" href="/project/login">Login</a></li>';
            } else {
                echo '<li>
                        <div class="header__navbar__user">
                            <img class="user__heading" src="https://png.pngtree.com/png-clipart/20191122/original/pngtree-user-vector-icon-with-white-background-png-image_5168884.jpg" alt="">
                            <span>'.$data['user']['fullname'].'</span>
                        </div>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item"><a href="">My account</a></li>
                            <li class="header__navbar-user-item"><a href="">Change Password</a></li>
                            <li class="header__navbar-user-item"><a href="/project/login/logout">Log out</a></li>
                        </ul>
                    </li>';
            }
            ?>

            


            <li><a class="navbar_heading_action_item" href="/project/compare"><i class="fas fa-location-arrow"></i> Compare</a></li>
            <li><a class="navbar_heading_action_item" href="/project/cart"><i class="fas fa-shopping-cart"></i> Bill Cart</a></li>
        </ul>


    </div>
</div>

<div class="header">

    <div class="mobile-header-menu hide-on-PC js-mobile-btn">
        <i class="mobile-header-menu-icon fas fa-bars "></i>
    </div>
    <div class="mobile-menu-overlay"></div>
    <div class="header__logo_mobile">
        <img src="https://vnje.com/wp-content/uploads/2021/05/VNJE-logo.png" alt="" class="header__logo__table">

    </div>

    <div class="header__navbar js-mobile-menu ">
        <ul class="header__navbar-list">
            <li class="header__navbar-item">
                <a href="/project" class="header__navbar-link">
                    <span class="header__navbar-text">Home</span>

                    <span class="hide-on-PC">
                        <i class="nav-mobile-icon  fas fa-angle-right"></i>
                    </span>

                </a>
            </li>

            <li class="header__navbar-item">
                <a href="/project/about" class="header__navbar-link">
                    <span class="header__navbar-text">About Us</span>

                    <span class="hide-on-PC">
                        <i class="nav-mobile-icon  fas fa-angle-right"></i>
                    </span>
                </a>
            </li>
            <li class="header__navbar-item">
                <a href="/project/product" class="header__navbar-link">
                    <span class="header__navbar-text">Product</span>

                    <span class="hide-on-PC">
                        <i class="nav-mobile-icon  fas fa-angle-right"></i>
                    </span> </a>
            </li>
            <li class="header__navbar-item">
                <a class="header__navbar-link">
                    <span class="header__navbar-text">Brand</span>

                    <span class="hide-on-PC">
                        <i class="nav-mobile-icon  fas fa-angle-right"></i>
                    </span>
                </a>
                <div class="subnav">
                    <?php
                    foreach ($data['brand'] as $item) {
                        echo '
                                        <ul class="subnav__list">
                                            <li class="subnav__item">
                                                <a href="/project/product/brand/' . $item['id'] . '" class="subnav__item-link">
                                                    <span class="subnav__item-text">' . $item['brand_name'] . '</span>
                                                </a>
                                            </li>
                                        </ul>
                                    ';
                    }
                    ?>
                </div>
            </li>

            <li class="header__navbar-item">
                <a class="header__navbar-link">
                    <span class="header__navbar-text">Category</span>

                    <span class="hide-on-PC">
                        <i class="nav-mobile-icon  fas fa-angle-right"></i>
                    </span> </a>

                <div class="subnav">
                    <?php
                    foreach ($data['category'] as $item) {
                        echo '
                                            <ul class="subnav__list">
                                                <li class="subnav__item">
                                                    <a href="/project/product/category/' . $item['id'] . '" class="subnav__item-link">
                                                        <span class="subnav__item-text">' . $item['category_name'] . '</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        ';
                    }
                    ?>
                </div>
            </li>
            <li class="header__navbar-item">
                <a class="header__navbar-link">
                    <span class="header__navbar-text">Material</span>

                    <span class="hide-on-PC">
                        <i class="nav-mobile-icon  fas fa-angle-right"></i>
                    </span> </a>

                <div class="subnav">
                    <ul class="subnav__list">
                        <?php
                        foreach ($data['material'] as $item) {
                            echo '
                                            <li class="subnav__item">
                                                <a href="/project/product/material/' . $item['id'] . '" class="subnav__item-link">
                                                    <span class="subnav__item-text">' . $item['material_name'] . '</span>
                                                </a>
                                            </li>
                                            ';
                        }


                        ?>
                    </ul>
                </div>

            </li>
            <li class="header__navbar-item">
                <a href="/project/contact" class="header__navbar-link">
                    <span class="header__navbar-text">Contact Us</span>

                    <span class="hide-on-PC">
                        <i class="nav-mobile-icon  fas fa-angle-right"></i>
                    </span> </a>


            </li>
            <li class="header__navbar-item compare_pc">
                <a href="/project/compare" class="header__navbar-link">
                    <span class="header__navbar-text">Compare</span>

                    <span class="hide-on-PC">
                        <i class="nav-mobile-icon  fas fa-angle-right"></i>
                    </span> </a>


            </li>
        </ul>
    </div>

    <div class="mobile-header-menu hide-on-PC">
        <div class="search-box">
            <input type="text" class="search-input" />
            <button class="search-btn">
                <i class="mobile-menu-search-btn fas fa-search"></i>
            </button>
        </div>
        <a href="cart"><i class="mobile-menu-item fas fa-shopping-cart"></i></a>
        <ul class="account_mobile">
        <?php
            if ($data['user'] == null) {
                echo '<li><a href="/project/login"><i class="mobile-menu-item far fa-user-circle"></i></a></li>';
            } else {
                echo '<li>
                        <div class="header__navbar__user_mobile">
                            <img class="user__heading_mobile" src="https://png.pngtree.com/png-clipart/20191122/original/pngtree-user-vector-icon-with-white-background-png-image_5168884.jpg" alt="">
                            <span class="fullname_mobile">'.$data['user']['fullname'].'</span>
                        </div>
                        <ul class="header__navbar-user-menu_mobile hide">
                            <li class="header__navbar-user-item_mobile"><a href="">My account</a></li>
                            <li class="header__navbar-user-item_mobile"><a href="">Change Password</a></li>
                            <li class="header__navbar-user-item_mobile"><a href="/project/login/logout">Log out</a></li>
                        </ul>
                    </li>';
            }
            ?>
        </ul>
    </div>
</div>
<script>
    document.querySelector('.search-btn').addEventListener('click', function() {
        this.parentElement.classList.toggle('open')
        this.previousElementSibling.focus()
    })
</script>
<script>
    const modal = document.querySelector(".header__navbar-user-menu_mobile");
    const openModalBtn = document.querySelector(".header__navbar__user_mobile");
 

    function toggleModal() {
    modal.classList.toggle("hide");
    }

    openModalBtn.addEventListener("click", toggleModal);
    iconCloseModal.addEventListener("click", toggleModal);
    buttonCloseModal.addEventListener("click", toggleModal);

    modal.addEventListener("click", (e) => {
    if (e.target == e.currentTarget) toggleModal();
    });
</script>
<!--  -->