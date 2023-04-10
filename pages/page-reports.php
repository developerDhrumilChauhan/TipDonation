<section class="u-align-center u-clearfix u-section-1" id="sec-eb73">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
            <ul class="u-tab-list u-unstyled" role="tablist">
                <li class="u-tab-item" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-1" id="link-tab-0da5" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=home" role="tab" aria-controls="tab-0da5" aria-selected="false">Home</a>
                </li>
                <li class="u-tab-item u-tab-item-2" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-2" id="link-tab-2917" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=setting" role="tab" aria-controls="tab-2917" aria-selected="false">Settings</a>
                </li>
                <li class="u-tab-item u-tab-item-3" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-14b7" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=appearance" role="tab" aria-controls="tab-14b7" aria-selected="false">Branding</a>
                </li>
                <li class="u-tab-item u-tab-item-5" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="active u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-15t4" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=reports" role="tab" aria-controls="tab-15t4" aria-selected="selected">Analytics</a>
                </li>
                <li class="u-tab-item u-tab-item-5" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-15t4" href="https://google.com" role="tab" aria-controls="tab-15t4" aria-selected="false">Go Pro</a>
                </li>
            </ul>
            <div class="u-tab-content">
                <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-5" id="link-tab-15t4" role="tabpanel" aria-labelledby="tab-15t4">
                    <div class="u-container-layout u-valign-top u-container-layout-4">
                        <!-- This is the start of the table -->
                        <?php
                            require_once(plugin_dir_path( __FILE__ )."../php_scripts/class-my-table.php");
                            require_once(plugin_dir_path( __FILE__ )."../php_scripts/class-my-chart.php");
                            
                            if(!session_id()){
                             session_start();
                            }
                            
                            $chartInstance = new PLUGIN_TGDFFW_chart();
                            $testListTable = new PLUGIN_TGDFFW_table();
                            $testListTable->prepare_items();
                        ?>
                        <div class="wrap">
                            <div id="icon-users" class="icon32"><br/></div>
                            <h2>Tip / Donation Analytics Reports</h2>
                            <?php $chartInstance->prepare_chart(); $chartInstance->display(); ?>
                            <form id="movies-filter" method="post">
                                <input type="hidden" name="<?php echo self::$plugin_slug; ?>" value="1"/>
                                <input type="hidden" name="gg_page" value="5"/>
                                <input type="hidden" value="<?php echo wp_create_nonce( 'plugin-tgdffw-reports-nonce' ); ?>" name="_tgdffw_nonce"/>
                                <?php 
                                    if(!session_id())
                                    {
                                        session_start();
                                    }
                                ?>
                                <!-- Date Filter Start -->
                                <br><br><label for="start_dt">
                                From
                                </label>
                                <input name="start_date" class="start_dt" name="start_dt" type="date" value="<?php echo date("Y")."-".date("m")."-".date("d"); ?>">
                                <label for="end_date">
                                To
                                </label>
                                <input name="end_date" class="end_dt" name="end_dt" type="date" value="<?php echo date("Y")."-".date("m")."-".date("d"); ?>">
                                <input type="submit" name="btn-submit" value="Filter"/>
                                <?php if(isset($_SESSION["plugin_tgdffw_vars"]["date_filter_active"]) && $_SESSION["plugin_tgdffw_vars"]["date_filter_active"] == true): ?>
                                <input type="submit" name="btn-submit" value="clear"/>
                                <?php endif;?>
                                <?php if(isset($_SESSION["plugin_tgdffw_vars"]["date_filter_active"]) && $_SESSION["plugin_tgdffw_vars"]["date_filter_active"] == true): ?>
                                <br>
                                <h3 class="filter-active-label" >Date Filter is Active</h3>
                                <?php endif; ?>
                                <!-- Date Filter End -->
                                <?php $testListTable->display() ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>