<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Project</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar-tp">
        <h2>
            ADD PROJECT PAGE
        </h2>
    </div>
    <div>
        <div class="container mt-4 p-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                       <form action="{{url('addPr')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Project name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter project name">
                        </div>
                        <div class="form-group">
                            <label for="title">Project title</label>
                            <textarea class="form-control" name="title"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Project time</label>
                            <input type="text" name="project_time" class="form-control" placeholder="1 month">
                        </div>
                          <button type="submit" class="btn btn-primary mt-2">Submit</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>