<?php
/**
 * FORM example, for now, will use Contact Form
 */

$headline    = 'Got A Question Or Need Help?';
$subheadline = 'Fields marked with an asterisk (<span class="required">*</span>) are required.';
?>
<section class="Form bg-light">
    <div class="grid-container">
        <header class="section-header">
            <h2><?= $headline ?></h2>
            <p><?= $subheadline ?></p>
        </header>
        <form class="Form-form" action="">
            <div class="Form-row grid-x grid-margin-x medium-up-2">
                <div class="Form-inputWrapper cell">
                    <label>First Name <span class="required-asterisk">*</span></label>
                    <input type="text"/>
                </div>
                <div class="Form-inputWrapper cell">
                    <label>Last Name <span class="required-asterisk">*</span></label>
                    <input type="text"/>
                </div>
                <div class="Form-inputWrapper cell">
                    <label>Company Name <span class="required-asterisk">*</span></label>
                    <input type="text"/>
                </div>
                <div class="Form-inputWrapper cell">
                    <label>Title Name <span class="required-asterisk">*</span></label>
                    <input type="text"/>
                </div>
                <div class="Form-inputWrapper cell">
                    <label>Phone <span class="required-asterisk">*</span></label>
                    <input type="tel"/>
                </div>
                <div class="Form-inputWrapper cell">
                    <label>Email <span class="required-asterisk">*</span></label>
                    <input type="email"/>
                </div>
            </div>
            <div class="Form-row grid-x grid-margin-x">
                <div class="Form-inputWrapper cell">
                    <label for="">Questions / Comments</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <button class="button">SUBMIT</button>
        </form>
    </div>
</section>
