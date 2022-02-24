<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-base text-gray-800 leading-tight">
            {{ __('P & S DESARROLLADORES') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{--  banner carrusel --}}

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('img/2.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/3.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/4.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br>
            

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--  contenido que yo quiera que tenga  --}}
                <h1 class='fs-3 text-center text-secondary'>Nuestros servicios</h1>
                <div class="container mt-10">
                  <div class="row">
                    <div class="col">
                      <a href="">
                        <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/5.jpg')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                          </div>
                        </div>
                      </a>
                      
                    </div>
                    <div class="col">
                      <a href="">
                        <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/6.jpg')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col">
                      <a href="">
                        <div class="card" style="width: 18rem;">
                          <img src="{{asset('img/7.jpg')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                

            </div>
        </div>
    </div>

    
</x-app-layout>
