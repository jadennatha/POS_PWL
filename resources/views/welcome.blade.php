@extends('layout.app')

{{-- customize layout sections --}}

@section('subtitle', 'welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'welcome')

{{-- content body: main page content --}}

@section('content_body')
    <p>Welcome to this beatiful admin panel.</p>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- add here extra stylesheet --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- push extra scripts --}}

@push('js')
    <script> console.log("hi, im using the laravel-AdminLTE package!"); </script>
@endpush