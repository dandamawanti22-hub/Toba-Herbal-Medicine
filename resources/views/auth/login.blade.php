<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #1e293b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 350px;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="card p-4 shadow">

    <h4 class="text-center mb-3">Login</h4>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button class="btn btn-dark w-100">Login</button>
    </form>

</div>

</body>
</html>