@extends('masterpage')
@section('body')
    {{-- Câu thông báo --}}
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="table-info-client">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <i class="icon-calendar"></i>
                        <h3 class="panel-title">Thông Tin Khách Hàng</h3>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal row-border" action="thong-tin-khach-hang/sua/{{Auth::user()->name}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Họ Và Tên</label>
                                <div class="col-md-9">
                                    <input type="text" name="hoten" class="form-control" value="{{$thongtin->hoten}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Ngày Sinh</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="date" name="ngaysinh" value="{{$thongtin->ngaysinh}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Địa Chỉ</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="diachi" value="{{$thongtin->diachi}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" value="{{$thongtin->email}}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success custombutton">Cập Nhật Thông Tin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-info-client">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <i class="icon-calendar"></i>
                        <h3 class="panel-title">Đổi Mật Khẩu</h3>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal row-border" action="{{route('password.update')}}" method="POST">
                           @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mật Khẩu Cũ</label>
                                <div class="col-md-8">
                                    <input id="oldpassword" type="password" name="oldpassword" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="oldpassword" required>

                                    @if($errors->has('oldpassword'))
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{$errors->first('oldpassword')}}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mật Khẩu Mới</label>
                                <div class="col-md-8">
                                    <input id="password" type="password"  name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>

                                    @if($errors->has('password'))
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{$errors->first('password')}}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nhập Lại Mật Khẩu</label>
                                <div class="col-md-8">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success custombutton">Đổi Mật Khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

