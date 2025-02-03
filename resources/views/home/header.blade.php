
<div class="container">
    <a href="#" class="logo">
        <img src="images/logo.png" alt="DRG Logo">
    </a>
    <nav>
        <ul class="nav-links">
            <li><a href="{{url('/')}}">Home</a></li>
            @if (Route::has('login'))
            @auth
            <li><a href="{{url('profile')}}">My Profile</a></li>
            <li><a href="product_page">Products</a></li>
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="{{url('myorders')}}">My Orders</a></li>
            @else
            <li><a href="product_page">Products</a></li>
            <li><a href="{{url('about')}}">About Us</a></li>
            @endauth
        @endif
        </ul>
        <div class="nav-right">
            
            @if (Route::has('login'))
            @auth
            
            <a href="{{url('mycart')}}" class="cart-link">🛒 &#8594  {{$count}}</a>
            <div class="list-inline-item logout" style="display: inline-block; margin-left: 10px;">
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
                <button class="btn" onclick="confirmLogout()" >    
                    Logout 
                </button>
            </div>
                @else
                <a href="{{url('register')}}" class="register-link">Register</a>
                <a href="{{url('login')}}" class="login-link">Login</a>
                @endauth
            @endif
        </div>
      
    </nav>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    function confirmLogout() {
        swal({
            title: "Are you sure?",
            text: "You will be logged out from your account !",
            icon: "warning",
            buttons: ["Cancel", "Logout"],
            dangerMode: true,
        }).then((willLogout) => {
            if (willLogout) {
                // Submit the logout form
                document.getElementById('logout-form').submit();
            }
        });
    }
</script>

<style>
    .btn{
        color: #000000;
        text-decoration: none;
        font-size: 1rem;
        padding: 0.5rem 0.7rem;
        border-radius: 50px;
        background: #f1c40f;
        transition: all 0.5s ease-in-out;
        position: relative;
    }

    .btn:hover{
        background: #fff;
        color: #2c3e50;
        transform: translateY(-0.5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.8);
    }

    .btn::after{
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        width: 0;
        height: 3px;
        background: #fff;
        transform: translateX(-50%);
        transition: all 0.3s ease-in-out;
    }


</style>

