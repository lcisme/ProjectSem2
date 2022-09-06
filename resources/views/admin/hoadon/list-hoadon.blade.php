@section("title")
    Hóa Đơn
@endsection


@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hóa Đơn</h1>
                    <a href="{{url("/hoadon/create")}}" class="btn btn-outline-info float-right">
                        Thêm Hóa Đơn
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Hóa Đơn</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="get" action="{{url("/hoadon/list")}}">
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" >
                                        <input type="text" value="{{app("request")->input("idkh")}}"  name="idkh" class="form-control float-right" placeholder="Search by ID khách hàng">
                                        <select name="Brand" class="form-control float-right">
                                            <option value="">--Select ID--</option>
                                            @foreach($hoadon as $item)
                                                <option @if(app("request")->input("Brand")==$item->idkh)  selected @endif value="{{$item->idkh}}">{{$item->idkh}}</option>
                                            @endforeach
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
                                    <th>ID Khách hàng</th>
                                    <th>Tên Chuyến bay</th>
                                    <th>Ngày đặt vé</th>
                                    <th>Trạng thái</th>
                                    <th>Vị trí ngồi</th>
                                    <th>Giảm giá</th>
                                    <th>Tổng tiền</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hoadon as $item)
                                    <tr>
                                        <td>{{$item->users->name}}</td>
{{--                                        <td>{{$item->chuyenbay->tenchuyenbay}}</td>--}}
                                        <td>{{$item->ngaydatve}}</td>
                                        <td>{{$item->trangthai}}</td>
                                        <td>{{$item->vitringoi}}</td>
                                        <td>{{$item->giamgia}}</td>
                                        <td>{{$item->tongtien}}</td>
                                        <td><a href="{{url("/hoadon/edit",['id'=>$item->id])}}" class="btn btn-outline-info">+</a></td>
                                        <td>
                                            <form action="{{url("/hoadon/delete",['idkh'=>$item->id])}}" method="post">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" onclick="return confirm('Xóa Hóa Đơn {{$item->idkh}} ?')" class="btn btn-outline-danger">-</button>
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
    {!! $hoadon-> appends(app("request")->input())-> links() !!}
    </div>
@endsection
