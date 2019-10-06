@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Upload File</h4>

            <input type="file" class="dropify" data-height="300" />
        </div>
    </div><!-- end col -->
</div>
<!-- end row -->

@if($images)
    @foreach($images as $image)

    @endforeach
@else
    Display Message
@endif        

@endsection

