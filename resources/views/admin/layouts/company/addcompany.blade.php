@extends('admin.index')
@section('content')
    <section class="content" style="margin-top: 35px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-header">
                        <a href="{{ route('company.index') }}" class="btn btn-danger float-right">Back</a>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Company</h3>
                        </div>
                        <form action="{{ route('add-data-company') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Masukan Nama Company">
                                </div>
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <select name="address" class="form-control" id="address">
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-body" style="col-sm-12;">
                                    <div class="form-group">
                                        <label for="detail_address">Alamat Lengkap</label>
                                        <textarea class="form-control" name="detail_address" id="detail_address" rows="3"
                                            placeholder="Masukan Alamat Lengkap"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="images">Upload Logo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="images" name="images">
                                            <label class="custom-file-label" for="images">Choose file</label>
                                        </div>

                                    </div>
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
