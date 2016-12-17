@extends('layouts.internal')
@section('page-title')
    Audisee - Internal
@overwrite
@section('content')	
    <div style="height:100%;width:100%;position:fixed;padding-top:50px;">
        <iframe src="{{ $_ENV['AUDIT_API_URL'] . 'internal'}}" frameborder="0" style="height:100%;width:100%;" scrolling="yes"></iframe>
    </div>
@stop