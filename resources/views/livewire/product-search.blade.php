<div>
    <!-- Search Input -->
    <input type="text" wire:model.defer="search" 
    placeholder="Search for products..." 
    style="width: 300px; padding: 5px; border: 5px solid #ccc; border-radius: 5px; outline: none; font-size: 14px;" />

    <button wire:click="updateProducts" 
    class="btn1" 
    style="background-color: #28a745; color: white; width:100px; padding: 0px 10px 0px 15px; border: 2px solid #1e7e34; cursor: pointer; font-size: 16px; margin-left: 10px; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    Search
</button>



    <!-- Products Table -->
    <div class="div_deg">
        <table class="table_deg">
            <tr>
                <th>Product Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{!! Str::limit($product->description, 20) !!}</td>
                <td>{{ $product->category }}</td>
                <td>LKR {{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td><img height="100" width="100" src="products/{{ $product->image }}" alt=""></td>
                <td><a class="btn1" href="{{ url('edit_product', $product->id) }}">Edit</a></td>
                <td><a onclick="confirmation(event)" class="btn" href="{{ url('delete_product', $product->id) }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
