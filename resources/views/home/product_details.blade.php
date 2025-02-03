<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.head')
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; color: #333;">
 

    <!-- Product Detail Section -->
    <section style="padding: 50px 20px;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: row; gap: 40px;">
            <!-- Left Section: Product Image and Thumbnails -->
            <div style="flex: 1;">
                
                <!-- Main Product Image -->
                <div style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <img src="/products/{{$data->image}}" alt="{{$data->title}}" style="width: 500px; border-radius: 5px; object-fit: cover;">
                </div>
            </div>

            <!-- Right Section: Product Details -->
            <div style="flex: 2; display: flex; flex-direction: column; justify-content: flex-start;">
                <h1 style="font-size: 32px; font-weight: bold; color: #333; margin-bottom: 10px;">{{$data->title}}</h1>
                <p style="font-size: 18px; font-weight: bold; color: #e74c3c; margin-bottom: 10px;">Rs. {{$data->price}}</p>
                <p style="font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 20px;">{{$data->description}}</p>
                <p style="font-size: 14px; margin-bottom: 10px; color: #555;">
                    Available Quantity: <strong style="color: #27ae60;">{{$data->quantity}}</strong>
                </p>
                <p style="font-size: 14px; margin-bottom: 20px; color: #555;">
                    Category: <strong style="color: #2980b9;">{{$data->category}}</strong>
                </p>

              
                

                <!-- Add to Cart Button -->
                <a href="{{url('add_cart',$data->id)}}" class="btn" style="background: #f1c40f; color: #000000; text-decoration: none; font-size: 1rem; width:100px; padding: 0.5rem 0.7rem; border-radius: 50px; transition: all 0.5s ease-in-out; position: relative;">
                    Add to Cart
                </a>

              

                
            </div>
        </div>
<br><br>



        <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-direction: row; gap: 40px;">
            <div style="flex: 1;">
                <a href="{{url('product_page')}}" class="btn" style="background: #f1c40f; color: #000000; text-decoration: none; font-size: 1rem; width:100px; padding: 0.5rem 0.7rem; border-radius: 50px; transition: all 0.5s ease-in-out; position: relative;">
                    Back to Products
                </a>
            </div>
    </section>

    <script src="javascript/script.js"></script>
</body>
</html>

