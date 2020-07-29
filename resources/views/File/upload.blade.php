@extends('layouts.app')

@section('upload')



    <h1 class="text-center">Upload File</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('upload.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <label for="" class="">Choose your file:</label>

            <br>

            <input type="file" name="file" class="form-control-file">

            <label for="" class="">Enter File name:</label>

            <input type="text" name="file_title">

        </div>

        <input type="submit" value="Upload" class="btn btn-info" >

    </form>



@endsection

