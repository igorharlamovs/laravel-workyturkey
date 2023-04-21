<script>
    $(document).ready(function() {
      $('.dropdown').click(function(e) {
        e.stopPropagation();
        $(this).toggleClass('active');
        $(this).find('.dropdown-menu').toggleClass('hidden');
      });
    
      $(document).click(function() {
        $('.dropdown').removeClass('active');
        $('.dropdown-menu').addClass('hidden');
      });
    });
</script>

<header class="bg-white shadow-lg">
    <div class="container mx-auto px-4 py-6 flex items-center justify-between">
        <a href="#"><h1 class="text-blue-500 text-xl font-bold">Workout Scheduler</h1></a>
      <nav>
        @auth
        <ul class="flex space-x-6">
          <li>
            <span class="text-gray-600 hover:text-gray-800">Welcome, {{ auth()->user()->name }}</span>
          </li>
          <li>
            <div class="dropdown inline-block relative">
                <button class="text-gray-600 hover:text-gray-800 inline-flex items-center">
                  <span>Plans</span>
                </button>
                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                  <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/plans">Plans List</a></li>
                  <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/createplan">Create Plan</a></li>
                </ul>
              </div>
          </li>
          <li>
            <a href="/contacts" class="text-gray-600 hover:text-gray-800">Contacts</a>
          </li>
          <li>
            <form method="POST" action="/logout" class="text-red-600 hover:text-gray-800">
                @csrf
                <button type="submit">Log Out</button>
            </form>
          </li>
        </ul>
        @else
        <ul>
            <li>
                <a href="/register" class="text-gray-600 hover:text-gray-800">Register</a>
            </li>
            <li>
                <a href="/login" class="text-gray-600 hover:text-gray-800">Login</a>
            </li>
        </ul>
        @endauth
      </nav>
    </div>
  </header>