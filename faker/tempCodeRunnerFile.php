<?php
if (mysqli_query($conn, $command)) {
        echo "Insert successful.";
    } else {
        echo "Inser unsuccessful.";
    }