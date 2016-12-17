@extends('layouts.flat')
@section('scripts')
    <script>
        $(document).on('click', '#send', function(e){
            e.preventDefault();
            uploadCSV();
        });
        function uploadCSV() {
            $.ajax({
                url:  '/test', // point to server-side PHP script
                cache: false,
                processData: false,
                contentType: false,
                data: new FormData($('#test-form')[0]),
                type: 'post',
                success: function (result) {
                    console.log(result);
                }
            });
        }
        function getFormData() {
            return new FormData($('#test-form')[0]);
        }
    </script>

@stop
@section('content')
    <section class="white">
        <div class="container">
            <form id="test-form" method="post" enctype="multipart/form-data" action="/test">
                {!!  csrf_field() !!}
                <div class="form-group">
                    <label>email</label>
                    <input type="text" name="email" value="test@lojistic.com">
                </div>
                <div class="form-group">
                    <label>Files</label>
                    <input type="file" id="test-input" name="invoice-csv" multiple class="form-control" placeholder="">
                </div>
                <div id="send" class="btn btn-success">go</div>
                <button>submit</button>
            </form>
        </div>
    </section>

@stop
