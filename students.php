<?php
include "header.php";

if (!file_exists("students.txt")) {
    echo "<p>No students found.</p>";
    include "footer.php";
    exit;
}

$lines = file("students.txt", FILE_IGNORE_NEW_LINES);
?>

<h2>Students List</h2>

<table>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Skills</th>
</tr>

<?php foreach ($lines as $line): 
    list($name, $email, $skills) = explode("|", $line);
    $skillsArray = explode(",", $skills);
?>
<tr>
    <td><?= $name ?></td>
    <td><?= $email ?></td>
    <td><?= implode(", ", $skillsArray) ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php include "footer.php"; ?>
