

<form method='POST' action='/users/p_login'>

    Email<br>
    <input type='text' name='email'>

    <br><br>

    Password<br>
    <input type='password' name='password'>

    <br><br>

    <?php if(isset($error)): ?>
    	 <div class="alert">
            Login failed. Please double check your email and password.
        </div>
        <br>
   <?php endif; ?>
    <input type='submit' id="loginBtn" class="btn btn-success" value='Log in'>

</form>