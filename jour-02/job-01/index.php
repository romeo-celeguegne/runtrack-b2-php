<?php
function find_one_student()
{
    $pdo = new PDO("mysql:host=localhost;dbname=lp_official", "root", "peacenlove13");
    $ins = $pdo->prepare("select * from student order by id");
    $ins->setFetchMode(PDO::FETCH_ASSOC);
    $ins->execute();
    $tab = $ins->fetchAll();
    for ($i = 0; $i < count($tab); $i++) {
        echo implode(" | ", $tab[$i]) . "<br />";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php
        return find_one_student()
        ?>
    </table>
</body>

</html>