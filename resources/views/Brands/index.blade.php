<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/b.css') }}">
</head>

<body>


    <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-between">
                    <h3>Brands List</h3>

                </div>
                @if (count($brands) == 0)
                    <div class="alert alert-danger">No Brand Avialable right Now !</div>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">image</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($brands as $brand)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }} </th>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->img }}</td>
                                    <td><a href="{{ route('brand.delete', [$brand->id]) }}" class="btn btn-danger">-</a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                @endif
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-center mt-5">
                    <form action="{{ route('brands') }}" method="POST" class="shadow rounded-3 p-3">
                        @csrf
                        <div class="">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') @enderror" name="name"
                                id="name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mt-3 mx-auto">Add Brand</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/b.js') }}"></script>
</body>

</html>
