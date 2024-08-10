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
        <td class="menu-item border-bottom {{ request()->routeIs('user-guide.donated-item') ? 'active' : '' }}">
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
