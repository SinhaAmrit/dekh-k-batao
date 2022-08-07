<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>देख कर बताओ</title>
  <link rel="stylesheet" href="dist/styles.css" />
  <script src="dist/script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/brands.min.css" integrity="sha512-nS1/hdh2b0U8SeA8tlo7QblY6rY6C+MgkZIeRzJQQvMsFfMQFUKp+cgMN2Uuy+OtbQ4RoLMIlO2iF7bIEY3Oyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <livewire:styles />
</head>

<body class="bg-secondary">
  <!-- Navigation -->
  <x-navbar />
  <x-mobile-nav />

  <!-- Hero -->
  <livewire:search />

  <!-- How it works -->
  <section class="bg-black text-white sectionSize" style="margin-top: 10vh;">
    <div>
      <h2 class="secondaryTitle bg-underline2 bg-100%">How API works</h2>
    </div>
    <div class="flex flex-col md:flex-row">
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
          1
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Ask</h3>
        <p class="text-center font-montserrat">
        Send us a get request as <em>"https://{{request()->getHost();}}/link-preview?link=YOUR_URL_REQUEST"</em>
        </p>
      </div>
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
          2
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Admire</h3>
        <p class="text-center font-montserrat">
          We will process your request in the backend.
        </p>
      </div>
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
          3
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Get the work done</h3>
        <p class="text-center font-montserrat">
          You will receive a json response from us.
        </p>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="sectionSize bg-secondary">
    <div>
      <h2 class="secondaryTitle bg-underline3 bg-100%">Features</h2>
    </div>
    <div class="md:grid md:grid-cols-2 md:grid-rows-2">

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">Digital Note taking</h3>
          <p>
            Screenshots makes your note more interesting.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">For messaging apps</h3>
          <p>
            Add valuable context to conversations with our API.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">For Social Networks</h3>
          <p>
            Turn sharing links into sharing content.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">For your next big thing</h3>
          <p>
            Links are everywhere. Help your users make sense of them.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Pricing -->
  <!-- <section class="sectionSize bg-secondary py-0">
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
  </section> -->

  <!-- FAQ  -->
  <section id="FAQ" class="sectionSize items-start pt-8 md:pt-36 bg-black text-white">
    <div>
      <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
        FAQ
      </h2>
    </div>

    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          Do you store our data?
        </div>
        <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
      </div>
      <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
        No, we never store your data.
      </div>
    </div>
    <hr class="w-full bg-white" />

    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          Is this API completely free?
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
    <div class="mb-4 text-3xl">
      👁‍🗨
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
      Made With ❤ By Amrit Sinha
      <br>
      Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js">
  </script>
      <script type="text/javascript">
        function takeshot() {
            const screenshotTarget = document.getElementById('card');
            html2canvas(screenshotTarget).then((canvas) => {
            const base64image = canvas.toDataURL("image/png");
            var win = window.open();
            win.document.write('<iframe src="' + base64image  + '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>');
            });
        }
    </script>
    <!-- Required popper.js -->
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
      );
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new Tooltip(tooltipTriggerEl);
      });
    </script>
  <livewire:scripts />
</body>
</html>