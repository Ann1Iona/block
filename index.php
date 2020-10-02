<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$database = [
				[ 
					"title" => "Статья 1",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 				eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
					"img" => "img/1.jpg",
					"user" => "user12",
				],
				[ 
					"title" => "Статья 2",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 				eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
					"img" => "img/2.jpg",
					"user" => "user30",
				],
				[ 
					"title" => "Статья 3",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 				eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
					"img" => "img/3.jpg",
					"user" => "user50",
				],
				[ 
					"title" => "Статья 4",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 				eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
					"img" => "img/4.jpg",
					"user" => "user90",
				],
				[ 
					"title" => "Статья 5",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 				eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
					"img" => "img/5.jpg",
					"user" => "user25",
				],
			];
		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
			 	for($i=0; $i<6; $i=$i+1){
					echo "<h1 class='bg-success'>". $database[$i]["title"] ."</h1>";
					echo "<p>". $database[$i]["short_text"] ."</p>";
					echo "<img class='w-100' src='". $database[$i]["img"] ."' >";
					echo "<p>". $database[$i]["user"] ."</p>";
				};
			 ?>
		</div>
	</div>
</body>
</html>