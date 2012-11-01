$(document).ready(function() {
$(".fancybox")
    .fancybox(
    {
      helpers : {
        title: {
            type: 'outside'
        }
      },
      padding    : 0,
      margin     : 0,
      nextEffect : 'fade',
      prevEffect : 'none',
      closeBtn: true,
      autoPlay: false,
      nextClick: true,
      beforeLoad: function() {
        this.title = $(this.element).attr('caption');
      }
    })

})