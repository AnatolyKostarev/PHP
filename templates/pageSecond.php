    <?php

        echo "<form action=\"./source.php\" method=\"post\">";

            for ($quest1 = 1; $quest1 <= 10; $quest1++)
            {
                echo "<p>Question {$quest1}</p>";
                
                for ($answ1 = 1; $answ1 <= 4; $answ1++)
                {
                    echo "<input type=\"checkbox\" name=\"rQuest$quest1\" value=\"Answer$answ1\"><label for=\"rQuest$quest1\">Answer$answ1</label>";
                }
            }
            echo "<input type=\"submit\" name=\"secondNext\" value=\"Next\" style=\"display: block; margin-top: 10px;\">";

        echo "</form>";

    ?>