<ul class="menu-nav">
    <li class="menu-item" aria-haspopup="true">
        <a href="{{url('admin/dashboard')}}" class="menu-link">
            <span class="svg-icon menu-icon">

            </span>
            <span class="menu-text">Dashboard</span>
        </a>
    </li>

    <li class="menu-item menu-item-submenu " aria-haspopup="true" data-menu-toggle="hover">
        <a href="javascript:;" class="menu-link menu-toggle">
            <span class="svg-icon menu-icon">

            </span>
            <span class="menu-text">User Management</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu" style="display: none; overflow: hidden" kt-hidden-height="80">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{url('admin/group')}}" class="menu-link ">
                        <i class="menu-bullet menu-bullet-dot"><span></span></i>
                        <span class="menu-text" style="">User</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{url('admin/group/add')}}" class="menu-link ">
                        <i class="menu-bullet menu-bullet-dot"><span></span></i>
                        <span class="menu-text" style="">Staff</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="menu-item menu-item-submenu " aria-haspopup="true" data-menu-toggle="hover">
        <a href="javascript:;" class="menu-link menu-toggle">
            <span class="svg-icon menu-icon">rr</span>
            <span class="menu-text">Product Management</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu" style="display: none; overflow: hidden" kt-hidden-height="80">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ Route('Category.index')}}" class="menu-link ">
                        <i class="menu-bullet menu-bullet-dot"><span></span></i>
                        <span class="menu-text" style="">Category</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{Route('Product.index')}}" class="menu-link ">
                        <i class="menu-bullet menu-bullet-dot"><span></span></i>
                        <span class="menu-text" style="">Product</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>