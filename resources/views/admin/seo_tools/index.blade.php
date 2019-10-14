@extends('layouts.admin')

sdfsdfsdfsd



@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                @foreach($tools as $headline => $toolOptions)
                    <h4 class="m-t-0 header-title">{!! ucwords($headline) !!}</h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                @foreach($toolOptions['defaults'] as $optionKey => $optionValue)
                                    <th>{!! ucwords($optionKey) !!}</th>
                                @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($toolOptions['defaults'] as $optionKey => $optionValue)
                                <tr>
                                
                                        @if(!is_array($optionValue))
                                            {!! $optionValue !!}
                                        @endif
                                        </td>
                                
                                    
                                @endforeach
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                @endforeach

                
                
            </div>
        </div>
    </div>
@endsection