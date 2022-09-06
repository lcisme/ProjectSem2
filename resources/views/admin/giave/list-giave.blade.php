@section("title")
    Giá Vé
@endsection


@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Giá Vé</h1>
                    <a href="{{url("/giave/create")}}" class="btn btn-outline-info float-right">
                        Thêm Giá Vé
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Giá vé</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="get" action="{{url("/giave/list")}}">
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" >
                                        <select name="idchuyenbay" class="form-control float-right">
{{--                                            <option value="">--Select Chuyến bay--</option>--}}
{{--                                            @foreach($classeslist as $item)--}}
{{--                                                <option @if(app("request")->input("classID")==$item->cid)  selected @endif value="{{$item->cid}}">{{$item->name}}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>Tên chuyến bay</th>
                                    <th>Vé thường</th>
                                    <th>Vé vip</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($giave as $item)
                                    <tr>
                                        <td>{{$item->idchuyenbay}}</td>
                                        <td>{{$item->vethuong}}</td>
                                        <td>{{$item->vevip}}</td>
                                        <td><a href="{{url("/giave/edit",['idgiave'=>$item->idgiave])}}" class="btn btn-outline-info">+</a></td>
                                        <td>
                                            <form action="{{url("/giave/delete",['idgiave'=>$item->idgiave])}}" method="post">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" onclick="return confirm('Xóa Giá vé chuyến {{$item->idchuyenbay}} ?')" class="btn btn-outline-danger">-</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {!! $giave-> appends(app("request")->input())-> links() !!}
    </div>
@endsection

