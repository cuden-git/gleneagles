<?php
  $data = wp_parse_args($data['availability']);
  $module_type = $data['type'];
  $colour = $data['colour'];
  $padding_top = $data['margins']['margin_top'];
  $padding_bottom = $data['margins']['margin_bottom'];
  $section_id = $data['section_id'];
?>
<section id="<?php echo esc_attr($section_id); ?>"
    class="cb-availability cb-availability--<?php echo esc_html($module_type); ?> cb-availability--<?php echo esc_html($colour); ?>">
    <?php if( $module_type === 'type-one'){ ?>
    <div
        class="cb-availability__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">
        <div class="cb-availability__block">
            <div class="cb-availability__heading">
                <h2>Availability</h2>
            </div>
            <div class="cb-availability__details">

                <p>
                    All the things you’d expect in a five-star country house – but it’s the wee things that make the big
                    difference.
                </p>

                <div class="cb-availability__search">

                    <div class="cb-availability__month">

                        <label>Month: </label>

                        <select class="cb-availability--dropdown">
                            <option value="">January</option>
                            <option value="1">February</option>
                            <option value="0">March</option>
                        </select>

                    </div>

                    <div class="cb-availability__length">
                        <label>Tenure length: </label>
                        <select class="cb-availability--dropdown">
                            <option value="">Long Term</option>
                            <option value="1">Long Term</option>
                            <option value="0">Long Term</option>
                        </select>

                    </div>
                </div>

                <div class="cb-availability__filter">
                    <svg width="10px" height="10px" viewBox="0 0 10 10" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Lodges-For-Sale" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="GE-LodgesForSale-Mobile" transform="translate(-145.000000, -3961.000000)"
                                fill="#104520">
                                <g id="Pricing-Copy" transform="translate(0.000000, 3710.000000)">
                                    <g id="Filter" transform="translate(113.000000, 232.000000)">
                                        <g id="Group" transform="translate(32.000000, 19.000000)">
                                            <path
                                                d="M5,9 L5,10 L0,10 L0,9 L5,9 Z M7,4.5 L7,5.5 L0,5.5 L0,4.5 L7,4.5 Z M10,0 L10,1 L0,1 L0,0 L10,0 Z"
                                                id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>FILTER
                </div>

            </div>
            <div class="cb-availability__table">
                <table>
                    <tr class="cb-availability__column">
                        <th class="cb-availability__week">Week No</th>
                        <th class="cb-availability__dates">Dates</th>
                        <th class="cb-availability__beds">3 Bed</th>
                        <th class="cb-availability__beds cb-availability__beds--hide">3 Bed</th>
                        <th class="cb-availability__beds cb-availability__beds--hide">4 Bed</th>
                        <th class="cb-availability__accessible cb-availability__beds--hide">Accessible</th>

                    </tr>

                    <tr>
                        <td>Week 01</td>
                        <td>24/06/19-01/07/19</td>
                        <td>£2880</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                    </tr>

                    <tr>
                        <td>Week 02</td>
                        <td>24/06/19-01/07/19</td>
                        <td>£2880</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                    </tr>

                    <tr>
                        <td>Week 03</td>
                        <td>24/06/19-01/07/19</td>
                        <td>£2880</td>
                        <td class="cb-availability__beds--hide">£3100</td>
                        <td class="cb-availability__beds--hide">£2900</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                    </tr>

                    <tr>
                        <td>Week 04</td>
                        <td>24/06/19-01/07/19</td>
                        <td>£2880</td>
                        <td class="cb-availability__beds--hide">£3100</td>
                        <td class="cb-availability__beds--hide">£2900</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                    </tr>

                    <tr>
                        <td>Week 05</td>
                        <td>24/06/19-01/07/19</td>
                        <td>£2880</td>
                        <td class="cb-availability__beds--hide">£3100</td>
                        <td class="cb-availability__beds--hide">£2900</td>
                        <td class="cb-availability__beds--hide">£2880</td>
                    </tr>

                </table>
            </div>

            <a href="#" target="" class="cb-availability__button--hide c-button c-button--type-tertiary c-button--colour-one">View Pricing PDF</a>
            <a href="#" target="" class="c-button c-button--type-primary c-button--colour-one">Enquire Now</a>
        </div>
    </div>


    <?php } else if( $module_type === 'type-two'){ ?>
    <div
        class="cb-availability__container padding-top-<?php echo esc_html($padding_top); ?> padding-bottom-<?php echo esc_html($padding_bottom); ?>">
        <div class="cb-availability__block">

            <div class="cb-availability__details">

                <div class="cb-availability__search">

                    <div class="cb-availability__month">

                        <label>Party size: </label>

                        <select class="cb-availability--dropdown">
                            <option value="">2 People</option>
                            <option value="1">3 People</option>
                            <option value="0">4 People</option>
                        </select>

                    </div>

                    <div class="cb-availability__length">
                        <label class="cb-availability__label--show">Pick a date: </label>
                        <label class="cb-availability__label--hide">Date: </label>
                        <select class="cb-availability--datepicker">
                            <option value="">TUE, 01 OCT</option>
                            <option value="1">WED, 02 OCT</option>
                            <option value="0">THU, 03 OCT</option>
                        </select>

                    </div>
                </div>
            </div>

            <a href="#" target="" class="c-button c-button--type-primary c-button--colour-one">Reserve a table</a>
        </div>
    </div>
    <?php } ?>
</section>
