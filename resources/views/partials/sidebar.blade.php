
<aside class="main-sidebar">

    <section class="sidebar">
        
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Auth::user()->gravatar }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p> {{ Auth::user()->full_name }} </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>

        <ul class="sidebar-menu nav nav-pills nav-stacked">
            <li class="header">MAIN NAVIGATION</li>
            <li role="presentation" class="">
                <a href="./home">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>

            </li>
            <li role="presentation"  class="">
                <a href="./workorders">
                <i class="fa fa-tasks"></i><span>Work Orders and Tasks</span>
                </a>
            </li>
            <li role="presentation" >
                <a href="./assets">
                <i class="fa fa-building"></i> <span>Assets and Locations</span>
                </a>
            </li>
            <li  role="presentation" class="">
                <a href="./items">
                <i class="fa fa-cart-plus"></i><span>Items and Inventory</span>
                </a>
            </li>
            <li role="presentation"  class="">
                <a href="./people">
                <i class="fa fa-users"></i><span>People and Teams</span>
                </a>
            </li>
            <li role="presentation"  class="">
                <a href="./admin">
                <i class="fa fa-edit"></i> <span>Administration</span>
                </a>
    
            </li>
        </ul>
    </section>

</aside>