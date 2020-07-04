@extends('adminLte.template')

@section('content')
    <div class="m-3">
        <div class="alert alert-dark" role="alert">
            {{$item->isi}}
        </div>
        <form action="{{route("jawaban.store",["pertanyaan_id" => $item->id])}}" method='POST'>
            @csrf
            <div class="form-group">
                <label for="Isi">Reply</label>
                <textarea class="form-control" id="Isi" rows="3" name="isi"></textarea>
            </div>
            <button type="submit" class="btn btn-success mb-3 ">Submit</button>
            <a href="/pertanyaan" class="btn btn-secondary mb-3" role="button" aria-pressed="true">Back</a>
        </form>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
        <table class="table">
            <thead>
              <tr class="bg-dark">
                <th scope="col" class="text-center">Reply</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($jawaban as $value)
                <tr class="bg-light">
                    <td>{{$value->isi}}</td>
                </tr>
                @empty
                <td colspan="2"  class="table-info text-center">No Reply</td>
                @endforelse
            </tbody>
          </table>
        </div>
        </div>
        </div>
    </div>
@endsection
