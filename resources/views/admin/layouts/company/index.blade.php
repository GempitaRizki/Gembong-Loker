@extends('admin.index')
@section('content')
    <section class="content" style="margin-top: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Company</h3>
                            <a href="{{ route('company.addData') }}" class="btn btn-primary float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Alamat Lengkap</th>
                                        <th>Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companys as $key => $company)
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->address }}</td>
                                        <td>{{ $company->detail_address }}</td>
                                        <td>{{ $company->images }}</td>
                                        <td>
                                            <a href="{{ route('company.edit', $company->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('company.destroy', $company->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
