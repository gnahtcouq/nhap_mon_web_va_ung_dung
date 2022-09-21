<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DH52007101</title>
  <style type="text/css">
  body {
    background: url("https://raw.githubusercontent.com/gnahtcouq/images/master/background.png");
    background-size: cover;
    background-position: 100% 100%;
    background-size: cover;
    background-repeat: no-repeat;
  }
  </style>
</head>

<body>
  <?php
$path = ".";
$dh = opendir($path);
$i = 1;
while (($file = readdir($dh)) !== false) {
    if ($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='$path/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?>
</body>

</html>