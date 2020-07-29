
@extends('layouts.app')

@section('files')


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Files</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Owner</th>
                            <th>Title</th>
                            <th>File</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($file11 as $file)

                            <tr>
                                <td>{{$file->id}}</td>
                                <td>{{$file->user_id}}</td>
                                <td>{{$file->file_title}}</td>
                                <td><embed src="{{asset($file->file)}}"  type="application/pdf" width="700" height="350" />
                                </td>
                                <td>{{$file->created_at->diffForHumans()}}</td>
                                <td>{{$file->updated_at->diffForHumans()}}</td>
                                <td>

{{--                                    <form method="post" action="{{route('file.destroy',$file->id)}}" enctype="multipart/form-data">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button type="submit" class="btn btn-danger">Delete</button>--}}

                                    </form>

                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>





@endsection
