    <?php
        
        echo "<form action=\"./source.php\" method=\"post\">";

            for ($quest = 1; $quest <= 10; $quest++)
            {
                echo "<p>Question {$quest}</p>";
                
                for ($answ = 1; $answ <= 4; $answ++)
                {
                    echo "<input type=\"radio\" name=\"rQuest$quest\" value=\"Answer$answ\" required><label for=\"rQuest$quest\">Answer$answ</label>";
                }
            }
            echo "<input type=\"submit\" name=\"firstNext\" value=\"Next\" style=\"display: block; margin-top: 10px;\">";

        echo "</form>";

    ?>