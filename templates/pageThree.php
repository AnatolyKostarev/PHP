    <?php

        echo "<form action=\"./source.php\" method=\"post\">";

            for ($quest2 = 1; $quest2 <= 10; $quest2++)
            {
                echo "<p>Question {$quest2}</p>";
                echo "<input type=\"text\" name=\"rQuest$quest2\" value=\"Answer$quest2\" autocomplete=\"off\" required><label for=\"rQuest$quest2\"></label>";
            }
            echo "<input type=\"submit\" name=\"thirdNext\" value=\"Finish\" style=\"display: block; margin-top: 10px;\">";

        echo "</form>";

    ?>