<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>
<!-- Top menu -->

<?php include 'includes/topbar.inc';?>
<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text">
                    <h1><strong>Marriage Online</strong> Registration Form</h1>
                    <div class="description">
                        <h1>
                            We can find <strong>Better</strong>
                        </h1>
                    </div>

                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login now</h3>

                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="signin" method="post" class="Login-form">

                            <div class="form-group">
                                <label class="sr-only" for="form-user-name">User Name:</label>
                                <?php if($_POST):
                                    echo form_error('un', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                                <input type="text" name="un" placeholder="User Name..." class="form-user-name form-control" id="form-user-name">

                                <input type="checkbox" name="rememberme" value="Remember me">Remember me

                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password:</label>
                                <?php if($_POST):
                                    echo form_error('pass', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                                <input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">

                                <a href="ResetPassword">Need help?</a>

                            </div>





                            <button type="submit" class="btn">Log In!</button>
                           <p>Not a member..??? <a href="register">Sign Up Now..</a></p>
                        </form>
                        <div class="top-big-link">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footerform.inc';?>
<?php include 'includes/footer.inc';?>
