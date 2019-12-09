<?php
session_start();

$conn = new mysqli("localhost", "root", "");
$conn->select_db("q_answer");

$qry = "select * from user_info where U_loginID = '" . $_POST['uid'] . "' AND U_pwd = '" . $_POST['pwd'] . "'";

$rs = $conn->query($qry);

$j = 0;
while ($r[] = $rs->fetch_assoc()) {
  $j++;
}
if ($j == 1) {
  $_SESSION['ud'] = $_POST['uid'];
}
if (isset($_SESSION['ud'])) {
  ?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Page 1</title>
  </head>

  <body>
    <form id="form1" name="form1" method="post" action="Page2.php">
      <input name="uid" type="hidden" value="<?php echo $_POST["uid"]; ?>" />
      <input name="pwd" type="hidden" value="<?php echo $_POST["pwd"]; ?>" />

      <table width="200" border="1">
        <tr>
          <td>Full Name</td>
          <td><input name="fname" type="text" size="50" maxlength="100" /></td>
        </tr>
        <tr>
          <td>Country</td>
          <td><select name="country" size="1">
              <option>Bahrain</option>
              <option>KSA</option>
              <option>Malaysia</option>
            </select></td>
        </tr>
        <tr>
          <td>Q1</td>
          <td><input name="Q1" type="text" size="50" maxlength="1000" /></td>
        </tr>
        <tr>
          <td>Q2</td>
          <td><input name="Q2" type="text" size="50" maxlength="1000" /></td>
        </tr>
        <tr>
          <td>Q3</td>
          <td><input name="Q3" type="text" size="50" maxlength="1000" /></td>
        </tr>
        <tr>
          <td>Q4</td>
          <td><input name="Q4" type="text" size="50" maxlength="1000" /></td>
        </tr>
        <tr>
          <td>Q5</td>
          <td><input name="Q5" type="text" size="50" maxlength="1000" /></td>
        </tr>
        <tr>
          <td colspan="2"><input name="submit" type="submit" size="20" value="Go for Answers" /></td>
        </tr>
      </table>

    </form>

  </body>

<?php
} else {
  header("Location: login.php");
  die();
}
?>

  </html>