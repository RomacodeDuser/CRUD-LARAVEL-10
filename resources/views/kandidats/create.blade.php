@extends("layouts.app")
@section('content')
<div class="card">
    <a href="/kandidats/"><button class="btn btn-primary">Kembali</button></a>

    <div class="card-body">
        <form action="/kandidats" method="POST">
        @csrf

            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama">

            <label for="visi">Visi</label>
            <input type="text" class="form-control" name="visi">

            <label for="misi">Misi</label>
            <input type="text" class="form-control" name="misi">
        </div>

        <div class="card-footer">
            <button class="btn btn-primary">Simpan</button>
            <button class="btn btn-danger">Batal</button>
        </form>
    </div>
</div>
@endsection
