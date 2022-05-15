<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>i Track</title>
    <base href="{{ \URL::to('/') }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page  -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/t.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ url('affair/index') }}"><img src="images/track (1).svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('affair/index') }}"><img src="images/logo.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">

                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/my-profile-icon-png-3 (1).jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
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
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
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
            <div id="right-sidebar" class="settings-panel">

                <div class="tab-content" id="setting-content">

                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('affair/index') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#primary" aria-expanded="false"
                            aria-controls="primary">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">primary</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="primary">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="levels.html">1</a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">2</a></li>
                                <li class="nav-item"> <a class="nav-link">3</a></li>
                                <li class="nav-item"> <a class="nav-link">4</a></li>
                                <li class="nav-item"> <a class="nav-link">5</a></li>
                                <li class="nav-item"> <a class="nav-link">6</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false"
                            aria-controls="middle">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">middle</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="middle">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="levels.html">7</a></li>
                                <li class="nav-item"><a class="nav-link">8</a></li>
                                <li class="nav-item"><a class="nav-link">9</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false"
                            aria-controls="secondary">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">secondary</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="secondary">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link">10</a></li>
                                <li class="nav-item"> <a class="nav-link">11</a></li>
                                <li class="nav-item"> <a class="nav-link">12</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('affair/create') }}">
                            <i class="icon-plus menu-icon"></i>
                            <span class="menu-title">Add Student</span>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-10 grid-margin stretch-card">

                            <div class="card">



                                <div class="card-body">

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <h3 >Basic Data</h3><br>
                           
                                    <form class="forms-sample" action="{{ url('affair/store') }}" method="post">
                                        @csrf
                                        {{-- @method('post') --}}
                                        <div class="form-group" style="padding-right: .5em;">
                                            <label for="exampleInputName"><b>Full Name</b> </label>
                                            <br>
                                                <input type="text" name="fname" value="{{ old('fname') }}" style="width: 22%; overflow: visible; border: 1px solid #CED4DA;
                                                        font-weight: 400;
                                                        font-size: 0.92rem;width: 16%;
                                                        border-radius: 4px ; padding: 10px;" placeholder="first name" />
                                            <input type="text" name="mname" value="{{ old('mname') }}" style="width: 22%;overflow: visible; border: 1px solid #CED4DA;
                                                        font-weight: 400;
                                                        font-size: 0.92rem;width: 16%;
                                                        border-radius: 4px ;  padding: 10px;" placeholder="middle name" />
                                            <input type="text" name="lname" value="{{ old('lname') }}" style="width: 22%;overflow: visible; border: 1px solid #CED4DA;
                                                        font-weight: 400;
                                                        font-size: 0.92rem;width: 16%;
                                                        border-radius: 4px ;  padding: 10px;" placeholder="last name" />
                                            <input type="text" name="surname" value="{{ old('surname') }}" style="width: 22%;overflow: visible; border: 1px solid #CED4DA;
                                                        font-weight: 400;
                                                        font-size: 0.92rem;width: 16%;
                                                        border-radius: 4px ;  padding: 10px;" placeholder="surname" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSsn"><b>Student Ssn</b></label>
                                            <input type="number"  pattern="^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$" title="Enter National ID correctlly"
                                               class="form-control" name="ssn"
                                                value="{{ old('ssn') }}" id="exampleInputSsn"
                                                placeholder="national_id" style="width: 50%;">
                                        </div>

                                        <div class="form-group" style="padding-right: .5em;">
                                            <label for="exampleInputAddress"><b> Address</b></label>
                                            <br>
                                            <input type="text" name="governorate" value="{{ old('governorate') }}"
                                                style="width: 30%; overflow: visible; border: 1px solid #CED4DA;
                                                      font-weight: 400;
                                                      font-size: 0.92rem;width: 18%;
                                                      border-radius: 4px ; padding: 10px;"
                                                placeholder=" governorate " />
                                            <input type="text" name="city" value="{{ old('city') }}" style="width: 30%;overflow: visible; border: 1px solid #CED4DA;
                                                            font-weight: 400;
                                                            font-size: 0.92rem;width: 18%;
                                                            border-radius: 4px ;  padding: 10px;" placeholder="city" />
                                            <input type="text" name="village" value="{{ old('village') }}" style="width: 30%;overflow: visible; border: 1px solid #CED4DA;
                                                                font-weight: 400;
                                                                font-size: 0.92rem;width: 18%;
                                                                border-radius: 4px ;  padding: 10px;"
                                                placeholder="village" />
                                        </div>


                                        <div class="form-group">

                                            <label for="exampleSelectGender"><b>Gender</b></label>
                                            <select class="form-control" name="gender_id" style="width: 50%;">
                                                @foreach ($sex as $data)
                                                    <option value="{{ $data->id }}">{{ $data->sex }}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputBirth1"><b>Birth Date</b></label>
                                            <input type="date" class="form-control" id="exampleInputBirthdate"
                                                name="birthdate" value="{{ old('birthdate') }}"
                                                placeholder="birthdate" style="width: 50%;">
                                        </div>

                                        <div class="form-group">

                                            <label for="exampleSelectGender"><b>Nationality</b></label>
                                            <select class="form-control" name="nationl_id" style="width: 50%;">
                                                @foreach ($from as $place)
                                                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <label for="exampleSelectReligion"><b>Religion</b></label>
                                            <select class="form-control" name="religion_id" style="width: 50%;">
                                                @foreach ($religion as $rel)
                                                    <option value="{{ $rel->id }}"> {{ $rel->relig_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleSelectSlevel">Academic Level</label>
                                              <select class="form-control" name="sublev_id" id="exampleSelectSlevel" style="width: 50%;">
                                               @foreach ($sublev as $sublev)
                                                  <option value="{{ $sublev->id }}">{{ $sublev->sublev ."  ". $sublev->level }}</option> 
                                               @endforeach 
                                              </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleSelectSlevel">Term</label>
                                                  <select class="form-control" name= "term_id" id="exampleSelectSlevel" style="width: 50%;">
                                                   @foreach ($ter as $ter)
                                                      <option value="{{ $ter->id }}">{{ $ter->term_name  }}</option> 
                                                   @endforeach 
                                                  </select>
                                                </div>

                                       <br>
                                        <hr>

                                        <h3>family data</h3>
                                        <br>


                                        <div class="form-group row">
                                            <label for="exampleInputFather_ssn"
                                                class="col-sm-2 col-form-label"><b>Father_Ssn</b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='father_ssn' value="{{ old('father_ssn') }}"
                                                    id="exampleInputFather_ssn" pattern="^([1-9]{1})([0-9]{2})([0-9]{2})([0-9]{2})([0-9]{2})[0-9]{3}([0-9]{1})[0-9]{1}$" title="Enter National ID correctlly" placeholder="father's ssn"
                                                    style="width: 50%;">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputMother_Job"
                                                class="col-sm-2 col-form-label"><b>Father_Job</b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='father_job' value="{{ old('father_job') }}"
                                                    id="exampleInputMother_Job" placeholder="father's job"
                                                    style="width: 50%;">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="exampleInputphone"
                                                class="col-sm-2 col-form-label"><b>Father_Phone</b></label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control" name='phone1' value="{{ old('phone1') }}" 
                                                   pattern="^01[0125][0-9]{8}$" title="Enter valid Phone nunber" maxlength="11" id="exampleInputphone" placeholder="father phone" style="width: 50%;">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="exampleInputName2"
                                                class="col-sm-2 col-form-label"><b>Mother_Name</b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='mother_name' value="{{ old('mother_name') }}" 
                                                    id="exampleInputName2" placeholder="mother's name"
                                                    style="width: 50%;">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputMother"
                                                class="col-sm-2 col-form-label"><b>Mother_Ssn</b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='mother_ssn' value="{{ old('mother_ssn') }}" 
                                                    id="exampleInputMother" placeholder="mother's ssn"
                                                    style="width: 50%;">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputMother1"
                                                class="col-sm-2 col-form-label"><b>Mother_Job</b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='mother_job' value="{{ old('mother_job') }}" 
                                                    id="exampleInputMother1" placeholder="mother's Job"
                                                    style="width: 50%;">
                                            </div>
                                        </div>

                                    

                                        <div class="form-group row">
                                            <label for="exampleInputMothers's presence"
                                                class="col-sm-2 col-form-label"><b>Mother Phone </b></label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control" name='phone2' value="{{ old('phone2') }}" 
                                                    id="exampleInputMothers's presence" placeholder="mother's phone"pattern="^01[0125][0-9]{8}$" title="Enter valid Phone nunber" maxlength="11"
                                                    style="width: 50%;">
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <h4>Health data</h4>
                                        <br>

                                        <div class="form-group row">
                                            <label for="exampleInputchroinc"
                                                class="col-sm-2 col-form-label"><b>Have Chroinc</b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='chronic' value="{{ old('chronic') }}" 
                                                Pattern = "^(?:Yes|No)$" id="exampleInputchronic" placeholder="Yes / No" style="width: 20%;"> <span style="font-family: Times, serif; font: 85;color: red"> * Enter (No) or (Yes) Only</span>

                                            </div>
                                        </div>

                                        <div class="form-group" style="padding-right: .5em;">
                                            <label for="exampleInputAddress"><b>Health</b></label>
                                            <br>
                                            <input type="text" name="disease_name" value="{{ old('disease_name') }}"
                                                style="width: 30%; overflow: visible; border: 1px solid #CED4DA;
                                                      font-weight: 400;
                                                      font-size: 0.92rem;width: 18%;
                                                      border-radius: 4px ; padding: 10px;"
                                                placeholder="Disease Name" /> 
                                            <input type="number" name="disease_degree" value="{{ old('disease_degree') }}" style="width: 30%;overflow: visible; border: 1px solid #CED4DA;
                                                            font-weight: 400;
                                                            font-size: 0.92rem;width: 18%;
                                                            border-radius: 4px ;  padding: 10px;" placeholder="Disease Degree" />
                                                            <span style="font-family: Times, serif; font: 85;color: red"> * Enter (No) if you hasn't</span>
                                         
                                        </div>

                                        <div class="form-group" style="padding-right: .5em;">
                                            <label for="exampleInputAddress"><b>Body</b></label>
                                            <br>
                                            <input type="number" name="height" value="{{ old('height') }}"
                                                style="width: 30%; overflow: visible; border: 1px solid #CED4DA;
                                                      font-weight: 400;
                                                      font-size: 0.92rem;width: 18%;
                                                      border-radius: 4px ; padding: 10px;"
                                                placeholder="Height :100" /> 
                                            <input type="number" name="weight" value="{{ old('weight') }}" style="width: 30%;overflow: visible; border: 1px solid #CED4DA;
                                                            font-weight: 400;
                                                            font-size: 0.92rem;width: 18%;
                                                            border-radius: 4px ;  padding: 10px;" placeholder="Weight : cm" />
                                         
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputchroinc"
                                                class="col-sm-2 col-form-label"><b>Extra Data of charactristic </b></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name='extra_data' value="{{ old('extra_data') }}" 
                                                   id="exampleInputchroinc" placeholder="Extra Data" style="width: 50%; height: 100%;">
                                            </div>
                                        </div>

                                  
                                        <div style="text-align: center">
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. Premium <a
                    href="#">Student Performance Tracking System</a> All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                    class="ti-heart text-danger ml-1"></i></span>
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
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
