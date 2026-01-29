<?php include('header.php') ?>
<div class="innerPage ApplicationPage">
    <div class="breadCrums">
        <div class="area-lines">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
            <div class="line-4"></div>
            <div class="line-5"></div>
            <div class="line-6"></div>
            <div class="line-7"></div>
            <div class="line-8"></div>
        </div>
        <div class="container">
            <div class="breadCrumsContent">
                <h1>Application </h1>
            </div>
        </div>
    </div>
    <div class="ourApplicationLanding CustomPending">
        <div class="container container-2xl">
            <div class="ourApplicationGrid">
                <?php
                $data = glob("assets/images/application/*.*");

                foreach ($data as $p) {

                    $filename = pathinfo($p, PATHINFO_FILENAME); // portable-office-cabin
                    $title = ucwords(str_replace("-", " ", $filename));
                    $link = $filename . ".php"; // FIXED
                ?>
                    <div class="ourApplicationItem">
                        <a href="<?php echo $link; ?>">
                            <div class="ourApplicationImage">
                                <img src="<?php echo $p; ?>" alt="<?php echo $title; ?>">
                            </div>
                            <div class="ourApplicationContent">
                                <h5><?php echo $title; ?></h5>
                            </div>
                        </a>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>