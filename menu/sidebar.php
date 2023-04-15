<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="form_input.php"><img class="hide-on-med-and-down " src="../assets/images/logo/bpswarna.png" alt="materialize logo"><img class="show-on-medium-and-down hide-on-med-and-up" src="../assets/images/logo/bpswarna.png" alt="materialize logo"><span class="logo-text hide-on-med-and-down">BPS</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
      <li class="bold <?php if ($page == 'profil' || $page == 'edit_profil') {echo 'active' ;}?>"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Cards">PROFIL</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="<?php if ($page == 'profil') {echo 'active' ;}?>"><a class="<?php if ($page == 'profil') {echo 'active' ;}?>" href="profil.php" ><i class="material-icons"><?php if ($page == 'profil') {
                echo "radio_button_checked";
              } else{echo "radio_button_unchecked"; }?></i><span data-i18n="Cards">LIHAT PROFIL</span></a>
              </li>
              <li class="<?php if ($page == 'edit_profil') {echo 'active' ;}?>"><a class="<?php if ($page == 'edit_profil') {echo 'active' ;}?>" href="edit_profil.php"><i class="material-icons"><?php if ($page == 'edit_profil') {
                echo "radio_button_checked";
              } else{echo "radio_button_unchecked"; }?></i><span data-i18n="Cards Advance">EDIT PROFIL</span></a>
              </li>
            </ul>
          </div>
        </li>
      <li class="bold <?php if ($page == 'entri') {echo 'active' ;}?>"><a class="waves-effect waves-cyan <?php if ($page == 'entri') {echo 'active' ;}?> " href="form_input.php"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="Form Layouts">ENTRI</span></a></li>
        <li class="bold <?php if ($page == 'dashboard') {echo 'active' ;}?>"><a class="waves-effect waves-cyan <?php if ($page == 'dashboard') {echo 'active' ;}?> " href="dashboard.php"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Data Tables">DASHBOARD</span></a></li>
        <li class="<?php if ($page == 'ckp') {echo 'active' ;}?> bold"><a class="waves-effect waves-cyan <?php if ($page == 'ckp') {echo 'active' ;}?>" href="ckp.php"><i class="material-icons">assignment</i><span class="menu-title" data-i18n="Calendar">CAPAIAN KINERJA</span></a></li>
        <li class="bold <?php if ($page == 'penilaian') {echo 'active' ;}?>"><a id="penilaian1" class="waves-effect waves-cyan <?php if ($page == 'penilaian') {echo 'active' ;}?>" href="nilai_ckp.php" style="display:none;"><i class="material-icons">rate_review</i><span class="menu-title" data-i18n="Calendar">PENILAIAN</span></a></li>
        <li class="bold <?php if ($page == 'penilaian_pegawai' || $page == 'hasil') {echo 'active' ;}?>"><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">grade</i><span class="menu-title" data-i18n="Cards">REWARD</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li class="<?php if ($page == 'penilaian_pegawai') {echo 'active' ;}?>"><a class="<?php if ($page == 'penilaian_pegawai') {echo 'active' ;}?>" id="penilaian_pegawai" href="nilai_pegawai.php" style="display:none;"><i class="material-icons"><?php if ($page == 'penilaian_pegawai') {
                echo "radio_button_checked";
              } else{echo "radio_button_unchecked"; }?></i><span data-i18n="Cards">PENILAIAN PEGAWAI</span></a>
              </li>
              <li class="<?php if ($page == 'hasil') {echo 'active' ;}?>"><a class="<?php if ($page == 'hasil') {echo 'active' ;}?>" id="hasil_penilaian" href="hasil_penilaian.php" style="display:none;"><i class="material-icons"><?php if ($page == 'hasil') {
                echo "radio_button_checked";
              } else{echo "radio_button_unchecked"; }?></i><span data-i18n="Cards Advance">HASIL</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold <?php if ($page == 'monitoring') {echo 'active' ;}?>"><a id="monitor1" class="waves-effect waves-cyan <?php if ($page == 'monitoring') {echo 'active' ;}?>" href="monitoring.php" style="display:none;"><i class="material-icons">computer</i><span class="menu-title" data-i18n="Calendar">MONITORING</span></a></li>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>