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
                    <a style="border-radius:5px; margin:0 15px;" class="active u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-14b7" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=appearance" role="tab" aria-controls="tab-14b7" aria-selected="selected">Branding</a>
                </li>
                <li class="u-tab-item u-tab-item-5" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-15t4" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=reports" role="tab" aria-controls="tab-15t4" aria-selected="false">Analytics</a>
                </li>
                <li class="u-tab-item u-tab-item-5" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-15t4" href="https://google.com" role="tab" aria-controls="tab-15t4" aria-selected="false">Go Pro</a>
                </li>
            </ul>
            <div class="u-tab-content">
                <div class="u-align-left u-tab-active u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
                    <div class="u-container-layout u-valign-top u-container-layout-3">
                        <table>
                            <tr>
                                <td rowspan="2" style="vertical-align: top;">
                                    <?php require(plugin_dir_path( __FILE__ )."../view/live-preview-widget.php"); ?>
                                </td>
                                <td style="width:500px; display:inline-block;">
                                    <form method="post" action="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=appearance">
                                        <input type="hidden" value="<?php echo wp_create_nonce( 'plugin-tgdffw-appearance-nonce' ); ?>" name="_tgdffw_nonce"/>
                                        <input type="hidden" name="<?php echo self::$plugin_slug; ?>" value="1"/>
                                        <input type="hidden" name="gg_page" value="3"/>


                                        <!-- ////////////////////////////// Add Button Design ////////////////////////////// -->

                                        <div class="u-table u-table-responsive" style="">
                                            <h4 class="" style="margin-top:0;position:sticky;top:5%;display:inline-block; background: #f5f5f5;width:500px;text-align:center;padding:10px;border:1px solid #a7a7a7;border-radius:5px;">Add Button design</h4>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Background Color:','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("add-button-background-color");?>
                                            <button data-preval="<?php echo $x;?>" id="add-btn-enable-background-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Background Color</button>
                                            <button id="add-btn-disable-background-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="add-button-background-color">
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Text Color:','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("add-button-text-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="add-btn-enable-text-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Text Color</button>
                                            <button id="add-btn-disable-text-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="add-button-text-color">
                                            <h6 style="min-width:250px;"><?php echo __('Button Padding:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("add-button-padding-top"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_3" name="add-button-padding-top" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("add-button-padding-left"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_32" name="add-button-padding-right" value="<?php echo isset($x) ? $x : "25px" ; ?>">
                                            <?php $x = $this->get_appearance("add-button-padding-bottom"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_33" name="add-button-padding-bottom" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("add-button-padding-left"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_34" name="add-button-padding-left" value="<?php echo isset($x) ? $x : "25px" ; ?>"><br>
                                            <h6 style="min-width:250px;"><?php echo __('Button Margin:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("add-button-margin-top"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_4" name="add-button-margin-top" value="<?php echo isset($x) ? $x : "20px" ; ?>">
                                            <?php $x = $this->get_appearance("add-button-margin-right"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_35" name="add-button-margin-right" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("add-button-margin-bottom"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_36" name="add-button-margin-bottom" value="<?php echo isset($x) ? $x : "20px" ; ?>">
                                            <?php $x = $this->get_appearance("add-button-margin-left"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_37" name="add-button-margin-left" value="<?php echo isset($x) ? $x : "10px" ; ?>"><br>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Width:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("add-button-border-width"); ?>
                                            <input type="text" id="appearance_5" name="add-button-border-width" value="<?php echo isset($x) ? $x : "0" ; ?>"><br>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Color:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("add-button-border-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="add-btn-enable-border-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Border Color</button>
                                            <button id="add-btn-disable-border-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="add-button-border-color">
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Radius:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("add-button-border-radius"); ?>
                                            <input type="text" id="appearance_7" name="add-button-border-radius" value="<?php echo isset($x) ? $x : "0" ; ?>"><br>
                                        </div>


                                        <!-- ////////////////////////////// Remove Button Design ////////////////////////////// -->

                                        <div class="u-table u-table-responsive" style="">
                                            <h4 class="" style="margin-top:0;position:sticky;top:5%;display:inline-block; background: #f5f5f5;width:500px;text-align:center;padding:10px;border:1px solid #a7a7a7;border-radius:5px;">Remove Button design</h4>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Background Color:','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("remove-button-background-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="remove-btn-enable-background-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Background Color</button>
                                            <button id="remove-btn-disable-background-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="remove-button-background-color">
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Text Color:','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("remove-button-text-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="remove-btn-enable-text-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Text Color</button>
                                            <button id="remove-btn-disable-text-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="remove-button-text-color">
                                            <h6 style="min-width:250px;"><?php echo __('Button Padding:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("remove-button-padding-top"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_10" name="remove-button-padding-top" value="<?php echo isset($x) ? $x : "20px" ; ?>">
                                            <?php $x = $this->get_appearance("remove-button-padding-right"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_38" name="remove-button-padding-right" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("remove-button-padding-bottom"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_39" name="remove-button-padding-bottom" value="<?php echo isset($x) ? $x : "20px" ; ?>">
                                            <?php $x = $this->get_appearance("remove-button-padding-left"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_40" name="remove-button-padding-left" value="<?php echo isset($x) ? $x : "10px" ; ?>"><br>
                                            <h6 style="min-width:250px;"><?php echo __('Button Margin:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("remove-button-margin-top"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_11" name="remove-button-margin-top" value="<?php echo isset($x) ? $x : "20px" ; ?>">
                                            <?php $x = $this->get_appearance("remove-button-margin-right"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_53" name="remove-button-margin-right" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("remove-button-margin-bottom"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_54" name="remove-button-margin-bottom" value="<?php echo isset($x) ? $x : "20px" ; ?>">
                                            <?php $x = $this->get_appearance("remove-button-margin-left"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_55" name="remove-button-margin-left" value="<?php echo isset($x) ? $x : "10px" ; ?>"><br>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Width:', 'plugin_tgdffw'); ?></h6>
                                            <?php  $x = $this->get_appearance("remove-button-border-width"); ?>
                                            <input type="text" id="appearance_12" name="remove-button-border-width" value="<?php echo isset($x) ? $x : "0" ; ?>"><br>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Color:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("remove-button-border-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="remove-btn-enable-border-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Border Color</button>
                                            <button id="remove-btn-disable-border-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="remove-button-border-color">
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Radius:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("remove-button-border-radius"); ?>
                                            <input type="text" id="appearance_14" name="remove-button-border-radius" value="<?php echo isset($x) ? $x : "0" ; ?>"><br>
                                        </div>


                                        <!-- ////////////////////////////// Predefined Fee Button Design ////////////////////////////// -->

                                        <div class="u-table u-table-responsive" style="">
                                            <h4 class="" style="margin-top:0;position:sticky;top:5%;display:inline-block; background: #f5f5f5;width:500px;text-align:center;padding:10px;border:1px solid #a7a7a7;border-radius:5px;">Pre-Defined Tip design</h4>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Background Color:','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-background-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="predefined-btn-enable-background-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Background Color</button>
                                            <button id="predefined-btn-disable-background-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="pre-defined-button-background-color">
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Background Color (selected):','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-selected-background-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="predefined-selected-btn-enable-background-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Background Color</button>
                                            <button id="predefined-selected-btn-disable-background-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="pre-defined-button-selected-background-color">
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Text Color:','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-text-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="predefined-btn-enable-text-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Text Color</button>
                                            <button id="predefined-btn-disable-text-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>    
                                            <input type="hidden" value="<?php echo $x;?>" name="pre-defined-button-text-color">
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Text Color (selected):','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-selected-text-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="predefined-selected-btn-enable-text-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Text Color</button>
                                            <button id="predefined-selected-btn-disable-text-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="pre-defined-button-selected-text-color">
                                            <h6 style="min-width:250px;"><?php echo __('Button Padding:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-padding-top"); ?>
                                            <input style="margin:2px;width:20%;" type="text" id="appearance_17" name="pre-defined-button-padding-top" value="<?php echo isset($x) ? $x : "5px" ; ?>">
                                            <?php $x = $this->get_appearance("pre-defined-button-padding-right"); ?>
                                            <input style="margin:2px;width:20%;" type="text" id="appearance_41" name="pre-defined-button-padding-right" value="<?php echo isset($x) ? $x : "5px" ; ?>">
                                            <?php $x = $this->get_appearance("pre-defined-button-padding-bottom"); ?>
                                            <input style="margin:2px;width:20%;" type="text" id="appearance_42" name="pre-defined-button-padding-bottom" value="<?php echo isset($x) ? $x : "5px" ; ?>">
                                            <?php $x = $this->get_appearance("pre-defined-button-padding-left"); ?>
                                            <input style="margin:2px;width:20%;" type="text" id="appearance_43" name="pre-defined-button-padding-left" value="<?php echo isset($x) ? $x : "5px" ; ?>"><br>
                                            <h6 style="min-width:250px;"><?php echo __('Button Margin:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-margin-top"); ?>
                                            <input style="margin:2px;width:20%;" type="text" id="appearance_18" name="pre-defined-button-margin-top" value="<?php echo isset($x) ? $x : "5px" ; ?>">
                                            <?php $x = $this->get_appearance("pre-defined-button-margin-right"); ?>
                                            <input style="margin:2px;width:20%;" type="text" id="appearance_44" name="pre-defined-button-margin-right" value="<?php echo isset($x) ? $x : "5px" ; ?>">
                                            <?php $x = $this->get_appearance("pre-defined-button-margin-bottom"); ?>
                                            <input style="margin:2px;width:20%;" type="text" id="appearance_45" name="pre-defined-button-margin-bottom" value="<?php echo isset($x) ? $x : "5px" ; ?>">
                                            <?php $x = $this->get_appearance("pre-defined-button-margin-left"); ?>
                                            <input style="margin:2px;width:20%;" type="text" id="appearance_46" name="pre-defined-button-margin-left" value="<?php echo isset($x) ? $x : "5px" ; ?>"><br>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Width:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-border-width"); ?>
                                            <input type="text" id="appearance_19" name="pre-defined-button-border-width" value="<?php echo isset($x) ? $x : "0" ; ?>"><br>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Color:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-border-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="predefined-btn-enable-border-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Border Color</button>
                                            <button id="predefined-btn-disable-border-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="pre-defined-button-border-color">
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Color (selected):', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-selected-border-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="predefined-selected-btn-enable-border-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Border Color</button>
                                            <button id="predefined-selected-btn-disable-border-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="pre-defined-button-selected-border-color">
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Radius:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("pre-defined-button-border-radius"); ?>
                                            <input type="text" id="appearance_21" name="pre-defined-button-border-radius" value="<?php echo isset($x) ? $x : "0" ; ?>"><br>
                                        </div>


                                        <!-- ////////////////////////////// Custom Tip Input Design ////////////////////////////// -->
                                        
                                        <div class="u-table u-table-responsive" style="">
                                            <h4 class="" style="margin-top:0;position:sticky;top:5%;display:inline-block; background: #f5f5f5;width:500px;text-align:center;padding:10px;border:1px solid #a7a7a7;border-radius:5px;">Custom Tip Input design</h4>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Background Color:','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("tip-input-background-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="tip-input-btn-enable-background-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Background Color</button>
                                            <button id="tip-input-btn-disable-background-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="tip-input-background-color">
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Text Color:','plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("tip-input-text-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="tip-input-btn-enable-text-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Text Color</button>
                                            <button id="tip-input-btn-disable-text-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="tip-input-text-color">
                                            <h6 style="min-width:250px;"><?php echo __('Button Padding:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("tip-input-padding-top"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_27" name="tip-input-padding-top" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("tip-input-padding-right"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_47" name="tip-input-padding-right" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("tip-input-padding-bottom"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_48" name="tip-input-padding-bottom" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("tip-input-padding-left"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_49" name="tip-input-padding-left" value="<?php echo isset($x) ? $x : "10px" ; ?>"><br>
                                            <h6 style="min-width:250px;"><?php echo __('Button Margin:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("tip-input-margin-top"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_28" name="tip-input-margin-top" value="<?php echo isset($x) ? $x : "20px" ; ?>">
                                            <?php $x = $this->get_appearance("tip-input-margin-right"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_50" name="tip-input-margin-right" value="<?php echo isset($x) ? $x : "10px" ; ?>">
                                            <?php $x = $this->get_appearance("tip-input-margin-bottom"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_51" name="tip-input-margin-bottom" value="<?php echo isset($x) ? $x : "20px" ; ?>">
                                            <?php $x = $this->get_appearance("tip-input-margin-left"); ?>
                                            <input style="margin:2px;width:100px;" type="text" id="appearance_52" name="tip-input-margin-left" value="<?php echo isset($x) ? $x : "10px" ; ?>"><br>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Width:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("tip-input-border-width"); ?>
                                            <input type="text" id="appearance_29" name="tip-input-border-width" value="<?php echo isset($x) ? $x : "1px" ; ?>"><br>
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Color:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("tip-input-border-color"); ?>
                                            <button data-preval="<?php echo $x;?>" id="tip-input-btn-enable-border-color" style="display: inline-block;padding: 5px 15px;background: yellowgreen;color: white;border: 1px solid #1cd488;border-radius: 5px;" type="button">Change Border Color</button>
                                            <button id="tip-input-btn-disable-border-color" type="button" style="display: none;padding: 5px 15px;background: #f00;color: white;border: 1px solid #f060a0;border-radius: 5px">Revert Color</button><br>
                                            <input type="hidden" value="<?php echo $x;?>" name="tip-input-border-color">
                                            <br>
                                            <h6 style="display:inline-block;min-width:250px;"><?php echo __('Button Border Radius:', 'plugin_tgdffw'); ?></h6>
                                            <?php $x = $this->get_appearance("tip-input-border-radius"); ?>
                                            <input type="text" id="appearance_31" name="tip-input-border-radius" value="<?php echo isset($x) ? $x : "5px" ; ?>"><br>
                                        </div>
                                        <input name="btn-submit" value="Save" type="submit" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1" />
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>