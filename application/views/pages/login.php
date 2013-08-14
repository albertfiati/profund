<!-- BEGIN LOGO--> 
<div class="logo">
    <!--<h3>Project Logo</h3>-->
</div>
<!--END LOGO-->
<!--BEGIN LOGIN-->
<div class="content solid-background overflow" id="message">    
    <?php echo form_open('verifylogin', array('id'=>'profund_setup')); ?>
        <?php echo validation_errors(); ?>
        <h3 class="form-title">Login to your account</h3>
        
        <div class="control-group">
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-user"></i>
                    <input class="m-wrap" type="text" name="username" id="username" placeholder="Username">
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-lock"></i>
                    <input class="m-wrap" type="password" name="password" id="password" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="control-group">
            <button id="login-btn" class="m-btn blue pull-right">
                Login <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
        <!-- <div class="form-actions">
            <hr>
            <a href="">Can't access my account</a>
        </div> -->
    </form>
</div>
<!--END LOGIN-->
<!--START COPYRIGHT-->
<div class='copyright'>
    2013&COPY; Profund
</div>
<!--END COPYRIGHT