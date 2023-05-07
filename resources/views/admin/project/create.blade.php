<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Project Create</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-6">
            <form class="form-control" action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">

                    <label for="" class="form-label">project Name</label>
                </div>
                <div class="mb-3">

                    <input class="form-control" type="text" name="title">
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
            </form>

        </div>
    </div>
</body>

</html>
