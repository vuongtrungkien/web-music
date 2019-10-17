@extends('admin.index')
@section('title', 'Thêm ca sĩ')

@section('content')
    <div class=" col-12 col-md-12">
        <div style="margin-top: 100px;" class="row col-xl-9">
            <div class="col-12">
                <h1>Thêm Ca Sĩ</h1>
            </div>

            <div class="col-12">
                <form method="post" action="{{route('admin.store_singer')}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên Ca Sĩ</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter singer name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm Mới</button>
                </form>
            </div>
        </div>
    </div>



@endsection
