<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
<body>

    <form action="{{ route('todo.store') }}" method="post" class="text-center">
    @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <input type="submit" class="btn btn-primary" value="Add Task" id="btn">
        <a href="{{ route('todo.show') }}" class="btn btn-warning" >Show Tasks</a>

    </form>
    <!-- <div class="container mt-2 text-center">
        <h1>Todo App</h1>
        <input type="text" class="form-control " placeholder="Enter your task here" id="inputBox">
        <input type="button" value="Add Task" class="btn btn-primary mt-2" id="addBtn">
        <input type="button" value="Delete All Task" class="btn btn-danger mt-2" onclick="deleteAllData()">
        <hr>
        <h5>Your Data will show here</h5>
        <table id="dataTable" class="table table-hover table-bordered ">
            
        </table>
    </div> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>