<?php
require('vendor/autoload.php');
require_once('config\config.php');
require_once('config\db.php');

$actions = array('IN', 'OUT', 'COMPLETE');
$remarks = array('Signed', 'For approval','');

$faker = Faker\Factory::create();
for ($start = 1; $start <= 5; $start++) {

    $data1 = mysqli_real_escape_string($conn, date("Y-m-d H:i:s"));
    $data2 = mysqli_real_escape_string($conn, $faker->numberBetween($min = 100, $max = 110));
    $data3 = mysqli_real_escape_string($conn, $actions[rand(0, 2)]);
    $data4 = mysqli_real_escape_string($conn, $faker->company);
    $data5 = mysqli_real_escape_string($conn, $faker->name);
    $data6 = mysqli_real_escape_string($conn, $remarks[rand(0, 2)]);


    $command = "INSERT INTO `transactions`(`date_log`, `document_code`, `action`, `office`, `employee`, `remarks`) VALUES ('$data1','$data2','$data3','$data4','$data5','$data6')";
    if (mysqli_query($conn, $command)) {
        echo "Insert successful.";
    } else {
        echo "Inser unsuccessful.";
    }
}
