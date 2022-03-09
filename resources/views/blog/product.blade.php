@extends('layouts.baru')

@section('tittle')
    {{ $title }}
@section('content')
<div class="products">
        <div class="container">
            <div class="row">
                <div id="Grid">
                    <section class="row justify-content-center">
                        <div class="container-center" style="margin-top:45px">
                            <table class="table table-bordered text-center">
                                <style>
                                    table,
                                    td {
                                        border: 2px solid #000000;
                                        text-align:center;
                                    }
                                    
                                    thead,
                                    tbody {
                                        background-color: #81afc7;
                                        color: #fff;
                                    }
                                    th{
                                        text-align: center;
                                    }
                                </style>
                                <thead>
                                    <tr>
                                        <th>NOMOR</th>
                                        <th>NAMA</th>
                                        <th>GAMBAR</th>
                                        <th>DESKRIPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td><img height="150" width="250" src="{{ $p->gambar }}" /></td>
                                        <td>{{ $p->deskripsi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>    
                </div>
            </div>
        </div>
</div>
@endsection