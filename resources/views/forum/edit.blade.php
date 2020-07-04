@extends('adminLte.template')

@section('content')
<div class="ml-3">
<form action="/pertanyaan/{{$item->id}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="Judul">Judul</label>
      <input type="text" class="form-control" id="Judul" name="judul" value="{{$item->judul}}">
    </div>
    <div class="form-group">
      <label for="Isi">Pertanyaan</label>
      <textarea class="form-control" id="Isi" rows="3" name="isi">{{$item->isi}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/pertanyaan" class="btn btn-secondary" role="button" aria-pressed="true">Back</a>

</form>
</div>
@endsection
