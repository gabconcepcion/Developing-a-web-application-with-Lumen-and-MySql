<html>
<head>
	<title>Motivational - Your daily source of motivation!</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed">
</head>
<body style="background-image:url('{{url('img/'.$quote->background)}}')">
	<div class="container">
		<div class="quote-container">
			<p class="text">{{$quote->text}}</p>
			<p class="author">- {{$quote->author}}</p>	
		</div>
	</div>
</body>
</html>