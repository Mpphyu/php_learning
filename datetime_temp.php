<h1> Home Page </h1>

<?php $hour = date('h') ?>

<p>
    <?php if ($hour <6 || $hour >18){ ?>
        <b> Night Time </b>
    <?php } else { ?>
        <i> Day Time </i>
    <?php } ?> 
</p>