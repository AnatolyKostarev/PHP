    <?php

        $correctAnswers = 0;


    ?>
    <p>Congratulations! Your score is <?php echo $correctAnswers; ?>!</p>
    <?php
        echo "<form action=\"./source.php\" method=\"post\">";
        echo "<input type=\"submit\" name=\"repeat\" value=\"Re-take Test\" style=\"display: block; margin-top: 10px;\">";
        echo "</form>";



    ?>