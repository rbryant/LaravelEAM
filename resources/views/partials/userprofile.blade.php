@if (Auth::guest()) 
        <li><a href="login">Login</a></li> 
		<li><a href="register">Signup</a></li> 
@else 
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="{{ Auth::user()->gravatar }}" class="user-image" alt="User Image"/>
    <span class="hidden-xs">{{ Auth::user()->full_name }}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{ Auth::user()->gravatar }}" class="img-circle" alt="User Image" />
            <p> 
            {{ Auth::user()->full_name }}
            <small>Member since {{ Auth::user()->created_at }}</small>
            </p>
        </li>

        <li class="user-footer">
            <div class="pull-left">
                <a href="profile" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="auth/logout" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>

@endif 
