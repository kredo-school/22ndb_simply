<!-- Sidebar -->
<div class="d-none d-xxl-block">
    <table class="border-menu-table">
        <tr>
            <td class="menu-item-t border-bottom {{ request()->routeIs('user-guide.register') ? 'active' : '' }}">
                <a href="{{ route('user-guide.register') }}">◎ Register (account)</a>
            </td>
        </tr>
        <tr>
            <td class="menu-item border-bottom {{ request()->routeIs('user-guide.login') ? 'active' : '' }}">
                <a href="{{ route('user-guide.login') }}">◎ Login</a>
            </td>
        </tr>
        <tr>
            <td class="menu-item-b {{ request()->routeIs('user-guide.password-reset') ? 'active' : '' }}">
                <a href="{{ route('user-guide.password-reset') }}">◎ Reset Password</a>
            </td>
        </tr>
    </table>

    <table class="border-menu-table">
        <tr>
            <td class="menu-item-t border-bottom {{ request()->routeIs('user-guide.register-item') ? 'active' : '' }}">
                <a href="{{ route('user-guide.register-item') }}">◎ Register item</a>
            </td>
        </tr>
        <tr>
            <td class="menu-item border-bottom {{ request()->routeIs('user-guide.add-category') ? 'active' : '' }}">
                <a href="{{ route('user-guide.add-category') }}">◎ Add Category</a>
            </td>
        </tr>
        <tr>
            <td class="menu-item border-bottom {{ request()->routeIs('user-guide.edit-item') ? 'active' : '' }}">
                <a href="{{ route('user-guide.edit-item') }}">◎ Edit item</a>
            </td>
        </tr>
        <tr>
            <td class="menu-item border-bottom {{ request()->routeIs('user-guide.donate-item') ? 'active' : '' }}">
                <a href="{{ route('user-guide.donate-item') }}">◎ Donate item</a>
            </td>
        </tr>
        <tr>
            <td class="menu-item-b {{ request()->routeIs('user-guide.delete-item') ? 'active' : '' }}">
                <a href="{{ route('user-guide.delete-item') }}">◎ Delete item</a>
            </td>
        </tr>
    </table>

    <table class="border-menu-table">
        <tr>
            <td class="menu-item-t border-bottom {{ request()->routeIs('user-guide.how-to-get-item') ? 'active' : '' }}">
                <a href="{{ route('user-guide.how-to-get-item') }}">◎ How to get the donation item</a>
            </td>
        </tr>
        <tr>
            <td class="menu-item-b {{ request()->routeIs('user-guide.favorite-item') ? 'active' : '' }}">
                <a href="{{ route('user-guide.favorite-item') }}">◎ Favorite Donation item</a>
            </td>
        </tr>
    </table>
</div>

<!-- For small screens, display the sidebar as a dropdown or stacked menu -->
<div class="d-xxl-none">
    <div class="dropdown">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sidebarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
        </button>
        <ul class="dropdown-menu bg-white rounded" aria-labelledby="sidebarDropdown">
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.register') ? 'active' : '' }}" href="{{ route('user-guide.register') }}">Register (account)</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.login') ? 'active' : '' }}" href="{{ route('user-guide.login') }}">Login</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.password-reset') ? 'active' : '' }}" href="{{ route('user-guide.password-reset') }}">Reset Password</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.register-item') ? 'active' : '' }}" href="{{ route('user-guide.register-item') }}">Register item</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.add-category') ? 'active' : '' }}" href="{{ route('user-guide.add-category') }}">Add Category</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.edit-item') ? 'active' : '' }}" href="{{ route('user-guide.edit-item') }}">Edit item</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.donate-item') ? 'active' : '' }}" href="{{ route('user-guide.donate-item') }}">Donate item</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.delete-item') ? 'active' : '' }}" href="{{ route('user-guide.delete-item') }}">Delete item</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.how-to-get-item') ? 'active' : '' }}" href="{{ route('user-guide.how-to-get-item') }}">How to get the donation item</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('user-guide.favorite-item') ? 'active' : '' }}" href="{{ route('user-guide.favorite-item') }}">Favorite Donation item</a></li>
        </ul>
    </div>
</div>

