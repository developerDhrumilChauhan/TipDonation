<section class="u-align-center u-clearfix u-section-1" id="sec-eb73">   
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
      <ul class="u-tab-list u-unstyled" role="tablist">
        <li class="u-tab-item" role="presentation">
          <a class="<?php echo (isset($_POST['gg_page'])?($_POST['gg_page'] == 1?"active":""):"active"); ?> u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="<?php echo $_POST['gg_page'] == 1? "true":"false"; ?>">Home</a>
        </li>
        <li class="u-tab-item u-tab-item-2" role="presentation">
          <a class="<?php echo $_POST['gg_page'] == 2? "active":""; ?> u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-2" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="<?php echo $_POST['gg_page'] == 2? "true":"false"; ?>">Settings</a>
        </li>
        <li class="u-tab-item u-tab-item-3" role="presentation">
          <a class="<?php echo $_POST['gg_page'] == 3? "active":""; ?> u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="<?php echo $_POST['gg_page'] == 3? "true":"false"; ?>">Appearance</a>
        </li>
        <li class="u-tab-item u-tab-item-4" role="presentation">
          <a class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-4" id="tab-6ff1" href="#link-tab-6ff1" role="tab" aria-controls="link-tab-6ff1" aria-selected="false">How To</a>
        </li>
        
        <?php 
          if($this->get_home('enable-woocommerce-dashboard') == 0)
          {
        ?>
        <li class="u-tab-item u-tab-item-5" role="presentation">
          <a class="<?php echo $_POST['gg_page'] == 5? "active":""; ?> u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-15t4" href="#link-tab-15t4" role="tab" aria-controls="tab-15t4" aria-selected="<?php echo $_POST['gg_page'] == 5? "true":"false"; ?>">Reports</a>
        </li>
      <?php } ?>
      </ul>
      <div class="u-tab-content">
        <?php
          require(plugin_dir_path( __FILE__ )."../includes/admin_tab_1_content.php");
          require(plugin_dir_path( __FILE__ )."../includes/admin_tab_2_content.php");
          require(plugin_dir_path( __FILE__ )."../includes/admin_tab_3_content.php");
          require(plugin_dir_path( __FILE__ )."../includes/admin_tab_4_content.php");
		  require(plugin_dir_path( __FILE__ )."../includes/admin_tab_5_content.php");
        ?>
      </div>
    </div>
  </div>
</section>