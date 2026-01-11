<div class="sidebar bg-dark text-white p-3 d-flex flex-column">
    <h4 class="mb-4 text-center">📝 TodoList</h4>

    <ul class="nav nav-pills flex-column gap-2">
        <li class="nav-item">
            <a href="{{ route('tasks.index') }}"
               class="nav-link text-white {{ request()->routeIs('tasks.*') ? 'active' : '' }}">
                📋 Tasks
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('profile.edit') }}"
               class="nav-link text-white {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                👤 Profile
            </a>
        </li>
    </ul>

    <div class="mt-auto">
        <hr class="border-secondary">

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-light w-100">
                🚪 Logout
            </button>
        </form>
    </div>
</div>
