<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoProfy API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<header></header>

<div class="container-fluid">
    <div class="m-5">
        <div class="d-flex justify-content-center">
            <div class="col-lg-4">
                <div class="input-group-text">
                    <input id="target" type="search" name="target" class="form-control rounded" placeholder="https://example.com"
                           aria-label="Search"
                           aria-describedby="search-addon"/>
                    <button type="submit" value="send" class="btn btn-outline-primary">Find Backlinks</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="m-5">
        <div class="d-flex justify-content-center">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Url From</th>
                        <th scope="col">Url to</th>
                        <th scope="col">Rank</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Test Url From 1</td>
                        <td>Test Url to 1</td>
                        <td>Test Rank 1</td>
                    </tr>
                    <tr>
                        <td>Test Url From 2</td>
                        <td>Test Url To 2</td>
                        <td>Test Rank 2</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<footer></footer>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    // $(document).ready(function(){
    //     $("h1").css('color', 'red');
    //     $("p").css({ 'color': 'blue', 'font-size': '18px' });
    // });
</script>
</body>
</html>