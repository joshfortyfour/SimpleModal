define([
    'jquery'
], function ($) {
    'use strict';

    $.widget('oddyssey.simplemodal', {
        options: {
            active: false
        },

        _create: function () {
            var $button = $('.simple-modal__button');
            var $mainContent = $('#maincontent');
            var $modal = $('.simple-modal');

            // Check to make sure the modal is active (from modal.phtml)
            if (this.options.active) {
                $mainContent.addClass('modal-open');
            }

            // Close the modal
            $button.click(function() {
                if ($mainContent.hasClass('modal-open')) {
                    $mainContent.removeClass('modal-open');
                }

                $modal.hide();
            });
        }
    });

    return $.oddyssey.simplemodal;
});