<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/bg.png'); /* Replace with the path to your image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-header h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .profile-header p {
            font-size: 16px;
            color: #777;
        }

        h2 {
            font-size: 22px;
            font-weight: bold;
            color: #34495e;
            margin-bottom: 15px;
            border-bottom: 2px solid #3498db;
            display: inline-block;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
        }

        strong {
            color: #555;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        /* Button Styles */
        .btn-save {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-save:hover {
            background-color: #2980b9;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Alert Styles */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 24px;
            }

            h2 {
                font-size: 18px;
            }

            input[type="text"],
            input[type="email"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Display Flash Messages -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Profile Header -->
        <div class="profile-header">
            <h1>Welcome, {{ $user->name }}</h1>
            <p>Manage your profile details and account settings</p>
        </div>

        <!-- View Profile Details -->
        <div>
            <h2>Profile Details</h2>
            <p><strong>Name: </strong> {{ $user->name }}</p>
            <p><strong>Email: </strong> {{ $user->email }}</p>
            <p><strong>Contact No:</strong> {{ $user->phone }} </p>
            <p><strong>Address:</strong> {{ $user->address }} </p>
        </div>

        <!-- Edit Profile Details -->
        <div>
            <h2>Edit Profile</h2>
            <form action="{{ route('profile.update', $user->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="{{ $user->phone }}">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="{{ $user->address }}">
                </div>

                <button type="submit" class="btn-save">Save Changes</button>
            </form>
        </div>

        <!-- Back to Dashboard -->
        <div style="margin-top: 30px;">
            <a href="{{ route('dashboard') }}">Back to Dashboard</a>
        </div>
    </div>

    
</body>
</html>
