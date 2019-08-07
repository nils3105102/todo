<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">Todo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is('todo/create') ? 'active' : ''}}" href="{{url('todo/create')}}">Create todo</a>
      </li>
    </ul>
  </div>
</nav>
