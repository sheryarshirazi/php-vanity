<?php

include_once 'dbconnect.php';
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

try {
	foreach (range(1,15) as $x) {
		
		$stmt = $conn->query("INSERT INTO users(
			username,first_name,last_name,email,dob,address,city,country)
			VALUES(
				'$faker->userName',
				'$faker->firstName',
				'$faker->lastName',
				'$faker->email',
				'".$faker->dateTimeThisCentury->format('Y-m-d H:i:s')."',
				'$faker->streetAddress',
				'$faker->city',
				'$faker->country'
		);");
	}
	
} catch (Exception $e) {
	echo $e->getMessage();
}

?>