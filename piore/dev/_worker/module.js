
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
