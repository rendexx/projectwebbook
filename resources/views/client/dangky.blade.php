@extends('masterpage') @section('body')
<!--  Đăng ký của tài khoản khách hàng -->
<div class=" container">
    <div class="box-signup pt-3 pb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-12 p-0 pl-md-2 pr-md-2">
                <div class="signup">
                    <div class="text-center mt-3">
                        <h3 class="text-uppercase text-white">Đăng ký</h3>
                    </div>

                    <div id="dangky">
                        <form action="{{ route('register') }}" method="POST" class="form">
                        @csrf
                            <div class="row  no-margin">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-register">
                                    <input id="name" type="text" name="name" placeholder="Tài Khoản">
                                    <br>
                                    <input id="password" type="password" name="password" placeholder="Mật Khẩu">
                                    <input placeholder="Nhập Lại Mật Khẩu" id="password-confirm" type="password" name="password_confirmation" required>
                                    <br>
                                    <input id="hoten" type="text" name="hoten" placeholder="Họ Tên">
                                    <br>
                                    <input id="ngaysinh" type="date" name="ngaysinh" placeholder="Ngày Sinh">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-register">
                                    <input id="email" type="email" name="email" placeholder="Email">
                                <br>
                                <textarea id="diachi" rows="7"  name="diachi" placeholder="Địa Chỉ"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="nut-dang-ky">ĐĂNG KÝ</button>
                            </form>

                        <a href="{{url('/dangnhap')}}" style="text-decoration: none;">
                            <div class="but-dangky">
                                Bạn đã có tài khoản? <span class="text-font-weight">Đăng nhập</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Phần cuối trang -->
@endsection
