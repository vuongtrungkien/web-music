@extends('admin.index')
@section('title', 'Danh sách ca sĩ')

@section('content')
    <div class=" col-12 col-md-12">
        <div style="margin-top: 100px;" class="row col-xl-9">
            <div class="col-12">
                <h1>Danh Sách Ca Sĩ</h1>
            </div>

            <div class="col-12">
               <table class="table-bordered">
                   <tr>
                       <td>Tên Ca sĩ</td>
                       <td>Số Bài Hát</td>

                   </tr>
                   @foreach($singers as $singer)
                       <tr>
                           <td>{{$singer->name}}</td>
                           <td>{{count($singer->song) e}}</td>
                           <td><a class="btn btn-primary">Sửa</a></td>
                           <td><a class="btn btn-danger">Xóa</a></td>
                       </tr>
                       @endforeach
               </table>
            </div>
        </div>
    </div>




@endsection
