<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" data-key="t-menu">Menu</li>

            <li>
                <a href="index.html">
                    <i data-feather="home"></i>
                    <span data-key="t-dashboard">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="grid"></i>
                    <span data-key="t-apps">Category</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{route('all.category')}}">
                            <span data-key="t-calendar">All Category</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('add.category')}}">
                            <span data-key="t-calendar">Add Category</span>
                        </a>
                    </li>

                   
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="grid"></i>
                    <span data-key="t-apps">Products</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{route('all.products')}}">
                            <span data-key="t-calendar">All Products</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('add.product')}}">
                            <span data-key="t-calendar">Add Products</span>
                        </a>
                    </li>

                   
                </ul>
            </li>
       


            <li class="menu-title mt-2" data-key="t-components">Elements</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="briefcase"></i>
                    <span data-key="t-components">Components</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                    <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                    
                </ul>
            </li>

          

    </div>
    <!-- Sidebar -->
</div>
</div>