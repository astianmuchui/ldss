<?php
    require '../config.php';
    $query = "SELECT * FROM receivers";
    $result = mysqli_query($conn,$query); 
    $receivers = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

    foreach($receivers as $receiver):
        $toEmail = $receiver['email'];
        $nws = mail($toEmail,$subject,$message,$headers);
        set_time_limit(0);
        flush();
          
      endforeach;
?>