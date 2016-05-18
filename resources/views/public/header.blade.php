<header class="main-header">
    <!-- Logo -->
    <a href="./welcome" class="logo"><b>Better-EAM</b></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
    @if (Auth::guest()) 
        
    @else
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
    @endif    
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            @if (Auth::guest()) 
            
            @else
                <!-- Messages: style can be found in dropdown.less-->
                @include('includes.messages')
                <!-- Notifications: style can be found in dropdown.less -->
                @include('includes.notifications')
                <!-- Tasks: style can be found in dropdown.less -->
                @include('includes.tasks')
                <!-- User Account: style can be found in dropdown.less -->
                @include('includes.userprofile')
            @endif 


            </ul>
        </div>
    </nav>
</header>