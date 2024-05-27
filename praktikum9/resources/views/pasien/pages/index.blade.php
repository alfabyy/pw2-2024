@extends('admin.template.master')

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
                            <h3 class="card-title">Tabel Pasien</h3>

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
                            <h2 class="text-center">Data Pasien</h2>
                            <a href="#"><button class="btn btn-primary mb-1">Tambah Data</button></a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>        
                                    @foreach ($pasien as $p)
                                    <tbody>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->kode }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->tmp_lahir }}</td>
                                        <td>{{ $p->tgl_lahir }}</td>
                                        <td>{{ $p->gender }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td><button class="btn btn-warning"><a href="#" class="text-white">Edit</a></button> | <button type="button" class="btn btn-danger"><a href="#" class="text-white">Delete</a></button></td>
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