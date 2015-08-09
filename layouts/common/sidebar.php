<div class="sidebar">
  <div class="logopanel">
    <h1>
      <a href="dashboard.html"></a>
    </h1>
  </div>
  <div class="sidebar-inner">
    <div class="sidebar-top">
      <form action="search-result.html" method="post" class="searchform" id="search-results">
        <input type="text" class="form-control" name="keyword" placeholder="Search...">
      </form>
      <div class="userlogged clearfix">
        <i class="icon icons-faces-users-01"></i>
        <div class="user-details">
          <h4>Mike Mayers</h4>
          <div class="dropdown user-login">
            <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
            <i class="online"></i><span>Available</span><i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="busy"></i><span>Busy</span></a></li>
              <li><a  href="#"><i class="turquoise"></i><span>Invisible</span></a></li>
              <li><a href="#"><i class="away"></i><span>Away</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-title">
      Navigation 
      <div class="pull-right menu-settings">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300"> 
        <i class="icon-settings"></i>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#" id="reorder-menu" class="reorder-menu">Reorder menu</a></li>
          <li><a href="#" id="remove-menu" class="remove-menu">Remove elements</a></li>
          <li><a href="#" id="hide-top-sidebar" class="hide-top-sidebar">Hide user &amp; search</a></li>
        </ul>
      </div>
    </div>
    <?= $this->render('sidebar-nav') ?>
    <!-- SIDEBAR WIDGET FOLDERS -->
    <div class="sidebar-widgets">
      <p class="menu-title widget-title">Folders <span class="pull-right"><a href="#" class="new-folder"> <i class="icon-plus"></i></a></span></p>
      <ul class="folders">
        <li>
          <a href="#"><i class="icon-doc c-primary"></i>My documents</a> 
        </li>
        <li>
          <a href="#"><i class="icon-picture"></i>My images</a> 
        </li>
        <li><a href="#"><i class="icon-lock"></i>Secure data</a> 
        </li>
        <li class="add-folder">
          <input type="text" placeholder="Folder's name..." class="form-control input-sm">
        </li>
      </ul>
    </div>
    <div class="sidebar-footer clearfix">
      <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
      <i class="icon-settings"></i></a>
      <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
      <i class="icon-size-fullscreen"></i></a>
      <a class="pull-left" href="user-lockscreen.html" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
      <i class="icon-lock"></i></a>
      <a class="pull-left btn-effect" href="user-login-v1.html" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
      <i class="icon-power"></i></a>
    </div>
  </div>
</div>