<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle track </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>

    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white"></div>
        </div>
    </div>

    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Edit Vehicles</div>
            <div>
                <a href="/vehicles" class="btn btn-primary">Back</a>
            </div>
        </div>

        <form action="{{ Route('vehicles.edit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                <!-- {{ print_r ($data);  }} -->
                    <div class="mb-3">
                        <label for="no" class="form-label">Vehicle No</label>
                        <input type="hidden" name="id" id="id" class="form-control" value="{{$data[0]['vehicle_id']}}">
                        <input type="text" name="no" id="no" class="form-control" value="{{$data[0]['vehicle_no']}}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Vehicle Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$data[0]['vehicle_name']}}">
                    </div>

                    <div class="mb-3">
                        <label for="model" class="form-label">Vehicle Model</label>
                        <input type="text" name="model" id="model" class="form-control" value="{{$data[0]['vehicle_model']}}">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Vehicle</button>

        </form>
    </div>


</body>
</html>
