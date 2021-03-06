<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
      <!-- Branding Image -->
      <a class="navbar-brand " href="{{ url('/') }}">
         <img src="/images/logo.jpg" style="height:32px;width:145px"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

          </ul>
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav navbar-right">
            @if (session()->get('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ session()->get('user')->studentName }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('show', session()->get('user') )}}">个人中心</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" id="logout" href="#">
                  <form action="{{route('logout')}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                  </form>
                </a>
              </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}"> 
                   <img src="/images/signin.jpg" style="height: 19px; width: 56px;"/>
                </a>
            </li> 
            @endif
        </ul>

      </div>
    </div>
  </nav>