@extends('layouts.internal')
@section('page-title')
    Available Downloads For {{ strtoupper($clientCode) }}
@stop
@section('content')
    <section>
        <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
                <div class="panel panel-info">
                    @if(!is_array($files) && $files->hasError())
                        <div class="panel-heading">
                            <h1 class="panel-title text-center">
                                {{ $files->errorMessage() }}
                            </h1>
                        </div>
                    @else
                        <table class="table table-condensed table-striped">
                            <tr>
                                <th colspan="2">Files</th>
                            </tr>
                            @foreach($files as $file)
                                <tr>
                                    <td>
                                        <a rel="nofollow" href="{{ $file->webContentLink }}" class="btn btn-sm btn-success">
                                            <i class="fa fa-download"></i> Download
                                        </a>
                                    </td>
                                    <td>
                                        {{ $file->title }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop