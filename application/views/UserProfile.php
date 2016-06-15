<?php include 'includes/header.inc';?>

<!-- Top menu -->

<?php include 'includes/topbar.inc';?>
<?php include 'includes/navigation.inc';?>


<!-- Top content -->
<div class="title"><h1>UserProfile</h1></div>

<div class="container_fluid">
    <div class="row" style="background-color: white">


        <div class="stepwizard col-md-offset-3">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Step 1</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Step 2</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Step 3</p>
                </div>
            </div>
        </div>
    <form role="form" action="" method="post">
        <div class="row setup-content" id="step-1">
            <div class="col-xs-12 ">
                <div class="col-md-6 col-md-offset-3">
                    <h3> Step 1</h3>
                    <div class="form-group">
                        <label class="control-label">Date Of Birth</label>
                        <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Date of Birth"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Religion</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter You Religion" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Interested In</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Your Interested" />
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12 ">
                <div class="col-md-6 col-md-offset-3">
                    <h3> Step 2</h3>
                    <div class="form-group">
                        <label class="control-label">LiveIn Country</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Your Live_In Country" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">LiveIn City</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Your Live_In City"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">BaseIn Country</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Your Base_In Country"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">BaseIn City</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Your Base_In City"  />

                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12 col-md-offset-3">
                <div class="col-md-6">
                    <h3> Step 3</h3>

                    <div class="form-group">
                        <label class="control-label">Interests</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Your Interests"  />
                    </div>
                    <div class="form-group">
                        <label class="control-label">About Me</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Your AboutMe"  />
                    </div>

                    <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>

    </div>
</div>

<?php include 'includes/footer.inc';?>
