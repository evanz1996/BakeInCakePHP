
<nav class="navbar navbar-expand-lg navbar-light bg-light">


<div class="collapse navbar-collapse" id="navbarColor03">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo$this->Url->build(['controller'=>'MyWebsite','action'=>'contact']); ?>">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo$this->Url->build(['controller'=>'MyWebsite','action'=>'about']); ?>">About</a>
    </li>
  </ul>
</div>
</nav>