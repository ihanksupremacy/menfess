<h1>Menfess</h1>
      <nav>
        <ul>
          <li><a href="#">Explore</a></li>
          <li><a href="#">Notifications</a></li>
          <li><a href="#">Messages</a></li>
          @auth
          <li><form action="/logout" method="POST">@csrf<button type="submit">logout</button></form></li>
          {{-- <li><a href="/logout">logout</a></li> --}}

          @else
          <li><a href="login">login</a></li>
          @endauth
          
        </ul>
      </nav>
      <div class="sidebar">
        <ul>
            <li><a href="/profile/{{ $userName }}">profile</a></li>
            <li>Beranda</li>
            <li>Cari</li>
            <li>Pesan</li>
            <li>Notifikasi</li>
        </ul>
    </div>