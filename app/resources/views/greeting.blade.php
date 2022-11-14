<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello!</h1>
  <div>{{ $code }}</div>
  <a href="/hoge" >hoge へ</a>
  <a href="{{ route('h') }}" >hoge へ</a>
  <a href="/greeting/{{ $code }}" >greeting bbb へ</a>
  <a href="{{ route('g', [ 'code' => $code ]) }}" >greeting ccc へ</a>
</body>
</html>