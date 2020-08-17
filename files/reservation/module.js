
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
  $('.B_page').fadeIn(500)
  $('.create').fadeIn(500)
  $('.enroll').fadeOut(200)
})
