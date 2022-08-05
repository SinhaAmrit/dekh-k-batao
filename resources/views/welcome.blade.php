<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dekh k batao</title>
  <link rel="stylesheet" href="dist/styles.css" />
  <script src="dist/script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/brands.min.css" integrity="sha512-nS1/hdh2b0U8SeA8tlo7QblY6rY6C+MgkZIeRzJQQvMsFfMQFUKp+cgMN2Uuy+OtbQ4RoLMIlO2iF7bIEY3Oyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <livewire:styles />
</head>

<body>
  <!-- Navigation -->
  <x-navbar />
  <x-mobile-nav />

  <!-- Hero -->
  <section
    class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
    <div class="md:flex-1 md:mr-10">
      <h1 class="font-pt-serif text-5xl font-bold mb-7">
        Dekh k batao
        <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
  </div>
        </span>
      </h1>
      <p class="font-pt-serif font-secondary mb-4">
        Enter a complete URL so we can crawl through.
      </p>
      <div class="font-montserrat">
        </div>
        <livewire:search />
    </div>
    <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
      <div class="relative">
        <img src='dist/assets/Highlight1.svg' alt="" class="absolute -top-16 -left-10" />
      </div>
      <img src='dist/assets/MacBook Pro.png' alt="Macbook" />
      <div class="relative">
        <img src='dist/assets/Highlight2.svg' alt="" class="absolute -bottom-10 -right-6" />
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="bg-black text-white sectionSize">
    <div>
      <h2 class="secondaryTitle bg-underline2 bg-100%">How it works</h2>
    </div>
    <div class="flex flex-col md:flex-row">
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
          1
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Eat</h3>
        <p class="text-center font-montserrat">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </p>
      </div>
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
          2
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Sleep</h3>
        <p class="text-center font-montserrat">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </p>
      </div>
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
          3
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Rave</h3>
        <p class="text-center font-montserrat">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </p>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="sectionSize bg-secondary">
    <div>
      <h2 class="secondaryTitle bg-underline3 bg-100%">Features</h2>
    </div>
    <div class="md:grid md:grid-cols-2 md:grid-rows-2">

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">Feature #1</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Quisquam voluptate praesentium tenetur earum repellendus! Dicta
            culpa consequuntur saepe quibusdam labore, est ex ducimus
            tempore, quos illum officiis, pariatur ea placeat.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">Feature #2</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Quisquam voluptate praesentium tenetur earum repellendus! Dicta
            culpa consequuntur saepe quibusdam labore, est ex ducimus
            tempore, quos illum officiis, pariatur ea placeat.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">Feature #3</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Quisquam voluptate praesentium tenetur earum repellendus! Dicta
            culpa consequuntur saepe quibusdam labore, est ex ducimus
            tempore, quos illum officiis, pariatur ea placeat.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">Feature #4</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Quisquam voluptate praesentium tenetur earum repellendus! Dicta
            culpa consequuntur saepe quibusdam labore, est ex ducimus
            tempore, quos illum officiis, pariatur ea placeat.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Pricing -->
  <section class="sectionSize bg-secondary py-0">
    <div>
      <h2 class="secondaryTitle bg-underline4 mb-0 bg-100%">Pricing</h2>
    </div>
    <div class="flex w-full flex-col md:flex-row">

      <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
        <h3 class="font-pt-serif font-normal text-2xl mb-4">
          The Good
        </h3>
        <div class="font-montserrat font-bold text-2xl mb-4">
          $25
          <span class="font-normal text-base"> / month</span>
        </div>

        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #1</p>
        </div>
        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #2</p>
        </div>
        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #3</p>
        </div>

        <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
          Choose plan
        </button>
      </div>

      <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-12'>
        <h3 class="font-pt-serif font-normal text-2xl mb-4">
          The Bad
        </h3>
        <div class="font-montserrat font-bold text-2xl mb-4">
          $40
          <span class="font-normal text-base"> / month</span>
        </div>

        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #1</p>
        </div>
        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #2</p>
        </div>
        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #3</p>
        </div>

        <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
          Choose plan
        </button>
      </div>

      <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
        <h3 class="font-pt-serif font-normal text-2xl mb-4">
          The Ugly
        </h3>
        <div class="font-montserrat font-bold text-2xl mb-4">
          $50
          <span class="font-normal text-base"> / month</span>
        </div>

        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #1</p>
        </div>
        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #2</p>
        </div>
        <div class="flex">
          <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
          <p>Benefit #3</p>
        </div>

        <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
          Choose plan
        </button>
      </div>

    </div>
  </section>

  <!-- FAQ  -->
  <section class="sectionSize items-start pt-8 md:pt-36 bg-black text-white">
    <div>
      <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
        FAQ
      </h2>
    </div>

    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          Where can I get this HTML template?
        </div>
        <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
      </div>
      <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
        You can download it on Gumroad.com
      </div>
    </div>
    <hr class="w-full bg-white" />

    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          Is this HTML template free?
        </div>
        <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
      </div>
      <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
        Yes! For you it is free.
      </div>
    </div>
    <hr class="w-full bg-white" />

    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          Am I awesome?
        </div>
        <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
      </div>
      <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
        Yes! No doubt about it.
      </div>
    </div>
    <hr class="w-full bg-white" />

  </section>

  <!-- Footer -->
  <section class="bg-black sectionSize">
    <div class="mb-4">
      <img src='dist/assets/Logo_white.svg' alt="Logo" class="h-4" />
    </div>
    <div class="flex mb-8">
      <a href="#">
        <img src='dist/assets/logos/Facebook.svg' alt="Facebook logo" class="mx-4" />
      </a>
      <a href="#">
        <img src='dist/assets/logos/Youtube.svg' alt="Youtube logo" class="mx-4" />
      </a>
      <a href="#">
        <img src='dist/assets/logos/Instagram.svg' alt="Instagram logo" class="mx-4" />
      </a>
      <a href="#">
        <img src='dist/assets/logos/Twitter.svg' alt="Twitter logo" class="mx-4" />
      </a>
    </div>
    <div class="text-white font-montserrat text-sm">
      © 2021 STARTUP. All rights reserved
    </div>
  </section>
  <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
  </div>
  <livewire:scripts />
</body>
</html>