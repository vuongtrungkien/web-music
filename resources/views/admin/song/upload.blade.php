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
                        <label>Thể Loại
                        <select name="category_id" class="form-control" style="width: 500px;">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        </label>
                        <span> <a href="{{route('admin.create_category')}}" class="btn btn-primary">Thêm Thể loại </a></span>
                        <span> <a href="" class="btn btn-info">Sửa Thể Loại </a></span>
                    </div>
                    <div class="form-group">
                        <label >Ca sĩ
                        <select name="singer_id" class="form-control" style="width: 540px">
                            @foreach($singers as $singer)
                                <option value="{{$singer->id}}">{{$singer->name}}</option>
                            @endforeach
                        </select></label>
                       <span> <a href="{{route('admin.create_singer')}}" class="btn btn-primary">Thêm Ca Sĩ </a></span>
                        <span> <a href="" class="btn btn-info">Sửa Ca Sĩ </a></span>
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
