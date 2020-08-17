<?php
  function makeRoomCard( $roomno, $status, $avatarName, $mname, $bname, $dayin, $dayout, $days){
    $statusState = "입실 중";
    $statusColor = "#188ae2";
    $statusFontColor = "white";
    $statusStateColor = "primary";
    $iconColor = $statusColor;
    $date1 = date_create( $dayin );
    $date2 = date_create( $dayout );
    $diff = date_interval_format( date_diff($date1, $date2), "%a");
    $progress_val = ( $days / $diff );

    if ($status == 23)
    {
      $statusState = "빈 방";
      $statusColor = "#fff";
      $statusFontColor = "#6a6c6f";
      $statusStateColor = "dark";

      $avatarName = "blank";
      $mname = "-";
      $bname = "-";
      $dayin = "-";
      $dayout = "-";

      $progress_val = 0;

      $iconColor = "#6a6c6f";
    }
    else if ($status == 25)
    {
      $statusState = "준비 중";
      $statusColor = "#f9c851";
      $statusFontColor = "#fff";
      $statusStateColor = "warning";

      $avatarName = "blank";
      $mname = "-";
      $bname = "-";
      $dayin = "-";
      $dayout = "-";

      $progress_val = 0;

      $iconColor = "#6a6c6f";
    }

    $html = '<div class="col-xl-3 col-lg-4 col-md-6">';
    $html.= '<div class="panel">';
    $html.= '<header class="panel-heading" style="background-color:' . $statusColor . '; color: ' . $statusFontColor . '">';
    $html.= '	<h4 class="panel-title">' . $roomno . '</h4>';
    $html.= '</header>';

    $html.= '<hr class="widget-separator">';
    $html.= '<div class="widget-body p-h-md">';
    $html.= '<div class="media">';
    $html.= '<div class="media-left">';
    $html.= '<div class="avatar avatar-lg avatar-circle">';
    $html.= '<img class="img-responsive" src="../assets/images/mom/' . $avatarName . '.jpg" alt="' . $mname . '">';
    $html.= '</div>';
    $html.= '</div>';
    $html.= '<div class="media-body">';
    $html.= '<h4 class="media-heading"><a href="profile.mom.php?id=' . $avatarName . '">' . $mname . '</a></h4>';
    $html.= '<small class="media-meta">' . $bname . '</small>';
    $html.= '<div class="pull-right">';
    $html.= '<small class="media-meta text-' . $statusStateColor . '">' . $statusState . '</small>';
    $html.= '</div>';
    $html.= '</div>';
    $html.= '</div>';

    $html.= '<hr class="widget-separator" style="margin-top:20px; margin-bottom:20px">';
    $html.= '<div class="clearfix">';
    $html.= '<div class="pull-left">';
    $html.= '<div class="pieprogress text-primary" ';
    $html.= 'data-plugin="circleProgress" ';
    if ($status == 24) {
      $html.= 'data-value="' . $progress_val . '"';
    }
    else {
      $html.= 'data-value="0" ';
    }
    $html.= 'data-thickness="10" ';
    $html.= 'data-start-angle="90" ';

    if ($status == 24) {
      $html.= 'data-empty-fill="rgba(24,138,226,.3)" ';
    }
    else {
      $html.= 'data-empty-fill="rgba(42,42,44,.3)" ';
    }
    $html.= 'data-fill="{&quot;color&quot;: &quot;#188ae2&quot;}">';

    if ($status == 24) {
      $html.= '<strong>' . $days . '일째</strong>';
    }
    else {
      // do nothing;
    }
    $html.= '</div>';
    $html.= '</div>';
    $html.= '<div class="pull-right">';
    $html.= '<table class="table">';
    $html.= '<tr><th>입실일</th><th>퇴실(예정)일</th></tr>';
    $html.= '<tr><td>' . $dayin . '</td><td>' . $dayout . '</td></tr>';
    $html.= '</table>';
    $html.= '</div>';
    $html.= '</div>';

    $html.= '<hr class="widget-separator" style="margin-top:20px; margin-bottom:20px">';
    $html.= '<div class="clearfix">';
    $html.= '<div class="icon-list-item col-md-1 col-sm-1">';
    $html.= '<i class="fa fa-lg fa-calendar" aria-hidden="true" style="color: ' . $iconColor . '"></i>';
    $html.= '</div>';
    $html.= '<div class="icon-list-item col-md-1 col-sm-1">';
    $html.= '<i class="fa fa-lg fa-commenting" aria-hidden="true" style="color: ' . $iconColor . '"></i>';
    $html.= '</div>';
    $html.= '<div class="icon-list-item col-md-1 col-sm-1">';
    $html.= '<i class="fa fa-lg fa-bed" aria-hidden="true" style="color: ' . $iconColor . '"></i>';
    $html.= '</div>';
    $html.= '<div class="icon-list-item col-md-1 col-sm-1">';
    $html.= '<i class="fa fa-lg fa-cutlery" aria-hidden="true"></i>';
    $html.= '</div>';
    $html.= '<div class="icon-list-item col-md-1 col-sm-1">';
    $html.= '<i class="fa fa-lg fa-user-plus" aria-hidden="true"></i>';
    $html.= '</div>';
    $html.= '<div class="icon-list-item col-md-1 col-sm-1">';
    if ( $status != 24 ) {
      $html.= '<a href="#" onclick="selectServiceIn(' .$roomno. ')"><i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></a>';
    } else {
      $html.= '<i class="fa fa-lg fa-sign-in" aria-hidden="true"></i>';
    }
    $html.= '</div>';
    $html.= '<div class="icon-list-item col-md-1 col-sm-1">';
    if ( $status == 24 ) {
      $html.= '<a href="./process/update-process-room.php?out=&service=' . $avatarName . '&room=' .$roomno . '"><i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></a>';
    } else {
      $html.= '<i class="fa fa-lg fa-sign-out" aria-hidden="true"></i>';
    }
    $html.= '</div>';
    $html.= '<div class="icon-list-item col-md-1 col-sm-1">';
    $html.= '<i class="fa fa-lg fa-cog" aria-hidden="true"></i>';
    $html.= '</div>';
    $html.= '</div>	<!-- actions -->';
    $html.= '</div>';
    $html.= '</div>';
    $html.= '</div>';

    return $html;
  }
?>
