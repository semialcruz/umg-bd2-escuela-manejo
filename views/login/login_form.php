<div id="login_wrapper">
    <div id="login">

        <div class="headline">Member Login</div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="loginform" id="loginform">
            <fieldset>



                <?=$this->nonce->getNewHiddenInput('logout')?>
                <input type="text" name="user" value="Usuario" onfocus="if(this.value=='Usuario') this.value='';" onblur="if(this.value=='') this.value='Usuario';" /><br />
                <input type="password" name="password" value="Contraseña" onfocus="if(this.value=='Contraseña') this.value='';" onblur="if(this.value=='') this.value='Contraseña';" /><br />
                <input type="submit" name="login" value="Login" />
            </fieldset>
        </form>

        <!--<a href="index.php?<?/*=$this->nonce->getNew('register')*/?>&action=register">
            Register new user
        </a>-->

    </div>
</div>