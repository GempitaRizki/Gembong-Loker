@extends('admin.index')
@section('content')
    <section class="content" style="margin-top: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Company</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('company.update', $company->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $company->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="address" name="address" id="address" class="form-control"
                                        value="{{ $company->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="detail_address">Detail Address:</label>
                                    <input type="detail_address" name="detail_address" id="detail_address" class="form-control"
                                        value="{{ $company->detail_address }}">
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
