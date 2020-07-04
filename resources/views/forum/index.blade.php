@extends('adminLte.template')

@extends('adminLte.template')

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">List Questions</h3>
        <a href="/pertanyaan/create" class="btn btn-secondary btn-lg ml-3 btn-sm" role="button" aria-pressed="true">Create Question</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>#</th>
                <th>Title</th>
                <th>Question</th>
                <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($item as $items)
                <tr>
                    <td>{{$items->id}}</td>
                    <td>{{$items->judul}}</td>
                    <td>{{$items->isi}}</td>
                    <td><span style="font-size: 30px;">
                        <a href="{{route("jawaban.detail",["pertanyaan_id" => $items->id])}}" style="color: green;"><i class="fas fa-comment-dots"></i></a>
                        <a href="/pertanyaan/{{$items->id}}/edit" class="ml-3"><i class="fas fa-edit"></i></a>
                        <form action="/pertanyaan/{{$items->id}}" method="POST" class="d-inline">
                            @csrf
                            @method("DELETE")
                            <button style="font-size: 32px; color: red" class="btn mb-1"><i class="far fa-trash-alt"></i></button>
                        </form>
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Isi</th>
                </tr>
            </tfoot> --}}
        </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@push('contentJs')
<script src="{{asset('adminLte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush
