<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle track </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>

    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white"></div>
        </div>
    </div>

    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Users</div>
            <div>
                <a href="" class="btn btn-primary">Create</a>
            </div>
        </div>


        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th> ID</th>
                        <th>User Name</th>
                        <!-- <th>Vehicle Name</th>
                        <th>Vehicle Model</th> -->
                        <th width="150">Action</th>
                    </tr>
                    @foreach($data as $item)
                    <tr valign="middle">
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>

                        <td >
                            <a href="Assign_Vehicle" class="btn btn-primary btn-sm">Assign Vehicle</a>

                        </td>
                    </tr>
                    @endforeach



                </table>
            </div>
        </div>
    </div>


</body>
</html>
