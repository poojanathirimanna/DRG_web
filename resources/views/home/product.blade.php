<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Products</title>
</head>
<body style="background-color: #f8f9fa; font-family: Arial, sans-serif; margin: 0; padding: 0;">
  

    <!-- Products Section -->
    <section style="padding: 20px;">
        <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
          
            <!-- Product Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <!-- Product Card -->
                @foreach($product as $products)
                <div style="background-color: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); overflow: hidden; text-align: left;">
                    <!-- Product Image -->
                    <img src="products/{{$products->image}}" alt="{{$products->title}}" style="width: 100%; height: 300px; object-fit: cover;">
                    <!-- Product Info -->
                    <div style="padding: 16px;">
                        <h3 style="font-size: 18px; font-weight: bold; color: #333;">{{$products->title}}</h3>
                        <p style="color: #555; margin: 10px 0;">Price: <span style="color: #e74c3c; font-weight: bold;">Rs.{{$products->price}}</span></p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="{{url('product_details',$products->id)}}" 
                               style="background-color: #3498db; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-size: 14px;">
                               Details
                            </a>
                            <a href="{{url('add_cart',$products->id)}}" 
                               style="background-color: #2ecc71; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; font-size: 14px;">
                               Add to Cart
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('home.footer')
</body>
</html>
