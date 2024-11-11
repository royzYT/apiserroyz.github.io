<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayan Yazı</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            position: relative;
            width: 100%;
            height: 18cm; /* Yüksekliği 18 cm olarak belirledik */
            overflow: hidden;
        }

        /* Kırmızı şeriti yalnızca üst kısımda göstermek */
        .red-stripe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5%; /* Şeritin yüksekliği %5 olarak ayarlandı */
            background-color: red;
            z-index: 1; /* Şerit yazının altına yerleşiyor */
        }

        /* Kayan yazıyı tanımlıyoruz */
        .scrolling-text {
            position: absolute;
            top: 0; /* Yazıyı tam şeridin üstüne yerleştiriyoruz */
            left: 100%;
            color: white;
            font-size: 24px;
            padding: 3px 20px;
            white-space: nowrap;
            z-index: 2; /* Yazı şeridin üstünde olacak */
            animation: scroll 12s linear infinite;
        }

        /* Sağdan sola kayan animasyon */
        @keyframes scroll {
            0% {
                left: 100%;
            }
            100% {
                left: -340%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="red-stripe"></div> <!-- Kırmızı sabit şerit -->
        <div class="scrolling-text">Hey admin, sisteminiz çok düşük korunuyor, ekibimiz tarafından sizi uyarıyoruz.

Saygılar,
exe.royz | exe.jozd | emirk4nflayy</div>
    </div>
</body>
</html>