<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="user-scalable = yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Listing - Classified Listing HTML Template">
	<meta name="keywords" content="Listing,HTML,CSS,Classified,blog,business,corporate,clean,responsive">

	<title>{{$title}}</title>
    @include("front.layout.styles")

    <!-- custom or page specific stylesheets -->
    {{ $styles ?? '' }}

</head>
<body>
	<div class="preloader"><span class="preloader-gif"></span></div>

        @include("front.layout.header")

        {{ $slot ?? '' }}

        @include("front.layout.footer")

	</div>


    @include("front.layout.scripts")

    <!-- custom or page specific JS -->
    {{ $scripts ?? '' }}

</body>
</html>
