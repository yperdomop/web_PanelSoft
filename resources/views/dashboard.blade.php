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
                <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem repellendus architecto dolor eligendi amet tenetur maxime laborum in distinctio, odit eum iure ab quis, molestiae optio neque nam, doloremque praesentium.</P>
                <P>Ratione labore aspernatur neque? Sint doloribus a necessitatibus suscipit neque aperiam fugit ducimus exercitationem temporibus itaque. Distinctio accusantium veritatis molestiae corporis ex autem error perspiciatis architecto, expedita eaque officiis quas.</P>
                <P>Expedita quaerat reiciendis officia fugiat facilis asperiores alias, dolor inventore, omnis delectus quis quidem repudiandae? Maxime, quam modi culpa suscipit laborum temporibus dignissimos rem possimus. Omnis accusamus consequuntur eius nobis!</P>
                <P>Veritatis nulla cupiditate quos quaerat distinctio reprehenderit ex veniam. Vero ducimus, ex harum eos temporibus suscipit id maiores aliquam nostrum praesentium ab blanditiis tempora et accusamus neque placeat ipsa accusantium.</P>
                <P>Necessitatibus, atque quas. Itaque vero fuga repellendus voluptas adipisci, saepe quam quibusdam, temporibus deserunt, illum inventore praesentium cumque! Cupiditate architecto neque illo ea perspiciatis reiciendis eveniet ipsa quas dolor quod.</P>
                

            </div>
        </div>
    </div>

    
</x-app-layout>
