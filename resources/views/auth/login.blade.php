<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            width: 480px; /* Slightly larger form size */
            border-radius: 12px;
        }
        .form-label {
            font-size: 0.95rem;
            font-weight: bold;
            color: #495057;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 8px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .google-btn {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            color: #555;
            font-weight: 600;
        }
        .google-btn i {
            margin-right: 8px;
        }
        .google-btn:hover {
            background-color: #f7f7f7;
            color: #333;
        }
        .divider {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: #ddd;
            margin: 0 10px;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Welcome Back!</h3>
            <form method="POST" action="" id="login">
             
                <div class="mb-4">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                        value="{{ old('email', request()->cookie('email')) }}" 
                        id="email" name="email" placeholder="Enter your email" 
                        required 
                        autofocus >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember"
                    {{ old('remember', request()->cookie('remember') ? 'checked' : '') }}>

                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
            </form>
            <div class="divider my-4">OR</div>
            <div class="d-grid">
                <button class="btn google-btn">
                    <i class="bi bi-google"></i> Continue with Google
                </button>
            </div>
            
            <div class="text-center mt-3">
                <span>Don't have an account? </span>
                <a href="{{route('register')}}" class="text-decoration-none fw-bold">Register here</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>

<script>
    async function loginUser(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const remember = document.getElementById("remember").checked; // Get the "Remember Me" checkbox state

        try {
            const response = await fetch('https://book-shelf-api-production.up.railway.app/api/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email, password, remember }),
            });

            const result = await response.json();

            if(!response.ok){
                alert('Login failed: ' + (result.message || 'Unknown error'));
                return;
            }
            if(result.code != 0){
                alert('Login failed: ' + (result.message || 'Unknown error'));
                return;
            }

             // Store token in localStorage or sessionStorage
            localStorage.setItem('auth_token', result.data.token);

            alert('Login successful!');
            console.log('Login response:', result);
            
           
        } catch (error) {
            // Handle network errors
            alert('An error occurred: ' + error.message);
        }
    }

    // Attach the function to the form submit event
    document.getElementById("login").addEventListener("submit", loginUser);
</script>

