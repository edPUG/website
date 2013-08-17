
  $('#meetup').waypoint({
      offset: function() {
        return -$(this).height();
      }

  });
