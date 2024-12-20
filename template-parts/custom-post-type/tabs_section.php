<?php 
$section = $args['section'];
$tabs = $section['tabs'];
?>

<div class="tabs-content-wrapper section">
      <div class="section-heading text-centre">
        <h2>
          <b><?php echo $section['heading'] ?></b>
        </h2>
      </div>

      <div class="tabs-btns-wrapper card-box">
        <ul class="nav nav-pills mb-3" id="pills-tab " role="tablist">
          <!-- ## TAB 1 ##-->
           <?php 
           foreach($tabs as $idx => $tab) {
            $tabHeader = $tab['header'];
           ?>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link <?php echo ($idx === 0) ? 'active' : '' ?>"
              id="pills-home-tab"
              data-bs-toggle="pill"
              data-bs-target="#tab<?php echo $idx ?>"
              type="button"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
            >
              <div class="icon">
                <img src="<?php echo $tabHeader['icon'] ?>" alt="Icon" />
              </div>

              <span><?php echo $tabHeader['text'] ?></span>
            </button>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class="tab-content" id="pills-tabContent">
        <?php 
           foreach($tabs as $idx => $tab) {
            $tabContent = $tab['content'];
           ?>
        <!-- ## TAB 1 ##-->
        <div
          class="tab-pane fade <?php echo ($idx === 0) ? 'show' : '' ?>"
          id="tab<?php echo $idx ?>"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
          tabindex="0"
        >

        <?php 
            $subSections = $tabContent;
            if($subSections){
                foreach($subSections as $section){
                    $sectionType = $section['select_type'];
                    $tempUrl = 'template-parts/custom-post-type/'.$sectionType;
                    get_template_part($tempUrl, 'custom', array('section' => $section[$sectionType]));
                }
            }
        ?>

          <section class="tabs-icon-boxes-section section">
            <div class="container">
              <div class="section-heading text-centre">
                <h2>
                  <b
                    >Deer Challenges Across the UK
                    <svg
                      width="51"
                      height="41"
                      viewBox="0 0 51 41"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M50.0811 36.6484C33.6953 27.2177 17.3086 46.5591 0.921875 37.134V4.35839C17.3088 13.7849 33.6953 -5.55644 50.0811 3.87441V36.6484Z"
                        fill="#2E307F"
                      />
                      <path
                        d="M50.0813 3.8771C48.1139 2.74379 46.1436 2.02681 44.1733 1.62451C37.9491 4.50233 31.725 10.5345 25.5025 16.5652C19.2783 14.2988 13.0542 12.0321 6.82989 6.61386C4.86031 6.21156 2.89145 5.49458 0.921875 4.36127V8.29899C7.14601 16.0291 13.3701 19.6082 19.5943 22.1904C13.3701 27.9064 7.14601 32.6259 0.921875 33.1961V37.134C2.89145 38.2659 4.86031 38.9828 6.82989 39.3866C13.054 36.5044 19.2782 30.4723 25.5023 24.4403C31.725 26.7096 37.9491 28.9764 44.1731 34.396C46.1434 34.7997 48.1137 35.5167 50.0811 36.6486V32.7108C43.857 24.9793 37.6328 21.4002 31.4087 18.8165C37.633 13.1005 43.857 8.38229 50.0811 7.815L50.0813 3.8771Z"
                        fill="white"
                      />
                      <path
                        d="M0.921875 4.36182V6.32942C9.11559 16.5055 17.3088 19.4904 25.5023 22.4734V20.5031C17.3086 17.5201 9.11559 14.5377 0.921875 4.36182ZM50.0811 34.6815C41.8896 24.5054 33.6953 21.5191 25.5023 18.5334V20.5028C33.6953 23.4894 41.8896 26.473 50.0811 36.6487V34.6815Z"
                        fill="#D12433"
                      />
                      <path
                        d="M0.921875 37.1344C1.90639 37.6989 2.89002 38.1619 3.87453 38.5343C11.0837 36.4456 18.2931 29.4594 25.5023 22.4729V20.5026C17.3086 28.443 9.11559 36.3863 0.921875 37.1344ZM47.1286 2.47754C39.9194 4.56353 32.7101 11.5498 25.5023 18.5361V20.5055C33.6953 12.566 41.8867 4.6256 50.0784 3.87605C49.1347 3.33067 48.1482 2.86295 47.1286 2.47754Z"
                        fill="#D12433"
                      />
                      <path
                        d="M50.0813 17.3955C42.5729 13.0739 35.0616 14.7942 27.5502 17.02V3.50195C26.1838 3.90695 24.8193 4.32904 23.453 4.73404V18.2521C15.9425 20.4772 8.43244 22.1992 0.921875 17.8795V23.6159C8.43244 27.9349 15.9425 26.213 23.453 23.9885V37.5066C24.8193 37.1001 26.1838 36.6795 27.5502 36.2732V22.755C35.0614 20.5308 42.5727 18.8095 50.0813 23.1305V17.3955Z"
                        fill="#D12633"
                      />
                      <path
                        d="M21.8131 5.20987V17.088C14.8494 19.0568 7.88548 20.2459 0.921875 16.2398V17.8798C8.43244 22.1993 15.9425 20.4775 23.453 18.2524V4.73434C22.9062 4.89645 22.36 5.0546 21.8131 5.20987ZM0.922055 25.2533C7.88566 29.2588 14.8496 28.0704 21.8132 26.1001V37.981C22.3602 37.8259 22.9064 37.6677 23.4532 37.5067V23.9886C15.9426 26.213 8.43262 27.935 0.922055 23.616V25.2533ZM50.0813 23.1306C42.5729 18.8096 35.0616 20.5309 27.5502 22.7551V36.2733C28.0978 36.1123 28.6453 35.9543 29.1901 35.7991V23.9183C36.1537 21.9507 43.1175 20.7623 50.0811 24.7678L50.0813 23.1306ZM50.0813 15.7555C43.1177 11.7485 36.1539 12.9369 29.1903 14.9045V3.02637C28.6455 3.18164 28.098 3.34123 27.5503 3.50207V17.0202C35.0616 14.7944 42.5729 13.074 50.0815 17.3956L50.0813 15.7555Z"
                        fill="white"
                      />
                    </svg>
                  </b>
                </h2>
              </div>

              <div class="row card-box">
                <div class="col-md-5">
                  <div class="icon">
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/deer-tab-icon1.png"
                      alt="icon"
                      class="img-responsive"
                    />
                  </div>
                  <div class="content">
                    <div class="section-heading">
                      <h3>A Growing Population</h3>
                    </div>
                    <div class="section-text small">
                      <p>
                        Over 2 million deer in the UK are causing increasing
                        issues for agriculture, road safety, and communities.
                        Deer-related challenges extend beyond rural areas,
                        impacting urban gardens, infrastructure, highways, and
                        railways.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="icon">
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/deer-tab-icon2.png"
                      alt="icon"
                      class="img-responsive"
                    />
                  </div>
                  <div class="content">
                    <div class="section-heading">
                      <h3>Crops Under Threat</h3>
                    </div>
                    <div class="section-text small">
                      <p>
                        Deer consume over 1.5 million tonnes of crops annually,
                        leading to food shortages and economic loss. Farmers
                        face an estimated £100 million in agricultural damage
                        each year.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/images/tab-section-separator.svg"
                    class="img-responsive"
                    alt=""
                  />
                </div>
                <div class="col-md-5">
                  <div class="icon">
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/deer-tab-icon3.png"
                      alt="icon"
                      class="img-responsive"
                    />
                  </div>
                  <div class="content">
                    <div class="section-heading">
                      <h3>Deer-Related Accidents</h3>
                    </div>
                    <div class="section-text small">
                      <p>
                        Over 74,000 road accidents are caused by deer annually
                        in the UK. These accidents result in £50 million in
                        vehicle repair costs and pose serious safety risks.
                        Highways and railways are increasingly affected, raising
                        safety concerns for both drivers and passengers.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="icon">
                    <img
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/images/deer-tab-icon4.png"
                      alt="icon"
                      class="img-responsive"
                    />
                  </div>
                  <div class="content">
                    <div class="section-heading">
                      <h3>Property Damage</h3>
                    </div>
                    <div class="section-text small">
                      <p>
                        Deer destroy gardens, fences, and residential
                        landscapes, increasing repair costs for homeowners.
                        Suburban areas face rising maintenance costs due to deer
                        intrusion.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <?php } ?>


      </div>

      <div class="button-wrapper">
        <a href="<?php echo $section['button']['link'] ?>" class="custom-button normal">
          <?php echo $section['button']['text'] ?>
        </a>
      </div>
    </div>