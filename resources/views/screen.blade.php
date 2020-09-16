<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
<body>
<div class="container ">
    <h1 class="text-center">Your Tasks</h1>
    <table class="table table-hover table-bordered text-center">
        <tr>
            <th>S. no</th>
            <th>Tasks</th>
            <th>Edit or Delete</th>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <!-- <td>{{ $loop->iteration }}</td> -->
                <td>{{ $task->id }}</td>
                <td>{{ $task->TaskToDo }}</td>
                <td>
                    <a href="{{route('todo.edit', [$task->id])}}" class="btn btn-warning">Edit</a>
                    <a href="{{route('todo.delete', [$task->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('todo') }}" class="btn btn-dark">Back</a>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>