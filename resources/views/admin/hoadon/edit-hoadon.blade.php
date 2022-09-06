@section("title")
    Sửa Hóa Đơn
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Sửa Hóa Đơn</h1>
                    <a href="{{url("/hoadon/list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> Sửa Hóa Đơn</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Staff</h3>
                </div>
                <form role="form" method="post" action="{{url("/hoadon/edit",['staffs'=>$staffs->sID])}}">
                    @csrf
                    @method("put")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">sID</label>
                            <input disabled type="text" class="form-control" name="sID" id="sID" value="{{$staffs->sID}}" placeholder="sID">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="Name" id="Name"  value="{{$staffs->Name}}" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="Address" id="Address"  value="{{$staffs->Address}}" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="">Birthday</label>
                            <input type="date" class="form-control" name="Birthday" id="Birthday" value="{{$staffs->Birthday}}" placeholder="Birthday">
                        </div>
                        <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" class="form-control" name="Salary" id="Salary" value="{{$staffs->Salary}}" placeholder="Salary">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="Phone" id="Phone" value="{{$staffs->Phone}}" placeholder="Phone">
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

