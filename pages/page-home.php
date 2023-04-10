<section class="u-align-center u-clearfix u-section-1" id="sec-eb73">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
            <ul class="u-tab-list u-unstyled" role="tablist">
                <li class="u-tab-item" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="active u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-1" id="link-tab-0da5" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=home" role="tab" aria-controls="tab-0da5" aria-selected="selected">Home</a>
                </li>
                <li class="u-tab-item u-tab-item-2" role="presentation">
                    <a style="border-radius:5px; margin:0 15px;" class="u-active-grey-80 u-border-2 u-border-active-palette-2-base u-border-grey-15 u-border-hover-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-button-style u-hover-palette-1-light-2 u-palette-1-base u-tab-link u-text-active-white u-text-hover-grey-90 u-tab-link-2" id="link-tab-2917" href="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=setting" role="tab" aria-controls="tab-2917" aria-selected="false">Settings</a>
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
                <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
                    <div class="u-container-layout u-container-layout-1">
                        <div class="u-table u-table-responsive u-table-1">
                            <form action="admin.php?page=<?php echo self::$plugin_slug; ?>&subpage=setting" method="POST">
                                <input type="hidden" name="<?php echo self::$plugin_slug; ?>" value="1"/>
                                <input type="hidden" name="gg_page" value="1"/>
                                <input type="hidden" value="<?php echo wp_create_nonce('plugin-tgdffw-home-nonce'); ?>" name="_tgdffw_nonce"/>
                                <table class="u-table-entity u-table-entity-1">
                                    <colgroup>
                                        <col width="50%">
                                        <col width="50%">
                                    </colgroup>
                                    <tbody class="u-table-body">
                                        <tr style="height: 26px;">
                                            <td class="u-table-cell u-text-palette-1-base u-table-cell-1">
                                                <h6 style="color:#000000;margin:0;"><?php echo __('Enable Tip Donation', 'plugin_tgdffw'); ?></h6>
                                            </td>
                                            <td class="u-table-cell u-table-cell-2">
                                                <select name="enable" id="home_1" style="width:300px;line-height:3em;font-weight:600;">
                                                    <?php $x = $this->get_home("enable"); ?>
                                                    <option value="0" <?php echo $x == 0 ? "selected='selected'" : "" ; ?> >
                                                        Enabled
                                                    </option>
                                                    <option value="1" <?php echo $x == 1 ? "selected='selected'" : "" ; ?> >
                                                        Disabled
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input value="Save" type="submit" name="btn-submit" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>