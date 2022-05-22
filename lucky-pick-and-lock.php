<?php 
    include('header.php');
    // include('navigation.php');
?>

<!-- <main data-bs-spy="scroll" data-bs-target="#lucky-navbar" data-bs-offset="0" class="" tabindex="0"> -->
    <main class="lucky-pick-and-lock">

        <?php 
            include('banner-gamecoin.php');
        ?>

        <section class="" id="">
            <div class="container">
                <div class="win-banner">
                    <a href="#play-game">
                        <img src="images/win-upto-1b-banner.png" class="" alt="win up to 1,000,000,000 Gamecoin">
                    </a>
                </div>
            </div>
        </section>


        <section class="" id="game-mechanics">
            <div class="container">
                <div class="row game-mechanics-card animate__animated">
                    <div class="col-12 col-md-6 text-center col-lg-5 offset-lg-1 align-self-center">
                        <img class="img-fluid mb-5 mb-md-0" src="images/nft-collectables-300.png" alt="Mechanics of the game image">
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 align-self-center">
                        <h3>Mechanics of the game:</h3>
                        <ul>
                            <li>Use GAMECOIN only in the game</li>
                            <li>The token to be used for staking is 400 Gamecoin per player</li>
                            <li>Lucky winner will get up to 3x of staked Gamecoin.<br>Example: 400 x 3 = 1200 Gamecoin</li>
                            <li>Spin, dice, or draw will be done everyday at 1200H GMT</li>
                            <li>The number of winners will be posted on twitter <a href="https://twitter.com/bgamecoin?s=20&amp;t=EAQO9j2v31Crc_ZS0NkMRQ" target="_blank">@bgamecoin</a> and the reward will be sent to your Xumm wallet.</li>
                            <li>To those who will not win in the game, your token will be locked up for 1 year and will be credited to your Xumm wallet. There is no loss in this game.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="" id="how-to-play">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-2 col-lg-5 text-center align-self-center">
                        <img class="img-fluid mb-5 mb-md-0" src="images/man-playing-inside-mobile-300.png" alt="How to play image">
                    </div>
                    <div class="col-12 col-md-6 order-md-1 col-lg-5 offset-lg-1 align-self-center">
                        <h3>How to play</h3>
                        <ul>
                            <li>Select or Pick the lucky number that you want</li>
                            <li>Scan the QR code or copy the address in xumm wallet app</li>
                            <li>Select GAMECOIN </li>
                            <li>Send 400 Gamecoin amount to be used in lucky pick and lock</li>
                            <li>Sign the transaction</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="countdown-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="countdown-header">Time until next draw</p>
                        <div class="countdown-wrapper">
                            <div class="countdown-timer">
                                <iframe width="251" height="335" src="https://w2.countingdownto.com/4154797" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="" id="play-game">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Lucky Pick and Lock</h2>
                        <p class="text-muted">
                            <small>Select your lucky number from cards 1 to 6 below</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-2 col-md-2 offset-md-3">
                        <div class="card text-center animate__animated">
                            <div class="card-body">
                                <a href="" data-bs-toggle="modal" data-bs-target="#lucky-modal" data-bs-qr="rJHmVr7gn7axaqcVgjLh7KHZDFHgTxYNBo">
                                    <h5 class="card-title">1</h5>
                                    <p>Select</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2 col-md-2">
                        <div class="card text-center animate__animated" style="animation-delay:0.6s">
                            <div class="card-body">
                                <a href="" data-bs-toggle="modal" data-bs-target="#lucky-modal" data-bs-qr="rDixzx6ND4prdhDUhMve7UG67eXohftB5X">
                                    <h5 class="card-title">2</h5>
                                    <p>Select</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2 col-md-2">
                        <div class="card text-center animate__animated" style="animation-delay:0.7s">
                            <div class="card-body">
                                <a href="" data-bs-toggle="modal" data-bs-target="#lucky-modal" data-bs-qr="rfskUij48xDGUKpH9GRXdd6mDYdvFBo3yg">
                                    <h5 class="card-title">3</h5>
                                    <p>Select</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2 col-md-2 offset-md-3">
                        <div class="card text-center animate__animated" style="animation-delay:0.8s">
                            <div class="card-body">
                                <a href="" data-bs-toggle="modal" data-bs-target="#lucky-modal" data-bs-qr="rGQ9NZzKGCyqMDUyLPKRZ1udFiuURcuHHU">
                                    <h5 class="card-title">4</h5>
                                    <p>Select</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2 col-md-2">
                        <div class="card text-center animate__animated" style="animation-delay:0.9s">
                            <div class="card-body">
                                <a href="" data-bs-toggle="modal" data-bs-target="#lucky-modal" data-bs-qr="rM746tTsvguUx5s5cokftrZjEhJ4kHtsBw">
                                    <h5 class="card-title">5</h5>
                                    <p>Select</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-2 col-md-2">
                        <div class="card text-center animate__animated" style="animation-delay:1s">
                            <div class="card-body">
                                <a href="" data-bs-toggle="modal" data-bs-target="#lucky-modal" data-bs-qr="rhPjSXKJnnhrrCmf4JtxdVvB1XbYT6hF8o">
                                    <h5 class="card-title">6</h5>
                                    <p>Select</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="lucky-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0 modal-header pb-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0 text-center">
                            <img src="" alt="XUMM QR code link">
                            <p class="text-muted">
                                <small>Please scan the QR code with XUMM on your smartphone</small>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <input id="xumm-qr" type="text" class="form-control text-center">
                            <button id="copy-qr-btn" class="btn btn-warning btn-sm p-2 mx-auto my-2" onclick="copyToClipBoard()">
                                <span class="p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/></svg>
                                </span>
                                <span id="copy-qr-btn-text" class="p-1">Copy</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        var exampleModal = document.getElementById('lucky-modal')
        exampleModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var qr = button.getAttribute('data-bs-qr');
            var modalBodyImage = exampleModal.querySelector('.modal-body img');
            var modalFooterInput = exampleModal.querySelector('.modal-footer input');
            var copyQrText = document.getElementById("copy-qr-btn-text");

            copyQrText.innerHTML = "Copy";
            modalBodyImage.src = "images/" + qr + ".png";
            modalFooterInput.value = qr
        })

        function copyToClipBoard() {
            var copyText = document.getElementById("xumm-qr");

            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);

            document.getElementById("copy-qr-btn-text").innerHTML = "Copied";
        }

        // addAnimation('game-mechanics-card', 'animate__fadeInUp');
        addAnimation('card', 'animate__bounceIn');

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
