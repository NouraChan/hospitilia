@extends('layout')

@section('usernav')
<nav class="bottom-navbar">
  <div class="container">
    <ul class="nav page-navigation">
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
          <i class="mdi mdi-home-variant menu-icon"></i>
          <span class="menu-title">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="mdi mdi-format-float-left menu-icon"></i>
          <span class="menu-title">About</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/forms/basic_elements.html" class="nav-link">
          <i class="mdi mdi-heart-pulse menu-icon"></i>
          <span class="menu-title">Health News</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/charts/chartjs.html" class="nav-link">
          <i class="mdi mdi-stethoscope menu-icon"></i>
          <span class="menu-title">Departments</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/tables/basic-table.html" class="nav-link">
          <i class="mdi mdi-calendar-clock menu-icon"></i>
          <span class="menu-title">Schedules</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/icons/mdi.html" class="nav-link">
          <i class="mdi mdi-thumbs-up-down menu-icon"></i>
          <span class="menu-title">Reviews</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="mdi mdi-book menu-icon"></i>
          <span class="menu-title">Book Appointment</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="docs/documentation.html" class="nav-link">
          <i class="mdi mdi-phone menu-icon"></i>
          <span class="menu-title">'Contact Us</span></a>
      </li>
    </ul>
  </div>
</nav>
@endsection

@section('content')


<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images/bvsdsgssfg.PNG" alt="Los Angeles" class="d-block w-100 crslsize">
  </div>
  <div class="carousel-item">
    <img src="images/hfjnxcczvxcbn.PNG" alt="Chicago" class="d-block w-100 crslsize">
  </div>
  <div class="carousel-item">
    <img src="images/nvbxnnxbvx.PNG" alt="New York" class="d-block w-100 crslsize">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

@endsection