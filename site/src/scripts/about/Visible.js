import $ from 'jquery';

const Visible = function (mods) {
  let win = $(window);

  // Already visible modules
  mods.each(function(i, ele) {
    if ($(ele).visible(true)) {
      $(ele).addClass('already-visible');
    }
  });

  win.scroll(function(ev) {
    mods.each(function(i, ele) {
      if ($(ele).visible(true)) {
        $(ele).addClass('come-in');
      }
    });
  });
};

export default Visible;
