// 호실 관리
$('.service li a').click(function(){
  if ($(this).children('i').css('color') == 'rgb(106, 108, 111)') {
    $(this).children('i').css('color','rgb(24, 138, 226)')
  }
  else {
    $(this).children('i').css('color','rgb(106, 108, 111)')
  }
})