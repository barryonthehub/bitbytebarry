<?php
    $users = array('first_name' => 'brad', 'last_name' => 'winters', 'email' => 'bradwon@yes.com');
    //$fruits = array('Apple', 'Orange', 'Banana');

    //foreach($fruits as $fruit){
    //    echo $fruit.'<br>';
    //<h1><?php echo $fruit['fruit1']; ? ></h1>}
?>
    
    <ul>
    <?php foreach($users as $key => $value) : ?>
        <li><?php echo $key; ?> : <?php echo $value; ?></li>
    <?php endforeach; ?>
    </ul>

