<h1> Home Page </h1>

<?php $hour = date('h') ?>

<p>
    <?php
        if ($hour < 6 || $hour > 18) {
            echo "<b> Night Time <b>";
        } else {
            echo "<i> Day Time <i>";
        }
        ?>
</p>