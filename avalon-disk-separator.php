  <?php include('header.php') ?>

  <div class="innerPage productDetailsPage">
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
                  <h1>Avalon Disk Separator (ADS)</h1>
              </div>
          </div>
      </div>

      <div class="missionVissionSec CustomPending">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-md-6">
                      <div class="missionVissionImg">
                          <img src="assets/images/newProduct/avalon-disk-separator/avalon-disk-separator.jpeg" alt="">
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <div class="missionVissionContent">
                          <h2>Avalon Disk Separator (ADS)</h2>
                          <div class="desc">
                              <h3>High-Efficiency Solid–Liquid Separation by Avalon Separation</h3>
                              <p>The Avalon Disk Separator (ADS) by Avalon Separation is an advanced solid–liquid separation system engineered for high performance, continuous operation, and minimal maintenance. Designed for modern industrial and municipal treatment plants, ADS delivers reliable screening, thickening, and dewatering with exceptional efficiency.</p>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="missionVissionSec CustomPending bgLighGrey">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-md-6">
                      <div class="missionVissionContent pr-0 ">
                          <h2>Advanced Disk Separation Technology</h2>
                          <div class="desc">
                              <p>The Avalon Disk Separator operates using synchronized rotating oval disks precisely arranged on a stainless-steel screening grid with fine slot openings.</p>
                              <p>This dynamic disk movement ensures:</p>
                              <ul>
                                  <li><img src="assets/images/aboutPage/arrows.png" alt="">Continuous self-cleaning operation</li>
                                  <li><img src="assets/images/aboutPage/arrows.png" alt="">No clogging or blinding of slots</li>
                                  <li><img src="assets/images/aboutPage/arrows.png" alt="">Stable performance even with high solid loads</li>
                                  <li><img src="assets/images/aboutPage/arrows.png" alt="">Consistent separation efficiency</li>
                              </ul>
                              <p>The intelligent disk motion eliminates frequent washing and manual cleaning, resulting in uninterrupted operation and reduced downtime.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <div class="missionVissionImg">
                          <img src="assets/images/newProduct/avalon-disk-separator/Concept Avalon disc separator.png" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="productDetailsSec CustomPending ">
          <div class="container">

              <div class="row">
                  <div class="col-sm-12 col-md-6 pr-5">
                      <div class="secBigTitle ">
                          <h5>Operational Flexibility</h5>
                      </div>
                      <div class="desc">
                          <p>The ADS system is designed to adapt to diverse process requirements:</p>
                          <ul>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Can operate with or without chemical dosing</li>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Compatible with coagulation and flocculation systems</li>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Easily integrated into existing treatment lines</li>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">High mobility and modular design for flexible installation</li>
                          </ul>
                          <p>This versatility allows the Avalon Disk Separator to handle a wide variety of effluent characteristics efficiently.</p>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6  border-left">
                      <div class="secBigTitle ">
                          <h5>Low Operating Cost & Robust Design</h5>
                      </div>
                      <div class="desc">
                          <p>Manufactured using high-grade stainless steel, the Avalon Disk Separator ensures durability, corrosion resistance, and long service life.</p>
                          <p>Key advantages include:</p>
                          <ul>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Low power consumption</li>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Minimal maintenance requirements</li>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Optional integrated flocculation tank</li>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Reduced operational and lifecycle costs</li>
                          </ul>
                          <p>ADS is an energy-efficient and sustainable solution for continuous solid–liquid separation.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="ProductAppSec CustomPending bgLighGrey">
          <div class="container">
              <div class="secTitle">
                  <div class="secBigTitle mb-0">
                      <h5>Applications</h5>
                  </div>
                  <div class="desc">
                      <p>The Avalon Disk Separator is suitable for a wide range of industrial, municipal, and agricultural applications, including:</p>
                  </div>
              </div>
              <div class="ProductAppGrid">
                  <?php
                    $nb_elem_per_page = 100;
                    $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                    $data = glob("assets/images/newProduct/avalon-disk-separator/app/*.*");
                    $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                    ?>
                  <?php
                    foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                    ?>
                      <div class="ProductAppImg">
                          <img src="<?php echo $p; ?>" alt="">
                          <h5><?php echo str_replace("-", " ", str_replace(".jpg", "", str_replace(".webp", "", str_replace("assets/images/newProduct/avalon-disk-separator/app/", "", $p)))); ?></h5>

                      </div>
                  <?php
                    }
                    ?>
              </div>
          </div>
      </div>

      <div class="productDetailsSec CustomPending  ">
          <div class="container">
              <div class="secTitle">
                  <div class="secBigTitle mb-0 ">
                      <h5>Smart Control & Automation</h5>
                  </div>
                  <div class="desc">
                      <p>The Avalon Disk Separator is equipped with an advanced electrical control panel that allows:</p>
                  </div>
              </div>
              <div class="keyBenifit">
                  <ul>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Automatic or manual operation modes</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Controlled feed management</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Flocculant dosing synchronization</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Easy integration with plant SCADA systems</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <?php include('footer.php') ?>