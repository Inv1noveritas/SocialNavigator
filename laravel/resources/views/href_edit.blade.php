<!DOCTYPE html>
<html lang = "ru">

	<head>
		<title>
			Navigator
		</title>
		
		<meta charset="utf-8">
		
		{!!$content->scripts!!}
	</head>
	
	{!!$content->nav_admin!!}
	{!!$content->content!!}
	<form action="/Editor_{{$id}}" >
		<button style = "margin-left: 90%; margin-top: 1%; width: 2.5vw; height: 2.5vw;"><img src = "/images/pencil.png" style = "width: 1.5vw;" alt = "symbol"></button>
	</form>

</html>
