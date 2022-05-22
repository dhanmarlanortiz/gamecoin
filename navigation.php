<?php


    if($_SERVER['SERVER_NAME'] == 'localhost') {
        $base_url = $_SERVER['REQUEST_SCHEME'] . "://" .  $_SERVER['SERVER_NAME'] . '/gamecoin';

    } else {
        $base_url = $_SERVER['REQUEST_SCHEME'] . "://" .  $_SERVER['SERVER_NAME'];
    }

    $active_page = trim($_SERVER['REQUEST_URI']);
?>


    <nav id="lucky-navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $base_url; ?>">
                <img src="images/gamecoin-logo-white.png" alt="" width="30" height="24" alt="Gamecoin logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav my-4 my-lg-0">

                    <li class="nav-item">
                        <a class="nav-link <?php if ($active_page == '/gamecoin/' || $active_page == '/') echo 'active'; ?>" href="<?php echo $base_url; ?>">Mariland</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($active_page == '/gamecoin/worker-and-businessman' ||  $active_page == '/worker-and-businessman') echo 'active'; ?>" href="<?php echo $base_url . '/worker-and-businessman'; ?>">Worker & Businessman</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="#map">Mariland</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#rules">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#how-to-buy">How to buy</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="#note">Note</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="https://xrpl.services/?issuer=rGRbhMeHyi5yi1x5vkFrZD8sHzkr5HfH3g&currency=47414D45434F494E000000000000000000000000&limit=100000000000" target="_blank">Trustline</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


