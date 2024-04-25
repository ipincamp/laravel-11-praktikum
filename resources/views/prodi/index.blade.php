@extends('layouts.app')

@section('content')
    <div class="row justify-content-center py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Data Prodi') }}

                    <button type="button" class="bg-success text-white rounded float-end" data-bs-toggle="modal" data-bs-target="#tambahModalProdi">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="mahasiswaTable" class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($prodis as $row)
                                    <tr>
                                        <td class="text-center">{{ $no }}</td>
                                        <td>{{ $row->kode }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-warning btn-sm m-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $row->kode }}">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $row->kode }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('prodi.modals.add')
    @include('prodi.modals.edit-delete')
@endsection