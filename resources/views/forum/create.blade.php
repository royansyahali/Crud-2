@extends('adminLte.template')

@section('content')
<div class="ml-3">
<form action="/pertanyaan/store" method="POST">
    @csrf
    <div class="form-group">
      <label for="Judul">Judul</label>
      <input type="text" class="form-control" id="Judul" name="judul">
    </div>
    <div class="form-group">
      <label for="Isi">Pertanyaan</label>
      <textarea class="form-control" id="Isi" rows="3" name="isi"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
@endsection
