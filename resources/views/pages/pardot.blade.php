@extends('layouts.flat')
@section('content')
    <section class="white">
        <div class="container">
            <div class="col-xs-6">
                <form action="https://go.pardot.com/l/142971/2016-02-01/3hg">
                    <?php $fields = ['name', 'email', 'phone'];?>
                    @foreach($fields as $field)
                        <div class="form-group">
                            <label>{{ $field }}</label>
                            <input name="{{ $field }}" type="text" class="form-control" placeholder="">
                        </div>
                    @endforeach
                    <div class="form-group">
                        <input type="submit" class="btn btn-lg btn-primary" value="SUBMIT" placeholder=""/>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop