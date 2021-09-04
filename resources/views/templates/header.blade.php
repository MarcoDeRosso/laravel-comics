<nav class="container">
    <div class="logo">
     <img src="/images/dc-logo.png" alt="Logo DC" />
    </div>
    <div class="menu">
        <ul>
          <li><a href="">CHARACTERS</a></li>
          <li ><a class="{{ Request::route()->getName() === 'homepage' ? 'active' : '' }}" href="{{route ('homepage')}}">COMICS</a></li>
          <li><a href="">MOVIES</a></li>
          <li><a href="">TV</a></li>
          <li><a href="">GAMES</a></li>
          <li><a href="">COLLECTIBLES</a></li>
          <li><a href="">VIDEOS</a></li>
          <li><a href="">FANS</a></li>
          <li><a href="">NEWS</a></li>
          <li><a href="">SHOP</a></li>
        </ul>
    </div>
    <input type="text" placeholder="Search">
</nav>
