<?php

return
        "<!DOCTYPE html>
<html>
<head>
<title>$pageData->title</title>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
$pageData->css
$pageData->css_icons
</head>
<body>
<br/>
<br/>
<br/>
<div class='row'>
<div class='large-12 columns'>
<h1><i class='fi-lightbulb large'></i> <a href='index.php?page=skills'>Bright Future Inc.</a> <small>Yet another enthusiast's blog</small></h1>
</div>
</div>
<div class='row'>
<hr/>
<div class='large-8 columns'>
$pageData->content
</div>
<div class='large-4 columns'>
$pageData->navigation
</div>
</div>
</body>
</html>";
