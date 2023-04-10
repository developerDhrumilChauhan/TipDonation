<section class="u-align-center u-clearfix u-section-1" id="sec-eb73">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
            <ul class="u-tab-list u-unstyled" role="tablist">
                <li class="u-tab-item" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-1" id="link-tab-0da5" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=home" role="tab" aria-controls="tab-0da5" aria-selected="false">Home</a>
                </li>
                <li style="border-radius:5px; margin:0 15px;" class="u-tab-item u-tab-item-2" role="presentation">
                    <a class="active u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-2" id="link-tab-2917" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=setting" role="tab" aria-controls="tab-2917" aria-selected="selected">Settings</a>
                </li>
                <li class="u-tab-item u-tab-item-3" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-14b7" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=appearance" role="tab" aria-controls="tab-14b7" aria-selected="false">Branding</a>
                </li>
                <li class="u-tab-item u-tab-item-5" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-15t4" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=reports" role="tab" aria-controls="tab-15t4" aria-selected="false">Analytics</a>
                </li>
                
                <li class="u-tab-item u-tab-item-5" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-3" id="link-tab-15t4" href="https://google.com" role="tab" aria-controls="tab-15t4" aria-selected="false">Go Pro</a>
                </li>
            </ul>
            <div class="u-tab-content">
                <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-2" id="tab-2917" role="tabpanel" aria-labelledby="link-tab-2917">
                    <form action="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=setting" method="post" style="margin: 0 auto;">
                        <input type="hidden" name="<?php echo self::$plugin_slug; ?>" value="1"/>
                        <input type="hidden" name="subpage" value="setting"/>
                        <input type="hidden" value="<?php echo wp_create_nonce( 'plugin-tgdffw-setting-nonce' ); ?>" name="_tgdffw_nonce"/>
                        <div class="u-container-layout u-valign-top u-container-layout-2">
                            <div class="u-table u-table-responsive u-table-2" style="margin: 0 auto;">
                                <table class="u-table-entity">
                                    <colgroup>
                                        <col width="50%">
                                        <col width="50%">
                                    </colgroup>
                                    <tbody class="u-table-body">
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-15">
                                                <h6 class="heading-h6"><?php echo __('Line Item Text', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <?php $x = $this->get_setting("fees-title"); ?>
                                                <input class="input-style-1" type="text" id="setting_5" name="fees-title" value="<?php echo $x ? $x : "" ; ?>">
                                            </td>
                                        </tr>
                                        <tr style="height: 64px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-7">
                                                <h6 class="heading-h6"><?php echo __('Default Tip / Donation Amount', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell u-table-cell-8">
                                                <?php $x = $this->get_setting("default-amount"); ?>
                                                <input type="text" class="input-style-1" id="setting_12" name="default-amount" value="<?php echo $x ? $x : ""; ?>" />
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-11">
                                                <h6 class="heading-h6"><?php echo __('Enable Predefined Mode', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <select class="input-style-1" id="setting_11" name="enable-predefined-amount">
                                                    <?php $x = $this->get_setting("enable-predefined-amount"); ?>
                                                    <option value="0" <?php echo $x == 0 ? "selected='selected'" : "" ; ?>>Enabled</option>
                                                    <option value="1" <?php echo $x == 1 ? "selected='selected'" : "" ; ?>>Disabled</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-25">
                                                <h6 class="heading-h6"><?php echo __('Predefined Tip List (seperated by commas)', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <?php $x = $this->get_setting("predefined-amount"); ?>
                                                <input class="input-style-1" type="text" id="setting_8" name="predefined-amount" value="<?php echo $x ? $x : "" ; ?>">
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-11">
                                                <h6 class="heading-h6"><?php echo __('Enable Predefined Percentage Mode', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <select class="input-style-1" id="setting_14" name="enable-predefined-percentage-amount">
                                                    <?php $x = $this->get_setting("enable-predefined-percentage-amount"); ?>
                                                    <option value="0" <?php echo $x == 0 ? "selected='selected'" : "" ; ?>>Enabled</option>
                                                    <option value="1" <?php echo $x == 1 ? "selected='selected'" : "" ; ?>>Disabled</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-25">
                                                <h6 class="heading-h6"><?php echo __('Predefined Percentage Tip List (seperated by commas)', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <?php $x = $this->get_setting("predefined-percentage-amount"); ?>
                                                <input type="text" id="setting_8" class="input-style-1" name="predefined-percentage-amount" value="<?php echo $x ? $x : "" ; ?>">
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-11">
                                                <h6 class="heading-h6"><?php echo __('Display Location', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <select class="input-style-1" id="setting_13" name="display-location">
                                                    <?php $x = $this->get_setting("display-location"); ?>
                                                    <option value="0" <?php echo $x == 0 ? "selected='selected'" : "" ; ?>>Cart</option>
                                                    <option value="1" <?php echo $x == 1 ? "selected='selected'" : "" ; ?>>Checkout</option>
                                                    <option value="2" <?php echo $x == 2 ? "selected='selected'" : "" ; ?>>Both</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-19">
                                                <h6 class="heading-h6"><?php echo __('Cart Page Position', 'plugin_tgdffw'); ?> </h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <select class="input-style-1" id="setting_6" name="cart-page-position" class="cart_page_position">
                                                    <?php foreach($this->cart_hook as $hook=>$hookTitle){ ?>
                                                    <option value="<?php echo $hook; ?>" <?php echo $this->cart_default_hook == $hook ?"selected=selected":""; ?> ><?php echo __($hookTitle, 'plugin_tgdffw'); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-21">
                                                <h6 class="heading-h6"><?php echo __('Checkout Page Position', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <select class="input-style-1" id="setting_7" name="checkout-page-position" class="checkout_page_position">
                                                    <?php foreach($this->checkout_hook as $hook=>$hookTitle){ ?>
                                                    <option value="<?php echo $hook; ?>" <?php echo $this->checkout_default_hook==$hook?"selected=selected":""; ?> ><?php echo __($hookTitle, 'plugin_tgdffw'); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-27">
                                                <h6 class="heading-h6"><?php echo __('is taxable', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <select class="input-style-1" name="is-taxable" id="setting_9">
                                                    <?php $x = $this->get_setting("is-taxable"); ?>
                                                    <option value="0" <?php echo $x == 0 ? "selected='selected'" : "" ; ?> >
                                                        Yes
                                                    </option>
                                                    <option value="1" <?php echo $x == 1 ? "selected='selected'" : "" ; ?> >
                                                        No
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-13">
                                                <h6 class="heading-h6"><?php echo __('Fees Title', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <?php $x = $this->get_setting("fees-message"); ?>
                                                <textarea class="input-style-1" id="setting_4" cols="10" rows="5" name="fees-message" ><?php echo $x ? trim($x) : "" ; ?></textarea>
                                            </td>
                                        </tr>
                                        <tr style="height: 64px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-7">
                                                <h6 class="heading-h6"><?php echo __('Add Button Text', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell u-table-cell-8">
                                                <?php $x = $this->get_setting("add-button-text"); ?>
                                                <input class="input-style-1" type="text" id="setting_1" name="add-button-text" value="<?php echo $x ? $x : ""; ?>" />
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-11">
                                                <h6 class="heading-h6"> <?php echo __('Display Remove Button', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <?php $x = $this->get_setting("display-remove-button"); ?>
                                                <input <?php echo $x==0?'checked="yes"':""; ?> type="checkbox" name="display-remove-button" value="0">  
                                                <label class="heading-h6" for="setting_3">Enable</label>
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-9">
                                                <h6 class="heading-h6"> <?php echo __('Remove Button Text', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <?php $x = $this->get_setting("remove-button-text"); ?>
                                                <input class="input-style-1" type="text" id="setting_2" name="remove-button-text" value="<?php echo $x ? $x : ""; ?>" />
                                            </td>
                                        </tr>
                                        <tr style="height: 56px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-11">
                                                <h6 class="heading-h6"> <?php echo __('Enable Custom Input', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell">
                                                <select class="input-style-1" id="setting_10" name="enable-custom-input">
                                                    <?php $x = $this->get_setting("enable-custom-input"); ?>
                                                    <option value="0" <?php echo $x == 0 ? "selected='selected'" : "" ; ?>>Enabled</option>
                                                    <option value="1" <?php echo $x == 1 ? "selected='selected'" : "" ; ?>>Disabled</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <input value="Save" type="submit" name="btn-submit" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>