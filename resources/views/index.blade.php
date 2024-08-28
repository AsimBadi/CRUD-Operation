<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .error{
            color: red;
        }
    </style>
    <title>Student List</title>
</head>
<body>
    <div class="row mx-2 my-2">
        <div class="col-6">
            <form action="search" method="POST" id="form">
                @csrf
                <input type="text" name="search" id="" placeholder="Search Data" class="form-control mb-2 mt-2" value={{$name ?? ''}}>
                <select name="data_type" class="form-select mb-2">
                    <option value="" hidden selected>Select Type</option>
                    <option value="id"{{ ($type ?? '') == 'id' ? 'selected' : '' }}>Id</option>
                    <option value="name" {{ ($type ?? '') == 'name' ? 'selected' : '' }}>Name</option>
                    <option value="email" {{ ($type ?? '') == 'email' ? 'selected' : '' }}>Email</option>
                    <option value="country" {{ ($type ?? '') == 'country' ? 'selected' : '' }}>Country</option>
                </select>

                <input type="submit" value="Submit" class="form-control btn btn-primary">
            </form>
        </div>
        <div class="col-4">
            <a href="create" class="btn btn-success btn-sm mt-2">Create Student</a>
        </div>
    </div>
    <div class="container-fluid">
    <table class="table table-striped table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
            <th>Machines</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Category Name</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th colspan="3">Action</th>
        </tr>
        @forelse ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->description}}</td>
                <td>{{$student->machines}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->country}}</td>
                <td>{{$student->category->name}}</td>
                <td>{{$student->created_at}}</td>
                <td>{{$student->updated_at}}</td>
                <td><a href="{{route('edit.student', $student->id)}}" class="btn btn-primary btn-sm">Update</a></td>
                <td><a href="{{route('view.student', $student->id)}}" class="btn btn-warning btn-sm">View</a></td>
                <td><a href="{{route('delete.student', $student->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
        @empty
            <td colspan="11" class="text-center fw-bold">No Records Found</td>
        @endforelse
    </table>
</div>
</body>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/search.js') }}"></script>
</html>




