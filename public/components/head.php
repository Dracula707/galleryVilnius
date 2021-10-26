<?php
function head($title,$css) {
$html = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Art gallery for people who enjoy real art\">
    <title>Gallery Vilnius - $title</title>
    <link rel=\"shortcut icon\" href=\"../static/assets/other/favicon.ico\">
    $css
    <link rel=\"stylesheet\" href=\"../static/css/normalize.css\" >
    <link rel=\"stylesheet\" href=\"../static/css/components.css\" >
    <link rel=\"stylesheet\" href=\"../static/css/main.css\" >
    <link rel=\"stylesheet\" href=\"../static/css/styles.css\" >
</head>
";
return $html;
}
?>
