<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-color: red;
  background-image: linear-gradient(0deg, #ffffff, #f3f3f3);">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="background-color: #f3f3f3;">
        {{ $slot }}
    </div>
</div>