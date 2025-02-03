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
      width: 100%;
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
      width: 76px;
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
            <h3 style="color: aliceblue;">Order List</h3>
          <br/>

            
            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Change Status</th>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->product->title}}</td>
                        <td>{{$data->product->price}}</td>
                        <td>
                            <img width="100" src="products/{{$data->product->image}}" alt="">
                        </td>
                        <td>
                            @if($data->status == 'pending')
                            <span style="color: rgb(15, 18, 223)">{{$data->status}}</span>
                            @elseif($data->status == 'canceled')
                            <span style="color: red">{{$data->status}}</span>
                            @else
                            <span style="color: rgb(9, 224, 23)">{{$data->status}}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('orders.cancel',$data->id)}}" class="btn">Canceled</a>
                            <a href="{{url('orders.deliver',$data->id)}}" class="btn1">Delivered</a>
                        </td>
                        
                    </tr>
                    @endforeach
                </table>
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