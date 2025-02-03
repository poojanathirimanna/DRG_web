<!DOCTYPE html>
<html>
  <head> 
   @include('admin.head')

   

   <style type="text/css">
   
   h4 {
    color: aliceblue;
    text-align: center;
    font-size: 24px;
    background: linear-gradient(90deg, #007bff, #0056b3);
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-transform: uppercase;
}

/* Form Container */
.div_deg {
    margin: 0 auto;
    max-width: 500px;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid #e0e0e0;
}

/* Form Inputs */
.div_deg form div {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
}

.div_deg input[type="text"] {
    flex: 1;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.div_deg input[type="text"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.div_deg input[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.div_deg input[type="submit"]:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}

/* Table Styling */
.table_deg {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
    background-color: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.table_deg th, .table_deg td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #dee2e6;
    font-size: 14px;
    font-weight: 500;
    color: #333;
}

.table_deg th {
    background-color: #007bff;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-bottom: 2px solid #0056b3;
}

.table_deg tr:nth-child(even) {
    background-color: #f8f9fa;
}

.table_deg tr:hover {
    background-color: #e9ecef;
    transition: background-color 0.3s ease;
}

.table_deg td a {
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 13px;
    color: white;
    display: inline-block;
    transition: background-color 0.3s ease, transform 0.2s;
}

/* Buttons */
.table_deg td .btn-success {
    background-color: #28a745;
    border: none;
}

.table_deg td .btn-success:hover {
    background-color: #218838;
    transform: scale(1.05);
}

.table_deg td .btn-danger {
    background-color: #dc3545;
    border: none;
}

.table_deg td .btn-danger:hover {
    background-color: #c82333;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    .div_deg {
        padding: 20px;
    }

    .table_deg th, .table_deg td {
        padding: 10px;
        font-size: 12px;
    }

    .div_deg input[type="text"], .div_deg input[type="submit"] {
        font-size: 12px;
    }
}


    
  </style>
   
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')


    
  
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
            <h3 style="color:aliceblue;">Add Product Category</h3>
            <br><br>
            
<!-- Form Section -->
<div style="
    margin: 0 auto;
    max-width: 500px;
    padding: 20px;
    border-radius: 2px;
    border: 3px solid #ddd;">
  <form action="{{ route('categories.store') }}" method="post">
    @csrf
    <div style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
      <input type="text" name="category" placeholder="Enter category name" 
             style="
                flex: 1;
                padding: 8px;
                font-size: 14px;
                border: 1px solid #ccc;
                border-radius: 5px;
                outline: none;
                transition: border-color 0.3s, box-shadow 0.3s;">
      <input type="submit" value="Add" 
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
                transition: background-color 0.3s;">
    </div>
  </form>
</div>
<br>

<!-- Table Section -->
<table style="
    width: 85%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(11, 26, 192, 0.8);">
  <thead>
    <tr style="background-color: #093768; color: rgba(255, 255, 255, 0.783); text-transform: uppercase; font-size: 14px;">
      <th style="padding: 10px; text-align: left;">Category Name</th>  
      <th style="padding: 10px; text-align: center;">Edit </th>
      <th style="padding: 10px; text-align: center;">Delete</th>
    

    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr style="border-bottom: 1px solid #ddd; font-size: 14px;">
      <td style="padding: 8px 10px; font-size: 16px; color: #333; font-weight:600;">{{ $data->category_name }}</td>
      <td style="padding: 8px; text-align: center;">
        <a href="{{ url('categories.edit', $data->id) }}" 
           style="
              text-decoration: none;
              padding: 5px 10px;
              border-radius: 5px;
              font-size: 13px;
              color: white;
              background-color: #28a745;
              display: inline-block;
              transition: background-color 0.3s;">
          Edit
        </a>
      </td>
      <td style="padding: 8px; text-align: center;">
        <a onclick="confirmation(event)" href="{{ url('categories.destroy', $data->id) }}" 
           style="
              text-decoration: none;
              padding: 5px 10px;
              border-radius: 5px;
              font-size: 13px;
              color: white;
              background-color: #dc3545;
              display: inline-block;
              transition: background-color 0.3s;">
          Delete
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



<section style="
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 5px;
    max-width: 1040px;
    margin: 20px auto;
    padding: 20px;
  
  
    ">
    
    <!-- Card 1 -->
    <div style="
        flex: 1;
        min-width: 250px;
        max-width: 300px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;">
        <img src="admincss/img/mockup4.jpg" alt="Image 1" style="width: 100%; height: 200px; object-fit: cover;">
        
    </div>

    <!-- Card 2 -->
    <div style="
        flex: 1;
        min-width: 250px;
        max-width: 300px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;">
        <img src="admincss/img/mockup5.jpg" alt="Image 2" style="width: 100%; height: 200px; object-fit: cover;">
       
    </div>

    <!-- Card 3 -->
    <div style="
        flex: 1;
        min-width: 250px;
        max-width: 300px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;">
        <img src="admincss/img/mockup6.jpg" alt="Image 3" style="width: 100%; height: 200px; object-fit: cover;">
        
    </div>

</section>

<!-- Footer Section -->
<div style="
      background: linear-gradient(to left, #2f5576f9, #000000f5);

    color: #ffffff;
    text-align: center;
    padding: 5px;
    border-radius: 5px;
    font-size: 18px;
    margin-top: 20px;">
    
    <p>Happy Shopping With DRG</p>
    


           
            
            
          </div>
      </div>
    </div>
    
    <!-- JavaScript files-->
    <script>
      function confirmation(ev)
      {
          ev.preventDefault();
          var urlTORedirect = ev.currentTarget.getAttribute('href');
          console.log(urlTORedirect);
      
          swal({
            title: "Delete this Category ?",
            text: "Once deleted, you will not be able to recover this Category !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })

          .then(willCancel => {
            if (willCancel) 
            {
              window.location.href = urlTORedirect;
            }
          });
      }
          
          </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
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