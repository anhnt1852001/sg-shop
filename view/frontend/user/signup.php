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

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: inline-block;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 10px;
            cursor: pointer;
            letter-spacing: 1px;
        }

        .form-input {
            display: block;
            width: 100%;
            padding: 15px;
            border-radius: 12px;
            background-color: #f8f9fb;
            border: 0;
            color: #212144;
            font-size: 13px;
            transition: all 0.25s ease;
        }

        .form-input:focus {
            background-color: white;
            box-shadow: 0 10px 20px -5px rgba(163, 165, 178, 0.4);
            -webkit-box-shadow: 0 10px 20px -5px rgba(163, 165, 178, 0.4);
        }

        .form-input::-webkit-input-placeholder {
            color: #a3a5b2;
        }

        .btn {
            display: inline-block;
            border: 0;
            border-radius: 10px;
            text-align: center;
            font-size: 14px;
            padding: 15px;
            text-transform: uppercase;
            background-color: transparent;
        }

        .btn--gradient {
            background-image: linear-gradient(to bottom, #ff1d75, #f8902f);
            width: 100%;
            color: white;
        }

        .tab {
            align-self: center;
            display: inline-flex;
            padding: 5px;
            background-color: #f8f9fb;
            border-radius: 10px;
            margin-bottom: 50px;
        }

        .tab-item {
            text-transform: uppercase;
            font-size: 14px;
            padding: 7.5px 15px;
            border-radius: inherit;
            cursor: pointer;
            text-align: center;
            font-weight: 300;
        }

        .tab-item.is-active {
            background-image: linear-gradient(to bottom, #330066, #6600CC);
            color: white;
            font-size: 25px;
        }

        .signup {
            width: 100%;
            max-width: 1200px;
            height: 100%;
            background-color: white;
            position: relative;
            z-index: 2;
            border-radius: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;
        }

        .signup-image {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .signup-container {
            padding: 100px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        .signup-heading {
            font-size: 45px;
            font-weight: bold;
            color: #212144;
            margin-bottom: 30px;
        }

        .signup-form {
            width: 100%;
        }

        .signup-term {
            font-size: 12px;
            font-weight: 500;
            line-height: 1.6;
        }

        .signup-term-link {
            color: #2979ff;
        }

        @media screen and (max-width: 1023px) {

            body:before,
            body:after {
                display: none;
            }

            .signup {
                display: block;
            }

            .signup-container {
                padding: 50px 20px;
            }

            .signup-image {
                display: none;
            }
        }

        @media screen and (max-width: 767px) {
            .signup-container {
                max-width: 100%;
            }
        }
    </style>
</head>

<div class="signup">
    <img src="https://i.pinimg.com/originals/a4/e9/98/a4e998aa92ffed2135c6aea362f6206f.jpg" alt="" class="signup-image">
    <div class="signup-container">
        <div class="tab">
            <div class="tab-item is-active">Đăng Ký Tài Khoản</div>
            <br>

        </div>
        <?php echo $msg ?>

        <form class="signup-form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" class="form-label">Username</label>
                <input type="text" id="" class="form-input" placeholder="Ex: John Doe" required name="ma_kh">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Họ Tên</label>
                <input type="text" id="" class="form-input" placeholder="Ex: John Doe" required name="ho_ten">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-input" placeholder="Ex: johndoe@email.com" name="email">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-input" placeholder="************" name="mat_khau">
            </div>
            <div class="form-group">
                <label for="re-password" class="form-label">Repeat password</label>
                <input type="password" id="re-password" class="form-input" placeholder="************" name="mat_khau2">
            </div>
            <div class="form-group">
                <label for="re-password" class="form-label">Avatar</label>
                <input type="file" class="form-input" name="hinh">
            </div>


            <button class="btn btn--gradient">Đăng Ký</button>
            Đăng Nhập tại đây <a href="?controller=user&action=login" class="signup-term-link">Login</a>
        </form>
    </div>
</div>