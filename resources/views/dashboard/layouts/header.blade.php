<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Satrio Blog</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <div class="col-md-9">
      <form action="/blog">
          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group ">
              <input type="text" class="form-control" placeholder="Search..."  name="search" value="{{ request('search') }}">
              <button class="btn btn-primary" type="submit">Search</button>
            </div>
      </form>
  </div> --}}
    {{-- <input type="text" class="form-control" placeholder="Search..."  name="search" value="{{ request('search') }}"> --}}
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 bg-dark border-0"><span data-feather="log-out"></span> Logout</i></button>
        </form>
      </div>
    </div>
  </header>
  