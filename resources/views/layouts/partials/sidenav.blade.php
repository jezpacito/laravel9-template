<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="{{route('home')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>

            </li>


            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="{{route('users.index')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-build"></i>
                    </span>
                    <span class="title">Users</span>
                </a>

            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-table"></i>
                    </span>
                    <span class="title">Product Details</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">

                    <li>
                        <a href="{{route('categories.index')}}">Product Category</a>
                    </li>
                    <li>
                        <a href="{{route('products.index')}}">Available Products</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="{{route('stocks.index')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-hdd"></i>
                    </span>
                    <span class="title">Stocks</span>
                </a>
            </li>

            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="{{route('purchases.index')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-hdd"></i>
                    </span>
                    <span class="title">Purchases</span>
                </a>
            </li>

    </div>
</div>
<!-- Side Nav END -->
