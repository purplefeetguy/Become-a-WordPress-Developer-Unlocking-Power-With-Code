<?php

  $names = array('Brad', 'John', 'Jane', 'Meowsalot');

  $count = 1;

  while($count < 101) {
      echo "<li>$count</li>";
      $count++;
  }

?>

<p>Hi, my name is <?php echo $names[0] ?></p>