<?php

function ft(){
    echo ' <!-- BEGIN: Footer<a class="btn btn-try-builder btn-bg-gradient-x-purple-red btn-glow white" href="https://www.themeselection.com/layout-builder/horizontal" target="_blank">Try Layout Builder</a> 
    <footer class="footer footer-static footer-light navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">'.date("Y").'  &copy; Copyright  Alliance For Community Investment  Designed by  <a class="text-bold-800 grey darken-2" href="https://www.dollarstir.com/" target="_blank">Dollarsoft Corporation</a></span>
        
      </div>
    </footer>-->
    <!-- END: Footer-->';
}


function headermenu(){
    
    echo '<!-- BEGIN: Header-->
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
           <!-- <li class="nav-item"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="creaative admin logo" src="app-assets/images/logo/logo.png">
            <h3 class="brand-text">ACIA</h3></a></li>-->
          <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-user-circle" aria-hidden="true"></i>
</a></li>
        </ul>
      </div>
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <!-- <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="dropdown nav-item mega-dropdown d-none d-md-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-2">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-link"></i> Quick Links</h6>
                    <ul>
                      <li><a class="my-1" href="chat-application.html"><i class="ft-home"></i> Chat</a></li>
                      <li><a class="my-1" href="table-bootstrap.html"><i class="ft-grid"></i> Tables</a></li>
                      <li><a class="my-1" href="chartist-charts.html"><i class="ft-bar-chart"></i> Charts</a></li>
                      <li><a class="my-1" href="gallery-grid.html"><i class="ft-sidebar"></i> Gallery</a></li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-star"></i> My Bookmarks</h6>
                    <ul class="ml-2">
                      <li class="list-style-circle"><a class="my-1" href="card-bootstrap.html">
                                                Cards</a></li>
                      <li class="list-style-circle"><a class="my-1" href="full-calender.html"> Calender</a></li>
                      <li class="list-style-circle"><a class="my-1" href="invoice-template.html"> Invoice</a></li>
                      <li class="list-style-circle"><a class="my-1" href="users-contacts.html"> Contact</a></li>
                    </ul>
                  </li>
                  <li class="col-md-3">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="ft-layers"></i> Recent Products</h6>
                    <div class="carousel slide pt-1" id="carousel-example" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="d-block w-100" src="app-assets/images/carousel/08.jpg" alt="First slide"></div>
                        <div class="carousel-item"><img class="d-block w-100" src="app-assets/images/carousel/03.jpg" alt="Second slide"></div>
                        <div class="carousel-item"><img class="d-block w-100" src="app-assets/images/carousel/01.jpg" alt="Third slide"></div>
                      </div><a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev"><span class="la la-angle-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next"><span class="la la-angle-right icon-next" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                      <h5 class="pt-1">Special title treatment</h5>
                      <p>Jelly beans sugar plum.</p>
                    </div>
                  </li>
                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-thumbs-up"></i> Get in touch</h6>
                    <form class="form form-horizontal pt-1">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputName1" type="text" placeholder="John Doe">
                              <div class="form-control-position pl-1"><i class="ft-user"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputContact1">Contact</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputContact1" type="text" placeholder="(123)-456-7890">
                              <div class="form-control-position pl-1"><i class="ft-smartphone"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" id="inputEmail1" type="email" placeholder="john@example.com">
                              <div class="form-control-position pl-1"><i class="ft-mail"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                              <div class="form-control-position pl-1"><i class="ft-message-circle"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 mb-1">
                            <button class="btn btn-danger float-right" type="button"><i class="ft-arrow-right"></i> Submit</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="dropdown d-none d-md-block mr-1"><a class="dropdown-toggle nav-link" id="apps-navbar-links" href="#" data-toggle="dropdown">
                                 Apps</a>
                <div class="dropdown-menu">
                  <div class="arrow_box"><a class="dropdown-item" href="email-application.html"><i class="ft-user"></i> Email</a><a class="dropdown-item" href="chat-application.html"><i class="ft-mail"></i> Chat</a><a class="dropdown-item" href="project-summary.html"><i class="ft-briefcase"></i> Project Summary            </a><a class="dropdown-item" href="full-calender.html"><i class="ft-calendar"></i> Calendar            </a></div>
                </div>
              </li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul> -->
            <ul class="nav navbar-nav float-right">         
              
              
             <li style="color:transparent;">AICA</li>
             <li style="color:transparent;">>ACIA</li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="'.$_SESSION['pic'].'" alt="avatar"></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="'.$_SESSION['pic'].'" alt="avatar"><span class="user-name text-bold-700 ml-1">'.$_SESSION['name'].'</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
      <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="view-farmers.php" data-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"></i><span>Farmers</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li data-menu=""><a class="dropdown-item" href="view-farmers.php" data-toggle="dropdown">View-Farmers</a>
                </li>

                <li data-menu=""><a class="dropdown-item" href="add-farmer.php" data-toggle="dropdown">Add-Farmers</a>
                </li>
               
              </div>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="fa fa-crop" aria-hidden="true"></i>
<span>Crops</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li data-menu=""><a class="dropdown-item" href="add-crop.php" data-toggle="dropdown">Add Crop</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="view-crop.php" data-toggle="dropdown">Veiw Crops </a>
                </li>
                
              </div>
            </ul>
          </li>
          
          
           <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="fa fa-map" aria-hidden="true"></i>
<span>Community</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li data-menu=""><a class="dropdown-item" href="add-community.php" data-toggle="dropdown">Add Community</a>
                </li>
               <!-- <li data-menu=""><a class="dropdown-item" href="view-crop.php" data-toggle="dropdown">Veiw Crops </a>
                </li>-->
                
              </div>
            </ul>
          </li>
          <!-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-monitor"></i><span>Templates</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vertical</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template" data-toggle="dropdown">Classic Menu</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-modern-menu-template" data-toggle="dropdown">Modern Menu</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Horizontal</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/html/ltr/horizontal-menu-template-nav" data-toggle="dropdown">Full Width</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </div>
            </ul>
          </li> -->
          <!-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-layout"></i><span>Layouts</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content Sidebar</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sidebar.html" data-toggle="dropdown">Left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sticky-sidebar.html" data-toggle="dropdown">Sticky left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sidebar.html" data-toggle="dropdown">Right sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sticky-sidebar.html" data-toggle="dropdown">Sticky right sidebar</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item" href="layout-fixed-navigation.html" data-toggle="dropdown">Fixed navigation</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="layout-fixed.html" data-toggle="dropdown">Fixed layout</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="layout-boxed.html" data-toggle="dropdown">Boxed layout</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="layout-static.html" data-toggle="dropdown">Static layout</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="layout-dark.html" data-toggle="dropdown">Navigation dark</a>
                </li>
              </div>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-zap"></i><span>Starter kit</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content sidebar</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-left-sidebar.html" data-toggle="dropdown">Left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-left-sticky-sidebar.html" data-toggle="dropdown">Sticky left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-right-sidebar.html" data-toggle="dropdown">Right sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-right-sticky-sidebar.html" data-toggle="dropdown">Sticky right sidebar</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-fixed-navigation.html" data-toggle="dropdown">Fixed navigation</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-fixed.html" data-toggle="dropdown">Fixed layout</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-boxed.html" data-toggle="dropdown">Boxed layout</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-static.html" data-toggle="dropdown">Static layout</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="https://themeselection.com/demo/chameleon-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-dark.html" data-toggle="dropdown">Navigation Dark</a>
                </li>
              </div>
            </ul>
          </li> -->
          <!-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-aperture"></i><span>UI</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="content-grid.html" data-toggle="dropdown">Grid</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="content-typography.html" data-toggle="dropdown">Typography</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="content-text-utilities.html" data-toggle="dropdown">Text utilities</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="content-syntax-highlighter.html" data-toggle="dropdown">Syntax highlighter</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="content-helper-classes.html" data-toggle="dropdown">Helper classes</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Color Palette</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="color-palette-primary.html" data-toggle="dropdown">Primary palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-danger.html" data-toggle="dropdown">Danger palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-success.html" data-toggle="dropdown">Success palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-warning.html" data-toggle="dropdown">Warning palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-info.html" data-toggle="dropdown">Info palette</a>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-red.html" data-toggle="dropdown">Red palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-pink.html" data-toggle="dropdown">Pink palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-purple.html" data-toggle="dropdown">Purple palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-blue.html" data-toggle="dropdown">Blue palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-cyan.html" data-toggle="dropdown">Cyan palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-teal.html" data-toggle="dropdown">Teal palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-yellow.html" data-toggle="dropdown">Yellow palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-amber.html" data-toggle="dropdown">Amber palette</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="color-palette-blue-grey.html" data-toggle="dropdown">Blue Grey palette</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item" href="card-bootstrap.html" data-toggle="dropdown">Bootstrap Cards</a>
                </li>
                <li class="active" data-menu=""><a class="dropdown-item" href="card-advanced.html" data-toggle="dropdown">Advanced Cards</a>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Icons</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="icons-feather.html" data-toggle="dropdown">Feather</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="icons-line-awesome.html" data-toggle="dropdown">Line Awesome</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="icons-simple-line-icons.html" data-toggle="dropdown">Simple Line Icons</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item" href="animation.html" data-toggle="dropdown">Animation</a>
                </li>
              </div>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-box"></i><span>Components</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Bootstrap</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="component-alerts.html" data-toggle="dropdown">Alerts</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-buttons.html" data-toggle="dropdown">Buttons</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-carousel.html" data-toggle="dropdown">Carousel</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-collapse.html" data-toggle="dropdown">Collapse</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html" data-toggle="dropdown">Dropdowns</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-list-group.html" data-toggle="dropdown">List Group</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-modals.html" data-toggle="dropdown">Modals</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-pagination.html" data-toggle="dropdown">Pagination</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-navs-component.html" data-toggle="dropdown">Navs</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html" data-toggle="dropdown">Tabs</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-pills-component.html" data-toggle="dropdown">Pills</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-tooltips.html" data-toggle="dropdown">Tooltips</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-popovers.html" data-toggle="dropdown">Popovers</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-badges.html" data-toggle="dropdown">Badges</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html" data-toggle="dropdown">Pill Badges</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-progress.html" data-toggle="dropdown">Progress</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-media-objects.html" data-toggle="dropdown">Media Objects</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-spinner.html" data-toggle="dropdown">Spinner</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-toast.html" data-toggle="dropdown">Toast</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Extra</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="ex-component-sweet-alerts.html" data-toggle="dropdown">Sweet Alerts</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="ex-component-toastr.html" data-toggle="dropdown">Toastr</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="ex-component-ratings.html" data-toggle="dropdown">Ratings</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="ex-component-tour.html" data-toggle="dropdown">Tour</a>
                      </li>
                      <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Editors</a>
                        <ul class="dropdown-menu">
                          <div class="arrow_box">
                            <li data-menu=""><a class="dropdown-item" href="editor-ckeditor.html" data-toggle="dropdown">CKEditor</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="editor-tinymce.html" data-toggle="dropdown">TinyMCE</a>
                            </li>
                          </div>
                        </ul>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="pickers-date-%26-time-picker.html" data-toggle="dropdown">Date &amp; Time Picker</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="block-ui.html" data-toggle="dropdown">Block UI</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="file-uploader-dropzone.html" data-toggle="dropdown">File Uploader</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </div>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-edit"></i><span>Forms</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Form Elements</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="form-inputs.html" data-toggle="dropdown">Form Inputs</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-switch.html" data-toggle="dropdown">Switch</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-select2.html" data-toggle="dropdown">Select2</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-checkboxes-radios.html" data-toggle="dropdown">Checkboxes &amp; Radios</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-tags-input.html" data-toggle="dropdown">Tags Input</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle="dropdown">Validation</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-extended-inputs.html" data-toggle="dropdown">Extended Inputs</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Form Layouts</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="form-layout-basic.html" data-toggle="dropdown">Basic Forms</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-layout-horizontal.html" data-toggle="dropdown">Horizontal Forms</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-layout-hidden-labels.html" data-toggle="dropdown">Hidden Labels</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li data-menu=""><a class="dropdown-item" href="form-wizard.html" data-toggle="dropdown">Form Wizard</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="form-repeater.html" data-toggle="dropdown">Form Repeater</a>
                </li>
              </div>
            </ul>
          </li> -->
          <!-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-grid"></i><span>Tables</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li data-menu=""><a class="dropdown-item" href="table-bootstrap.html" data-toggle="dropdown">Bootstrap Tables</a>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">DataTables</a>
                  <ul class="dropdown-menu">
                    <div class="arrow_box">
                      <li data-menu=""><a class="dropdown-item" href="dt-basic-initialization.html" data-toggle="dropdown">Basic Initialisation</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-styling.html" data-toggle="dropdown">Styling</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-data-sources.html" data-toggle="dropdown">Data Sources</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-advanced-initialization.html" data-toggle="dropdown">Advanced initialisation</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-api.html" data-toggle="dropdown">API</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </div>
            </ul>
          </li> -->
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="fa fa-plus-square" aria-hidden="true"></i><span>Records</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li data-menu=""><a class="dropdown-item" href="icr.php" data-toggle="dropdown">Farmer\'s input Credit Records</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="cor.php" data-toggle="dropdown">Harvest and Credit Offset Record</a>
                </li>

                <li data-menu=""><a class="dropdown-item" href="add-sales.php" data-toggle="dropdown">Farmer\'s Sales Record</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="mri.php" data-toggle="dropdown">Register Of Major Risk And Incidents</a>
                </li>
                
              </div>
            </ul>
          </li>
         
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->';
}



function login(){
    include 'db.php';

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $pass = md5($password);
    

    if (empty($email)) {

        echo'<div id="mess" class="alert alert-danger mb-2" role="alert">
        <strong>Oops!</strong>pleasse enter your  email 
    </div>';

       
    }
    elseif (empty($password)) {
        
        echo'<div id="mess" class="alert alert-danger mb-2" role="alert">
        <strong>Oops!</strong>pleasse enter your  password 
    </div>';
    }

    else {
        $ch = mysqli_query($conn,"SELECT * FROM super WHERE email='$email'  AND password='$pass' ");

        $rc = mysqli_fetch_array($ch);

        if ($rc) {


             $_SESSION['id'] = $rc['id'];
             $_SESSION['pic'] = $rc['pic'];
             $_SESSION['name'] = $rc['name'];

            echo'<div id="mess" class="alert alert-success mb-2" role="alert">
        <strong>Login Successful  ! </strong> redirecting.... <img src="loading.gif" style="width:20px;height:20px;">
    </div>
    
    <script>
            setTimeout(()=>{

                window.location="index.php";

            },6000);
    </script>
    
    ';
        }

        else {
            echo'<div id="mess" class="alert alert-danger mb-2" role="alert">
            <strong>Oops!</strong>Failed to login please check login details 
        </div>';
        }
    }

}

function recoverpassword(){
    include 'db.php';
    $email = $_POST['email'];
    $vd = mysqli_query($conn,"SELECT * FROM super WHERE email='$email' ");

    if ($rc=mysqli_fetch_array($vd)) {
        echo'<div id="mess" class="alert alert-success mb-2" role="alert">
        <strong> Successful  ! </strong> Password Reset Link has been sent to your email address
         </div>
    
   
    
            ';

       
    }
    else {
        echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
        <strong> Sorry  ! </strong> provided email is not in records
         </div>';
    }
}



function allfarmers(){
  include "db.php";
  $getf = mysqli_query($conn,"SELECT * FROM farmers ");
  while ($rfam= mysqli_fetch_array($getf)) {


      $name = $rfam['fname'].' '.$rfam['mname'].' '.$rfam['lname'];
      $regno =$rfam['regno'];
      $contact = $rfam['contact'];
      $age =$rfam['age'];
      $edulevel = $rfam['edulevel'];
      $mstatus = $rfam['mstatus'];
      $hsize = $rfam['hsize'];
      $pic = $rfam['pic'];
      $community =$rfam['community'];
      $district = $rfam['district'];
      $fbo =$rfam['fbo'];
      $dateadded = $rfam['dateadded'];
      $id= $rfam['id'];

      echo '<tr>
      <td>'.$name.'</td>
      <td>'.$regno.'</td>
      <td>'.$contact.'</td>
      <td>'.$age.'</td>
      <td>'.$edulevel.'</td>
      <td>'.$mstatus.'</td>
      <td>'.$hsize.'</td>
      <td><img src="'.$pic.'" style="width:100px;height:100px;"</td>
      <td>'.$community.'</td>
      <td>'.$district.'</td>
      <td>'.$fbo.'</td>
      <td>'.$dateadded.'</td>
      <td><a href="delfam.php?id='.$id.'" class="btn btn-danger">Delete</a></td>
      
  </tr>';
      
  }
    
}

function allcrops(){

  


  include "db.php";
    $getf = mysqli_query($conn,"SELECT * FROM crop ");
    while ($rfam= mysqli_fetch_array($getf)) {


        $name = $rfam['name'];
        $ac =$rfam['ac'];
        $sp = $rfam['sp'];
        $remarks = $rfam['remarks'];
        $year = $rfam['year'];
        $fid = $rfam['fid'];
        $select =mysqli_query($conn,"SELECT * FROM farmers WHERE id='$fid' ");
        $rfm = mysqli_fetch_array($select);
        $farmer = $rfm['fname'].' '.$rfm['mname'].' '.$rfm['lname'];
      
        
        echo '<tr>
        <td>'.$name.'</td>
        <td>'.$ac.'</td>
        <td>'.$sp.'</td>
        <td>'.$remarks.'</td>
        <td>'.$year.'</td>
        <td>'.$farmer.'</td>

       
        
    </tr>';
        
    }



}


function addfarmer(){
  include 'db.php';

  extract($_POST);

  if(empty($fname)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Enter First Name
     </div>';

  }
  elseif(empty($lname)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Enter last Name
     </div>';

  }

  elseif(empty($gender)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Please select gender
     </div>';

  }

  elseif(empty($contact)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Enter phone number
     </div>';

  }

  elseif(empty($age)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Select Age Range
     </div>';

  }
  elseif(empty($edulevel)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Select level of educational
     </div>';

  }

  elseif(empty($mstatus)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Select Marital Status
     </div>';

  }


  elseif(empty($district)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
        Please select district
     </div>';

  }
  elseif(empty($community)){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Select Community
     </div>';

  }

  elseif($_FILES['image']['name']==""){

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Please choose passport photo
     </div>';

  }



  else{
     $fileinfo = PATHINFO($_FILES['image']['name']);
     $newfilename = $fileinfo['filename']."-".time().'.'.$fileinfo['extension'];
     $pic = "upload/".$newfilename;
     $dateadded = date("jS F, Y");

     $veri = mysqli_query($conn,"SELECT contact FROM  farmers WHERE  contact ='$contact' ");

     $row = mysqli_fetch_array($veri);

     if($row >=1){

      echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
      Sorry  Farmer already added
        </div>';

     }
     else {
      $ins =mysqli_query($conn,"INSERT INTO farmers(fname,mname,lname,gender,contact,regno,age,edulevel,mstatus,hsize,community,district,fbo,dateadded,pic) VALUES ('$fname','$mname','$lname','$gender','$contact','$regno','$age','$edulevel','$mstatus','$hsize','$community','$district','$fbo','$dateadded','$pic')");

            if ($ins) {
      
            move_uploaded_file($_FILES['image']['tmp_name'],$pic);
      
            echo '<div id="mess" class="alert alert-success mb-2" role="alert">
                Farmer Added Successfuly
            </div>
            
            <script>

            setTimeout(()=>{
              window.location="add-farmer.php";

            },3000)
              
            </script>
            
            '
            
            
            ;
      
              
            }
            else {
            echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
            Something Went wrong
              </div>';
            }
     }

     

      
  }

  
  
  



}





function popcommunity(){

  include 'db.php';
  $com = mysqli_query($conn,"SELECT * FROM community");

  while ($cc = mysqli_fetch_array($com)) {

    $comname = $cc['comname'];
    echo '<option value="'.$comname.'">'.$comname.'</option>';
    # code...
  }

}



function addcommunity(){
  include 'db.php';

  $community= $_POST['community'];

  if (empty($community)) {


    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
            Please enter name of community
              </div>';
  }

  else {
    $ins = mysqli_query($conn,"INSERT INTO community(comname) VALUES ('$community')");
    if ($ins) {


      echo '<div id="mess" class="alert alert-success mb-2" role="alert">
        New Community added Successfuly
        </div>';
    }
    else {
          
      echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
        Failed to add community
          </div>';
      }

  }
}



function addcrop(){
   include 'db.php';
   extract($_POST);

   if (empty($name)) {


    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
            Please enter name of Crop Cultivated
              </div>';
  }
  elseif (empty($ac)) {

    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Please enter acreage
      </div>';
    # code...
  }
  elseif (empty($sp)) {
    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
    Please select whether supported with partner
      </div>';
  }

  else {
    $year= date('Y');
    $ins = mysqli_query($conn,"INSERT  INTO crop (name,ac,sp,remarks,year,fid) VALUES('$name','$ac','$sp','$remarks','$year','$farmer')");

        if ($ins){
          echo '<div id="mess" class="alert alert-success mb-2" role="alert">
            Crop added Successfuly
            </div>';

        }

        else {
          
        echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
          Failed to add Crop
            </div>';
        }
  }

   
}

function popfarmer(){
  include 'db.php';

  $gef = mysqli_query($conn,"SELECT * FROM farmers");

  while ($rf =mysqli_fetch_array($gef)) {

    $farmer= $rf['fname'].' '.$rf['mname'].''.$lname;
    $fid= $rf['id'];
    echo '<option value="'.$fid.'">'.$farmer.'</option>';
    # code...
  }
}

function popcrop  (){
  include 'db.php';

  $gef = mysqli_query($conn,"SELECT * FROM crop");

  while ($rf =mysqli_fetch_array($gef)) {

    $crop= $rf['name'];
    $cropid= $rf['id'];
    echo '<option value="'.$cropid.'">'.$crop.'</option>';
    # code...
  }
}


function addsale(){
  include 'db.php';
  extract($_POST);
  $dateadded = date("jS F, Y");

  $ins = mysqli_query($conn,"INSERT INTO sales (crop,fid,dos,q1,up1,q2,up2,q3,up3,q4,up4,totalbags,totalprice,dateadded) VALUES ('$crop','$fid','$dos','$q1','$up1','$q2','$up2','$q3','$up3','$q4','$up4','$totalbags','$totalprice','$dateadded') ");
  if ($ins) {

    echo '<div id="mess" class="alert alert-success mb-2" role="alert">
     Record added Successfuly
    </div>';
    # code...
  }

  else {
          
    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
      Failed to add record
        </div>';
    }

}

function addcor(){

  include "db.php";
  extract($_POST);

  $ins = mysqli_query($conn,"INSERT INTO cor (cs,cropid,farmer,quant1,quant2,outbalance) VALUES ('$cs','$cropid','$farmer','$quant1','$quant2','$outbalance')");

  if ($ins) {

    echo '<div id="mess" class="alert alert-success mb-2" role="alert">
     Record added Successfuly
    </div>';
    # code...
  }

  else {
          
    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
      Failed to add record
        </div>';
    }
}



function addrisk(){
  include 'db.php';
  extract($_POST);
  $year =date("Y");

  $ins = mysqli_query($conn,"INSERT INTO mri(los,loy,dr,los2,loy2,dr2,los3,loy3,dr3,los4,loy4,dr4,los5,loy5,dr5,los6,loy6,dr6,los7,loy7,dr7,yad) VALUES ('$los','$loy','$dr','$los2','$loy2','$dr2','$los3','$loy3','$dr3','$los4','$loy4','$dr4','$los5','$loy5','$dr5','$los6','$loy6','$dr6','$los7','$loy7','$dr7','$year')");
  if ($ins) {

    echo '<div id="mess" class="alert alert-success mb-2" role="alert">
     Record added Successfuly
    </div>';
    # code...
  }

  else {
          
    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
      Failed to add record
        </div>';
    }


}


function addicr(){
  include 'db.php';

  extract($_POST);
  $year =date("Y");

  $ins = mysqli_query($conn,"INSERT INTO icr (ps,fid,cropid,quant,unit,totalcost,dr,ps2,quant2,unit2,totalcost2,dr2,ps3,quant3,unit3,totalcost3,dr3,ps4,quant4,unit4,totalcost4,dr4,ps5,quant5,unit5,totalcost5,dr5,ps6,quant6,unit6,totalcost6,dr6,ps7,quant7,unit7,totalcost7,dr7,ps8,quant8,unit8,totalprice8,dr8,yad) VALUES ('$ps','$fid','$cropid','$quant','$unit','$totalcost','$dr','$ps2','$quant2','$unit2','$totalcost2','$dr2','$ps3','$quant3','$unit3','$totalcost3','$dr3','$ps4','$quant4','$unit4','$totalcost4','$dr4','$ps5','$quant5','$unit5','$totalcost5','$dr5','$ps6','$quant6','$unit6','$totalcost6','$dr6','$ps7','$quant7','$unit7','$totalcost7','$dr7','$ps8','$quant8','$unit8','$totalcost8','$dr8','$year')");
  if ($ins) {

    echo '<div id="mess" class="alert alert-success mb-2" role="alert">
     Record added Successfuly
    </div>';
    
  }

  else {
          
    echo '<div id="mess" class="alert alert-danger mb-2" role="alert">
      Failed to add record
        </div>';
    }

  


}

?>