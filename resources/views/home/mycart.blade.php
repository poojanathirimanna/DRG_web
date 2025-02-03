<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.head')

    <style>
        .cart{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        table {
            border-collapse: collapse;
            text-align: center;
            width: 50%;
            border: 2px solid #000000;
        }
        th {
            border: 1px solid #000000;
            padding: 8px;
            color: white;
            background-color: black;
            text-align: center;
            font-weight: bold
        }   
        td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: center;
        }
        .tot_amount{
            text-align: center;
            margin-bottom: 70px;
            padding: 18px;
        }
        .btn1{
            background-color: rgb(248, 6, 6);
            color: white;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn2{
            background-color: green;
            color: white;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 20px;
        }

        .details {
            padding-right: 100px;
            margin-top: -50px;
        }
        
        label {
            font-size: 16px;
            display: inline-block;
            width: 150px;
        }
        
        .line {
            padding: 20px;
            
        }
        
        input[type="text"], textarea {
            width: 300px;
            padding: 10px;
            border-radius: 5p
            font-size: 16px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <header>
        @include('home.header')
    </header>

    <div class="cart">

        <div class="details" style="display: flex; justify-content:center; align-items:center;">
            <form action="{{url('confirm_order')}}" method="post">
                @csrf

                <h2>Customer Details</h2>
                <br><br>

                <div class="line">
                    <label for="">Customer Name</label>
                    <input type="text" name="name" id="name" value="{{Auth::user()->name}}">   
                </div>
                <div class="line">
                    <label for="">Customer Address</label>
                    <textarea name="address" id="" >{{Auth::user()->address}}</textarea>
                </div>
                <div class="line">
                    <label for="">Customer Email</label>
                    <input type="text" name="email" id="email" value="{{Auth::user()->email}}">
                </div>
                <div class="line">
                    <label for="">Customer Phone</label>
                    <input type="text" name="phone" id="phone" value="{{Auth::user()->phone}}">
                </div>
                <!--catd details-->
               
               
                <br>
                <input 
                class="btn" 
                type="submit" 
                value="payment confirmed" 
                style="background-color: #0de7eb; color: #000; padding: 8px 16px; border: 1px solid #ccc; border-radius: 4px; cursor: pointer; text-color: #f1ebeb; text-decoration: none;"
                >

                
            
       
            
            </form>
        </div>
  <table>
    <tr>
        <th>Product Title</th>
        <th>Product Price</th>
        <th>Image</th>
        <th>Remove</th>
    </tr>
    
    <?php
        $value=0;
    ?>
    @foreach($cart as $cart)
    <tr>
        <td>{{$cart->product->title}}</td>
        <td>{{$cart->product->price}}</td>
        <td><img width="150" src="/products/{{$cart->product->image}}" alt=""></td>
        <td><a class="btn1" href="{{url('remove_cart/'.$cart->id)}}">Remove</a></td>
    </tr>
    <?php
        $value = $value + $cart->product->price;
    ?>
    @endforeach
  </table>
</div>

<div class="tot_amount">
    <h3>Total Amount is : Rs.{{$value}}.00</h3>
</div>
    
    @include('home.footer')
   
    <script src="javascript/script.js"></script>
   


</body>
</html>
