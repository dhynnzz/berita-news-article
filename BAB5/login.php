<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <h1>SUDUT</h1>
        <h2>INFORMASI</h2>
        <form id="loginForm" onsubmit="return handleLogin(event)">
            <input type="text" id="email" placeholder="Masukan email" required>
            <input type="password" id="password" placeholder="Password" required>
            <a href="#" class="forgot-password">Forgot Password?</a>
            
            <button type="submit" class="login-button">Login</button>
        </form>

        <div class="social-login">
            <span>Sign In With</span>
            <div>
                <img src="gambar/facebook.png" alt="Facebook" class="social-icon">
                <img src="gambar/instagram.png" alt="Instagram" class="social-icon">
                <img src="gambar/twitter.png" alt="Twitter" class="social-icon">
            </div>
        </div>
    </div>

    <script>
        function checkLoginStatus() {
            const sessionToken = sessionStorage.getItem('userSession');
            const loginCookie = getCookie('userLogin');
            
            if (sessionToken || loginCookie) {
                window.location.href = 'dashboard.php';
            }
        }

        function handleLogin(event) {
            event.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            

            if (email && password) {
                sessionStorage.setItem('userSession', email);
                
                setCookie('userLogin', email, 1);
                
                window.location.href = 'dashboard.php';
            }
            
            return false;
        }

        function setCookie(name, value, days) {
            let expires = '';
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 1 * 1 * 1 * 1));
                expires = '; expires=' + date.toUTCString();
            }
            document.cookie = name + '=' + value + expires + '; path=/';
        }

        function getCookie(name) {
            const nameEQ = name + '=';
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
        function deleteCookie(name) {
            document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }

        window.onload = checkLoginStatus;
    </script>
</body>
</html>