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
            <div class="h4">Vehicles</div>
            <div>
                <a href="{{ route('vehicles.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>


        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Vehicle ID</th>
                        <th>Vehicle No</th>
                        <th>Vehicle Name</th>
                        <th>Vehicle Model</th>
                        <th width="150">Action</th>
                    </tr>
                    @foreach($data as $item)
                    <tr valign="middle">
                        <td>{{ $item['vehicle_id'] }}</td>
                        <td>{{ $item['vehicle_no'] }}</td>
                        <td>{{ $item['vehicle_name'] }}</td>
                        <td>{{ $item['vehicle_model'] }}</td>
                        <td>
                            <a href="vehicles/edit/{{ $item['vehicle_id'] }}" class="btn btn-primary btn-sm">Edit</a>

                            <a href="vehicles/delete/{{ $item['vehicle_id'] }}"class="btn btn-danger btn-sm">Delete</a>

                            <form id="" action="" method="post">

                        </td>
                    </tr>
                    @endforeach



                </table>
            </div>
        </div>

        <div class="mt-3">
        </div>

    </div>


</body>
</html>

