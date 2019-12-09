<?php
session_start();
if (isset($_SESSION['ud'])) {
  ?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Page 3</title>
  </head>

  <body>

    <table width="200" border="1">
      <tr>
        <td>Welcome</td>
        <td><?php echo $_POST["fname"]; ?></td>
      </tr>
      <tr>
        <td>From</td>
        <td><?php echo $_POST["country"]; ?></td>
      </tr>
    </table>
    <p></p>
    <p></p>

    <table width="200" border="1">
      <tr>
        <th>Q#</th>
        <th>Question</th>
        <th>Answer</th>
      </tr>
      <?php
        $conn = new mysqli("localhost", "root", "");
        $conn->select_db("q_answer");

        for ($i = 1; $i <= 5; $i++) {
          $q1 = "INSERT INTO answer_info (A_ID, A_description,Q_ID, U_ID) VALUES ('A" . $i . "', '" . $_POST["A" . $i] . "', 'Q" . $i . "', '1')";
          $conn->query($q1);
        }

        $q2 = "SELECT a.Q_ID qid, a.Q_description qd, b.A_description ad FROM question_info a, answer_info b WHERE a.Q_ID = b.Q_ID";

        $rs = $conn->query($q2);

        while ($r = $rs->fetch_assoc()) {
          echo "<tr><td>" . $r["qid"] . "</td><td>" . $r["qd"] . "</td><td>" . $r["ad"] . "</td></tr>";
        }
        $conn->close();

        ?>
    </table>
  </body>
<?php
} else {
  header("Location: login.php");
  die();
}
session_unset();
session_destroy();
?>

  </html>