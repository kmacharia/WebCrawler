<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crawler Example</title>
    </head>
    <body>
        <?php
        include_once('simple_html_dom.php');
        $target_url = "https://www.google.com/";
        $html = new simple_html_dom();
        $html->load_file($target_url);
        foreach ($html->find('a') as $link) {
            echo $link->href."<br />";
        }
        ?>
    </body>
</html>
