<!DOCTYPE html>
<html>
  <head> 
   @include('admin.head')

   <style>

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

        .input_deg img {
            width: 120px;
            height: 120px;
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

            <h3 style="color:aliceblue;">Edit Product</h3>

            <div class="form-container">
                <form action="{{ url('update_product',$data->id)}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <!--Edit Product title-->
                    <div class="input_deg">
                        <label>Title :</label>
                        <input type="text" name="title" value="{{$data->title}}">
                    </div>

                    <!--Edit Product Description-->
                    <div class="input_deg">
                        <label>Description :</label>
                        <textarea name="description">{{$data->description}}</textarea>
                    </div>

                    <!--Edit Product Price-->
                    <div class="input_deg">
                        <label>Price :</label>
                        <input type="text" name="price" value="{{$data->price}}">
                    </div>

                    <!--Edit Product Quantity-->
                    <div class="input_deg">
                        <label>Quantity :</label>
                        <input type="text" name="qty" value="{{$data->quantity}}">
                    </div>
                    
                    <!--Edit Product Category-->
                    <div class="input_deg">
                        <label>Product Category :</label>
                        <select name="category">
                            <option value="{{ $data->category}}">{{$data->category}}</option>

                            @foreach($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach
                          
                            
                        </select>
                    </div>

                    <!--Edit Curent Product Image-->
                    <div class="input_deg">
                        <label>Current Image :</label>
                        <img src="/products/{{$data->image}}" alt="">
                    </div>

                    <!--Edit Product Image-->
                    <div class="input_deg">
                        <label>Change Image :</label>
                        <input type="file" name="image">
                    </div>


                    <!--Edit Product Submit Button-->
                    <div class="input_deg">
                        <input class="btn" type="submit" value="Update">
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