<table class="border-menu-table">
    <tr>
        <td class="menu-item border-bottom {{ request()->routeIs('user-guide.register') ? 'active' : '' }}">
            <a href="{{ route('user-guide.register') }}">◎ Register (account)</a>
        </td>
    </tr>
    <tr>
        <td class="menu-item border-bottom {{ request()->routeIs('user-guide.login') ? 'active' : '' }}">
            <a href="{{ route('user-guide.login') }}">◎ Login</a>
        </td>
    </tr>
    <tr>
        <td class="menu-item {{ request()->routeIs('user-guide.password-reset') ? 'active' : '' }}">
            <a href="{{ route('user-guide.password-reset') }}">◎ Reset Password</a>
        </td>
    </tr>
</table>

<table class="border-menu-table">
    <tr>
        <td class="menu-item border-bottom {{ request()->routeIs('user-guide.register-item') ? 'active' : '' }}">
            <a href="{{ route('user-guide.register-item') }}">◎ Register item</a>
        </td>
    </tr>
    <tr>
        <td class="menu-item border-bottom {{ request()->routeIs('user-guide.add-category') ? 'active' : '' }}">
            <a href="{{ route('user-guide.add-category') }}">◎ Add Category</a>
        </td>
    </tr>
    <tr>
        <td class="menu-item border-bottom {{ request()->routeIs('user-guide.donated-item') ? 'active' : '' }}">
            <a href="{{ route('user-guide.donated-item') }}">◎ Donated item</a>
        </td>
    </tr>
    <tr>
        <td class="menu-item border-bottom {{ request()->routeIs('user-guide.edit-item') ? 'active' : '' }}">
            <a href="{{ route('user-guide.edit-item') }}">◎ Edit item</a>
        </td>
    </tr>
    <tr>
        <td class="menu-item {{ request()->routeIs('user-guide.delete-item') ? 'active' : '' }}">
            <a href="{{ route('user-guide.delete-item') }}">◎ Delete item</a>
        </td>
    </tr>
</table>

<table class="border-menu-table">
    <tr>
        <td class="menu-item border-bottom {{ request()->routeIs('user-guide.other-users-items') ? 'active' : '' }}">
            <a href="{{ route('user-guide.other-users-items') }}">◎ See other user's donation items</a>
        </td>
    </tr>
    <tr>
        <td class="menu-item {{ request()->routeIs('user-guide.favorite-item') ? 'active' : '' }}">
            <a href="{{ route('user-guide.favorite-item') }}">◎ Favorite Donation item</a>
        </td>
    </tr>
</table>
