<!DOCTYPE html>
<html>
<head>
    <title>{{ pageName($subsection) }}</title>
</head>
<body>
    <h1>Legal: {{ pageName($subsection) }}</h1>
    @if($subsection === 'tos')
        <p>You may not access non-public areas of the website.</p>
        <!-- Additional terms of service content -->
    @else
        <p>Data collected by the website is not shared externally.</p>
        <!-- Additional privacy policy content -->
    @endif
</body>
</html>
