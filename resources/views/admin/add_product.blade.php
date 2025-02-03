<!DOCTYPE html>
<html>
  <head> 
   @include('admin.head')

   <style type="text/css">
   
        .form-container {
           display: flex;
           justify-content: center;
           align-items: center;
           margin-top: 40px;
        }

        label {
            display: inline-block;
            width: 300px;
            font-size: 16px!important;  
            color: aliceblue!important;
        }

        input[type="text"] {
            width: 380px;
            height: 40px;
            
        }
        textarea {
            width: 380px;
            height: 100px;
        }


        .input_deg {
            padding: 15px;
        }

        .input_deg .btn {
            width: 150px;
            height: 40px;
            background-color: #2d4259;
            color: aliceblue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .input_deg .btn:hover {
            background-color: #157727;
        }

        select {
            width: 380px;
            height: 40px;
        }

        input[type="file"] {
            width: 380px;
            height: 40px;
            padding: 3px;
            border: white 2px solid;
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
            

            <h3 style="color:aliceblue;">Add Product</h3>
            <br>
            
            <div class="form-container">
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Product Title -->
                    <div class="input_deg">
                        <label>Product Title :</label>
                        <input type="text" name="title" required>
                    </div>
                    
                    <!-- Product Description -->
                    <div class="input_deg">
                        <label>Product Description :</label>
                        <textarea name="description" required></textarea>
                    </div>
                    
                    <!-- Product Price -->
                    <div class="input_deg">
                        <label>Product Price :</label>
                        <input type="text" name="price" required>
                    </div>
                    
                    <!-- Quantity -->
                    <div class="input_deg">
                        <label>Quantity :</label>
                        <input type="text" name="qty" required>
                    </div>
                    
                    <!-- Product Category -->
                    <div class="input_deg">
                        <label>Product Category :</label>
                        <select name="category" required>
                            <option value="" disabled selected>Select a Category</option>
                            @foreach($category as $cat)
                                <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                            @endforeach  
                        </select>
                    </div>
                    
                    <!-- Product Image -->
                    <div class="input_deg">
                        <label>Product Image :</label>
                        <input type="file" name="image">
                    </div>
                
                    <!-- Submit Button -->
                    <div class="input_deg ">
                        <input class="btn" type="submit" name="submit" value="Add Product">
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