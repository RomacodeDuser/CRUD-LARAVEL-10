@extends("layouts.app")
@section('content')
<div class="card">
    <div class="card-body">
        <a href="/kandidats/"><button class="btn btn-primary">Kembali</button></a>
        <h1> Informasi Kandidat</h1>
        <h3>{{ $kandidat->nama }}</h3>
        <p>Visi: {{ $kandidat->visi }}</p>
        <p>Misi: {{ $kandidat->misi }}</p>
    </div>
</div>
@endsection
