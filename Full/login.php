<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
</head>

<body>
    <form id="form0" name="form0" method="post" action="Page1.php">
        <table width="200" border="1">
            <tr>
                <td>User Name:</td>
                <td><input name="uid" type="text" size="50" maxlength="100" /></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input name="pwd" type="password" size="50" maxlength="100" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
    <?php
    /*
    $conn = new mysqli("localhost", "root", "");
    $conn->select_db("q_answer");

    $q1 = "INSERT INTO user_info (U_ID,U_name,U_country,U_loginID, U_pwd) VALUES ('1', 'noora', 'bahrain','noora', 'noora')";
    $conn->query($q1);
*/
    ?>
</body>

</html>