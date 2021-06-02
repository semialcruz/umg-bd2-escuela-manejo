<div class="login_wrapper">

    <form method="post" action="<?=$_SERVER["SCRIPT_NAME"]?>" name="loginform" id="loginform">

        <div class="login">
            <div id="login_avatar" style="background-image: url('<?php echo $this->login->avatar_url; ?>');">
                <!--<img id="login_avatar" src="views/img/ani_avatar_static_01.png" style="width:125px; height:125px;" />-->
            </div>
            <div style="width: 250px; height: 125px; float:left; margin:0;">
                <div style="width: 250px; height: 62px; float:left; margin:0; border-bottom: 1px solid #e6e6e6;">
                    <input id="login_input_username" class="login_input" type="text" name="user" value="<?php echo $this->login->view_user; ?>" />
                </div>
                <div style="width: 250px; height: 62px; float:left; margin:0;">
                    <?php //if (empty($login->view_user_name)) { ?>
                    <input id="login_input_password_label" class="login_input" type="text" value="Password" />
                    <?php //} ?>
                    <input id="login_input_password" class="login_input" type="password" name="password" autocomplete="off" />
                </div>
            </div>
            <div style="width: 124px; height: 125px; float:left; margin:0; border-left: 1px solid #e6e6e6;">
                <div class="login_submit">
                    <input type="submit"  name="login" style="width:124px; height:125px; padding-top: 60px;  text-align: center; font-size:11px; font-family: 'Droid Sans', sans-serif; color:#666666; border:0; background: transparent; cursor: pointer;" value="Enviar" />
                </div>
            </div>
        </div>
        <!--<div style="width:500px; height: 40px; line-height: 40px; text-align: right; color:#ccc; font-size:11px; font-family: 'Droid Sans', sans-serif; ">
            <?php /*if (PUBLIC_REGISTER) { echo '<a class="login_link" href="'.$_SERVER["SCRIPT_NAME"].'?'.$this->nonce->getNew('register').'&register">Crear nueva cuenta</a>'; } */?>
        </div>-->
    </form>
</div>