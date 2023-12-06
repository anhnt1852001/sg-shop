<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        :root {
            --primary: #08aeea;
            --secondary: #13D2B8;
            --purple: #bd93f9;
            --pink: #ff6bcb;
            --blue: #8be9fd;
            --gray: #333;
            --font: "Poppins", sans-serif;
            --gradient: linear-gradient(40deg, #ff6ec4, #7873f5);
            --shadow: 0 0 15px 0 rgba(0, 0, 0, 0.05);
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        /* html {
            font-size: 62.5%;
        } */

        body {
            font-family: var(--font);
            overflow-x: hidden;
            font-weight: 300;
        }

        /* img {
            display: block;
            max-width: 100%;
        } */

        a {
            text-decoration: none;
        }

        input,
        button,
        textarea,
        select {
            font-family: var(--font);
            font-size: 1.4rem;
            font-weight: 300;
            outline: none;
            border: 0;
            margin: 0;
            padding: 0;
            border-radius: 0;
            -webkit-appearance: none;
        }

        button {
            cursor: pointer;
        }

        .signup {
            padding: 40px 80px;
            background-image: url("https://images4.alphacoders.com/190/thumb-1920-190694.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            border-radius: 30px;
            width: 100%;
        }

        .signup-heading {
            text-align: center;
            font-weight: 600;
            color: #FF0000;
            font-size: 37px;
            margin-bottom: 35px;
        }

        @media (min-width: 1200px) {
            .signup {
                width: 900px;
            }
        }



        .signup-or-text {
            display: inline-block;
            padding: 5px 20px;
            background-color: white;
            position: relative;
            font-size: 14px;
        }

        .signup-or:before {
            content: "";
            height: 1px;
            width: 100%;
            position: absolute;
            top: 50%;
            left: 0;
            background-color: #999;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .signup-already {
            text-align: center;
            color: white;
            font-size: 13px;
        }

        .signup-already-link {
            color: #4c6ef4;
            text-decoration: none;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: inline-block;
            cursor: pointer;
            color: black;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .form-input {
            display: block;
            width: 100%;
            padding: 20px;
            border-radius: 15px;
            border: 0;
            outline: none;
            font-family: "Poppins", sans-serif;
            background-color: #f2f3f5;
            color: #363a40;
            font-size: 16px;
        }

        .form-input::-webkit-input-placeholder {
            color: #b4bdc1;
        }

        .form-submit {
            display: block;
            margin-top: 45px;
            width: 100%;
            padding: 20px;
            color: white;
            text-align: center;
            cursor: pointer;
            border: 0;
            border-radius: 15px;
            background-color: #FF9900;
            font-size: 16px;
            font-weight: 500;
            font-family: "Poppins", sans-serif;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px -5px #660000;
            outline: none;
        }

        @media screen and (max-width: 767px) {
            .signup {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

    <div class="signup container">
        <h1 class="signup-heading">Quên Mật Khẩu</h1>
        <div class="mb-2 text-danger">
            <?php
            if (isset($result)) {
                echo $result;
            }
            ?>
        </div>
        <form action="" class="signup-form" method="post">
            <div class="form-group">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-input" name="ma_kh" placeholder="Nhập ma_kh">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Email</label>
                <input type="email" class="form-input" name="emailto" id="" placeholder="Nhập Email">
                <p class="text-danger">
                    <?= isset($err['email']) ? $err['email'] : '' ?>
                </p>
            </div>
            <button type="submit" class="form-submit" name="btn_gui">Lấy Lại Mật Khẩu</button>
        </form>
        <p class="signup-already">Bạn có muốn đăng nhập luôn ? <a href="?controller=user&action=login" class="signup-already-link">Login</a></p>
    </div>
</body>