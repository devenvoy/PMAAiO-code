<?php
$start_num = 1;
$end_num = 10;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Division table</title>
</head>

<body>
    <h2>
        A Division Table
    </h2>
    <table border="1">
        <?php
        print ("<tr>");
        print ("<th> </th>");
        for (
            $count_1 = $start_num;
            $count_1 <= $end_num;
            $count_1++
        ) {
            print ("<th>$count_1</th>");
        }
        print "</tr>";

        for($count_1 = $start_num;
        $count_1 <= $end_num; $count_1++){
            print("<tr><th>$count_1</th>");
            
            for($count_2 = $start_num;
            $count_2 <= $end_num; $count_2++){
                $result = $count_1 / $count_2;
                printf("<td>%.3f</td>", $result);
            }
            printf("</tr><br>");
        }
        ?>
    </table>
</body>
</html>