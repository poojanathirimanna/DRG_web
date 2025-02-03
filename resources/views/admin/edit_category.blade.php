<!DOCTYPE html>
<html>
  <head> 
   @include('admin.head')

   <style>
        .div_deg{
          display: flex;
          justify-content: center;
          align-items: center;
          margin:60px;
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

            <h3 style="color:aliceblue;">Edit Product Category</h3>
            <br>
        
        <div style="
            margin: 0 auto;
    max-width: 500px;
    padding: 20px;
    border-radius: 2px;
    border: 3px solid #ddd;">
            <form action="{{ url('update_category', $data->id) }}" method="post">
                @csrf
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                    <input type="text" name="category" value="{{ $data->category_name }}" 
                           style="
                              flex: 1;
                              padding: 8px;
                              font-size: 14px;
                              border: 1px solid #ccc;
                              border-radius: 5px;
                              outline: none;
                              transition: border-color 0.3s, box-shadow 0.3s;">
                    <input type="submit" value="Update" 
                           style="
                              background-color: #093768;
                              color: #ffffff;
                              border: none;
                              padding: 8px 15px;
                              font-size: 14px;
                              font-weight: bold;
                              text-transform: uppercase;
                              border-radius: 5px;
                              cursor: pointer;
                              transition: background-color 0.3s ease, transform 0.2s;">
                </div>
            </form>
        </div>

          
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>
