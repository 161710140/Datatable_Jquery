@extends('layouts.a')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Nama</li>
                </ol>
            </nav>
                <div class="card-header">Data Nama orang</div>
                <br>
                </center> 
                <div class="card-body">
                    <table class="table table-striped" id='table'>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Lahir</th>
                        <tr>
                            <td id ='as'></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function(){

        $('#table').DataTable({
            processing:true,
            serverSide:true,
            ajax:'/user/json',
            columns:[
            {data: 'id',name: 'id'},
            {data: 'Nama',name: 'Nama'},
            {data: 'Lahir',name: 'Lahir'},
            ]
        });
    });
</script>
@endpush
