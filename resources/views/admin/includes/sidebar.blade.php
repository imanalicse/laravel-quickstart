<div class="main-sidebar">
    <div class="logo">
        <img src="{{asset('src/admin/img/new-logo.png')}}" alt="" style="max-width: 178px">
    </div>
    <div class="sidebar-menu">
        <ul>            
            <li class="<?php if($controller == 'DashboardController'){ echo 'active'; }  ?>"><a href="/admin">Dashboard</a></li>
            <li class="<?php if($controller == 'OrdersController'){ echo 'active'; }  ?>"><a href="/admin/orders">Order List</a></li>
            <!--<li class="<?php if($controller == 'CustomersController'){ echo 'active'; }  ?>"><a href="/admin/customer-list">Customer List</a></li>-->
            <li class="<?php if($controller == 'CategoriesController'){ echo 'active'; }  ?>"><a href="/admin/categories">Categories</a></li>
            <!--<li class="<?php if($controller == 'ProductGroupsController'){ echo 'active'; }  ?>"><a href="/admin/product-groups">Products</a></li> -->
            <li class="<?php if($controller == 'HolidaysController'){ echo 'active'; }  ?>"><a href="/admin/holidays">Holidays</a></li>
            <li class="<?php if($controller == 'ReadersController'){ echo 'active'; }  ?>"><a href="/admin/readers">Reader List</a></li>
            <li class="<?php if($controller == 'ConfigurationsController'){ echo 'active'; }  ?>"><a href="/admin/configurations/create">Configuration</a></li>
            <li class=""><a href="{{url('/admin/clear-config')}}" class="badge pending">Clear configuration</a></li>
        </ul>
    </div>

    <div class="footer-backend">
        <p class="develop-buy"> Web Development by <a href="https://www.webalive.com.au" target="_blank">WebAlive</a></p>
    </div>

</div>