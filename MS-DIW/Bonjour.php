<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php 

$file_content = file("../MS-DIW/PHP/liens.txt");

$html_output = "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Liste de liens</title>
</head>
<body>
    <h1>Liste de liens</h1>
    <ul>";

foreach ($file_content as $line) {
    $line = trim($line);
    $html_output .= "<li><a href='$line'>$line</a></li>";
}

$html_output .= "</ul>
</body>
</html>";

echo $html_output;
        ?>
    </body>
</html>