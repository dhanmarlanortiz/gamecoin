<?php 
    include('header.php');
    include('navigation.php');
?>

    <main class="mariland">

        <?php 
            include('banner-gamecoin.php');
            include('mariland-map.php');
        ?>

        <section id="rules" class="bg-light">
            <div class="container clearfix">
                <h3 class="text-center">Rules</h3>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="text-with-icon animate__animated" style="animation-delay:0.7s;">
                            <div class="img-wrapper">
                                <img src="images/flat-icon-coin.png" alt="">
                            </div>
                            <div class="text-wrapper">
                                <p>Use GAMECOIN to buy a Digital Land or Town created by bgamecoin.com</p>
                            </div>
                        </div>
                    </div>                
                    <div class="col-12 col-md-6">
                        <div class="text-with-icon animate__animated" style="animation-delay:0.8s;">
                            <div class="img-wrapper">
                                <img src="images/flat-icon-wallet.png" alt="">
                            </div>
                            <div class="text-wrapper">
                                <p>The Price of each Town is worth 500,000 GAMECOIN.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="d-none d-md-block">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="text-with-icon animate__animated" style="animation-delay:0.9s;">
                            <div class="img-wrapper">
                                <img src="images/flat-icon-interest.png" alt="">
                            </div>
                            <div class="text-wrapper">
                                <p>The owner of the town will get a Capital interest of 5% to 25% every month.</p>
                            </div>
                        </div>
                    </div>                
                    <div class="col-12 col-md-6">
                        <div class="text-with-icon animate__animated" style="animation-delay:1s;">
                            <div class="img-wrapper">
                                <img src="images/flat-icon-resell.png" alt="">
                            </div>
                            <div class="text-wrapper">
                                <p>The owner of the Town can also Resell the digital land.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-to-buy">
            <div class="container text-center">
                <h3>How to buy Digital Land</h3>

                <div class="process-container clearfix">
                    <div class="process-card process-card-1 clearfix">
                        <div class="process-card-content animate__animated" style="animation-delay:0.7s;">
                            <span class="process-count">1</span>
                            <p>Scan the QR code or copy the address in the Xumm wallet.</p>
                            <img class="img-fluid mt-4 mx-auto d-block mariland-qr animate__animated" src="images/mariland-qr.png" alt="XUMM QR" id="mariland-qr">
                            <input id="xumm-qr" type="text" value="rwTyYCBctUezWq2riBgDyqFun9bPpCtHJP" class="form-control text-center">
                            <button id="copy-qr-btn" class="btn btn-warning btn-sm p-2 mx-auto my-2 mx-auto d-block" onclick="copyToClipBoard()">
                                <span class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/></svg>
                                </span>
                                <span id="copy-qr-btn-text" class="p-1">Copy code</span>
                            </button>
                        </div>
                    </div>
                    <div class="process-card process-card-2 clearfix">
                        <div class="process-card-content animate__animated" style="animation-delay:0.8s;">
                            <span class="process-count">2</span>
                            <p>Select GAMECOIN and the payment cost for each digital land or town is worth 500,000 Gamecoin.</p>
                            <div class="note">
                                <i class="bi bi-pin-angle-fill"></i>
                                <p class="note-heading">Important Note</p>
                                <p>Before clicking "Slide to Send" in your Xumm wallet, type these details in the Public MEMO</p>
                                <ul class="clearfix">
                                    <li>Title or name</li>
                                    <li>Land number</li>
                                    <li>Payment price</li>
                                    <li>Date</li>
                                </ul>
                                <p>The New owner will be the one to decide on what Name should be given in the Land</p>
                            </div>
                        </div>
                    </div>
                    <div class="process-card process-card-3 clearfix">
                        <div class="process-card-content animate__animated" style="animation-delay:0.9s;">
                            <span class="process-count">3</span>
                            <p>
                                <strong>Send 500,000 Gamecoin</strong>
                            </p>
                        </div>
                    </div>
                    <div class="process-card process-card-4 clearfix">
                        <div class="process-card-content animate__animated" style="animation-delay:1s;">
                            <span class="process-count">4</span>
                            <p>Sign the transaction</p>
                            <div class="note">
                                <i class="bi bi-pin-angle-fill"></i>
                                <p>The Map will be updated to input the name or title of the new owner.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="note">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 text-center col-lg-5 offset-lg-1 align-self-center">
                        <img class="img-fluid mb-5 mb-md-0" src="images/note-pencil.jpg" alt="Important notice image">
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 align-self-center important-note animate__animated">
                        <h3>Important Note</h3>
                        <p>Before clicking "Slide to Send" in your Xumm wallet, type these details in the Public MEMO</p>
                        <ul>
                            <li>TITLE OR NAME:</li>
                            <li>LAND NUMBER:</li>
                            <li>PAYMENT PRICE:</li>
                            <li>DATE:</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
    </main>

    <script>
        // var exampleModal = document.getElementById('lucky-modal')
        // exampleModal.addEventListener('show.bs.modal', function (event) {
        //     var button = event.relatedTarget;
        //     var qr = button.getAttribute('data-bs-qr');
        //     var modalBodyImage = exampleModal.querySelector('.modal-body img');
        //     var modalFooterInput = exampleModal.querySelector('.modal-footer input');
        //     var copyQrText = document.getElementById("copy-qr-btn-text");

        //     copyQrText.innerHTML = "Copy";
        //     modalBodyImage.src = "images/" + qr + ".png";
        //     modalFooterInput.value = qr
        // })

        function copyToClipBoard() {
            var copyText = document.getElementById("xumm-qr");

            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);

            document.getElementById("copy-qr-btn-text").innerHTML = "Copied";
        }

        // addAnimation('game-mechanics-card', 'animate__fadeInUp');
        // addAnimation('text-with-icon', 'animate__bounceIn');
        addAnimation('text-with-icon', 'animate__fadeIn');
        addAnimation('process-card-content', 'animate__fadeInUp');
        // addAnimation('mariland-qr', 'animate__bounceIn');

        function addAnimation(element_class, animate_class) {
            document.addEventListener("DOMContentLoaded", function(event) {
                document.addEventListener("scroll", function(event) {
                    const animatedBoxes = document.getElementsByClassName(element_class);
                    const windowOffsetTop = window.innerHeight + window.scrollY;

                    Array.prototype.forEach.call(animatedBoxes, (animatedBox) => {
                        const animatedBoxOffsetTop = animatedBox.offsetTop;

                        if (windowOffsetTop >= animatedBoxOffsetTop) {
                            addClass(animatedBox, animate_class);
                        }
                    });
                });
            });
        }

        function addClass(element, className) {
            const arrayClasses = element.className.split(" ");
            if (arrayClasses.indexOf(className) === -1) {
                element.className += " " + className;
            }
        }

        // $(window).scroll(function(){
        // $(".nav-item").removeClass("active");
        // $(".active").parent().addClass("active");
        // })

        // $(document).ready( function() {
        //     $("[href^='#']").click(function() {
        //         id=$(this).attr("href")
        //         $('html, body').animate({
        //             scrollTop: $(id).offset().top
        //         }, 2000);

        //         return false;
        //     });
        // });

        //     document.querySelectorAll("a").forEach(function (a) {
        //     a.addEventListener("click", function (event) {
        //       event.preventDefault();
        //       const hash = event.target.getAttribute("href");
        //       const scrollTarget = document.querySelector(hash);

        //       // Some additional logic
        //       const headerHeight = 90;
        //       window.scrollTo(0, scrollTarget.offsetTop - headerHeight);
        //     });
        //   });

    </script>

<?php 
    include('footer.php');
?>
