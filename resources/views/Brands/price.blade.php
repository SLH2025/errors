<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Price</title>
    <link rel="stylesheet" href="{{ asset('css/b.css') }}">
    @vite(['resources/css/app.css', 'resorces/js/app.js'])
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
                    <h3>Price List</h3>

                </div>
                @if (count($price) == 0)
                    <div class="alert alert-danger">No Price list Avialable right Now !</div>
                @else
                    <table class="table" id="users-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">brand</th>
                                <th scope="col">measurement</th>
                                <th scope="col">price</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($price as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }} </th>
                                    <td>{{ $item->brand->name ?? 1 }}</td>
                                    <td>{{ $item->measurement }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td><a href="{{ route('price.delete', [$item->id]) }}" class="btn btn-danger">-</a>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                @endif
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-center mt-5">
                    <form action="{{ route('price') }}" method="POST" class="shadow rounded-3 p-3">
                        @csrf
                        <div class="">
                            <label for="brand_id" class="form-label">Brand</label>
                            <select name="brand_id" id="brand_id" class="form-control @error('brand') @enderror">

                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach

                            </select>

                            @error('brand')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label for="measure" class="form-label">Measure</label>
                            <select name="measure" id="measure" class="form-control @error('measure') @enderror">
                                <option disabled value=""></option>
                                <option value="Q">Q</option>
                                <option value="P">P</option>
                                <option value="N">N</option>
                            </select>
                            @error('maesure')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <label for="price">Price</label>
                            <input type="text" class="form-control @error('price') @enderror" name="price"
                                id="price">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-sm mt-3 mx-auto">Add Price</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/b.js') }}"></script>



</body>

</html>
