@extends('layouts./frontend')

@section('content')
<section class="flex items-center hero">
    <div class="w-full inset-0 md:relative md:w-1/2 mt-4">
        <div class="relative hero-image">
          <div class="overlay inset-0 bg-black opacity-0 z-10"></div>
          <img
            src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png"
            alt="hero 1"
            class="absolute inset-0 md:relative w-full h-full object-cover object-center"
          />
        </div>
      </div>
    <div
      class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center flex flex-col justify-center hero-caption"
    >
      <h1 class="text-3xl md:text-5xl leading-tight font-semibold">
        Luxury Room <br class="" />With Best Quality
      </h1>
      <h2 class="px-8 text-base md:px-0 md:text-lg my-6 tracking-wide">
        Furniture berkualitas dan sudah teruji
        <br class="hidden lg:block" />dengan bahan dasar kayu jati
      </h2>
    </div>
    
  </section>
  <!-- END: HERO -->
<div class="py-16 bg-white">  
    <div class="container m-auto text-gray-600 md:px-12 xl:px-6">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
          <div class="md:5/12 lg:w-5/12 px-6">
            <img src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png" alt="image" loading="lazy" width="" height="">
          </div>
          <div class="md:7/12 lg:w-6/12 px-4">
            <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">About Furniture Store</h2>
            <p class="mt-8 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
            <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
          </div>
        </div>
    </div>
  </div>
</div>


@endsection