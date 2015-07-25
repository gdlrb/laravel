<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

About me: <?= $first; ?><?= $last; ?>
</br> About me: {{ $first }}{{ $last }}
</br> About me: {!! $first !!}{!! $last !!}

</body>
</html>