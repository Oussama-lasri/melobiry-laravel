{{-- {{dd($playlist)}} --}}
@extends('layout')
@section('content')
    
        {{-- @foreach ($piecesMusicals as $piece) --}}
            {{-- <x-music-card :piece="$piece" /> --}}
            @livewire('musics')
        {{-- @endforeach --}}
    </div>

@endsection
