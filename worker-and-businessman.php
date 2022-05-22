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
                <p class="text-center">Use <strong>Gamecoin</strong> to invest as a <strong>worker</strong> or as <strong>businessman</strong> in the digital land.</p>
                                
                <h5 class="text-center custom-registration-header">
                    <span>Registration</span>
                </h5>

                <div class="row">
                    <div class="col-12 col-sm-6 pt-5 pt-sm-0">
                        <div class="card animate__animated" style="animation-delay:0.7s;">
                            <img src="images/avatar-worker.png" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Worker</h5>
                                <p class="card-text">
                                    The worker will <strong>earn 7% to 21%</strong> capital interest of <strong>Gamecoin</strong> every month.
                                    <br><br>
                                    Valid for 3 years
                                </p>
                            </div>
                            <div class="card-footer">4,000 Gamecoin</div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 pt-5 pt-sm-0">
                        <div class="card animate__animated" style="animation-delay:1s;">
                            <img src="images/avatar-businessman.png" class="card-img-top" alt="..." style="transform: scaleX(-1);">
                            <div class="card-body text-center">
                                <h5 class="card-title">Businessman</h5>
                                <p class="card-text">
                                    The businessman will <strong>earn 10% to 30%</strong> capital interest of <strong>Gamecoin</strong> every month.
                                    <br><br>
                                    Valid for 3 years
                                </p>

                            </div>
                            <div class="card-footer">20,000 Gamecoin</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-to-buy">
            <div class="container text-center">
                <h3>How to invest in the Digital Land</h3>

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
                            <p>Select <strong>Gamecoin</strong> and send 4,000 Gamecoin if as a <strong>worker</strong> or 20,000 as <strong>businessman</strong></p>
                            <div class="note">
                                <i class="bi bi-pin-angle-fill"></i>
                                <p class="note-heading">Important Note</p>
                                <p>Before clicking "Slide to Send" in your Xumm wallet, type these details in the Public MEMO</p>
                                <ul class="clearfix">
                                    <li>Name</li>
                                    <li>Investment title</li>
                                    <li>Payment price</li>
                                    <li>Date</li>
                                </ul>
                            </div>
                        </div>
                    </div>                    
                    <div class="process-card process-card-3 clearfix">
                        <div class="process-card-content animate__animated" style="animation-delay:1s;">
                            <span class="process-count">3</span>
                            <p>Sign the transaction</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>

        function copyToClipBoard() {
            var copyText = document.getElementById("xumm-qr");

            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);

            document.getElementById("copy-qr-btn-text").innerHTML = "Copied";
        }

        addAnimation('text-with-icon', 'animate__fadeIn');
        addAnimation('process-card-content', 'animate__fadeInUp');
        addAnimation('card', 'animate__fadeInUp');

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

    </script>

<?php 
    include('footer.php');
?>
