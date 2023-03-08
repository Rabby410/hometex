@extends('layouts.admin')
@section('content')
@extends('layouts.admin')
@section('content')
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Colors
                    <a href="{{ url('admin/colors') }}" class="btn btn-sm btn-primary text-white float-end">Back</a>
                </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/colors/create') }}"  method="POST">
                        @csrf
                        <div class="mb-3">
                            <label> Color Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label> Color Code</label>
                            <input type="text" name="code" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label> Color Status</label><br/>
                            <input type="checkbox" name="status" style="width: 30px; height: 30px;" /> Checked = Hidden And Unchecked = Visible
                        </div>
                        <div>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
@endsection
