<form action='signup.php'>
    <div>
        <label for='name'>Name</label>
        <input type='text' id='name'>
    </div>

    <div>
        <label for='email'>E-mail</label>
        <input type='email' id='email'>
    </div>

    <div>
        <label for='password'>Password</label>
        <input type='password' id='password'>
    </div>

    <div>
        <label for='source'>How did you hear about us?</label>
        <select id='source'>
            <option>Choose one...</option>
            <option>Search engine</option>
            <option>From a friend/family member</option>
            <option>From an advertisement</option>
        </select>
    </div>

    <div>
        <label for='bio'>Short bio</label>
        <textarea id='bio'></textarea>
    </div>

    <div class='form-group form-check'>
        <input type='checkbox' id='subscribe'>
        <label for='subscribe'>Subscribe to our newsletter</label>
    </div>

    <button type='submit'>Sign up</button>
</form>