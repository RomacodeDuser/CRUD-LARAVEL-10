@extends("layouts.app")
@section('content')

<h1>Daftar Kandidat</h1>
<p>Silakan pilih salah satu kandidat yang Anda inginkan.</p>
<ul>
    @foreach ($kandidats as $kandidat)
    <li>
        <h3>{{ $kandidat->nama }}</h3>
        <p>Visi: {{ $kandidat->visi }}</p>
        <p>Misi: {{ $kandidat->misi }}</p>

        <!-- Form untuk menghapus data -->
        <form action="{{ route('kandidats.destroy', $kandidat->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>

        <a href="/kandidats/{{ $kandidat->id }}/edit" class="btn btn-info">Edit</a>
    </li>
    @endforeach
</ul>
</body>
</html>

@endsection
