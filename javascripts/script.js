$(document).ready(function() {
$(".fancybox").attr('rel', 'group_1')
    .fancybox(
    {
      helpers : {
        title: {
            type: 'outside'
        },
        media : true
      },
      padding    : 0,
      margin     : 0,
      closeBtn: true,
      autoPlay: false,
      nextClick: true,
      beforeLoad: function() {
        this.title = $(this.element).attr('caption');
      }
    })

})