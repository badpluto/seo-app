<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoProfy API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<div class="container-fluid">
    <div class="m-5">
        <form name="searchForm" id="searchForm" method="post" action="javascript:void(0)">
            @csrf
            <div class="d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="input-group-text">
                        <input id="target" type="search" name="target" class="form-control rounded"
                               placeholder="https://example.com"
                               aria-label="Search"
                               aria-describedby="search-addon"/>
                        <button type="submit" value="submit" id="submit" class="btn btn-outline-primary">Find
                            Backlinks
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@if(count($results) > 0)
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
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $result->url_from }}</td>
                                <td>{{ $result->url_to }}</td>
                                <td>{{ $result->rank }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    if ($("#searchForm").length > 0) {
        $("#searchForm").validate({
            rules: {
                target: {
                    required: true,
                    maxlength: 255
                },
            },
            messages: {
                target: {
                    required: "Please enter target",
                    maxlength: "Your target maxlength should be 255 characters long."
                },
            },
            submitHandler: function (form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').html('Please Wait...');
                $("#submit").attr("disabled", true);
                $.ajax({
                    url: "{{url('send')}}",
                    type: "POST",
                    data: $('#searchForm').serialize(),
                    success: function (response) {
                        document.getElementById("searchForm").reset();
                        window.location.reload();
                    }
                });
            }
        })
    }
</script>
</body>
</html>