@extends('templates/header')

@section('content')
<div class="container">
    <section class="content">
        <form class="well form-search" id="formUser">
        {{csrf_field()}}
            <input type="text" class="input-medium search-query" placeholder="Tambah user baru" name="nama">
            <button type="button" class="btn addUser">Tambah</button>
        </form>
        <table class="table table-bordered" id="main_table">
        @foreach($datahandle as $x)
        <tr>
            <td colspan="3">{{$x->user->nama}}</td>
            <td colspan="3" rowspan = "2">
                <form class="well form-search" action="{{ url('/user/'.$x->id) }}" method="POST">
                {{csrf_field()}}
                    <input type="text" class="input-medium search-query" placeholder="Tambah skill baru" name="name">
                    <button type="submit" class="btn">Tambah</button>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="3">{{$x->name}}</td>
        </tr>
        @endforeach
    </table>
    </section>
</div>
@endsection

@push('script')
<script>
    $(function(){
        $('.addUser').click(function(e){
            $.ajax({
                url : "{{ url('/post')}}",
                method : "POST",
                data : $('#formUser').serializeArray(),
                success : function(){
                    alert('User berhasil ditambahkan');
                    $('#main_table').fadeOut();
                    $('#main_table').load("{{ url('/')}} #main_table", function(){
                        $('#main_table').fadeIn();
                    })
                },
                error : function(){
                    alert('Gagal ditambahkan');
                }
            });
        });
    });
</script>
@endpush