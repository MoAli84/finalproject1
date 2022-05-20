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
                <a class="navbar-brand brand-logo mr-5" href="{{ url('affair/index') }}"><img
                        src="images/track (1).svg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ url('affair/index') }}"><img src="images/logo.svg"
                        alt="logo" /></a>
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
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">primary</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="primary">

                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link">3</a></li>
                                <li class="nav-item"> <a class="nav-link">4</a></li>
                                <li class="nav-item"> <a class="nav-link">5</a></li>
                                <li class="nav-item"> <a class="nav-link">6</a></li>
                            </ul>
                        </div>



                    </li>
                    <!-- ************************************************************************** -->
                    <!-- **************************************************************************************** -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#middle" aria-expanded="false"
                            aria-controls="middle">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">middle</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="middle">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link">3</a></li>

                            </ul>
                        </div>

                    </li>
                    <!-- *************************************************************************** -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#secondary" aria-expanded="false"
                            aria-controls="secondary">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">secondary</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="secondary">
                            <ul class="nav flex-column sub-menu">

                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 1 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html"> 2 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="levels.html">3</a></li>

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

                                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                                    <h4 class="card-title">Basic Data</h4>
                                    <!-- <p class="card-description">
                      Basic form layout
                    </p> -->
                                    <form class="forms-sample" action="{{ ' affair/update' }}" method="POST">
                                        @csrf
                                        {{-- @method('post') --}}


                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <input type="hidden" name="id" value="{{ $data->id }}">

                                        <div class="form-group row" style="padding-right: .5em;">
                                            <label for="exampleInputName" class="col-sm-2 col-form-label">Name </label>
                                            <br>
                                            <input type="text" name="fname" value="{{ $data->fname }}" style="width: 22%; overflow: visible; border: 1px solid #CED4DA;
                           font-weight: 400;
                           font-size: 0.92rem;width: 16%;
                           border-radius: 4px ; padding: 10px;" placeholder="First Name" />
                                            <input type="text" name="mname" value="{{ $data->mname }}" style="width: 22%;overflow: visible; border: 1px solid #CED4DA;
                           font-weight: 400;
                           font-size: 0.92rem;width: 16%;
                           border-radius: 4px ;  padding: 10px;" placeholder="Middle Name" />
                                            <input type="text" name="lname" value="{{ $data->lname }}" style="width: 22%;overflow: visible; border: 1px solid #CED4DA;
                           font-weight: 400;
                           font-size: 0.92rem;width: 16%;
                           border-radius: 4px ;  padding: 10px;" placeholder="Last Name" />
                                            <input type="text" name="surname" value="{{ $data->surname }}" style="width: 22%;overflow: visible; border: 1px solid #CED4DA;
                           font-weight: 400;
                           font-size: 0.92rem;width: 16%;
                           border-radius: 4px ;  padding: 10px;" placeholder="SurName" />
                                            {{-- value="{{ $addr->governorate }}"
                           value="{{ $addr->city  }}"
                           value="{{ $addr->village  }}" --}}
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputSsn" class="col-sm-2 col-form-label">Ssn</label>
                                            <input type="number" class="form-control" name="ssn"
                                                value="{{ $data->ssn }}" id="exampleInputSsn" placeholder="Ssn"
                                                style="width: 50%;" minlength="13" maxlength="15">
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleSelectReligion" class="col-sm-2 col-form-label">Governorate</label>
                                            <select class="form-control" name="governorate_id" style="width: 50%;">
                                                @foreach ($govern as $info)
                                                    <option value="{{ $info->id }}"
                                                        @if ($data->governorate_id == $info->id) selected @endif>
                                                        {{ $info->gov_name }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleSelectReligion" class="col-sm-2 col-form-label">CIty</label>
                                            <select class="form-control" name="city_id" style="width: 50%;">
                                                @foreach ($city as $info)
                                                    <option value="{{ $info->id }}"
                                                        @if ($data->city_id == $info->id) selected @endif>
                                                        {{ $info->city_name }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleSelectReligion" class="col-sm-2 col-form-label">District</label>
                                            <select class="form-control" name="district_id" style="width: 50%;">
                                                @foreach ($district as $info)
                                                    <option value="{{ $info->id }}"
                                                        @if ($data->district_id == $info->id) selected @endif>
                                                        {{ $info->district_name }}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleSelectGender" class="col-sm-2 col-form-label">Gender</label>
                                            <select class="form-control" name="gender_id" style="width: 50%;">
                                                @foreach ($sex as $born)
                                                    <option value="{{ $born->id }}"
                                                        @if ($data->gender_id == $born->id) selected @endif>
                                                        {{ $born->sex }}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputBirth1" class="col-sm-2 col-form-label">Birth Date</label>
                                            <input type="date" class="form-control" id="exampleInputBirthdate"
                                                name="birthdate" value="{{ $data->birthdate }}"
                                                placeholder="Birthdate" style="width: 50%;">
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleSelectGender" class="col-sm-2 col-form-label">Nationality</label>
                                            <select class="form-control" name="nationl_id" style="width: 50%;">
                                                @foreach ($from as $where)
                                                    <option value="{{ $where->id }}"
                                                        @if ($data->nationl_id == $where->id) selected @endif>
                                                        {{ $where->nation_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group row">
                                            <label for="exampleSelectReligion" class="col-sm-2 col-form-label">Religion</label>
                                            <select class="form-control" name="religion_id" style="width: 50%;">
                                                @foreach ($religion as $info)
                                                    <option value="{{ $info->id }}"
                                                        @if ($data->religion_id == $info->id) selected @endif>
                                                        {{ $info->relig_name }}</option>
                                                @endforeach


                                            </select>
                                        </div>


                                        <div class="form-group row">
                                            <label for="exampleSelectSlevel" class="col-sm-2 col-form-label">Academic Level</label>
                                            <select class="form-control" name=sublev_id id="exampleSelectSlevel"
                                                style="width: 50%;">

                                                @foreach ($sub as $s)
                                                    <option value="{{ $s->id }}"
                                                        @if ($data->sublev_id == $s->id) selected @endif>
                                                        {{ $s->sublev . '  ' . $s->level }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputElevel" class="col-sm-2 col-form-label">Term</label>
                                            <select class="form-control" name="term_id" id="exampleInputElevel"
                                                style="width: 50%;">
                                                @foreach ($ter as $termm)
                                                    <option value="{{ $termm->id }}"
                                                        @if ($data->term_id == $termm->id) selected @endif>
                                                        {{ $termm->term_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>





                                        <br>
                                        <hr>
                                        <h3>
                                            <h4>family data</h4>
                                            <br>


                                            <div class="form-group row">
                                                <label for="exampleInputfssn" class="col-sm-2 col-form-label">Father Ssn</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" name="father_ssn"
                                                    value="{{ $data->father_ssn }}" id="exampleInputfssn"
                                                    placeholder="father ssn" style="width: 50%;">
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputfjob" class="col-sm-2 col-form-label">Father Job</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" name="father_job"
                                                    value="{{ $data->father_job }}" id="exampleInputfjob"
                                                    placeholder="father job" style="width: 50%;">
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputfphone" class="col-sm-2 col-form-label">Father Phone</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" name="father_phone"
                                                    value="{{ $data->father_phone }}" id="exampleInputfphone"
                                                    placeholder="father phone" style="width: 50%;">
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputmname" class="col-sm-2 col-form-label">Mother Name</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" name="mother_name"
                                                    value="{{ $data->mother_name }}" id="exampleInputmname"
                                                    placeholder="mother name" style="width: 50%;">
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputmssn" class="col-sm-2 col-form-label">Mother Ssn</label>
                                                <div class="col-sm-9">
                                                <input type="number" class="form-control" name="mother_ssn"
                                                    value="{{ $data->mother_ssn }}" id="exampleInputmssn"
                                                    placeholder="mother ssn" style="width: 50%;">
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputmjob" class="col-sm-2 col-form-label">Mother Job</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" name="mother_job"
                                                    value="{{ $data->mother_job }}" id="exampleInputmjob"
                                                    placeholder="mother job" style="width: 50%;">
                                                 </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputmphone" class="col-sm-2 col-form-label">Mother Phone</label>
                                                <div class="col-sm-9">

                                                <input type="number" class="form-control" name="mother_phone"
                                                    value="{{ $data->mother_phone }}" id="example
                                                 </div>   Inputmphone"
                                                    placeholder="mother phone" style="width: 50%;">
                                            </div>
                                        </div><hr>


                                            <br>
                                            <h3 style="font-weight: bold; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;color:brown; background-color: #CED4DA; padding: 10px">Health data</h3>
                                            <br>

                                            <div class="form-group row">
                                                <label for="exampleInputchroinc" class="col-sm-2 col-form-label"><b>Have Chroinc</b></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name='chronic' @foreach ($disease as $dis) value=" {{ $dis->chronic }}" @endforeach
                                                    Pattern = "^(?:Yes|No)$" id="exampleInputchronic" placeholder="Yes / No" style="width: 20%;">
                                                     <span style="font-family: Times, serif; font: 85;color: red"> * Enter (No) or (Yes) Only</span>

                                                </div>
                                            </div>

                                            <div class="form-group row" >
                                                <label for="exampleInputAddress" class="col-sm-2 col-form-label"><b>Health</b></label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="disease_name"  @foreach ($disease as $dis) value="{{ $dis->disease_name }}" @endforeach
                                                     class="form-control" style="width: 20%; overflow: visible; border: 1px solid #CED4DA;
                                                            font-weight: 400;
                                                            font-size: 0.92rem;
                                                            border-radius: 4px ; padding: 10px;"
                                                        placeholder="Disease Name" />
                                                    <input type="number" name="disease_degree" @foreach ($disease as $dis) value="{{ $dis->disease_degree }}" @endforeach
                                                    class="form-control" style="width: 20%;overflow: visible; border: 1px solid #CED4DA;
                                                                    font-weight: 400;
                                                                    font-size: 0.92rem;
                                                                    border-radius: 4px ;  padding: 10px;" placeholder="Disease Degree" />
                                                                    <span style="font-family: Times, serif; font: 85;color: red">* Enter (No) if you hasn't</span>
                                                </div>
                                            </div>

                                            <div class="form-group row" >
                                                <label for="exampleInputAddress" class="col-sm-2 col-form-label"><b>Body</b></label>
                                                <div class="col-sm-9">
                                                <input type="number" name="height"  @foreach ($disease as $dis) value="{{ $dis->height }}" @endforeach class="form-control"
                                                    style=" overflow: visible; border: 1px solid #CED4DA;
                                                          font-weight: 400;
                                                          font-size: 0.92rem;width: 19%;
                                                          border-radius: 4px ; padding: 10px;"
                                                    placeholder="Height :100" />
                                                <input type="number" name="weight"  @foreach ($disease as $dis) value="{{ $dis->weight }}" @endforeach class="form-control"
                                                    style="overflow: visible; border: 1px solid #CED4DA;
                                                                font-weight: 400;
                                                                font-size: 0.92rem;width: 19%;
                                                                border-radius: 4px ;  padding: 10px;" placeholder="Weight : cm" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="exampleInputchroinc" class="col-sm-2 col-form-label"><b>Extra Data of charactristic </b></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name='extra_data' @foreach ($disease as $dis) value="{{ $dis->extra_data }}" @endforeach
                                                       id="exampleInputchroinc" placeholder="Extra Data" style="width: 50%; ">
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
