 <li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-user"></i>
{{ auth()->user()->name }}
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
@if(auth()->user()->hasRole('Super Admin'))
<a href="{{ route('super.dashboard') }}" class="dropdown-item">
<i class="fas fa-tachometer-alt"></i> Dashboard
</a>
@endif
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="{{ route('logout') }}"
 onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
  <i class="fas fa-arrow-right"></i> Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form> 
<div class="dropdown-divider"></div>

</li>