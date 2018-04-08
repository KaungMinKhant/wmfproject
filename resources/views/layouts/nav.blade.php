<!-- <nav class="navbar navbar-expand-lg default-primary-color">
    <a class="navbar-brand font-color init text-primary-color" href="#">မေးကြည့် Mayy Kyi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-right">
          <li class="nav-item">
            <a class="nav-link text-primary-color" href="{{ route('main') }}"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary-color" href="#"><i class="fa fa-user"></i> My Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary-color" href="#"><i class="fa fa-code"></i> Developer Portfolio</a>
        </li>
    </ul>
    
  <form id="logout-form" class="form-inline my-2 my-lg-0 typo" action="{{ route('logout') }}" method="POST">
    {{ csrf_field() }}
    <button type="submit" class="btn default-primary-color text-primary-color my-2 my-sm-0">Logout</button>
</form>
</div>
</nav> -->
<nav class="navbar navbar-expand-lg default-primary-color">
  <a class="navbar-brand text-primary-color" href="#"><img src="{{asset("images/wmfforweb.png")}}" width="200" height="80" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="btn default-primary-color text-primary-color"><i class="fa fa-bars"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-right">
      <li class="nav-item">
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{route('main')}}"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{route('news')}}"><i class="fa fa-file"></i> News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{route('wrestlemanialive')}}"><i class="fa fa-tv"></i> WrestleMania Live</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{route('contactwmf')}}"><i class="fa fa-phone"></i> Contact WMF</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{route('aboutdeveloper')}}"><i class="fa fa-code"></i> About Developer</a>
      </li>
      
    </ul>
    
    <form id="logout-form" class="form-inline my-2 my-lg-0 typo" action="{{ route('logout') }}" method="POST">
    {{ csrf_field() }}
    <button type="submit" class="btn default-primary-color text-primary-color yeon-sung nav-size my-2 my-sm-0"><i class="fa fa-sign-out"></i> Logout</button>
</form>
  </div>
</nav>