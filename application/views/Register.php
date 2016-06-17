<?php include 'includes/header.inc';?>
<?php include 'includes/headerform.inc';?>
<!-- Top menu -->

<?php include 'includes/topbar.inc';?>

<?php include 'includes/navigation.inc';?>
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text">
                    <h1><strong class="animated2">Marriage Online..</strong>Sign Up</h1>
                    <div class="description">
                        <h1>
                            We can find <strong>Better</strong>
                        </h1>
                    </div>

                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Sign up now</h3>
                            <p>Its free...</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="<?php echo $root; ?>register" method="post" class="registration-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-user-name">User name:</label>
                                <input type="text" name="un" placeholder="User Name..." class="form-user-name form-control" id="form-user-name">
                                <?php if($_POST):
                                    echo form_error('un', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-email">Email:</label>
                                <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
                                <?php if($_POST):
                                    echo form_error('email', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password:</label>
                                <input type="password" name="pass" placeholder="Password..." class="form-password form-control" id="form-password">
                                <?php if($_POST):
                                    echo form_error('pass', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-conpass">Confirm Password:</label>
                                <input type="password" name="conpass" placeholder="Confirm password..." class="form-conpass form-control" id="form-conpass">
                                <?php if($_POST):
                                    echo form_error('conpass', '<strong class="red">', '</strong>');
                                endif;
                                ?>
                            </div>
                            <input type="checkbox" name="terms" value="terms"  style="margin-top:7px;"/> <span>I have agreed to the <a>Terms & Condition</a> and <a>Security policy</a></span><br>
                            <button type="submit" class="btn">Sign up!</button><br>
                            <a href="signin">Already a member??</a>
                        </form>
                        <div class="top-big-link">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include 'includes/footer.inc';?>

<?php include 'includes/footerform.inc';?>

