<?php
function generateTable($tableData){
    if(count($tableData) == 0){
        return;
    }
    echo '<table class="table">
            <tr>';
        foreach (array_keys( (array) $tableData[0]  ) as $key => $header) {
            echo "<th>".$header."</th>";
        }
        echo  "<th>Edit</th>
            <th>Delete</th>";
        echo "</tr>";
        

    foreach ($tableData as $key => $visitor) {
        echo "<tr>";
        foreach ($visitor as $key => $cellData) {
            echo "<td>".$cellData."</td>";
        }
        echo    '<td>
                        <a href="?'.array_keys((array) $visitor)[0].'='.array_values((array) $visitor)[0].'"> 
                            <div class="btn btn-primary">redaguoti</div>
                        </a>
                    </td>';
        echo '<td>
                    <form action="" method="post">
                        <input type="hidden" name="'.array_keys((array) $visitor)[0].'" value='.array_values( (array) $visitor)[0].'>
                        <input class="btn btn-danger" type="submit" value="trinti">
                    </form>
                </td>';
        echo "</tr>";
    }
    echo "</table>";
}
?>





