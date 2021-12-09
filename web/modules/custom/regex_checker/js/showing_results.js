(function ($, Drupal) {
  'use strict';
  $(document).ready(function () {
    console.log('Form is ready!');
    $('#regex_checker_button').click(() => {
      let element = $('#regex_checker_final_result');
      // add some info over html element
      element.html('<p><strong>Update->will be processed with the regex:</strong></p>');
      // for testing
      console.log('Update->will be processed')
    });
  });
})(jQuery, Drupal);
