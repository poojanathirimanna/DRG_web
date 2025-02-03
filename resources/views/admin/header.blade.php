<header class="header">   
    <nav class="navbar navbar-expand-lg">
      
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header-->
          <a href="index.html" class="navbar-brand">
            <div class="visible brand-text brand-big text-uppercase">
                <strong style="color: #eeff00de;">Dushh Royal Galerria</strong>
            </div>
            <div class="brand-text brand-sm">
                <strong style="color: #eeff00de;">DRG</strong>
            </div>
        </a>
        
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
       
          <!-- Log out-->
          <div class="list-inline-item logout" style="display: inline-block; margin-left: 10px;">
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
            <button onclick="confirmLogout()" 
                    style="background-color: #ff4d4d; color: #fff; border: none; 
                           padding: 5px 12px; border-radius: 5px; 
                           font-size: 16px; cursor: pointer; 
                           transition: background-color 0.3s;
                           font-weight:700;">
                Logout &#8594;
            </button>
        </div>
        
      </div>
    </nav>
  </header>

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