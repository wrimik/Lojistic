<title>{{ $title }}</title>
<!--  meta  -->
<meta name="description" content="{{ $description }}" />
<meta name="keywords" content="{{ $keywords }}" />
<!-- facebook sharing -->
<meta property="og:title" content="{{ $title or 'DEFAULT PAGE TITLE' }}">
<meta property="og:image" content="{{ $image or 'http://logjistic.com/images/lojistic-download-logo.png' }}">
<meta property="og:url" content="{{ isset($url) ? $url : str_replace('http://', 'https://', Request::url()) }}">
<meta property="og:type" content="website" />