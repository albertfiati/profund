<!-- BEGIN LOGO--> 
<div class="logo">
    <!--<h3>Project Logo</h3>-->
</div>
<!--END LOGO-->
<!--BEGIN LOGIN-->
<div class="box">
    <div class="solid-background" style="text-align:center;">
        <h3 class="form-title">Login to your account</h3>
    </div>
    <div class="content overflow" id="message">    
        <?php echo form_open('verifylogin', array('id'=>'profund_setup')); ?>        
            <div class="control-group">
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        <input class="m-wrap" type="text" name="username" id="username" placeholder="Username" value="<?php print(set_value("username")); ?>">
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
                    Login <i class="m-icon-swapright m-icon-white my-icon pull-right"></i>
                </button>
            </div>
            <!-- <div class="form-actions">
                <hr>
                <a href="">Can't access my account</a>
            </div> -->
        </form>
    </div>
</div>
<!--END LOGIN-->
<!--START COPYRIGHT-->
<div class='copyright'>
    2013&COPY; Profund
</div>
<!--END COPYRIGHT