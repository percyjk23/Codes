<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

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
      <td>Ans. <?php echo $_POST["A1"];?></td>
    </tr>
    <tr>
      <td>Q2. <?php echo $_POST["Q2"];?></td>
      <td>Ans. <?php echo $_POST["A2"];?></td>
    </tr>
    <tr>
      <td>Q3. <?php echo $_POST["Q3"];?></td>
      <td>Ans. <?php echo $_POST["A3"];?></td>
    </tr>
    <tr>
      <td>Q4. <?php echo $_POST["Q4"];?></td>
      <td>Ans. <?php echo $_POST["A4"];?></td>
    </tr>
    <tr>
      <td>Q5. <?php echo $_POST["Q5"];?></td>
      <td>Ans. <?php echo $_POST["A5"];?></td>
    </tr>
    <tr><td colspan="2"><input name="submit" type="submit" size="20" value = "Save your Report" /></td></tr>
  </table>
</form>
</body>
</html>