
define('arale/footerset/1.0.0/footerset',['$'],function(){

  var Footerset = {
    init: function(){
      console.log($);
      this.attachEl();
      this.bind();
      this.resize();
    },

    attachEl: function(){
      this.header = $('#site-navbar');
      this.content = $('#content-container');
      this.footer = $('#footer');
    },

    bind: function(){
      var _this = this;
      $(window).on('resize', function(){
        _this.resize();
      });
    },

    resize: function(){
      var h = this.header,
          c = this.content,
          f = this.footer;
      var offset = c.outerHeight(true) - c.height(),
          cOuter = $(window).outerHeight(true) - h.outerHeight(true) - f.outerHeight(true),
          height = cOuter - offset;
      c.css('min-height', height+'px');
    }

  };

  return Footerset;

});