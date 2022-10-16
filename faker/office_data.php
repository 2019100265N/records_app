<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');


$faker = Faker\Factory::create();
for ($start = 1; $start <= 5; $start++) {

    $data1 =  mysqli_real_escape_string($conn, $faker->company);
    $data2 = mysqli_real_escape_string($conn, $faker->phoneNumber);
    $data3 = mysqli_real_escape_string($conn, $faker->companyEmail);
    $data4 = mysqli_real_escape_string($conn, $faker->streetAddress);
    $data5 =  mysqli_real_escape_string($conn, $faker->city);
    $data6 = mysqli_real_escape_string($conn, $faker->country);
    $data7 = mysqli_real_escape_string($conn, $faker->postcode);

    $command = "INSERT INTO `offices`(`name`, `contact_no`, `email`, `address`, `city`, `country`, `postal`) VALUES ('$data1','$data2','$data3','$data4','$data5','$data6','$data7')";
    if (mysqli_query($conn, $command)) {
        echo "Insert successful.";
    } else {
        echo "Inser unsuccessful.";
    }


}
