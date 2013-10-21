<form method='POST' action='/users/p_signup'>

<fieldset>
    <legend>Hello, please sign up to use <?=APP_NAME?>.</legend>
    
        <label>Given Name</label>
        <input type="text" name='first_name'>
        <br>

        <label>Surname</label>
        <input type='text' name='last_name'>
        <br>

        <label>Email Address</label>
        <input type='text' name='email'>
        <br>

        <label>Password</label>
        <input type='password' name='password'>
        <br><br>
    
        <label class="checkbox">
          <input type="checkbox">Receive email confirmation
        </label>
        <br><br>
    <button type="submit" class="btn btn-success">Sign Up</button>
  </fieldset>

</form>
