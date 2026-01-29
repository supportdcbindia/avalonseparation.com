<?php include('header.php') ?>
<div class="innerPage ClientsPage">
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
                <h1>Our Clients</h1>
            </div>
        </div>
    </div>
    <div class="ClientsSec CustomPending bgLighGrey">
        <div class="container">
            <div class="ClientsGrid">
                <?php
                $nb_elem_per_page = 100;
                $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                $data = glob("assets/images/clients/*.*");
                $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                ?>
                <?php
                foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                ?>
                    <div class="clientItem">
                        <img src="<?php echo $p; ?>" alt="">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>