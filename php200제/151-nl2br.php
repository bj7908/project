<?php
    include "108-2-connectDB1.php";

    $sql = "SELECT *FROM prodReview ORDER BY prodReviewID DESC LIMIT 1";
    $res = $dbConnect->query($sql);

    $prodReview = $res->fetch_array(MYSQLI_ASSOC);
//    echo $prodReview['content'];
    echo nl2br($prodReview['content']);

?>