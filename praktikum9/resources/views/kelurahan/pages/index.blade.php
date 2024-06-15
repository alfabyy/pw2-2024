@extends('pasien.template.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Kelurahan</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-center">Data Kelurahan</h2>
                            <a href="{{ route('kelurahan.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Kecamatan ID</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>        
                                    @foreach ($kelurahan as $k)
                                    <tbody>
                                        <td>{{ $k->id }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k->kecamatan_id }}</td>
                                        @method('DELETE')
                                        <td>
                                            <a href="{{ route('kelurahan.show', $k->id) }}" class="btn btn-info">Read</a> | 
                                            <a href="{{ route('kelurahan.edit', $k->id) }}" class="btn btn-warning">Update</a> | 
                                            <form action="{{ route('kelurahan.destroy', $k->id) }}" method="POST" style="display: inline;">
                                             @csrf
                                             @method('DELETE')
                                            <button type="submit" class="btn btn-danger" 
                                                onclick="return confirm('Are you sure you want to delete this kelurahan?')">Delete</button>
                                            </form>
                                        </td>
                                    </tbody>
                                    @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection



