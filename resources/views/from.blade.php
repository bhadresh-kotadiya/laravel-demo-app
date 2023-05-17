<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <form class="container mt-5" action="{{ url('store') }} " method="get">
    @csrf
    <div class="mb-3">
      <label for="exampleInputtitle" class="form-label">Blog-Title</label>
      <input type="title" class="form-control" id="title" name="title" aria-describedby="titleHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputdescription" class="form-label">Description</label>
      <input type="description" class="form-control" id="description" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>