<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div id="wave">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L20,122.7C40,117,80,107,120,85.3C160,64,200,32,240,42.7C280,53,320,107,360,122.7C400,139,440,117,480,122.7C520,128,560,160,600,149.3C640,139,680,85,720,64C760,43,800,53,840,90.7C880,128,920,192,960,181.3C1000,171,1040,85,1080,74.7C1120,64,1160,128,1200,160C1240,192,1280,192,1320,186.7C1360,181,1400,171,1420,165.3L1440,160L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>        
        </div> 
    </nav>
    {{ $slot }}
    <footer>
        <div id="footer">
            <div>info</div>
            <div>contact</div>
            <div>setting</div>
            <div>help</div>
        </div>
        <div class="bye">
            <h1>Thanks for shopping</h1>
        </div>
    </footer>
</body>
</html>