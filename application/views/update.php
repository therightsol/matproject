<?php include 'includes/header.inc';?>
<?php include 'includes/headerupdate.inc';?>
<?php include 'includes/topbar.inc';?>
<?php include 'includes/navigation.inc';?>

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide nav-left-hide nav-left-start-hide  nav-top-fixed      responsive    clearfix" data-active="pages "  data-smooth-scrolling="1">
<div class="vd_body">
    <!-- Header Start -->

    <!-- Header Ends -->
    <div>
        <div>
            <div>
                <div>


                        <div class="vd_title-section clearfix">
                            <div class="vd_panel-header">
                                <h1>User Profile Form</h1>
                                <small class="subtitle">Form for user profile</small> </div>
                        </div>
                        <div class="vd_content-section clearfix">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel widget light-widget">
                                        <div class="panel-heading no-title"> </div>
                                        <form class="form-horizontal" action="#" role="form">
                                            <div  class="panel-body">
                                                <h2 class="mgbt-xs-20"> Profile: <span class="font-semibold">Dummy Test</span> </h2>
                                                <br/>
                                                <div class="row">
                                                    <div class="col-sm-3 mgbt-xs-20">
                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="<?php echo $root."assets/";?>update/img/avatar/big.jpg"> </div>
                                                                <div class="form-img-action text-center mgbt-xs-20"> <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload</a> </div>
                                                                <br/>
                                                                <div>
                                                                    <table class="table table-striped table-hover">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td style="width:60%;">Status</td>
                                                                            <td><span class="label label-success">Active</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>User Rating</td>
                                                                            <td><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Member Since</td>
                                                                            <td> Jan 07, 2016 </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <h3 class="mgbt-xs-15">Account Setting</h3>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Email</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="email"  placeholder="email@yourcompany.com">
                                                                    </div>
                                                                    <!-- col-xs-12 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon  dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Username</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="text"  placeholder="username">
                                                                    </div>
                                                                    <!-- col-xs-9 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->

                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Password</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="password" class="width-40"  placeholder="password">
                                                                    </div>
                                                                    <!-- col-xs-12 -->
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Confirm Password</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="password" class="width-40"  placeholder="password">
                                                                    </div>
                                                                    <!-- col-xs-12 -->
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <hr />
                                                        <h3 class="mgbt-xs-15">Profile Setting</h3>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">First Name</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="text"  placeholder="first name">
                                                                    </div>
                                                                    <!-- col-xs-9 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Last Name</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="text" placeholder="last name">
                                                                    </div>
                                                                    <!-- col-xs-9 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-lock fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Gender</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                  <span class="vd_radio radio-info">
                                    <input type="radio" checked="" value="option3" id="optionsRadios3" name="optionsRadios2">
                                    <label for="optionsRadios3"> Male </label>
                                  </span>
                                  <span class="vd_radio  radio-danger" >

                                    <input type="radio" value="option4" id="optionsRadios4" name="optionsRadios2">
                                    <label for="optionsRadios4"> Female </label>
                                  </span>
                                                                        <span class="vd_radio  radio-success" >

                                    <input type="radio" value="option4" id="optionsRadios5" name="optionsRadios2">
                                    <label for="optionsRadios5"> Shemale </label>
                                  </span>


                                                                    </div>
                                                                    <!-- col-xs-9 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-lock fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Birthday</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="text" id="datepicker-normal" class="width-40" />
                                                                    </div>
                                                                    <!-- col-xs-12 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Marital Status</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <select class="width-40">
                                                                            <option>Single</option>
                                                                            <option>Married</option>
                                                                            <option>Divorced</option>
                                                                            <option>Widowed</option>
                                                                        </select>
                                                                    </div>
                                                                    <!-- col-xs-9 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->


                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">About</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <textarea rows="3"></textarea>
                                                                    </div>
                                                                    <!-- col-xs-12 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-user fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <hr/>
                                                        <h3 class="mgbt-xs-15">Contact Setting</h3>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Mobile Phone</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="text"  placeholder="mobile phone">
                                                                    </div>
                                                                    <!-- col-xs-12 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Website</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="text"  placeholder="website">
                                                                    </div>
                                                                    <!-- col-xs-9 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Facebook</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="text"  placeholder="facebook">
                                                                    </div>
                                                                    <!-- col-xs-9 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Twitter</label>
                                                            <div class="col-sm-9 controls">
                                                                <div class="row mgbt-xs-0">
                                                                    <div class="col-xs-9">
                                                                        <input type="text" placeholder="twitter">
                                                                    </div>
                                                                    <!-- col-xs-9 -->
                                                                    <div class="col-xs-2">
                                                                        <div class="btn-action">
                                                                            <button data-toggle="dropdown" class="btn btn-icon dropdown-toggle vd_bg-yellow vd_white" type="button"><i class="fa fa-globe fa-fw"></i></button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li><a href="#"><i class="fa fa-globe fa-fw"></i> Public</a></li>
                                                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> Friends</a></li>
                                                                                <li><a href="#"><i class="fa fa-lock fa-fw"></i> Only Me</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- btn-action col-sm-10 -->
                                                                    </div>
                                                                </div>
                                                                <!-- row -->
                                                            </div>
                                                            <!-- col-sm-10 -->
                                                        </div>
                                                        <!-- form-group -->

                                                    </div>
                                                    <!-- col-sm-12 -->
                                                </div>
                                                <!-- row -->

                                            </div>
                                            <!-- panel-body -->
                                            <div class="pd-20">
                                                <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> Finish</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Panel Widget -->
                                </div>
                                <!-- col-sm-12-->
                            </div>
                            <!-- row -->

                        </div>
                        <!-- .vd_content-section -->

                    </div>
                    <!-- .vd_content -->
                </div>
                <!-- .vd_container -->
            </div>
            <!-- .vd_content-wrapper -->

            <!-- Middle Content End -->

        </div>
        <!-- .container -->
    </div>
    <!-- .content -->

    <?php include 'includes/footerupdate.inc';?>
    <?php include 'includes/footer.inc';?>
