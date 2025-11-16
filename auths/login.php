<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeRent • Sign In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    :root{
      --g:#d4af37;   /* Gold */
      --r:#9a031e;   /* Deep red */
      --d:#0f0008;
      --c:rgba(25,8,18,0.88);   /* Slightly darker card */
    }
    body{
      margin:0;
      font-family:'Inter',sans-serif;
      background:var(--d) url('https://images.unsplash.com/photo-1506318137071-a8e063b4bec0?w=1080') center/cover fixed;
      color:#eee;
      display:flex;
      align-items:center;
      justify-content:center;
      min-height:100vh;
    }
    body::before{
      content:'';
      position:absolute;
      inset:0;
      background:radial-gradient(circle at 20% 80%,rgba(154,3,30,0.35),transparent 55%);
      pointer-events:none;
    }
    .card{
      background:var(--c);
      backdrop-filter:blur(22px);
      border:1px solid rgba(212,175,55,0.4);
      border-radius:30px;
      padding:44px 34px;
      max-width:420px;
      width:92%;
      box-shadow:0 25px 70px rgba(0,0,0,0.8);
    }
    .logo{
      color:var(--g);
      font-weight:900;
      font-size:2.2rem;
      text-shadow:0 0 15px rgba(212,175,55,0.6);
    }

    /* ALL TEXT NOW SUPER VISIBLE */
    h4, p, .text-muted, .small { color:#ffffff !important; text-shadow:0 1px 3px rgba(0,0,0,0.6); }
    .text-warning { color:#ffeb8c !important; } /* Brighter gold */

    .form-control{
      background:rgba(30,10,20,0.85) !important;
      border:1px solid rgba(212,175,55,0.6);
      border-radius:16px;
      color:#ffffff !important;
      padding:14px 18px;
      font-weight:500;
      font-size:1rem;
    }
    .form-control::placeholder{
      color:#ffd4a0 !important;   /* Very bright gold placeholder */
      font-weight:500;
    }
    .form-control:focus{
      background:rgba(40,15,25,0.95) !important;
      border-color:var(--g);
      box-shadow:0 0 0 4px rgba(212,175,55,0.35);
      color:#ffffff !important;
    }

    .show-toggle{
      color:#ffeb8c !important;
      font-weight:600;
      cursor:pointer;
      user-select:none;
    }

    .btn-login{
      background:var(--r);
      border:none;
      border-radius:50px;
      padding:14px;
      font-weight:700;
      font-size:1.05rem;
      box-shadow:0 10px 25px rgba(154,3,30,0.6);
    }
    .btn-login:hover{
      background:#c1121f;
      transform:translateY(-3px);
    }

    #adminPanel{
      display:none;
      margin-top:22px;
      padding:18px;
      background:rgba(212,175,55,0.2);
      border:2px dashed var(--g);
      border-radius:18px;
    }
    .role-btn{
      background:rgba(80,40,30,0.6);
      border:1px solid rgba(212,175,55,0.5);
      color:#fff;
      border-radius:14px;
      padding:11px 18px;
      font-weight:600;
    }
    .role-btn.active{
      background:var(--g);
      color:#000;
    }
    a { color:#ffeb8c !important; text-decoration:none !important; }
    a:hover { color:#fff !important; }
  </style>
</head>
<body>

<div class="card text-center">
  <h1 class="logo mb-4" id="logo"> Hope HomeRent</h1>

  <p class="text-uppercase text-warning small mb-1" id="greeting"></p>
  <h4 class="mb-2">Welcome Back!</h4>
  <p class="small mb-4">Well Come to H2R where your dream is became True</p>

  <!-- Hidden role selector (5 taps on logo) -->
  <div id="adminPanel">
    <p class="text-warning mb-3 fw-bold">Login as:</p>
    <div class="d-flex gap-3 justify-content-center">
      <button type="button" class="role-btn active" onclick="setRole('tenant')">Tenant</button>
      <button type="button" class="role-btn" onclick="setRole('owner')">Owner</button>
      <button type="button" class="role-btn" onclick="setRole('admin')">Admin</button>
    </div>
  </div>

  <form action="process_login.php" method="POST" class="mt-4">
    <input type="hidden" name="role" id="role" value="tenant">

    <div class="mb-3">
      <input type="text" name="identifier" class="form-control" placeholder="Email or Phone Number" required>
    </div>

    <div class="mb-4 position-relative">
      <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required>
      <span class="position-absolute end-0 top-50 translate-middle-y pe-4 show-toggle"
            onclick="let p=document.getElementById('pass');p.type=p.type==='password'?'text':'password';this.textContent=p.type==='password'?'Show':'Hide'">
        Show
      </span>
    </div>

    <button type="submit" class="btn btn-login w-100 text-white">Sign In →</button>
  </form>

  <p class="mt-4 small">
    Don't have an account? <a href="signup.php">Create one free</a>
  </p>
</div>

<script>
  // Ethiopian greeting (Amharic)
  const h = new Date().getHours();
  const g = h<12 ? "ሰላም!" : h<18 ? "እንደተ ነህ?" : "ደህና ይደር!";
  document.getElementById("greeting").textContent = g;

  // 5-tap to reveal admin panel
  let taps = 0;
  document.getElementById("logo").addEventListener("click", () => {
    if (++taps >= 5) {
      document.getElementById("adminPanel").style.display = "block";
      taps = 0;
    }
  });

  function setRole(r) {
    document.querySelectorAll('.role-btn').forEach(b => b.classList.remove('active'));
    event.target.classList.add('active');
    document.getElementById('role').value = r;
  }
</script>
</body>
</html>