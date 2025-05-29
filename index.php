<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Locura de Amor</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: radial-gradient(circle at top left, #ffdde1, #ee9ca7);
      font-family: 'Segoe UI', sans-serif;
      overflow: hidden;
      position: relative;
    }

    /* Corazones animados */
    .heart {
      position: absolute;
      width: 16px;
      height: 16px;
      background: url('https://cdn-icons-png.flaticon.com/512/833/833472.png') no-repeat center;
      background-size: contain;
      animation: float 10s infinite linear;
      opacity: 0.6;
      z-index: -1;
    }

    @keyframes float {
      0% {
        transform: translateY(100vh) scale(0.5);
        opacity: 0.2;
      }
      50% {
        opacity: 0.6;
      }
      100% {
        transform: translateY(-10vh) scale(1.2);
        opacity: 0;
      }
    }

    .container {
      position: relative;
      width: 90vw;
      max-width: 300px;
      height: 180px;
      perspective: 1000px;
      cursor: pointer;
      z-index: 1;
    }

    .envelope {
      width: 100%;
      height: 100%;
      background: #d62828;
      border-radius: 8px;
      position: relative;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
      transition: transform 0.6s ease-in-out;
      transform-style: preserve-3d;
      z-index: 2;
    }

    .flap {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 50%;
      background: #f77f00;
      clip-path: polygon(0 0, 100% 0, 50% 100%);
      transform-origin: top center;
      transition: transform 0.6s ease;
      z-index: 3;
    }

    .letter {
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%) translateY(0);
      width: 90%;
      background: white;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      opacity: 0;
      transition: transform 1s ease, opacity 1s ease;
      z-index: 1;
      font-size: 12px;
      max-height: 160px;
      overflow-y: auto;
      line-height: 1.4;
    }

    .container.open .flap {
      transform: rotateX(-180deg);
    }

    .container.open .letter {
      transform: translateX(-50%) translateY(-230px) scale(1.05);
      opacity: 1;
    }

    .sparkle {
      position: absolute;
      width: 6px;
      height: 6px;
      background: gold;
      border-radius: 50%;
      animation: sparkle 1.5s infinite ease-in-out;
      opacity: 0;
      pointer-events: none;
    }

    @keyframes sparkle {
      0% {
        transform: scale(0.5) translateY(0);
        opacity: 0.6;
      }
      50% {
        transform: scale(1.2) translateY(-20px);
        opacity: 1;
      }
      100% {
        transform: scale(0.5) translateY(-40px);
        opacity: 0;
      }
    }

    .container.open .sparkle {
      opacity: 1;
    }

    /* Scroll suave para móviles */
    .letter::-webkit-scrollbar {
      width: 5px;
    }
    .letter::-webkit-scrollbar-thumb {
      background: #f77f00;
      border-radius: 4px;
    }
  </style>
</head>
<body>

<div class="container" onclick="openEnvelope(this)">
  <div class="envelope">
    <div class="flap"></div>
  </div>
  <div class="letter">
    <p><strong>💌 ¡Hola, amiga linda!</strong></p>
    <p>Este mensajito viaja directo desde lo más bonito de mi corazón... solo para ti.</p>
    <p>Si alguna vez te lastimé sin darme cuenta, de verdad lo siento mucho.</p>
    <p>Te extraño más de lo que imaginas. Tu energía, tu risa, tu forma única de estar presente… hacen falta.</p>
    <p>Gracias por ser parte de mi vida. Ojalá podamos compartir más momentos, reírnos de cualquier cosa y hablar de todo y nada como siempre.</p>
    <p><strong>🌟 Nunca olvides lo especial que eres, y lo mucho que te valoro.</strong></p>
    <p><em>Con mucho cariño .Atentamente:Yuler ✨</em></p>
  </div>

  <!-- Chispas mágicas -->
  <div class="sparkle" style="top: -30px; left: 20px; animation-delay: 0s;"></div>
  <div class="sparkle" style="top: -40px; left: 90px; animation-delay: 0.3s;"></div>
  <div class="sparkle" style="top: -35px; left: 160px; animation-delay: 0.6s;"></div>
</div>

<!-- Corazones flotantes -->
<script>
  for (let i = 0; i < 15; i++) {
    const heart = document.createElement('div');
    heart.className = 'heart';
    heart.style.left = `${Math.random() * 100}vw`;
    heart.style.animationDelay = `${Math.random() * 10}s`;
    document.body.appendChild(heart);
  }

  function openEnvelope(element) {
    element.classList.toggle('open');
  }
</script>

</body>
</html>
