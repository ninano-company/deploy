<div id="app-customizer" class="app-customizer">
  <a href="javascript:void(0)"
    class="app-customizer-toggle app-md theme-color"
    data-toggle="class"
    data-active="false"
    data-target="#app-customizer"
    onclick="confSubmit( 'form-order' )"
    style="font-size:50px; padding-top:15px">
    <i class="zmdi zmdi-shopping-cart"></i>
  </a>
</div>
<script>
  function	confSubmit( form ){
    if ( confirm("품목 목록 페이지로 이동하시겠습니까?") ) {
      document.getElementById(form).submit();
    }
  }
</script>
