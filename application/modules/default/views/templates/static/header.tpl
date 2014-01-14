<!DOCTYPE html>
<html>
<head>
	{$this->headTitle("Мой сайт")}
	{$this->headScript()->prependFile('//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js')
	        ->headScript()->appendFile($this->baseUrl('/js/bootstrap.js'))
	        ->headScript()->appendFile($this->baseUrl('/js/myDefault.js'))}
    {$this->headLink()->appendStylesheet($this->baseUrl('/css/bootstrap.css'))}
    {$this->headLink()->appendStylesheet($this->baseUrl('/css/myStyle.css'))}
	<meta charset="utf8">
</head>
<body>
	<div class="container">
        <div class="navbar">
          <div class="navbar-inner">
            <a class="brand" href="http://test/">Home</a>
            <ul class="nav">
              <li><a href="weather">Прогноз погоды</a></li>
              <li><a href="user">Пользователь</a></li>
            </ul>
          </div>
        </div>
	</div>