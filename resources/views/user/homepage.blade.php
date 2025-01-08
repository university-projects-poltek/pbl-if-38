@extends('layouts.root-mobile', ['title' => 'Homepage'])

@section('content')
  <!-- Hero Section -->
  <header class="hero bg-primary text-white text-center py-5">
    <div class="container">
      <h1 class="display-3">Welcome to Wild Park Town</h1>
      <p class="lead">Explore nature, wildlife, and more in the heart of our town.</p>
    </div>
  </header>

  <!-- Park Overview Section -->
  <section id="park-overview" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Park Overview</h2>
      <p>The Wild Park is a vast and scenic nature reserve located in the town's heart. It serves as a home for local
        wildlife and a recreational space for visitors. Whether you are hiking, birdwatching, or simply relaxing, the
        park offers something for everyone.</p>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hiking Trails</h5>
              <p class="card-text">Explore scenic trails through the forest and enjoy breathtaking views of the town and
                wildlife.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="text-center mb-4">Park Overview</h2>
      <p>The Wild Park is a vast and scenic nature reserve located in the town's heart. It serves as a home for local
        wildlife and a recreational space for visitors. Whether you are hiking, birdwatching, or simply relaxing, the
        park offers something for everyone.</p>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hiking Trails</h5>
              <p class="card-text">Explore scenic trails through the forest and enjoy breathtaking views of the town and
                wildlife.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
