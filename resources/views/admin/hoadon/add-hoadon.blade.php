@section("title")
    Thêm Hóa Đơn
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm Hóa Đơn</h1>
                    <a href="{{url("/hoadon/list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm Hóa Đơn</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm Hóa Đơn</h3>
                </div>
                <form role="form" method="post" action="{{url("/hoadon/create")}}" enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">ID Khách hàng</label>
                            <select name="idkh" class="form-control">
                                @foreach($users as $item)
                                    <option @if(old("idkh") == $item->id) selected @endif value="{{$item->id}}">{{$item->id}}</option>
                                @endforeach
                            </select>
                            @error("idkh")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">ID Chuyến bay	</label>
                            <input type="text" class="form-control"  name="idchuyenbay" id="idchuyenbay"  value="{{old("idchuyenbay")}}" placeholder="ID Chuyến bay">
                            @error("idchuyenbay")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Ngày Đặt Vé</label>
                            <input type="date" class="form-control" name="ngaydatve" id="ngaydatve" value="{{old("ngaydatve")}}" placeholder="Ngày đặt">
                            @error("ngaydatve")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <select name="trangthai" class="form-control">
                                <option value="Selectoption">Select Option</option>
                                <option value="Waitting">Waitting</option>
                                <option value="Hired">Hired</option>
                                <option value="Done">Done</option>
                            </select>
                            @error("trangthai")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Vị trí ngồi</label>
                            <input type="text" class="form-control" name="vitringoi" id="vitringoi" value="{{old("vitringoi")}}" placeholder="Vị trí ngồi">
                            @error("vitringoi")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input type="text" class="form-control" name="giamgia" id="giamgia" value="{{old("giamgia")}}" placeholder="Giảm giá">
                            @error("giamgia")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tổng tiền</label>
                            <input type="text" class="form-control" name="tongtien" id="tongtien" value="{{old("tongtien")}}" placeholder="Tồng tiền">
                            @error("tongtien")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

