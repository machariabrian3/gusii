<?php
        $sql = "DELETE * FROM `vacancies`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) 
        ?>
          <tr>
            
            <td><?php echo $row["vacancy"] ?></td>
            <td><?php echo $row["positions"] ?></td>