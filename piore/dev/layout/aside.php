<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)"><img class="img-responsive" src="../assets/images/user/<?= $_SESSION['image'] ?>" alt="avatar"/></a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username"><?=$_SESSION['name']?></a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small><?=$_SESSION['classn']?></small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="profile.html">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>마이페이지</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="settings.html">
                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                    <span>설정</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="process/process-logout.php?logout">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
            <span class="menu-text">예약 및 조리</span>
            <span class="label label-warning menu-label">2</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="#"><span class="menu-text">상담 일정</span></a></li><!--schedule.consultant.php-->
            <li><a href="list.service.reservation.php"><span class="menu-text">상담 예약</span></a></li>
            <li><a href="list.service.ready.php"><span class="menu-text">내원 대기</span></a></li>
            <li><a href="list.service.in.php"><span class="menu-text">내실</span></a></li>
            <li><a href="list.service.out.php"><span class="menu-text">퇴실</span></a></li>
          </ul>
        </li>

        <!-- <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
            <span class="menu-text">돌봄</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="chartingIn.php?id=1"><span class="menu-text">신생아 입실차트 생성</span></a></li>
          </ul>
        </li> -->

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
            <span class="menu-text">고객관리</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="room.status.php"><span class="menu-text">호실 현황</span></a></li>
            <li><a href="list.mom.php"><span class="menu-text">산모 관리</span></a></li>
            <li><a href="list.baby.php"><span class="menu-text">신생아 관리</span></a></li>
          </ul>
        </li>

        <?php
          if ($_SESSION['class'] > 5) {
        ?>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i>
            <span class="menu-text">인사관리</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="list.emp.php"><span class="menu-text">직원 목록</span></a></li>
            <li><a href="#"><span class="menu-text">근태 관리</span></a></li>
            <li><a href="#"><span class="menu-text">보상 관리</span></a></li>
            <li><a href="#"><span class="menu-text">재증명 발급</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-inbox zmdi-hc-lg"></i>
            <span class="menu-text">자재관리</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="#"><span class="menu-text">재고 관리</span><span class="label label-primary menu-label">12</span></a></li>
            <li><a href="#"><span class="menu-text">자재 구입</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-pages zmdi-hc-lg"></i>
            <span class="menu-text">재무관리</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="#"><span class="menu-text">수입</span></a></li>
            <li><a href="#"><span class="menu-text">지출</span></a></li>
            <li><a href="#"><span class="menu-text">경영활동보고서</span></a></li>
          </ul>
        </li>
      <?php } ?>

        <!-- <li class="menu-separator"><hr></li> -->

        <!-- <li>
          <a href="documentation.html">
            <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
            <span class="menu-text">Documentation</span>
          </a>
        </li>

        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
            <span class="menu-text">Settings</span>
          </a>
        </li>

        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
            <span class="menu-text">Angular Version</span>
          </a>
        </li> -->
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
