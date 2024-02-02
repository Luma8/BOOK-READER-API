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
    padding: 200px 600px;
  }
  .form-group {
    display: grid;
    margin: 20px 0;
  }
  .btn-submit {
    background-color: #6C236C;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    text-transform: uppercase;
    font-weight: bold;
  }
  .button-center {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .tx-label {
    font-weight: bold;
    margin-bottom: 5px;
  }
  .input-control {
    outline: none;
    background: #322632;
    border: none;
    border-radius: 5px;
    padding: 10px;
  }
</style>

<body>
  <h1>
    Create Book:
  </h1>
  <form action="/books/adding" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label class="tx-label" for="image">Image</label>
      <input type="file" id="image" name="image" />
    </div>
    <div class="form-group">
      <label class="tx-label" for="title">Title</label>
      <input class="input-control" id="title" name="title" class="form-control" placeholder="Tittle..."></input>
    </div>
    <div class="form-group">
      <label class="tx-label" for="description">Descrição</label>
      <textarea class="input-control" id="description" name="description" class="form-control" placeholder="Description..."></textarea>
    </div>
    <div class="form-group">
      <label class="tx-label" for="type">Type</label>
      <input class="input-control" id="type" name="type" class="form-control" placeholder="Type..."></input>
    </div>
    <div class="button-center">
      <input class="btn-submit" type="submit" value="create books"></input>
    </div>
  </form>
</body>

</html>