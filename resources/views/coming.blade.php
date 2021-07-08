<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="icon" href="{{asset('dashboard/assets/img/brand/favicon.png')}}" type="image/png">
    <style>
        .centerp {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 7%;
                height: auto;
            }
        @media (min-width: 992px) and (max-width: 1199px) {
            .centerp {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 7%;
                height: auto;
            }
        }

        @media (max-width: 991px) {
            .centerp {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 27%;
                height: auto;
            }
        }

        @media (max-width: 767px) {
            .centerp {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 36%;
                height: auto;
            }
        }
    </style>
</head>
<body style="background-color: #F63854;">
    <img src="{{asset('white.png')}}" class="centerp">
</body>
</html>
