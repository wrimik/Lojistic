@extends('layouts.packagefox')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Instant Online UPS & FedEx Audit - Lojistic',
        'description' => 'Upload your carrier invoice to see the potential savings using our parcel audit test drive tool.',
        'keywords' => 'parcel audit, parcel test audit, parcel audit demo, reduce shipping costs, shipping audit',
    ])
@overwrite
@section('styles')
    {!! Html::style('/css/pages/test-audit.css?'.v())  !!}
@stop
@section('scripts')
    {!! Html::script('/js/2016/misc/audit.js?'.v())  !!}
    <script type="text/javascript">
        $(document).ready(function(){
            AuditController.load('{{ $crypt_id or '' }}');
            $('[data-inputmask]').inputmask();
        });
        abTrack('audisee-landing', 'tool', false);
    </script>
@stop
@section('content')
    <section id="audisee" class="interview">
        <div class="col-sm-4 col-xs-12 brightBlue">
            <div class="interview-title col-xs-12">
                @include('parts.test-audit.title-0')
                @include('parts.test-audit.title-1')
                @include('parts.test-audit.title-3')
            </div>
        </div>
        <div class="col-sm-8 steps silver">
            @include('parts.test-audit.step-0')
            @include('parts.test-audit.step-1') {{-- form --}}
            @include('parts.test-audit.step-2') {{-- upload circ --}}
            @include('parts.test-audit.step-5')
            @include('parts.test-audit.uncompelling-message')
            @include('parts.test-audit.recover-credits-modal')
            @include('parts.test-audit.busy')
            @include('parts.test-audit.modal-filesize')
            @include('parts.modal')
            @include('parts.test-audit.inst-fedex')
            @include('parts.test-audit.inst-ups')
            @include('parts.vjs-components.timer')
        </div>
    </section>
    @include('parts.test-audit.preview')
@stop
