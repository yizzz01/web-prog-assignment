<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./beranda.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate Change | Web Prog Project</title>
</head>
<body>
       <!-- 3D hover -->
       <div class="all">
        <div class="lefter">
          <div class="text" id="CeritaPohon">Cerita Pohon</div>
        </div>

          

        <div class="left">
          <div class="text" id="CeritaBunga">Cerita Bunga</div>
        </div>

        <div class="center">
          <div class="explainer"><span>Start</span></div>
          <div class="text" id="CeritaFlora">Cerita flora dan fauna</div>
        </div>

        <div class="right">
          <div id="Bagaimana?" class="text">Bagaimana?</div>
        </div>

        <script>
          // Attach the event listener to the correct element
          document.getElementById("Bagaimana?").addEventListener('click', function() {
            // Open a new tab
            window.open('/bagaimana', '_blank');
          });
        </script>
        
        <div class="righter">
          <div class="text" id="Kapan?">Kapan?</div>
        </div>
      </div>

      <script>
          // Attach the event listener to the correct element
          document.getElementById("Kapan?").addEventListener('click', function() {
            // Open a new tab
            window.open('/Kapan', '_blank');
          });
        </script>

       <!-- watermark -->
       <div class="watermark">Harus menggunakan laptop / PC | insipired by
        <a href="https://www.instagram.com/reel/C9m4k2PtNBK/?igsh=dGhkdnB3Y2VkZ3Ax">WebGuild</a>
       </div>

       <!-- watermark2 -->
       <div class="watermark2">Only for Project Web Programming
       </div>
       
 <script src="./beranda.js"></script>
</body>
</html>
