@extends('masterpage') @section('body')
<!--trạng thái đơn hàng-->
<div class="bg-white pt-4 pb-4 mt-4 mb-4">
    <div class="pb-3 text-center font-weight-bold" style="color: #c00; font-size: 22px">Đơn hàng của tôi</div>
    <!--fb667e-->
    @foreach($databill as $key => $values)
    <div class="mt-3 mb-3">
             @if($values->trangthai == 0)
             <div class="pt-md-3 pb-md-3 " style="border: 2px solid #fb667e">
            @else ($values->trangthai == 1)
            <div class="pt-md-3 pb-md-3 " style="border: 2px solid #84c686">
            @endif
       
            <div class="row m-0 d-flex justify-content-between pl-3 pr-3">
                <div class="col-md-2 col-3 font-weight-bold p-0">
                    <span class="title">Mã đơn hàng</span>
                    <div class="mt-1 title-bill" style="color: blue">{{$values->ma_HD}}</div>
                </div>

                <div class="col-md-2 col-3 font-weight-bold p-0 text-justify">
                    <span class="title">Ngày mua</span>
                    <div class="mt-1 date-bill" style="color: blue">
                    {{ date_format(date_create($values->ngaylap), "d/m/Y") }}
                </div>
                </div>

                <div class="col-md-2 col-3 font-weight-bold p-0 text-md-left">
                    <span class="title">Tổng tiền</span>
                    <div class="mt-1 price-bill" style="color: blue">{{number_format($values->tongtien)}} VNĐ</div>
                </div>

                <div class="col-md-4 d-md-block d-none font-weight-bold p-0 text-justify">
                    <span class="title"></span>
                    <div class="mt-1" style="color: blue"></div>
                </div>

                <div class="col-md-2 col-3 font-weight-bold p-0 ">
                    <span class="title">Trạng thái</span>
                    @if($values->trangthai == 0)
                    <div class="mt-1 status-bill" style="color: #fb667e">Đang vận chuyển</div>
                    @else ($values->trangthai == 1)
                    <div class="mt-1 status-bill" style="color: #84c686">Đã giao hàng</div>
                    @endif
                </div>

            </div>
            <div class="bor-bot pb-3 mr-3 ml-3" style="border-bottom: 1px solid #f1f1f1"></div>

            <div class="row m-0 d-flex justify-content-between align-items-center pt-3 text-justify pl-3 pr-3">
                <div class="col-md-8 col-12 p-0 d-flex ">
                    <div class="row w-100">
                        @foreach($databilldetail as $key => $valuedetail)
                        @if(strcmp($valuedetail->bill_code, $values->ma_HD) == 0)
                        <div class="col-4 text-center">
                            <div class="pr-3" style="">
                                <img src="public/images/hinh-anh-trang-chu/{{$valuedetail->hinhanh}}" class="img-bill" alt="">
                            </div>
                            <div class="">
                                <div class="text-uppercase tit-bill" style="color: red"> <a href="{{url('chitietsanpham/'.$valuedetail->ma_SP)}}">{{$valuedetail->tensp}}</a> </div>
                                <div class="pt-1 price-sub-bill" style="">Giá: {{number_format($valuedetail->product_price)}} VNĐ</div>
                                <div class="pt-1 count-bill" style="">Số lượng: {{$valuedetail->product_amount}}</div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                      

                    </div>
 
                </div>

                <div class="col-md-4 col-12 p-0 text-right pb-3 pb-md-1 pt-3 text-white" >
                    <div class="p-2 text-white" style="border: 1px solid #f0f0f0; background-color: orange">
                        <div class="d-md-flex align-items-center justify-content-md-between">
                            <div>
                                <div>
                                    <span class="font-weight-bold title-bill">Địa chỉ nhận hàng: </span>
                                    <span class="title-bill">{{$values->diachi}}</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold hotline-bill">Số ĐT: </span>
                                    <span class="hotline-bill">dang cap nhat</span>
                                </div>
                            </div>

                            <!-- <div class=" d-md-block d-none">
                                <i class="fa fa-edit icon-bill"></i>
                            </div> -->
                        </div>
                        <div class=" d-md-none d-block">
                            <i class="fa fa-edit icon-bill"></i>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    @endforeach 
  
</div>

<!-- Phần cuối trang -->
@endsection