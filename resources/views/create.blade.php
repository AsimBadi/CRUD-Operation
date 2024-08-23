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
      @vite('resources/js/first.js')
      <style>
        .error{
            color: red;
        }
    </style>
    <title>Create Student</title>
</head>
<body>
    <div class="container-fluid w-50">
        <h2 class="text-center mt-2">Create Student</h2>
        <form action="insert" method="POST" autocomplete="off" id="form">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Username:</label>
                <input type="text" class="form-control" id="" placeholder="Enter Username" name="name" value="">
                @error('name')
                    <span class="error">{{$message}}</span>
                @enderror
              </div>
            <div class="mb-3">
                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control" id="" placeholder="name@example.com" name="email" value="">
                @error('email')
                    <span class="error">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" id="" rows="3" placeholder="Enter Description" name="description"></textarea>
                @error('description')
                    <span class="error">{{$message}}</span>
                @enderror
              </div>
              <label for="" class="mt-2">Machines:</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" name="machines[]" value="bike">
                <label class="form-check-label" for="">Bike</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="car" name="machines[]">
                <label class="form-check-label" for="">Car</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" value="tractor" name="machines[]">
                <label class="form-check-label" for="">Tractor</label>
                <label id="machines[]-error" class="error" for="machines[]"></label>
                @error('machines')
                    <span class="error">{{$message}}</span>
                @enderror
              </div><br>
                <label for="" class="mt-2">Gender:</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="" value="male">
                <label class="form-check-label" for="">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="" value="female">
                <label class="form-check-label" for="">Female</label>
                <label id="gender-error" class="error" for="gender"></label>
                @error('gender')
                    <span class="error">{{$message}}</span>
                @enderror
              </div><br>
              <label for="" class="mt-2">Country:</label>
              <div>
                <select class="form-select" aria-label="Default select example" name="country">
                    <option value="" selected hidden>Select Your Country</option>
                    <option value="india">India</option>
                    <option value="usa">USA</option>
                    <option value="australia">Australia</option>
                  </select>
                  @error('country')
                      <span class="error">{{$message}}</span>
                  @enderror
              </div>
              <div class="mt-2">
                <label for="">Select Your Category:</label>
                <select name="categories_id" id="" class="form-select">
                    <option value="" selected hidden>Select Your Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('categories_id')
                    <span class="error">{{$message}}</span>
                @enderror
              </div>
              <input type="submit" name="submit" value="submit" class="btn btn-primary form-control mt-4">
        </form>
    </div>
    <a href="/">Back To list</a>
</body>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
