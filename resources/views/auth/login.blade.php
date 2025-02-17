@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning | Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Sign Up</label>
                <input type="text" name="txt" placeholder="Username" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="Password" name="pswd" placeholder="Password" required="">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="Password" name="pswd" placeholder="Password" required="">
                <button>Login</button>
            </form>
        </div>
    </div>
</body>

</html>