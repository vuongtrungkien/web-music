@extends('admin.index')
@section('title', 'upload')

@section('content')

    <div class=" col-12 col-md-12">
        <div style="margin-top: 100px;" class="row col-xl-9">
            <div class="col-12">
                <h1>Thêm mới Bài hát</h1>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <form method="post" action="{{route('admin.store_music')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên Bài Hát</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label>Thể Loại</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ca sĩ </label>
                        <select name="singer_id" class="form-control">
                            @foreach($singers as $singer)
                                <option value="{{$singer->id}}">{{$singer->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>File Nhạc</label>
                        <input type="file" class="form-control" name="music">
                    </div>
                    <button type="submit" class="btn btn-primary">Tải Lên</button>
                </form>
            </div>
        </div>
    </div>
@endsection
