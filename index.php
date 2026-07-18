<?php

$connectionString = 'mysql://root:yZYNlSQHVdShClomToapqZHLw24Z6yIy@mysql:3306/app';

$conn = mysqli_connect('mysql', 'root', 'yZYNlSQHVdShClomToapqZHLw24Z6yIy', 'app') or die(mysqli_error());

if ($conn) {
echo '<h1>SUCCESS</h1>';
} else {
echo '<h1>ERROR</h1>';
}

phpinfo();
