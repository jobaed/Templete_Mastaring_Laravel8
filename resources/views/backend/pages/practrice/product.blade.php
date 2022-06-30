<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="card">
            {{-- <h1>Products</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Material</th>
                  </tr>
                </thead> --}}
                {{-- <tbody>
                    @foreach ($products as $product)

                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>
                            <ol>
                                @foreach ($product->materials as $material)
                                   <li>{{ $material->material_name }} - {{ $material->pivot->material_qry }}</li>
                                @endforeach
                            </ol>
                        </td>
                    </tr>

                  @endforeach
                  
                </tbody>
            </table> --}}

            <h1>Materials</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Brand Name</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)

                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->name }}</td>
                      <td>{{ optional($product->brand)->brand }}</td>
                    </tr>

                    @endforeach
                  
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>


