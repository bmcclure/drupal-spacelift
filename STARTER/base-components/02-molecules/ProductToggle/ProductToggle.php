<?php
/**
 * ProductToggle
 */
?>
<div class="ProductToggle bg-light">
    <div class="grid-x  vertical-center">
        <div class="cell medium-auto text-center medium-text-left">
            <div class="ProductToggle-title h5">VIEW OPTIONS FOR</div>
        </div>
        <div class="cell medium-shrink">
            <div class="grid-x RadioButtons">
                <div class="ProductToggle-buttonWrapper RadioButtons-combo cell small-6 medium-shrink">
                    <input name="ProductType" type="radio" id="ProductToggle1" class="RadioButtons-input"
                           value="presets" checked v-model="productToggle" @change="onProductToggleChange()"/>
                    <label for="ProductToggle1"
                           id="ProductToggleLabel1"
                           class="button ProductToggle-button RadioButtons-button button white">
                        PRE&#8209;SETS
                    </label>
                </div>
                <div class="ProductToggle-buttonWrapper RadioButtons-combo cell small-6 medium-shrink">
                    <input name="ProductType" type="radio" id="ProductToggle2"
                           class="RadioButtons-input"
                           value="custom"
                           v-model="productToggle"
                           @change="onProductToggleChange()"
                    />
                    <label
                            for="ProductToggle2"
                            id="ProductToggleLabel2"
                            class="ProductToggle-button RadioButtons-button button white">
                        CUSTOM
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
