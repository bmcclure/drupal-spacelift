<?php
/**
 * SAVING FOR IF WE USE IT ForwardToAFriend lightbox email
 *
 */

$title     = "Example Product";
$shortName = "product"
?>

<div id="ForwardToAFriend" class="ForwardToAFriend reveal" data-reveal>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>

    <h2 class="h3">Forward To A Friend</h2>
    <p>Thank you for your interest in spreading the word about <?= $title ?> on Marking Services.</p>
    <!-- copied from Goodway-->

    <form class="forward-form-commerce-product-3983 forward-form Form"
          data-drupal-selector="forward-form-commerce-product-3983-lqsyn0zqt6k" action="/forward/commerce_product/3983"
          method="post" id="forward-form-commerce-product-3983--LqSyN0ZQt6k" accept-charset="UTF-8" _lpchecked="1">
        <div class="js-form-item FormItem js-FormItem FormItem--type-email FormItem--email js-form-type-email form-type-email js-form-item-email js-FormItem-email form-item-email">
            <label for="edit-email--thGUr3ADV48" class="js-form-required form-required FormElement-label">Your email
                address</label>
            <div class="FormItem-children"><input data-drupal-selector="edit-email" type="email"
                                                  id="edit-email--thGUr3ADV48" name="email" value="" size="60"
                                                  maxlength="254" class="form-email required FormItem-input"
                                                  required="required" aria-required="true"
                                                  style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">

            </div>
        </div>
        <div class="js-form-item FormItem js-FormItem FormItem--type-textfield FormItem--name js-form-type-textfield form-type-textfield js-form-item-name js-FormItem-name form-item-name">
            <label for="edit-name--mz6C5gkRG1E" class="js-form-required form-required FormElement-label">Your
                name</label>
            <div class="FormItem-children">
                <input data-drupal-selector="edit-name" type="text"
                       id="edit-name--mz6C5gkRG1E" name="name" value="" size="60"
                       maxlength="128" class="form-text required FormItem-input"
                       required="required" aria-required="true">

            </div>
        </div>
        <div class="js-form-item FormItem js-FormItem FormItem--type-email FormItem--recipient js-form-type-email form-type-email js-form-item-recipient js-FormItem-recipient form-item-recipient">
            <label for="edit-recipient--IgRB7NR-hJc" class="js-form-required form-required FormElement-label">Send
                to</label>
            <div class="FormItem-children"><input data-drupal-selector="edit-recipient"
                                                  aria-describedby="edit-recipient--IgRB7NR-hJc--description"
                                                  type="email" id="edit-recipient--IgRB7NR-hJc" name="recipient"
                                                  value="" size="60" maxlength="254"
                                                  class="form-email required FormItem-input" required="required"
                                                  aria-required="true">

            </div>
            <div id="edit-recipient--IgRB7NR-hJc--description" class="description">
                <p class="small">Enter the email address of the recipient.</p>
            </div>
        </div>
        <div class="js-form-item FormItem js-FormItem FormItem--type-textarea FormItem--message js-form-type-textarea form-type-textarea js-form-item-message js-FormItem-message form-item-message">
            <label for="edit-message--OMx-IbJHksU" class="FormElement-label">Your personal message</label>
            <div class="FormItem-children">
                <div class="form-textarea-wrapper">
                    <textarea data-drupal-selector="edit-message"
                              aria-describedby="edit-message--OMx-IbJHksU--description" id="edit-message--OMx-IbJHksU"
                              name="message" rows="5" cols="50"git
                              class="form-textarea resize-vertical form-element form-element--textarea FormElement FormElement--textarea TextArea"></textarea>
                </div>

            </div>
            <div id="edit-message--OMx-IbJHksU--description" class="description">
                <p class="small">HTML is not allowed in this field.</p>
            </div>
        </div>
        <input autocomplete="off" data-drupal-selector="form-jp3kxmtb-jz6rcega3suj10bildcukiusl01z3lwu" type="hidden"
               name="form_build_id" value="form-jP3Kxmtb__-jZ6rCega3sUJ10BiLdCUKiusL01Z3lwU" class="FormItem-input">
        <input data-drupal-selector="edit-forward-form-commerce-product-3983-c7rco0ecdtc" type="hidden" name="form_id"
               value="forward_form_commerce_product_3983" class="FormItem-input">
        <div data-drupal-selector="edit-actions"
             class="form-actions js-form-wrapper js-FormWrapper FormWrapper Form-wrapper"
             id="edit-actions--L4LYikuHOPU"><input data-drupal-selector="edit-submit" type="submit"
                                                   id="edit-submit--XoAcocQaFDE" name="op" value="Send Message"
                                                   class="button js-form-submit form-submit FormItem-input"
                                                   style="display: none;">
        </div>

    </form>
    <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
        <div class="ui-dialog-buttonset form-actions">
            <a href="mailto:" type="button"
               class="button js-form-submit form-submit FormItem-input ui-button ui-corner-all ui-widget">Send
                Message <span class="fas fa-caret-right"></span>
            </a>
        </div>
    </div>
    <!-- end copy paste -->
</div>

