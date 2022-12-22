@extends('layouts.main')

@section('content')
    <main>
        <div class="container cards">
            <div class="card">
                <img :src="cardImage" :alt="cardTitle">
                <h4>{{ cardTitle }}</h4>
            </div>
        </div>

    </main>
@endsection
