<!DOCTYPE html>
<html>
<head>
	{$this->headTitle("Мой сайт")}
	{$this->headLink()->appendStylesheet($this->baseUrl('/css/bootstrap.css'))}
	{$this->headScript()->appendFile('//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js')}
	{$this->headScript()->appendFile($this->baseUrl('/js/bootstrap.js'))}
	{$this->headScript()->appendFile($this->baseUrl('/js/myDefault.js'))}
	<meta charset="utf8">
</head>
<body>
	<div class="container">
        <div class="navbar">
          <div class="navbar-inner">
            <a class="brand" href="http://deff/">Home</a>
            <ul class="nav">
              <li><a href="weather">Прогноз погоды</a></li>
            </ul>
          </div>
        </div>
	</div>