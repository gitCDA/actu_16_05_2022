@extends("layouts.app")

    @section('content')

        @forelse ($typeactus as $typeactu)
            
        <!-- <a href="/{{ $typeactu->id }}">{{ $typeactu->categories }}</a> -->

        <a href="{{ route('categories', $typeactu) }}">{{ $typeactu->categories }}</a>

        @empty

        Pas de catégorie

        @endforelse

        <br><br>

        @forelse ($actus as $actu)

        <a href="{{ route('detail', $actu) }}">{{ $actu->actu }}</a>
        <br>
            
        @empty

        Pas d'actus
            
        @endforelse

    @endsection