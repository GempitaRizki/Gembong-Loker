@extends('admin.index')
@section('content')
    <section class="content" style="margin-top: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pekerjaan</h3>
                            <a href="{{ route('loker.addData') }}" class="btn btn-primary float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Salary</th>
                                        <th>Description</th>
                                        <th>Skill</th>
                                        <th>Publish</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $key => $job)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $job->Name }}</td>
                                            <td> {{ $job->location->name }}</td>
                                            <td>Rp.{{ number_format($job->Salary, 0, ',', '.') }}</td>
                                            <td>{{ $job->Description }}</td>
                                            <td>
                                                @php
                                                    $skillIds = explode(', ', $job->skill_id);
                                                    $skills = \App\Models\Skill::whereIn('id', $skillIds)
                                                        ->pluck('name')
                                                        ->implode(', ');
                                                @endphp
                                                {{ $skills }}
                                            </td>
                                            <td>{{ $job->created_at }}</td>
                                            <td>
                                                <a href="{{ route('loker.edit', $job->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('loker.destroy', $job->id) }}" method="POST"
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
