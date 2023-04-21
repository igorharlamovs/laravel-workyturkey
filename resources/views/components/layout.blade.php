<!doctype html>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/bootstrap-datepicker.css">
<script src="path/to/bootstrap-datepicker.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="bg-gray-100 min-h-screen">
    <body style="font-family: Open Sans, sans-serif">
        <x-header></x-header>

        <main class="container mx-auto px-4 py-8">
            {{ $slot }}
          </main>
          <x-footer></x-footer>
        <x-flash></x-flash>
    </body>
</div>
