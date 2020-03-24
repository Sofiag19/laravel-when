@extends('templates.index')

@section('body')
    <section class="d-flex justify-content-around align-items-center" style="height: 70vh;">
      <div class="col-4" >
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quod voluptatem debitis alias sapiente ipsum eveniet necessitatibus veritatis, at vero, nobis voluptatibus vitae culpa doloribus vel explicabo esse amet. Quo.</p>
      </div>
      <div class="col-4 text-right ">
        <a href=" {{ route('home') }} ">INIZIA <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>
@endsection