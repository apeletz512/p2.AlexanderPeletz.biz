<form method='POST' action='/users/p_signup'>

<fieldset>
    <legend>Hello, please sign up to use <?=APP_NAME?>.</legend>
    <div class="span11 offset1">
        <br><br>
        <label>Given Name</label>
        <input type="text" name='first_name'>
        <br>

        <label>Surname</label>
        <input type='text' name='last_name'>
        <br>

        <label>Email Address</label>
        <input type='text' name='email'>
        <br>

         <?php if(isset($error)): ?>
            <div class="alert">
                This email address is already in use. Please enter a new email address.
            </div>
            <br>
        <?php endif; ?>

        <label>Password</label>
        <input type='password' name='password'>
        <br><br>
    
        <label class="checkbox">
          <input type="checkbox">Receive email confirmation
        </label>
        <br><br>
        <button type="submit" id="signupBtn" class="btn btn-inverse">Sign Up</button>
    </div>
</fieldset>

</form>
