<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/register">
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex items-center">
        @auth
            <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</span>

            <a href="/createplans" class="ml-6 text-xs font-bold uppercase text-colour-blue">Create Plan</a>
            <a href="/plans" class="ml-6 text-xs font-bold uppercase text-colour-blue">Plans</a>
            <a href="/contacts" class="ml-6 text-xs font-bold uppercase text-colour-blue">Contacts</a>

            <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                @csrf
                <button type="submit">Log Out</button>
            </form>

        @else
            <a href="/register" class="text-xs font-bold uppercase text-colour-blue">Register</a>
            <a href="/login" class="ml-6 text-xs font-bold uppercase">Login</a>
        @endauth
    </div>
</nav>