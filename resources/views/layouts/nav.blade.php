<nav class="navbar bg-body-tertiary mb-3">
    <div class="container-fluid">
      <span class="navbar-text text-dark">
        سیستم مدیریت آتلیه
      </span>
      <span class="text-end">
        <div class="btn-group m-2">
          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            درود 
            @if(Auth::check())
               {{ Auth::user()->firstname." ".Auth::user()->lastname }}
            @else
            کاربر عزیز
            @endif
          </button>
          <ul class="dropdown-menu text-center">
            @if(!Auth::check())
              <li><a class="dropdown-item" href="{{ route('login') }}">ورود</a></li>
              <li><a class="dropdown-item" href="{{ route('register-user') }}">ثبت نام</a></li>
            @endif
            @if(Auth::check())
            <li><a class="dropdown-item" href="{{ route('dashboard') }}">داشبورد</a></li>
            <li><a class="dropdown-item" href="{{ route('edit',Auth::user()->id) }}">ویرایش</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">خروج</a></li>
            @endif
          </ul>
        </div>
      </span>
    </div>
  </nav>