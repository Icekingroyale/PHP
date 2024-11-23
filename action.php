<h3 style="color:aqua"> Hi  
        <?php

echo htmlspecialchars($_POST['name']);?>
, Welcome to my page
    </h3>
    <h4 style="background-color: aqua;">You are 
        <?php
echo (int) $_POST['age']

        ?>
        years old.
    </h4>
