<?php
/**
* Template for displaying main search bar attached to MLS
*/
?>

<!-- SEACH BAR -->

<section class="search-bar-wrap neighborhoods-search-bar">
    <div class="search-bar-inner">
        <div class="search-bar-toggle">
            <div class="search-bar-toggle-inner">
                <button id="grid-view" class="search-bar-toggle-btn search-view-btn search-grid-view view-active"><i class="fa fa-th" aria-hidden="true"></i></i></button>
                <button id="list-view" class="search-bar-toggle-btn search-view-btn search-list-view"><i class="fa fa-list-ul" aria-hidden="true"></i></i></button>
                <button id="map-view" class="search-bar-toggle-btn search-view-btn search-map-view"><i class="fa fa-map-o" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="search-bar-filters-wrap">
            <div class="search-bar-filters">
                <button class="search-bar-toggle-btn drop-down-btn search-btn-budget">Budget<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                <div class="drop-down-menu search-filter-budget">
                    <div class="search-filter-budget-inner">
                        <div class="">
                            <div class="min-max-input-wrap budget-input-wrap">
                                <div class="min-max-input budget-input">
                                    <input type="text" class="budget-min" autocomplete="off" placeholder="Min" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="min" autofocus>
                                </div>
                                <p>-</p>
                                <div class="min-max-input budget-input">
                                    <input type="text" class="budget-max" autocomplete="off" placeholder="Max" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="max">
                                </div>
                            </div>
                            <div class="budget-options-wrap">
                                <div class="options-inner-wrap min-options-list item-active">
                                    <div class="budget-option budget-option-min">$0</div>
                                    <div class="budget-option budget-option-min">$50,000</div>
                                    <div class="budget-option budget-option-min">$75,000</div>
                                    <div class="budget-option budget-option-min">$100,000</div>
                                    <div class="budget-option budget-option-min">$150,000</div>
                                    <div class="budget-option budget-option-min">$200,000</div>
                                    <div class="budget-option budget-option-min">$250,000</div>
                                    <div class="budget-option budget-option-min">$300,000</div>
                                    <div class="budget-option budget-option-min">$400,000</div>
                                    <div class="budget-option budget-option-min">$500,000</div>
                                </div>
                                <div class="options-inner-wrap max-options-list">
                                    <div class="budget-option budget-option-max">$0</div>
                                    <div class="budget-option budget-option-max">$100,000</div>
                                    <div class="budget-option budget-option-max">$200,000</div>
                                    <div class="budget-option budget-option-max">$300,000</div>
                                    <div class="budget-option budget-option-max">$400,000</div>
                                    <div class="budget-option budget-option-max">$500,000</div>
                                    <div class="budget-option budget-option-max">$600,000</div>
                                    <div class="budget-option budget-option-max">$700,000</div>
                                    <div class="budget-option budget-option-max">$800,000</div>
                                    <div class="budget-option budget-option-max">$900,000</div>
                                </div>
                            </div>
                        </div>

                        <div class="clear-update-wrap">
                            <div class="clear-update-btn search-clear-btn">Clear</div>
                            <div class="clear-update-btn search-clear-btn">Update</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="search-bar-filters">
                <button class="search-bar-toggle-btn drop-down-btn search-btn-beds">Beds<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                <div class="drop-down-menu search-filter-beds">
                    <ul>
                        <li>
                            <span class="bed-list-item">0+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">1+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">2+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">3+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">4+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">5+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">6+</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search-bar-filters">
                <button class="search-bar-toggle-btn drop-down-btn search-btn-bath">Bath<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                <div class="drop-down-menu search-filter-bath">
                    <ul>
                        <li>
                            <span class="bed-list-item">0+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">1+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">2+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">3+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">4+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">5+</span>
                        </li>
                        <li>
                            <span class="bed-list-item">6+</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search-bar-filters">
                <button class="search-bar-toggle-btn drop-down-btn search-btn-more"><i class="fa fa-sliders" aria-hidden="true"></i>More</button>
                <div class="drop-down-menu search-filter-more">
                    <div class="filter-item filter-home-type">
                        <div class="filter-title">Home Type</div>
                        <div class="home-options-wrap">
                            <div class="home-type-option">
                                <input id="option-house" type="checkbox" name="home-type" value="house">
                                <label for="option-house">House</label>
                            </div>
                            <div class="home-type-option">
                                <input id="option-condo" type="checkbox" name="home-type" value="house">
                                <label for="option-condo">Condo</label>
                            </div>
                            <div class="home-type-option">
                                <input id="option-townhome" type="checkbox" name="home-type" value="house">
                                <label for="option-townhome">Townhome</label>
                            </div>
                            <div class="home-type-option">
                                <input id="option-multifamily" type="checkbox" name="home-type" value="house">
                                <label for="option-multifamily">Multifamily</label>
                            </div>
                            <div class="home-type-option">
                                <input id="option-manufactured" type="checkbox" name="home-type" value="house">
                                <label for="option-manufactured">Manufactured</label>
                            </div>
                            <div class="home-type-option">
                                <input id="option-lots-land" type="checkbox" name="home-type" value="house">
                                <label for="option-lots-land">Lots/Land</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item filter-square-feet">
                        <div class="filter-title">Square Feet</div>
                        <div class="min-max-input-wrap">
                            <div class="min-max-input">
                                <input type="text" class="square-feet-min" autocomplete="off" placeholder="Min" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                            <p>-</p>
                            <div class="min-max-input">
                                <input type="text" class="square-feet-mmax" autocomplete="off" placeholder="Max" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                        </div>
                    </div>
                    <div class="filter-item filter-lot-size">
                        <div class="filter-title">Lot Size</div>
                        <div class="min-max-input-wrap">
                            <div class="min-max-input">
                                <input type="text" class="lot-size-min" autocomplete="off" placeholder="Min" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                            <p>-</p>
                            <div class="min-max-input">
                                <input type="text" class="lot-size-max" autocomplete="off" placeholder="Max" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                        </div>
                    </div>
                    <div class="filter-item filter-year-built">
                        <div class="filter-title">Year Built</div>
                        <div class="min-max-input-wrap">
                            <div class="min-max-input">
                                <input type="text" class="year-built-min" autocomplete="off" placeholder="Min" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                            <p>-</p>
                            <div class="min-max-input">
                                <input type="text" class="year-built-max" autocomplete="off" placeholder="Max" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                        </div>
                    </div>
                    <div class="filter-item filter-hoa-fees">
                        <div class="filter-title">HOA Fees</div>
                        <div class="min-max-input-wrap">
                            <div class="min-max-input">
                                <input type="text" class="hoa-fees-min" autocomplete="off" placeholder="Min" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                            <p>-</p>
                            <div class="min-max-input">
                                <input type="text" class="hoa-fees-max" autocomplete="off" placeholder="Max" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                        </div>
                    </div>
                    <div class="filter-item filter-days-on-market">
                        <div class="filter-title">Days on Market</div>
                        <div class="min-max-input-wrap">
                            <div class="min-max-input">
                                <input type="text" class="dom-min" autocomplete="off" placeholder="Min" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                            <p>-</p>
                            <div class="min-max-input">
                                <input type="text" class="dom-max" autocomplete="off" placeholder="Max" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="">
                            </div>
                        </div>
                    </div>
                    <div class="clear-update-wrap">
                        <div class="clear-update-btn search-clear-btn">Clear</div>
                        <div class="clear-update-btn search-clear-btn">Update</div>
                    </div>
                </div>
            </div>
            <div class="filters-search-wrap">
                <button>Save Search</button>
            </div>
        </div>
        <div class="mobile-search-bar">
        </div>
        <div class="search-bar-sort">
            <div class="search-bar-sort-inner">
                <span class="search-bar-sort-text">Sort by: Price</span>
                <div class="sort-options-wrap">
                    <ul>
                        <li class="sort-option">Price</li>
                        <li class="sort-option">Bed</li>
                        <li class="sort-option">Bath</li>
                        <li class="sort-option">Sq Ft</li>
                        <li class="sort-option">Lot Size</li>
                        <li class="sort-option">Year</li>
                        <li class="sort-option">Days</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>