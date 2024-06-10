<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="{{url('admin')}}"><img src=""{{asset('assets/admin/img/logo.png') }}" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
        <li class="mm-active" >
                <a href="{{url('admin')}}" aria-expanded="false">
                    <div class="icon_menu">
                        <img src=""{{asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                    </div>
                    <span>DashBoard</span>
                </a>
           
            </li>
            <li class="mm-active">
                
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src=""{{asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                    </div>
                    <span>Sản Phẩm</span>
                </a>
                <ul>
                    <li><a href="{{url('admin/products')}}">Danh Sách</a></li>
                    <li><a href="{{url('admin/products/create')}}">Thêm Mới</a></li>
                </ul>
            </li>
            <li class="mm-active">
                
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src=""{{asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                    </div>
                    <span>Người Dùng</span>
                </a>
                <ul>
                    <li><a href="{{url('admin/users')}}">Danh Sách</a></li>
                    <li><a href="{{url('admin/users/create')}}">Thêm Mới</a></li>
                </ul>
            </li>
            <li class="mm-active">
                
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src=""{{asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                    </div>
                    <span>Danh Mục</span>
                </a>
                <ul>
                    <li><a href="{{url('admin/categories')}}">Danh Sách</a></li>
                    <li><a href="{{url('admin/categories/create')}}">Thêm Mới</a></li>
                </ul>
            </li>
        </ul>
    </nav>