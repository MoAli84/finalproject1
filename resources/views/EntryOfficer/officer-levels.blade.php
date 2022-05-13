<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>i Track</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/t.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .table th {
    padding : 0;
    padding-right :  0.2rem;
}

.table td {
  padding: 0.2rem 0.5rem;
  text-align: center;
}
td div input{
    border: 0px;
}
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-7 " href="indexx.html"><img src="images/track.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="indexx.html"><img src="images/tlogo.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <!-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <!-- <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div> -->
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/my-profile-icon-png-3 (1).jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
         
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
     
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="entry-officer.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false" aria-controls="primary">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">primary</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="primary">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#first-term"
                    aria-expanded="false" aria-controls="first-term"> first term </a></li>


                <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#second-term"
                    aria-expanded="false" aria-controls="second-term"> second term </a></li>


               

              </ul>
            </div>
            <div class="collapse" id="first-term">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" href="officer-levels.html"> 1 </a></li>
              <li class="nav-item"> <a class="nav-link" > 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" >3</a></li>
              <li class="nav-item"> <a class="nav-link" >4</a></li>
              <li class="nav-item"> <a class="nav-link" >5</a></li>
              <li class="nav-item"> <a class="nav-link" >6</a></li>
            </ul>
            </div>
            <div class="collapse" id="second-term">
              <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
            <ul class="nav flex-column sub-menu">

              <li class="nav-item"> <a class="nav-link" > 1 </a></li>
              <li class="nav-item"> <a class="nav-link" > 2 </a>
              </li>
              <li class="nav-item"> <a class="nav-link" >3</a></li>
              <li class="nav-item"> <a class="nav-link" >4</a></li>
              <li class="nav-item"> <a class="nav-link" >5</a></li>
              <li class="nav-item"> <a class="nav-link">6</a></li>
            </ul>
            </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false" aria-controls="middle">
                          <i class="icon-book menu-icon"></i>
                          <span class="menu-title">middle</span>
                          <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="middle">
                          <ul class="nav flex-column sub-menu">
            
                            <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#f-term"
                                aria-expanded="false" aria-controls="f-term"> first term </a></li>
            
            
                            <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#s-term"
                                aria-expanded="false" aria-controls="s-term"> second term </a></li>
            
            
                           
            
                          </ul>
                        </div>
                        <div class="collapse" id="f-term">
                          <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
                        <ul class="nav flex-column sub-menu">
            
                          <li class="nav-item"> <a class="nav-link"> 1 </a></li>
                          <li class="nav-item"> <a class="nav-link" > 2 </a>
                          </li>
                          <li class="nav-item"> <a class="nav-link" >3</a></li>
                          
                        </ul>
                        </div>
            
                        <div class="collapse" id="s-term">
                          <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
                        <ul class="nav flex-column sub-menu">
            
                          <li class="nav-item"> <a class="nav-link" > 1 </a></li>
                          <li class="nav-item"> <a class="nav-link" > 2 </a>
                          </li>
                          <li class="nav-item"> <a class="nav-link" >3</a></li>
                          
                        </ul>
                        </div>
            
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false" aria-controls="secondary">
                          <i class="icon-book menu-icon"></i>
                          <span class="menu-title">secondary</span>
                          <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="secondary">
                          <ul class="nav flex-column sub-menu">
            
                            <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#f-t"
                                aria-expanded="false" aria-controls="f-t"> first term </a></li>
            
            
                            <li class="nav-item"> <a class="nav-link" data-toggle="collapse" href="#s-t"
                                aria-expanded="false" aria-controls="s-t"> second term </a></li>
            
            
                           
            
                          </ul>
                        </div>
                        <div class="collapse" id="f-t">
                          <h5 style="text-align:center; color: #4b49ac; font-size: 16px">first term</h5>
                        <ul class="nav flex-column sub-menu">
            
                          <li class="nav-item"> <a class="nav-link" > 1 </a></li>
                          <li class="nav-item"> <a class="nav-link" > 2 </a>
                          </li>
                          <li class="nav-item"> <a class="nav-link" >3</a></li>
                          
                        </ul>
                        </div>
                        <div class="collapse" id="s-t">
                          <h5 style="text-align:center; color: #4b49ac; font-size: 16px">second-term</h5>
                        <ul class="nav flex-column sub-menu">
            
                          <li class="nav-item"> <a class="nav-link" > 1 </a></li>
                          <li class="nav-item"> <a class="nav-link" > 2 </a>
                          </li>
                          <li class="nav-item"> <a class="nav-link" >3</a></li>
                          
                        </ul>
                        </div>
            
                        
                      </li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            
           
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                    <div class="card-body">
                        <select id='se' 
                                style="margin-top: 20px; padding: 3px;
                                 -webkit-appearance: none;
                                -moz-appearance: none;
                            appearance: none;
                            height: 57px;
                            padding: 10px 22px 12px 14px;
                            text-align: center;
                            background-size: 10px;
                            transition: border-color .1s ease-in-out,box-shadow .1s ease-in-out;
                            border: 1px solid #ddd;
                            border-radius: 14px;">
                                
                                
                                <option>Choose Subject</option>
                                <option value="math1">Math</option>
                                <option value="arabic1">Arabic</option>
                                <option value="english1">English</option>
                                <option value="science1">Science</option>
                                    
                                </select>
                                <div class="b1" id="box1" style="margin-top: 25px;" >
                                    <table class="table table-bordered" style="width:100%; height: 60px;" >
                                      <!-- <thead>
                                        <tr>
                                          <td>Student Names</td>
                                          <td>First Month</td>
                                          <td>Second Month</td>
                                          <td>Third Month </td>
                                          <td>Final </td>
                                          <td>Practical</td>
                                          <td>Year's Grade</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Mohamed Ahmed  </td>
                                          <td>10</td>
                                          <td>10</td>
                                          <td>10</td>
                                          <td>4</td>
                                          <td>4</td>
                                          <td>4</td>
                                          
                                        </tr>
                                        
                                      </tbody> -->
                                      <thead>
                                        <tr>
                                          <td class="header-label">Students Names</td>
                                          <td class="header-label" >First Month</td>
                                          <td class="header-label">Second Month</td>
                                          <td class="header-label">Third Month</td>
                                          <td class="header-label">Final</td>
                                          <td class="header-label">Practical</td>
                                          <!-- <td class="header-label">Year's Grade</td> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-inputs">
                                          <td>
                                            <div><input type="string" class="col-xs-2"></div>
                                          </td>
                                          <td>
                                            <div><input type="number" class="col-xs-2"></div>
                                          </td>
                                    <td>
                                            <div><input type="number"></div>
                                    </td>
                                          <td>
                                            <div><input type="number"></div>
                                          </td>
                                          <td>
                                            <div><input type="number"></div>
                                          </td>
                                          <td>
                                            <div><input type="number"></div>
                                          </td>
                                          
                                        </tr>
                                    </tbody>
                                     
                                    <tbody>
                                        <tr class="tr-inputs">
                                          <td>
                                            <div><input type="string"></div>
                                          </td>
                                          <td>
                                            <div><input type="number"></div>
                                          </td>
                                    <td>
                                            <div><input type="number"></div>
                                    </td>
                                          <td>
                                            <div><input type="number"></div>
                                          </td>
                                          <td>
                                            <div><input type="number"></div>
                                          </td>
                                          <td>
                                            <div><input type="number"></div>
                                          </td>
                                          
                                        </tr>
                                    </tbody>
                                    </table>
                                    
                                  </div>

                      </div>
                     
                  
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div>
                    <select id="activity1"style="margin-top: 20px;
                     margin: 20px;
                    padding: 3px;
                    -webkit-appearance: none;
                   -moz-appearance: none;
               appearance: none;
               height: 57px;
               padding: 10px 22px 12px 14px;
               text-align: center;
               background-size: 10px;
               transition: border-color .1s ease-in-out,box-shadow .1s ease-in-out;
               border: 1px solid #ddd;
               border-radius: 14px;">
                      <option>Choose Activity</option>
                      <option value="football1">Football</option>
                      <option value="vollyball1">Vollyball</option>
                      <option value="tennis1">Tennis</option>
                      
                    </select>
                    <div class="b1" id="box2" style="margin-top: 25px;" >
                        <table class="table table-bordered" style="width:100%; height: 60px;" >
                          <!-- <thead>
                            <tr>
                              <td>Student Names</td>
                              <td>First Month</td>
                              <td>Second Month</td>
                              <td>Third Month </td>
                              <td>Final </td>
                              <td>Practical</td>
                              <td>Year's Grade</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Mohamed Ahmed  </td>
                              <td>10</td>
                              <td>10</td>
                              <td>10</td>
                              <td>4</td>
                              <td>4</td>
                              <td>4</td>
                              
                            </tr>
                            
                          </tbody> -->
                          <thead>
                            <tr>
                              <td class="header-label">Students Names</td>
                              <td class="header-label" >Activity</td>
                              <td class="header-label">Performance</td>
                              
                              
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-inputs">
                              <td>
                                <div><input type="string"></div>
                              </td>
                              <td>
                                <div><input type="string"></div>
                              </td>
                              <td style="display: flex; justify-content: space-between;">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" style="    margin-left: 3.75rem;">
                                            Excellent
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2"style="    margin-left: 3.75rem;">
                                            Very Good
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3"style="    margin-left: 3.75rem;">
                                         Good
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                        <label class="form-check-label" for="flexRadioDefault4" style="    margin-left: 3.75rem;">
                                         Bad
                                        </label>
                                      </div>
                                      
                                </div>
                                <div>
                                    <div class="w-75" >
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="50"></textarea>
                                      </div>
                                </div>
                                
                            </td>
                             
                              
                            </tr>
                        </tbody>
                         
                        <tbody>
                            <tr class="tr-inputs">
                              <td>
                                <div><input type="string"></div>
                              </td>
                              <td>
                                <div><input type="string"></div>
                              </td>
                        <td style="display: flex; justify-content: space-between;">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1" style="    margin-left: 3.75rem;">
                                        Excellent
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2"style="    margin-left: 3.75rem;">
                                        Very Good
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3"style="    margin-left: 3.75rem;">
                                     Good
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault4" style="    margin-left: 3.75rem;">
                                     Bad
                                    </label>
                                  </div>
                                  
                            </div>
                            <div>
                                <div class="w-75" >
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="50"></textarea>
                                  </div>
                            </div>
                            
                        </td>
                              
                              
                            </tr>
                        </tbody>
                         
                        </table>
                        
                      </div>


                  </div>
              </div>
            </div>
            <div class="col-md-12  grid-margin stretch-card">
              <div class="card">
                
                   <div class="row"> 
                       <div class="card-body">
                          <p>Behavior assessment for each subject</p>
                    <select id='s' 
                                style="margin-top: 20px;
                                margin: 20px;
                                 padding: 3px;
                                 -webkit-appearance: none;
                                -moz-appearance: none;
                            appearance: none;
                            height: 57px;
                            padding: 10px 22px 12px 14px;
                            text-align: center;
                            background-size: 10px;
                            transition: border-color .1s ease-in-out,box-shadow .1s ease-in-out;
                            border: 1px solid #ddd;
                            border-radius: 14px;">
                                
                                
                                <option>Choose Subject</option>
                                <option value="math1">Math</option>
                                <option value="arabic1">Arabic</option>
                                <option value="english1">English</option>
                                <option value="science1">Science</option>
                                    
                                </select>
                                <div class="b3" id="box3" style="margin-top: 25px;" >
                                    <table  class="table table-bordered" style="width:100%; height: 60px;">
                                      <!-- <thead>
                                        <tr>
                                          <td>Student Names</td>
                                          <td>First Month</td>
                                          <td>Second Month</td>
                                          <td>Third Month </td>
                                          <td>Final </td>
                                          <td>Practical</td>
                                          <td>Year's Grade</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Mohamed Ahmed  </td>
                                          <td>10</td>
                                          <td>10</td>
                                          <td>10</td>
                                          <td>4</td>
                                          <td>4</td>
                                          <td>4</td>
                                          
                                        </tr>
                                        
                                      </tbody> -->
                                      <thead>
                                        <tr>
                                          <td class="header-label">Students Names</td>
                                          <td class="header-label" >Performance</td>
                                          
                                          <!-- <td class="header-label">Year's Grade</td> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-inputs">
                                          <td >
                                            <div><input type="string" class="col-xs-2"></div>
                                          </td>
                                          <td style="display: flex; justify-content:space-between">
                                            <div style="margin-left: 40px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1" style="    margin-left: 3.75rem;">
                                                        Excellent
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2"style="    margin-left: 3.75rem;">
                                                        Very Good
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3"style="    margin-left: 3.75rem;">
                                                     Good
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                                    <label class="form-check-label" for="flexRadioDefault4" style="    margin-left: 3.75rem;">
                                                     Bad
                                                    </label>
                                                  </div>
                                                  
                                            </div>
                                            <div>
                                                <div class="w-100" >
                                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="50"></textarea>
                                                  </div>
                                            </div>
                                            
                                        </td>
                                    
                                          
                                       
                                        </tr>
                                    </tbody>
                                    
                                     
                                    <tbody>
                                        <tr class="tr-inputs">
                                          <td >
                                            <div><input type="string" class="col-xs-2"></div>
                                          </td>
                                          <td style="display: flex; justify-content: space-between;">
                                            <div style="margin-left: 40px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1" style="    margin-left: 3.75rem;">
                                                        Excellent
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2"style="    margin-left: 3.75rem;">
                                                        Very Good
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3"style="    margin-left: 3.75rem;">
                                                     Good
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                                    <label class="form-check-label" for="flexRadioDefault4" style="    margin-left: 3.75rem;">
                                                     Bad
                                                    </label>
                                                  </div>
                                                  
                                            </div>
                                            <div>
                                                <div class="w-100" >
                                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" cols="50"></textarea>
                                                  </div>
                                            </div>
                                            
                                        </td>
                                    
                                          
                                       
                                        </tr>
                                    </tbody>
                                    
                                    </table>
                                    
                                  </div>
                   </div>
              </div>
                  
               
              </div>
            </div>
           
          </div>
        </div>
       
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.  Premium <a href="#" >Student Performance Tracking System</a>  All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
              </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script >
       $(document).ready(function(){
   
   $("#box1").hide();
   $("#se").change(function(){
   var n=$(this).children("option:selected").val();
   if(n!='Choose Subject')
   {$("#box1").show();}
   else
   $("#box1").hide();
   })
   
   
//    $("#box1").hide();
//    $("#subject1").change(function(){
//    var m=$(this).children("option:selected").val();
//    if(m!='Choose Subject')
//    {$("#box1").show();}
//    else
//    $("#box1").hide();
//    })
   
   
//    $("#activity1").change(function(){
//    var z=$(this).children("option:selected").val();
//    if(z!='Choose Activity')
//    {$("#box2").show();}
//    else
//    $("#box2").hide();
//    })
   $("#box2").hide();
   $("#activity1").change(function(){
   var n=$(this).children("option:selected").val();
   if(n!='Choose Activity')
   {$("#box2").show();}
   else
   $("#box2").hide();
   })

   $("#box3").hide();
   $("#s").change(function(){
   var n=$(this).children("option:selected").val();
   if(n!='Choose Subject')
   {$("#box3").show();}
   else
   $("#box3").hide();
   })
   
   });
  </script>

 
</body>

</html>
