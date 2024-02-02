<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  body {
    background: #150F15;
    color: white;
  }
</style>

<body>
  <h1>
    Books:
  </h1>
  <div>
    @foreach($books as $book)
    <img width="150px" heigth="150px" src="/img/bookThumbnail/{{ $book->image }}" />
    <p>{{ $book->title }} -- {{ $book->description }} -- {{ $book->type }} {{ $book->image }}</p>
    @endForeach
  </div>
</body>

</html>