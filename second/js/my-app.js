


jQuery(document).ready(function() {
"use strict";
  setTimeout( function () {
    $(".logo").delay(1200).animate({'top': '5%'},'slow',"easeInOutCirc");
    $(".main-nav ul > li")
      .css('opacity', '0')
      .each(function(index, item) {
        setTimeout(function() {
          $(item).delay(1200).fadeTo('slow',1,"easeInOutCirc");
        }, index*175);
    });

    $(".main-nav ul > li span")
        .css('opacity', '0')
      .each(function(index, item) {
        setTimeout(function() {
          $(item).delay(1200).animate({'left': '0px', 'opacity':1},500,"easeInOutCirc");
        }, index*175);
    });

    // maps (guest copy)
    $('.maps_menu_btn').toggle(function(){
      $('.maps_menuList').animate({'left':'0'})
    },function(){
      $('.maps_menuList').animate({'left':'-100%'})
    });

    // maps end
    $('.guest_menu_btn').toggle(function(){
      $('.guest_menuList').animate({'left':'0'})
    },
    function(){
      $('.guest_menuList').animate({'left':'-100%'})
    });
    $('.mention_setting').toggle(function(){
      $(this).children('.setting_list').fadeIn(100)
    },function(){
      $(this).children('.setting_list').fadeOut(100)
    })

    $('.setting_revice').click(function(){
      $('body').addClass('body_modal')
      $('#revice').show(300)
    })

    $('.passwd_check').click(function(){
      if( document.querySelector('.input_password').value == tmp_pwd ) {
        $('body').removeClass('body_modal')
        $('#revice').hide(200)
        $('.write_box').animate({'bottom':'0'})
      } else {
        alert('비밀번호를 다시 입력해주세요');
      }
    })
    $('.passwd_cancel').click(function(){
      $('body').removeClass('body_modal')
      $('#revice').hide(200)
    })


    $('.setting_delete').click(function(){
      $('body').addClass('body_modal')
      $('#revice2').show(200)
    })
    $('.delete_passwd_cancel').click(function(){
      $('body').removeClass('body_modal')
      $('#revice2').hide(200)
    })
    $('.passwd_check2').click(function(){
      if( document.querySelector('.input_password').value == tmp_pwd ) {
        $('#revice2').hide(200)
        $('.section_delete').show(200)
      } else {
        alert('비밀번호를 다시 입력해주세요');
      }
    })
    $('.delete_yes').click(function(){
      $('body').removeClass('body_modal')
      $('.section_delete').hide(200)
    })
    $('.delete_no').click(function(){
      $('body').removeClass('body_modal')
      $('.section_delete').hide(200)
    })


    $('.mention_text_box').children('div').toggle(function(){
      $(this).removeClass('like_empty').addClass('like_full')
    },function(){
      $(this).removeClass('like_full').addClass('like_empty')
    })
    // like num
    $('.write_mention').click(function(){
      $('.write_box').animate({'bottom':'0'})
    })
    $('.write_cancel, .submit_texts').click(function(){
      $('.write_box').animate({'bottom':'-100%'})
    })
  }, 1000);




















});
