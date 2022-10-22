<?php
include('subjects.php');
$subjects = new Subjects;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <title>PR4</title>
</head>
<body>
    <?php
        $subjects -> show();
        
        $subjects -> changeArray("Фізкультура", "Історія");
        $subjects -> show();

        $temp_subjects_array = array_unique($subjects->subjects_array);
        foreach ( $temp_subjects_array as $a){
            echo $a;
            echo "<br>";
        }
        echo "<hr>";

        $subjects->changeArray2('Історія', 'Фізкультура', 2);
        $subjects->show();

        asort($subjects->subjects_array);
        $subjects->show();

        $subjects->expension();
        $subjects->show_as_table();

        $subjects->split_array();

        echo $subjects->students;
        echo "<hr>";

        $arr = explode(', ', $subjects->students); 
        print_r($arr);
        echo "<hr>";

        $str = implode(', ', $arr); 
        echo $str;
    ?>
</body>