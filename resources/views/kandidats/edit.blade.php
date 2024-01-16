@extends('layouts.app')
@section('content')

 <form action="{{ route('kandidats.update', $kandidat->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col 12">
            <div class="card">
                <div class="card-header">
                    <h5>halaman edit</h5>
                </div>
                <div class="card-body">
                    <label for="">nama</label>
                     <input type="text" class="form-control" name="nama" value="{{$kandidat->nama}}">

                     <label for="">visi</label>
                    <input type="text" class="form-control" name="visi" value="{{$kandidat->visi}}">

                    <label for="">misi</label>
                    <input type="text" class="form-control" name="misi" value="{{$kandidat->misi}}">


                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a class="btn btn-danger" href="/kandidats">Batal</a>
                </form>
            </div>
        </div>
    </div>
</form>
@endsection
