@section("title")
    Thêm Giá Vé
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm giá vé</h1>
                    <a href="{{url("/giave/list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm giá vé</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm giá vé</h3>
                </div>
                <form role="form" method="post" action="{{url("/giave/create")}}" enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">ID Chuyến bay</label>
                            <input type="text" class="form-control" name="idchuyenbay" id="idchuyenbay" value="{{old("idchuyenbay")}}" placeholder="ID chuyến bay">
                            @error("idchuyenbay")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Vé thường</label>
                            <input type="text" class="form-control" name="vethuong" id="vethuong" value="{{old("vethuong")}}" placeholder="Vé thường">
                            @error("vethuong")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Vé vip</label>
                            <input type="text" class="form-control" name="vevip" id="vevip" value="{{old("vevip")}}" placeholder="Vé vip">
                            @error("vevip")
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

