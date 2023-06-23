
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet ">
    <link href="{{ URL::asset('css/all.min.css')}}" rel="stylesheet ">
    <link href="{{ URL::asset('css/FaceBook.css')}}" rel="stylesheet ">
    <link href="{{ URL::asset('css/Img.css')}}" rel="stylesheet ">

</head>
<body>

@yield('source')


<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/popper.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/mine.js')}}"></script>

</body>
</html>