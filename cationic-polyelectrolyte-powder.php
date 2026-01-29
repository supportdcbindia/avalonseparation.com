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
                  <h1>Cationic Polyelectrolyte Powder</h1>
              </div>
          </div>
      </div>

      <div class="missionVissionSec CustomPending">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-md-6">
                      <div class="missionVissionImg">
                          <img src="assets/images/newProduct/cationic-polyelectrolyte-powder/cationic-polyelectrolyte-powder.png" alt="">
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <div class="missionVissionContent">
                          <h2>Cationic Polyelectrolyte Powder</h2>
                          <div class="desc">
                              <h3>Manufacturer & Supplier by Avalon Separation</h3>
                              <p>Avalon Separation is a trusted Cationic Polyelectrolyte Powder manufacturer and supplier, offering high-performance chemical solutions for efficient water and sludge treatment applications. Our products are designed to deliver excellent flocculation, faster solid–liquid separation, and reduced operating costs across multiple industries.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="missionVissionSec CustomPending bgLighGrey">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-md-12">
                      <div class="missionVissionContent pr-0 ">
                          <h2>High-Performance Polyelectrolyte Solutions</h2>
                          <div class="desc">
                              <p>Avalon Separation provides advanced Cationic Polyelectrolyte Powder formulated to improve clarification and dewatering efficiency. The product effectively neutralizes negatively charged particles, enabling rapid aggregation and superior floc formation.</p>
                              <p>Our technical team supports customers with application analysis, product selection, and optimized dosing recommendations to ensure maximum treatment efficiency.</p>
                          </div>
                      </div>
                  </div>
                  <!-- <div class="col-sm-12 col-md-6">
                      <div class="missionVissionImg">
                          <img src="assets/images/newProduct/avalon-disk-separator/Concept Avalon disc separator.png" alt="">
                      </div>
                  </div> -->
              </div>
          </div>
      </div>

      <div class="productDetailsSec CustomPending">
          <div class="container">
              <div class="secBigTitle ">
                  <h5>Key Features & Benefits</h5>
              </div>
              <div class="keyBenifit">
                  <ul>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Suitable for all solid–liquid separation systems</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Highly effective at low dosages</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Performs efficiently across a wide pH range</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Ensures strong and stable floc formation</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Delivers enhanced results when combined with inorganic flocculants</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt="">Improves filtration, thickening, and dewatering performance</li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="productDetailsSec CustomPending bgLighGrey">
          <div class="container">

              <div class="row">
                  <div class="col-sm-12 col-md-6 pr-5">
                      <div class="secBigTitle ">
                          <h5>Complete Range of Polyelectrolytes</h5>
                      </div>
                      <div class="desc">
                          <p>Avalon Separation supplies a full range of polyelectrolytes to suit different process requirements:</p>
                          <ul>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Cationic Polyelectrolyte</li>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Anionic Polyelectrolyte</li>
                              <li><img src="assets/images/aboutPage/arrows.png" alt="">Non-Ionic Polyelectrolyte</li>
                          </ul>
                          <p>These products are compatible with various sludge treatment, wastewater treatment, and industrial separation systems.</p>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6  border-left">
                      <div class="secBigTitle ">
                          <h5>Sustainable & Efficient Water Treatment</h5>
                      </div>
                      <div class="desc">
                          <p>At Avalon Separation, we prioritize sustainable water management practices. Our Cationic Polyelectrolyte Powder helps reduce sludge volume, minimize chemical consumption, and improve overall process efficiency, supporting environmentally responsible treatment solutions.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="ProductAppSec CustomPending ">
          <div class="container">
              <div class="secTitle">
                  <div class="secBigTitle mb-0">
                      <h5>Applications</h5>
                  </div>
                  <div class="desc">
                      <p>Cationic Polyelectrolyte Powder from Avalon Separation is widely used for:</p>
                  </div>
              </div>
              <div class="ProductAppGrid">
                  <?php
                    $nb_elem_per_page = 100;
                    $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                    $data = glob("assets/images/newProduct/cationic-polyelectrolyte-powder/app/*.*");
                    $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                    ?>
                  <?php
                    foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                    ?>
                      <div class="ProductAppImg">
                          <img src="<?php echo $p; ?>" alt="">
                          <h5><?php echo str_replace("-", " ", str_replace(".jpg", "", str_replace(".webp", "", str_replace("assets/images/newProduct/cationic-polyelectrolyte-powder/app/", "", $p)))); ?></h5>

                      </div>
                  <?php
                    }
                    ?>
              </div>
          </div>
      </div>

      <div class="productDetailsSec CustomPending  bgLighGrey">
          <div class="container">
              <div class="secTitle">
                  <div class="secBigTitle mb-0 ">
                      <h5>Why Choose Avalon Separation?</h5>
                  </div>
              </div>
              <div class="keyBenifit">
                  <ul>
                      <li><img src="assets/images/aboutPage/arrows.png" alt=""> Proven expertise in water & sludge treatment solutions</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt=""> High-quality, consistent polyelectrolyte formulations</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt=""> Technical support and dosing optimization</li>
                      <li><img src="assets/images/aboutPage/arrows.png" alt=""> Reliable supply for industrial and municipal projects</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <?php include('footer.php') ?>