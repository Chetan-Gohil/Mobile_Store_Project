<?php

    include 'config.php';

    $val = $_GET['value'];

    $val_M = mysqli_real_escape_string($conn, $val);

    $sql = "SELECT category_id, name FROM subcategory WHERE category_id = '$val_M'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "<select class='form-select'>";
        while($rows = mysqli_fetch_assoc($result)) {
            echo "<option>".$rows['name']."</option>";
        }
        echo "</select>";
    } else {
        ?>
            <select class="form-select">
                <option>Select Sub Category</option>
            </select>
        <?php
    }

?>