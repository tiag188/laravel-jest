@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Item</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <p class="card-text">{{ $item->site }}</p>
                <p class="card-text">{{ $item->description }}</p>
            </div>
        </div>
        <a href="{{ route('items.index') }}" class="btn btn-secondary mt-3">Voltar para Lista</a>
    </div>
@endsection
