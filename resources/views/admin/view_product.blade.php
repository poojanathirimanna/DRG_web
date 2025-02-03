<!DOCTYPE html>
<html>
  <head>
    @include('admin.head')

    <style type="text/css">
      .div_deg {
        margin-top: 50px;
        margin-left: 30px;
        justify-content: center;
        align-items: center;
        display: flex;
      }

      .table_deg {
        width: 90%;
        border: 2px solid aliceblue;
      }

      th {
        border: 2px solid aliceblue;
        padding: 10px;
        text-align: center;
        font-weight: bold;
        background: linear-gradient(to left, #2f5576f9, #000000f5);
        color: white;
      }

      td {
        border: 2px solid aliceblue;
        padding: 4px;
        text-align: center;
        color: #ffffff9f;
      }

      .btn {
        background: rgba(255, 0, 0, 0.796);
        color: white !important;
        padding: 3px;
        border-radius: 5px;
        cursor: pointer;
      }

      .btn1 {
        background: rgba(10, 162, 18, 0.796);
        color: white !important;
        padding: 3px;
        border-radius: 5px;
        cursor: pointer;
        width: 56px;
        height: 32px;
        text-decoration: none !important;
      }

      input[type="search"] {
        width: 320px;
        height: 40px;
        border-radius: 5px;
        padding: 5px;
        font-size: 18px;
      }

      input[type="submit"] {
        width: 100px;
        height: 40px;
        border-radius: 5px;
        padding: 5px;
        font-size: 15px;
        background: rgba(11, 75, 118, 0.796);
        color: white !important;
        cursor: pointer;
      }

      .f1 {
        margin-left: 85px;
      }
    </style>
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')

    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h3 style="color: aliceblue;">Added Product List</h3>
          <br /><br />

          <!-- Livewire Component -->
          <livewire:product-search />

          <div class="div_deg">
            {{$product->onEachSide(1)->links()}}
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->

    <script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlTORedirect = ev.currentTarget.getAttribute('href');
        console.log(urlTORedirect);

        swal({
          title: "Delete this Product?",
          text: "Once deleted, you will not be able to recover this Product!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        }).then((willCancel) => {
          if (willCancel) {
            window.location.href = urlTORedirect;
          }
        });
      }
    </script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
      integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
    @livewireScripts
  </body>
</html>
