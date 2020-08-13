@extends('layouts.app')
@section('content')

<div class="container">

    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" />
        <br>
        <input type="submit" name="Upload" />
    </form>


    <br><br>
    <br><br>

    <img src="{{asset('/storage/' .'wait.png')}}" class="img-thumbnail" alt="Responsive image" style="width: 50%; height: 50%;">

</div>
@endsection