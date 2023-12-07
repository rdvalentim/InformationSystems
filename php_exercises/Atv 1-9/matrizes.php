<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        table,tr,td{border:1px solid black}
    </style>
<body>
    <table>
        
        <?php
            echo"<table>";
            $linhas = 10;
            $colunas = 7;
            
            for ($i=0; $i < $linhas ; $i++) { 
                echo "<tr>";
                for ($j=0; $j < $colunas; $j++) { 
                    // echo "<td>" rand(1,1000) echo"</td>";
                    echo '<td>' . rand(1, 1000) . '</td>';
                }
                echo "</tr>"; 
            }
        ?>    
    </table>
</body>
</html>



   