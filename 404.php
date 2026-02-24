<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>404 - Halaman Tidak Ditemukan</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: rgb(26, 29, 27);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
    }

    .particles {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 1;
    }

    .particle {
      position: absolute;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 50%;
      animation: float 6s ease-in-out infinite;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
    }

    .particle:nth-child(1) { width: 80px; height: 80px; left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { width: 60px; height: 60px; left: 20%; animation-delay: 1s; }
    .particle:nth-child(3) { width: 100px; height: 100px; left: 80%; animation-delay: 2s; }
    .particle:nth-child(4) { width: 40px; height: 40px; left: 70%; animation-delay: 3s; }
    .particle:nth-child(5) { width: 120px; height: 120px; left: 50%; animation-delay: 4s; }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-100px) rotate(180deg); }
    }

    .container {
      text-align: center;
      color: white;
      z-index: 10;
      position: relative;
      max-width: 600px;
      padding: 20px;
    }

    .error-code {
      font-size: 10rem;
      font-weight: bold;
      text-shadow: 0 0 50px rgba(200, 100, 255, 0.5);
      background: linear-gradient(45deg, #bb86fc, #d2afff, #ffffff);
      background-size: 400% 400%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: gradient 3s ease infinite, pulse 2s ease-in-out infinite;
    }

    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    .title {
      font-size: 2.5rem;
      margin: 20px 0;
      animation: slideInFromTop 1s ease-out;
    }

    .subtitle {
      font-size: 1.2rem;
      margin: 20px 0;
      opacity: 0.9;
      animation: slideInFromBottom 1s ease-out 0.3s both;
    }

    .description {
      font-size: 1rem;
      margin: 30px 0;
      opacity: 0.8;
      line-height: 1.6;
      animation: fadeIn 1s ease-out 0.6s both;
    }

    .buttons {
      margin-top: 40px;
      animation: fadeIn 1s ease-out 0.9s both;
    }

    .btn {
      display: inline-block;
      padding: 15px 30px;
      margin: 10px;
      background: rgba(255, 255, 255, 0.1);
      color: white;
      text-decoration: none;
      border-radius: 50px;
      border: 2px solid rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
      font-weight: bold;
      position: relative;
      overflow: hidden;
    }

    .btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .btn:hover::before {
      left: 100%;
    }

    .btn:hover {
      background: rgba(255, 255, 255, 0.3);
      border-color: rgba(255, 255, 255, 0.5);
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
      background: linear-gradient(45deg, #9c27b0, #e91e63);
      border-color: rgba(255, 255, 255, 0.3);
    }

    .btn-primary:hover {
      background: linear-gradient(45deg, #e91e63, #9c27b0);
      border-color: rgba(255, 255, 255, 0.5);
    }

    .astronaut {
      position: absolute;
      bottom: 20px;
      right: 20px;
      font-size: 4rem;
      animation: float-astronaut 4s ease-in-out infinite;
      z-index: 5;
    }

    @keyframes float-astronaut {
      0%, 100% { transform: translateY(0px) rotate(-5deg); }
      50% { transform: translateY(-20px) rotate(5deg); }
    }

    @keyframes slideInFromTop {
      from { opacity: 0; transform: translateY(-50px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideInFromBottom {
      from { opacity: 0; transform: translateY(50px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @media (max-width: 768px) {
      .error-code { font-size: 6rem; }
      .title { font-size: 2rem; }
      .subtitle { font-size: 1rem; }
      .astronaut { font-size: 2rem; bottom: 10px; right: 10px; }
      .btn { padding: 12px 25px; margin: 8px; font-size: 0.9rem; }
    }

    .glitch {
      position: relative;
    }

    .glitch::before,
    .glitch::after {
      content: attr(data-text);
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .glitch::before {
      animation: glitch-1 0.5s infinite;
      color: #ffb6ff;
      z-index: -1;
    }

    .glitch::after {
      animation: glitch-2 0.5s infinite;
      color: #d3aaff;
      z-index: -2;
    }

    @keyframes glitch-1 {
      0%, 14%, 15%, 49%, 50%, 99%, 100% { transform: translate(0); }
      15%, 49% { transform: translate(-2px, 2px); }
    }

    @keyframes glitch-2 {
      0%, 20%, 21%, 62%, 63%, 99%, 100% { transform: translate(0); }
      21%, 62% { transform: translate(2px, -2px); }
    }
  </style>
</head>
<body>
  <div class="particles">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
  </div>

  <div class="container">
    <div class="error-code glitch" data-text="404">404</div>
    <h1 class="title">Oops! Halaman Tidak Ditemukan</h1>
    <h2 class="subtitle">Sepertinya Anda tersesat di ruang angkasa</h2>
  
    
    <div class="buttons">
      <a href="/" class="btn btn-primary">🏠 Kembali ke Beranda</a>
      <a href="javascript:history.back()" class="btn">⬅️ Halaman Sebelumnya</a>
    </div>
  </div>

  <div class="astronaut">🚀</div>

  <script>
    document.addEventListener('mousemove', function(e) {
      const particles = document.querySelectorAll('.particle');
      const x = e.clientX / window.innerWidth;
      const y = e.clientY / window.innerHeight;

      particles.forEach((particle, index) => {
        const speed = (index + 1) * 0.05;
        const xMove = (x - 0.5) * speed * 50;
        const yMove = (y - 0.5) * speed * 50;
        particle.style.transform = `translate(${xMove}px, ${yMove}px)`;
      });
    });

    document.querySelector('.error-code').addEventListener('click', function() {
      this.style.animation = 'none';
      setTimeout(() => {
        this.style.animation = 'gradient 3s ease infinite, pulse 2s ease-in-out infinite';
      }, 100);
    });

    function createRandomParticle() {
      const particle = document.createElement('div');
      particle.className = 'particle';
      particle.style.width = Math.random() * 60 + 20 + 'px';
      particle.style.height = particle.style.width;
      particle.style.left = Math.random() * 100 + '%';
      particle.style.animationDelay = Math.random() * 6 + 's';
      particle.style.animationDuration = Math.random() * 4 + 4 + 's';
      document.querySelector('.particles').appendChild(particle);

      setTimeout(() => {
        particle.remove();
      }, 10000);
    }

    setInterval(createRandomParticle, 3000);
  </script>
</body>
</html>
