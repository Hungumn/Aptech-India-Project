<div class="wraper">
    <div class="navbar__header">
        <?php
        require_once('./mvc/views/user/header.component.php');
        ?>
    </div>

    <div class="contact">
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
        
        <div class="contact__content">
            <div class="maps">


                <div class="contact__maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9232490033883!2d105.81679641473157!3d21.03575678599455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d127a01e7%3A0xab069cd4eaa76ff2!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1654098499312!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact__address">
                    <div class="contact__address_item">
                        <h2>PASCAL IMITATION JEWELLERY</h2>
                        <p>Address: 285 Doi Can, Ba Dinh, Hanoi</p>
                        <p>Hotline: 0987654321</p>
                    </div>
                    <div class="contact__address_item">
                        <h2>PASCAL IMITATION JEWELLERY</h2>

                        <p>Address: 285 Doi Can, Ba Dinh, Hanoi</p>
                        <p>Hotline: 0987654321</p>
                    </div>
                    
                </div>
            </div>
            <div class="form__feedback">
                <section class="contact id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 mx-auto text-center">
                                <div class="section-title">
                                    
                                    <h4>FORM LIÊN HỆ</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center form-group-column">
                            <div class="col-md-11">
                                <form action="#" method="post" class="contact-form">
                                    <div class="row">
                                        <div class="col-xl-6 form-group">
                                            <label class="form-label" for="">Fullname</label>
                                            <input type="text" name="fullname" class="form-control" placeholder="Enter Fullname">
                                        </div>
                                        <div class="col-xl-6 form-group">
                                            <label class="form-label" for="">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="email">
                                        </div>
                                        <div class="col-xl-6 form-group">
                                            <label class="form-label" for="">Subject Name</label>
                                            <input type="text" name="subject_name" class="form-control" placeholder="subject">
                                        </div>
                                        <div class="col-xl-6 form-group">
                                            <label class="form-label" for="">Phone Number</label>
                                            <input type="text" name="phoneNo" class="form-control" placeholder="telephone">
                                        </div>
                                        <div class="col-xl-12 form-group">
                                            <label class="form-label" for="">Message</label>
                                            <textarea placeholder="message" name="note" class="form-textarea" cols="30" rows="10"></textarea>
                                            <button class="btn btn-warning">Send Message <i class="fas fa-paper-plane"></i></button>
                                        </div>
                                        <div class="col-xl-12">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </section>
                
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
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>
    <div class="footer mt-5">
        <?php
        require_once('./mvc/views/user/footer.component.php');
        ?>
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