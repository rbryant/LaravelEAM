<header class="main-header">
  
    <a href="./welcome" class="logo"><b>Better-EAM</b></a>
  
    <nav class="navbar navbar-static-top" role="navigation">
    @if (Auth::guest()) 
        
    @else
        
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-brand"><?php echo $title ?></div>
    @endif    
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            @if (Auth::guest()) 
            
            @else
                
                @include('partials.messages')
                
                @include('partials.notifications')
                
                @include('partials.tasks')
            @endif 
                
                @include('partials.userprofile')

            </ul>
        </div>
    </nav>
</header>