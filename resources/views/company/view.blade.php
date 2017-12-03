<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- MESSAGE IF LISTING IS  SUCCESS -->
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


    View Page ng companies
        


    <a class="btn btn-info btn-sm" href="{{route('company.create')}}">Add Company</a>
</body>
</html>