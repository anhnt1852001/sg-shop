<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/css.css">
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
            padding: 40px 20px;
            background-image: url("https://img.4gamers.com.tw/ckfinder/images/Why%20Lee/21bb7cf0a84d3968.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            border-radius: 30px;
            width: 100%;
        }

        .signup-heading {
            text-align: center;
            font-weight: 600;
            color: white;
            font-size: 35px;
            margin-bottom: 35px;
        }

        .signup-google {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
            border-radius: 16px;
            background-color: #4c6ef4;
            text-decoration: none;
            padding: 8px;
            margin-bottom: 45px;
            box-shadow: 0 10px 20px -5px rgba(76, 110, 244, 0.9);
        }

        @media (min-width: 1200px) {
            .signup {
                width: 800px;
            }
        }


        .signup-google-icon {
            width: 50px;
            height: 50px;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            color: #ff7870;
            border-radius: 10px;
            background-color: white;
            font-size: 25px;
        }

        .signup-google-text {
            color: white;
            font-weight: 500;
            display: block;
            margin: 0 auto;
        }

        .signup-or {
            color: #363a40;
            display: block;
            text-align: center;
            position: relative;
            margin-bottom: 55px;
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
            color: #363a40;
            font-size: 20px;
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
            color: white;
            margin-bottom: 15px;
            font-size: 20px;
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
            background-color: #6633CC;
            font-size: 16px;
            font-weight: 500;
            font-family: "Poppins", sans-serif;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px -5px rgba(129, 201, 29, 0.9);
            outline: none;
        }

        @media screen and (max-width: 767px) {
            .signup {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<div class="signup container">
    <?php $user = user_get_one_session(); ?>
    <h1 class="signup-heading">Cập Nhật Tài Khoản</h1> <?php echo '<p>' . $msg . '</p>' ?>
    <form action="" class="signup-form" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name" class="form-label">Họ Tên</label>
            <input type="text" name="ho_ten" class="form-input" value="<?= $user['ho_ten'] ?>" id="name">
        </div>

        <div class=" form-group">
            <label for="name" class="form-label">Địa Chỉ Email</label>
            <input type="text" value="<?= $user['email'] ?>" name="email" class="form-input" id="name">
        </div>
        <div class="form-group">

            <label class="form-label">Avatar</label>
            <input name="up_hinh" type="hidden" value="<?= $user['hinh'] ?>">
            <input type="file" class="form-input" name="hinh">
            <img class="img-fluid" width="150px" src="public/image/<?= $user['hinh'] ?>" alt="">
        </div>

        <button type="submit" name="btn_update" class="form-submit">Cập Nhật</button>
    </form>

</div>