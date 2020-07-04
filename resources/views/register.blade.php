<!DOCTYPE html>
<html>
<head>
    <title>Sanbercode</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign up form</h2>
    <form action="/welcome" method="POST">
        @csrf
        <p>First name:</p>
        <input type="text" name="firstname" id="firstname">
        <p>Last name:</p>
        <input type="text" name="lastname" id="lastname">
        <p>Gender:</p>
        <input type="radio" name="gender" id="male" value="Male">
        <label for="male">Male</label><br />
        <input type="radio" name="gender" id="female" value="Female">
        <label for="female">Female</label><br />
        <input type="radio" name="gender" id="other" value="Other">
        <label for="other">Other</label><br />
        <p>Nationality:</p>
        <select name="nation" id="nation">
            <option value="india">India</option>
            <option value="indonesian" selected>Indonesian</option>
        </select><br />
        <p>Language spoken:</p>
        <input type="radio" name="lang" id="id" value="id">
        <label for="male">Bahasa Indonesia</label><br />
        <input type="radio" name="lang" id="en" value="en">
        <label for="female">English</label><br />
        <input type="radio" name="lang" id="other" value="Other">
        <label for="other">Other</label><br />
        <p>Bio:</p>
        <textarea name="bio" id="bio" rows="8"></textarea><br />
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>