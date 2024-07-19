@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- css link -->
<link rel="stylesheet" href="{{ asset('css/user-guide.css') }}">

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
            <div class="col-3 mt-5">
                <table class="border-menu-table">
                    <tr>
                        <td class="menu-item border-bottom">◎ Register (account)</td>
                    </tr>
                    <tr>
                        <td class="menu-item border-bottom">◎ Login</td>
                    </tr>
                    <tr>
                        <td class="menu-item">◎ Reset Password</td>
                    </tr>
                </table>

                <table class="border-menu-table">
                    <tr>
                        <td class="menu-item border-bottom">◎ Register item</td>
                    </tr>
                    <tr>
                        <td class="menu-item border-bottom">◎ Add Category</td>
                    </tr>
                    <tr>
                        <td class="menu-item border-bottom">◎ Donated item</td>
                    </tr>
                    <tr>
                        <td class="menu-item border-bottom">◎ Edit item</td>
                    </tr>
                    <tr>
                        <td class="menu-item">◎ Delete item</td>
                    </tr>
                </table>

                <table class="border-menu-table">
                    <tr>
                        <td class="menu-item border-bottom">◎ See other user's donation items</td>
                    </tr>
                    <tr>
                        <td class="menu-item">◎ Favorite Donation item</td>
                    </tr>
                </table>
            </div>

            <div class="col-8 border mt-4">
                
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
