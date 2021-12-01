<html>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"> <br />
        E-mail: <input type="text" name="email"> <br />
        Website: <input type="text" name="website"> <br />
        Comment: <textarea name="comment" rows="5" cols="40"></textarea> <br />
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <button type="submit">submit</button>
    </form>

</body>

</html>