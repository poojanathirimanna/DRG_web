<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.head')

    <style>
        .table{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        table {
            border-collapse: collapse;
            text-align: center;
            width: 70%;
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
    </style>
    
</head>
<body>
    <header>
        @include('home.header')
    </header>

    <div class="table">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
            </tr>

            @foreach($order as $order)
                <tr>
                    <td>{{ $order->product->title }}</td>
                    <td>{{ $order->product->price }}</td>
                    <td>
                        <img width="120" src="products/{{$order->product->image}}" alt="">
                    </td>
                   
                    <td>{{ $order->status }}</td>
                </tr>

            @endforeach
           
        </table>
    </div>

    @include('home.footer')
    
</body>
</html>