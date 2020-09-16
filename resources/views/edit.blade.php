<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
<body>

    <form action="{{ route('todo.update', [$task->id]) }}" method="post" class="text-center">
    @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$task->TaskToDo}}">
        <input type="submit" class="btn btn-primary" value="Update Task" id="btn">
        <a href="{{ route('todo.show') }}" class="btn btn-warning" >Show Tasks</a>

    </form>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>