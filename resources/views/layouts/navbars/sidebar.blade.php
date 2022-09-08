<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Lion Systems Solutions 🦁') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      
        </a>
      </li>

      <!-- User and boardroom options menu -->
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route ('users.index')}}">
          <i class="material-icons">content_paste</i>
            <p>Users</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Boardroom' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('rooms.indexroom')}}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Boardroom') }}</p>
        </a>
      </li>
       <!-- End of User and boardroom options menu -->

      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
        </a>
      </li>
    </ul>
  </div>
</div>
