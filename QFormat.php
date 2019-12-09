<html>

<head></head>

<body>
	<?php

	$conn = new mysqli("localhost", "root", "");
	$conn->select_db("labdb");
	$sql1 = "SELECT a.question_id qid, a.description qd, b.description od FROM options_info b, question_info a where a.question_id = b.question_id ORDER BY a.question_id";

	$rs = $conn->query($sql1);
	/*while ($r = $rs->fetch_assoc()) {
			echo $r['qid'] . "    " . $r['qd'] . "    " . $r['od'] . "<br>";
		}*/

	$current_cat = null;
	while ($r = $rs->fetch_assoc()) {
		if (($r['qid'] . ": " . $r['qd']) != $current_cat) {
			$current_cat = $r['qid'] . ": " . $r['qd'];
			echo "Question {$current_cat}<br>";
		}
		echo "<input type = radio name = " . $r['qid'] . " value = " . $r['od'] . " >" . $r['od'] . "<br>";
	}
	?>
</body>

</html>