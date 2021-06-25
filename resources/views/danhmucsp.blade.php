<ul class="danh-muc-san-pham">
    <li class="danh-muc-doc text-uppercase">Danh Mục Sách</li>
    @foreach($listloaisanpham as $loaisp)
    <li><a href="{{url('sanpham/'. $loaisp->ma_loaiSP)}}" class="content">{{$loaisp->tenloaisp}}</a></li>
    @endforeach
</ul>