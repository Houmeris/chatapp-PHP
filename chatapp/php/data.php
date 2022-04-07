<?php
    while($row = mysqli_fetch_assoc($sql))
    {
        $output .= '<a href="chat.php?user_id=' . $row['admin_id'] . '">
        <div class="content">
            <div class="details">
                <span>'. $row['username'] .'</span>
                <p>'.$row['status'].'</p>
            </div>
        </div>
        </a>';
    }
?>