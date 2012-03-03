<?php

require_once "./markdown.php";

if (isset($_GET['n'])){
	$file = './'.$_GET['n'].'.mkd';
	$title = preg_replace('#_#', ' ', $file);
} else {
	$file = './index.mkd';
	$title = 'Index';
}

$fh = fopen($file, 'r');

echo<<<END

<!DOCTYPE html>
<html lang="fr">
	<head>
        <title>$title</title>
        <meta charset="utf-8"/>
	<link rel="stylesheet" media="all" href="main.css" type="text/css"/>
	</head>
    <body>
        <header>
            <h1>$titre</h1>
        </header>
        <article>
END;
echo Markdown(fread($fh, filesize($file)));

echo<<<END
        </article>
    </body>
</html>
END;

?>
