<nav class="navbar bg-body-tertiary mb-3 ">
    <div class="container-fluid">
      <span class="navbar-text text-dark">
        <a href="/">سیستم مدیریت</a>
      </span>
      <span class="text-end">
        <div class="btn-group m-2">
          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="badge badge-light">9</span>
            درود 
            @if(Auth::guest())
             کاربر عزیز
            @else
            {{ Auth::user()->first_name." ".Auth::user()->last_name }}
            @endif
          </button>
          <ul class="dropdown-menu text-center">
            @if(Auth::guest())
              <li><a class="dropdown-item" href="{{ route('login') }}">ورود</a></li>
              <li><a class="dropdown-item" href="{{ route('register-user') }}">ثبت نام</a></li>
            @else
            <li><a class="dropdown-item" href="{{ route('dashboard') }}">داشبورد</a></li>
            <li><a class="dropdown-item" href="{{ route('edit',Auth::user()->id) }}">تنظیمات</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">خروج</a></li>
            @endif
          </ul>
        </div>
      </span>
    </div>
  </nav>