
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeRent - Join</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    :root { --g: #d4af37; --r: #9a031e; --d: #0f0008; --c: rgba(35,15,25,0.9); --i: rgba(80,40,30,0.4); }
    body {
      margin:0; padding:0; min-height:100vh; font-family:'Inter',sans-serif; color:#eee;
      background:var(--d) url('https://images.unsplash.com/photo-1506318137071-a8e063b4bec0?w=800') center/cover no-repeat fixed;
      display:flex; align-items:center; justify-content:center;
    }
    body::before {content:''; position:absolute; inset:0; background:radial-gradient(circle at 30% 70%, rgba(154,3,30,0.4), transparent 50%); pointer-events:none;}
    .card {
      background:var(--c); backdrop-filter:blur(20px); border:1px solid rgba(212,175,55,0.4);
      border-radius:24px; padding:24px 20px; width:92%; max-width:380px; box-shadow:0 15px 40px rgba(0,0,0,0.8);
    }
    .logo {color:var(--g); font-size:1.8rem; font-weight:700; text-shadow:0 0 10px rgba(212,175,55,0.5);}
    h4 {margin:8px 0 4px; font-size:1.3rem;}
    .form-control, .btn {border-radius:12px; padding:10px 14px; font-size:0.94rem;}
    .form-control {background:var(--i); border:1px solid rgba(212,175,55,0.4); color:white;}
    .form-control::placeholder {color:#aa8866;}
    .form-control:focus {background:rgba(100,50,40,0.5); border-color:var(--g); box-shadow:0 0 0 2px rgba(212,175,55,0.3); color:white;}
    .role-btn {
      background:rgba(80,40,30,0.5); border:1px solid rgba(212,175,55,0.4);
      border-radius:14px; padding:10px; flex:1; color:#eee; font-size:0.9rem;
    }
    .role-btn.active {background:rgba(212,175,55,0.25); border-color:var(--g); box-shadow:0 0 12px rgba(212,175,55,0.4);}
    .btn-go {
      background:linear-gradient(90deg,#9a031e,#c1121f); border:none; padding:11px;
      font-weight:600; font-size:1rem; border-radius:50px; box-shadow:0 6px 16px rgba(154,3,30,0.5);
    }
    .social-btn {width:44px; height:44px; background:rgba(80,40,30,0.5); border:1px solid rgba(212,175,55,0.3); border-radius:12px;}
    .dot {width:7px; height:7px; background:var(--g); opacity:0.4; border-radius:50%;}
    .dot.active {opacity:1; box-shadow:0 0 10px var(--g);}
    a {color:var(--g); text-decoration:none;}
  </style>
</head>
<body>

<div class="card text-center">

  <!-- Logo -->
  <h1 class="logo mb-3">HomeRent</h1>

  <h4>Join Now</h4>
  <p class="small text-muted mb-3">Luxury Living Made Simple</p>

  <!-- Role -->
  <div class="d-flex gap-2 mb-3">
    <button type="button" class="role-btn active" onclick="setRole('tenant',this)">Tenant</button>
    <button type="button" class="role-btn" onclick="setRole('owner',this)">Owner</button>
  </div>

  <!-- Form -->
  <form action="process_register.php" method="POST">
    <input type="hidden" name="role" id="role" value="tenant">

    <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Full Name" required></div>
    <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
    <div class="mb-3"><input type="tel" name="phone" class="form-control" placeholder="Phone (optional)"></div>
    <div class="mb-3"><input type="password" name="password" class="form-control" placeholder="Password" required></div>

    <button type="submit" class="btn btn-go w-100 text-white mb-3">Continue →</button>
  </form>

  <div class="text-muted small mb-3">or continue with</div>
  <div class="d-flex justify-content-center gap-3 mb-3">
    <button class="social-btn"><i class="bi bi-google text-warning"></i></button>
    <button class="social-btn"><i class="bi bi-apple text-warning"></i></button>
  </div>

  <div class="d-flex justify-content-center gap-2">
    <span class="dot active"></span><span class="dot"></span><span class="dot"></span>
  </div>

  <p class="small text-muted mt-3 mb-0">
    Have account? <a href="login.php">Log In</a>
  </p>
</div>

<script>
function setRole(r, el) {
  document.querySelectorAll('.role-btn').forEach(b=>b.classList.remove('active'));
  el.classList.add('active');
  document.getElementById('role').value = r;
}

document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);

    fetch('process_register.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        alert(data.message);
        if (data.success) {
            window.location.href = data.redirect || 'dashboard.php';
        }
    })
    .catch(() => alert('Network error. Please try again.'));
});

</script>

</body>
</html>