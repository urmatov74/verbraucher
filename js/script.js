$(document).ready(function () {
    // $("#sidebar").niceScroll({
    //     cursorcolor: '#53619d',
    //     cursorwidth: 4,
    //     cursorborder: 'none'
    // });

    // $('.overlay').on('click', function () {
    //    $('#sidebarCollapse').addClass('active');
    //    $('#sidebar').removeClass('active');
    //    $('.overlay').fadeOut();
    // });

//     $('a[data-toggle="collapse"]').on('click', function () {
//        if($(this).hasClass('collapsed')){
//           $(this).removeClass('collapsed');
//         //   $('#sidebar').addClass('active');
//         //   $('.collapse.in').toggleClass('in');
//         //   $('a[aria-expanded=true]').attr('aria-expanded', 'false');
//        } else{
//            $('a[data-toggle="collapse"]').removeClass('collapsed');
//        }
//        });


// var hammertime = new Hammer(document.body, {
//     enable: true,
//     recognizers: [
//         [Hammer.Swipe, { direction: Hammer.DIRECTION_HORIZONTAL }]
//     ]
// });

// hammertime.on('swipeleft', function(ev) {
//     $('body').removeClass('open__sidebar');
// });

// hammertime.on('swiperight', function(ev) {
//     $('body').addClass('open__sidebar');
// });


$('.burg').click(function(){
    $('body').toggleClass('open__sidebar');
})

$('.content').click(function(){
    $('body').removeClass('open__sidebar');
})

$('.popup').fancybox({
    // closeExisting: true
  });



});


