(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.helloWorldClock = {
    attach: function (context, settings) {
      function ticker() {
        const date = new Date();
        $(context).find('.clock').html(date.toLocaleTimeString())
      }

      let clock = '<div> The time is <span class ="clock"></span> </div>';
      if (settings.hello_world !== undefined && settings.hello_world.hello_world) {
        clock += 'Are you having a nice day?';
      }

      $(document).find('.greeting').once('helloWorldClock').append(clock);

      setInterval(function () {
        ticker();
      }, 1000);
    }
  };
}) (Drupal, jquery);

