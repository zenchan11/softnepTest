<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email and Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div>
        @if(session('success'))
            <div class="alert alert-primary" role="alert">
              {{ session('success')}}
            </div>
        @endif
        
    </div>

        
    <form action="{{route('registerUser')}}" method="post">
        @csrf

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span>@error('email') {{ message}} @enderror</span>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span>@error('password') {{ message}} @enderror</span>

        <label for="name">name</label>
        <input type="name" id="name" name="name" required>

        <button type="submit">Register</button>
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="login">Already hava an account login here</a>
        </nav>
    </form>
</body>
</html>
