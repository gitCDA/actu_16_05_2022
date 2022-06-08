@extends("layouts.app")

    @section('content')

        {{ $details->actu }}
        <br>
        {{ $details->detail }}
        <br>
        {{ $details->image }}

    @endsection