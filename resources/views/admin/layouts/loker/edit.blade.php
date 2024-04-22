@extends('admin.index')
@section('content')
    <section class="content" style="margin-top: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Lowongan Kerja</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('loker.update', $jobs->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="Name">Name:</label>
                                    <input type="text" name="Name" id="Name" class="form-control"
                                        value="{{ $jobs->Name }}">
                                </div>

                                <div class="form-group">
                                    <label for="Salary">Salary:</label>
                                    <input type="Salary" name="Salary" id="Salary" class="form-control"
                                        value="{{ $jobs->Salary }}">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description:</label>
                                    <input type="Description" name="Description" id="Description" class="form-control"
                                        value="{{ $jobs->Description }}">
                                </div>
                                <div class="form-group">
                                    <label for="Skill">Skill:</label>
                                    <input type="Skill" name="Skill" id="Skill" class="form-control"
                                        value="{{ $jobs->Skill }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
