<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Papi Kos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
  </head>
  <body>
    <div class="aside-container">
      <aside class="aside">
        <div class="brand-logo-container">
          <h2 class="brand-logo">Admin</h2>
        </div>
        <div class="menu-container">
          <ul class="nav-link-container" style="">

            <li>
              <a href="{{ url('/admin') }}" class="aside-menu-link {{ request()->is('admin') ? 'aside-menu-link-active' : ''  }}">Dashboard</a>
            </li>
            
            <li><a href="{{ url('/admin/data-kos') }}" class="aside-menu-link {{ request()->is('admin/data-kos*') ? 'aside-menu-link-active' : ''  }}">Data Kos</a></li>
            
            <li>
              <a
                href="{{ url('/pemilik-kos/akun-saya') }}"
                class="aside-menu-link aside-menu-link {{ request()->is('pemilik-kos/akun-saya*') ? 'aside-menu-link-active' : ''  }}"
                >Akun</a
              >
            </li>
          </ul>
          <div class="nav-link-container">
            <a href="http://" class="button logout-button">
              <ion-icon name="log-out" style="font-size: 1.2rem"></ion-icon>
              Logout</a
            >
          </div>
        </div>
      </aside>


      @yield('content')

      </div>
  </body>
</html>
