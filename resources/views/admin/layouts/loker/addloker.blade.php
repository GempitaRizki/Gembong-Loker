@extends('admin.index')
@section('content')
    <section class="content" style="margin-top: 35px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-header">
                        <a href="{{ route('loker.index') }}" class="btn btn-danger float-right">Back</a>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Pekerjaan</h3>
                        </div>
                        <form action="{{ route('add-data-loker') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" name="Name" class="form-control" id="Name"
                                        placeholder="Masukan Nama Pekerjaan">
                                </div>
                                <div class="form-group">
                                    <label for="Salary">Gaji</label>
                                    <input type="text" name="Salary" class="form-control" id="Salary"
                                        placeholder="Masukan Gaji">
                                </div>
                                <div class="form-group">
                                    <label for="location_id">Lokasi Pekerjaan</label>
                                    <select name="location_id" class="form-control" id="location_id">
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-body" style="col-sm-12;">
                                    <div class="form-group">
                                        <label for="Description">Description Pekerjaan</label>
                                        <textarea class="form-control" name="Description" id="Description" rows="3"
                                            placeholder="Masukan Deskripsi Pekerjaan"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="skills">Skill</label>
                                    <select name="skills[]" class="form-control" id="skills" multiple>
                                        @foreach ($skills as $skill)
                                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection

