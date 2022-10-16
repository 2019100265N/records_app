<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$faker = Faker\Factory::create();
for ($start = 1; $start <= 5; $start++) {

    $data1 = mysqli_real_escape_string($conn, $faker->lastName);
    $data2 = mysqli_real_escape_string($conn, $faker->firstName);
    $data3 = mysqli_real_escape_string($conn, $faker->streetAddress);
    $data4 = mysqli_real_escape_string($conn, $faker->company);


    $command = "INSERT INTO `employees`(`last_name`, `first_name`, `address`, `office`) VALUES ('$data1','$data2','$data3','$data4')";
    if (mysqli_query($conn, $command)) {
        echo "Insert successful.";
    } else {
        echo "Inser unsuccessful.";
    }


}
