
// 기본페이지
$('.ct_list').click(function(){
  $('.ct_list').removeClass('on')
  $(this).addClass('on')
  let idxN = $(this).index();

  $('.B_content').addClass('off')
  $('.B_content:eq('+idxN+')').removeClass('off')
  })
// pop-up
$('.create').click(function(){
  $('.create').fadeOut(200)
  $('.B_page').fadeOut(200)
  $('.enroll').fadeIn(500)
})
$('.Cancel').click(function(){
  $('.enroll').fadeOut(100)
  $('.B_page').not($('.enroll')).delay(100).fadeIn(500)
  $('.create').delay(100).fadeIn(500)
})

// 호실 관리
$('.service li a').click(function(){
  if ($(this).children('i').css('color') == 'rgb(106, 108, 111)') {
    $(this).children('i').css('color','rgb(24, 138, 226)')
  }
  else {
    $(this).children('i').css('color','rgb(106, 108, 111)')
  }
})

if ($('header').hasClass('room_header_ready')) {
  $('.room_header_ready').parent('.room').find('.pieprogress').attr('data-empty-fill', "rgba(249, 200, 81, 0.3)")
  .removeClass('text-default').removeClass('text-primary').addClass('text-warning')
}
else if ($('header').hasClass('roomo_header_in')){
  $('.room_header_in').parent('.room').find('.pieprogress').attr('data-empty-fill', "rgba(24, 138, 226, .3)")
  .removeClass('text-default').removeClass('text-warning').addClass('text-primary')
}
else {
  $('.room_header_in').parent('.room').find('.pieprogress').attr('data-empty-fill', "rgba(204, 204, 204, .3)")
  .removeClass('text-warning').removeClass('text-primary').addClass('text-default')
}

// mom list
