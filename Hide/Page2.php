<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form2" name="form2" method="post" action="page3.php">
  <input name="fname" type="hidden" value="<?php echo $_POST["fname"];?>" />
  <input name="country" type="hidden" value="<?php echo $_POST["country"];?>" />
  <input name="Q1" type="hidden" value="<?php echo $_POST["Q1"];?>" />
  <input name="Q2" type="hidden" value="<?php echo $_POST["Q2"];?>" />
  <input name="Q3" type="hidden" value="<?php echo $_POST["Q3"];?>" />
  <input name="Q4" type="hidden" value="<?php echo $_POST["Q4"];?>" />
  <input name="Q5" type="hidden" value="<?php echo $_POST["Q5"];?>" />
  <table width="200" border="1">
    <tr>
      <td>Welcome</td>
      <td><?php echo $_POST["fname"];?></td>
    </tr>
    <tr>
      <td>From</td>
      <td><?php echo $_POST["country"];?></td>
    </tr>
    </table><p></p><p></p>
    <table width="200" border="1">
    <tr>
      <td>Q1. <?php echo $_POST["Q1"];?></td>
      <td><input name="A1" type="text" size="50" maxlength="1000" /></td>
    </tr>
    <tr>
      <td>Q2. <?php echo $_POST["Q2"];?></td>
      <td><input name="A2" type="text" size="50" maxlength="1000" /></td>
    </tr>
    <tr>
      <td>Q3. <?php echo $_POST["Q3"];?></td>
      <td><input name="A3" type="text" size="50" maxlength="1000" /></td>
    </tr>
    <tr>
      <td>Q4. <?php echo $_POST["Q4"];?></td>
      <td><input name="A4" type="text" size="50" maxlength="1000" /></td>
    </tr>
    <tr>
      <td>Q5. <?php echo $_POST["Q5"];?></td>
      <td><input name="A5" type="text" size="50" maxlength="1000" /></td>
    </tr>
    <tr><td colspan="2"><input name="submit" type="submit" size="20" value = "Go for Complete Report" /></td></tr>
  </table>
</form>
</body>
</html>