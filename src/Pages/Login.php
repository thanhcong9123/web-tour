<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Đăng nhập</title>
    <style>
        @keyframes sliderIn {
            0% {
                top: 50%;
            }

            100% {
                top: 0px;
            }
        }

        .animationIn {
            animation: sliderIn 0.5s ease-in-out;
            animation-fill-mode: forwards;
        }

        @keyframes sliderOut {
            0% {
                top: -0.5px;
            }

            100% {
                top: 50%;
            }
        }

        .animationOut {
            animation: sliderOut 0.5s ease-in-out;
            animation-fill-mode: forwards;
        }
    </style>
</head>
<body>
    <?php include "../Components/Header/Header.php"?>
    <div class="flex justify-center h-full my-5">
    <form action="" class="flex flex-col py-10 px-5 border">
            <h1 class="uppercase font-bold text-2xl text-center my-5">Đăng nhập Tài Khoản</h1>
            <div class="relative mt-2">
                <input type="text" name="username" id="username"
                    class="border rounded p-2 my-2 focus:outline-none text-sm w-80">
                <label for="username" class="absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400"
                    id="labelUsername">Tên đăng nhập</label>
            </div>
            <label for="" class="text-xs text-red-500 mb-2 hidden" id="validUsername">Tên đăng nhập không tồn tại!</label>
            <div class="relative mt-3">
                <input type="password" name="password" id="password"
                    class="border rounded p-2 my-2 focus:outline-none text-sm w-80 ">
                <label for="username" class="absolute left-2.5 top-1/2 transform -translate-y-1/2 text-gray-400"
                    id="labelPassword">Mật khẩu</label>
            </div>
            <label for="" class="text-xs text-red-500 mb-2 hidden" id="validPassword">Sai mật khẩu!</label>
            <a href="#" class="text-sky-500 font-semibold mt-3 mb-2 underline text-sm">Quên mật khẩu?</a>
            <button type="submit" class="bg-sky-500 text-white font-bold uppercase p-2 rounded" id="btnSubmit">Đăng
                nhập</button>
            <h2 class="mt-2 text-sm text-gray-500 text-center">Chưa có tài khoản đăng ký <a
                    href="/web-tour/src/Pages/Register.php" class="text-sky-500">tại đây</a></h2>
        </form>
    </div>
    <?php include "../Components/Footer/Footer.php"?>
    <script>
            const username = document.getElementById('username');
            const password = document.getElementById('password');
            const labelForUsername = document.getElementById('labelUsername');
            const labelForPassword = document.getElementById('labelPassword');
            //animation for input username
            username.addEventListener('focus', () => {
                labelForUsername.classList.remove('animationOut');
                labelForUsername.classList.add('animationIn');
            });
            username.addEventListener('focusout', () => {
                const value = username.value;
                if (value === '') {
                    labelForUsername.classList.remove('animationIn');
                    labelForUsername.classList.add('animationOut');
                }
            });
            //animation for input password
            password.addEventListener('focus', () => {
                labelForPassword.classList.remove('animationOut');
                labelForPassword.classList.add('animationIn');
            });
            password.addEventListener('focusout', () => {
                const value = password.value;
                if (value === '') {
                    labelForPassword.classList.remove('animationIn');
                    labelForPassword.classList.add('animationOut');
                }
            })
            //submit handle
            const btnSubmit = document.getElementById('btnSubmit');
            btnSubmit.addEventListener('click', (e) => {
                e.preventDefault();
                const usernameValue = username.value;
                const passwordValue = password.value;
                const validLabelUsername = document.getElementById('validUsername');
                const validLabelPassword = document.getElementById('validPassword');
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '../module/checkUser.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onload = function (params) {
                    if (this.status === 200) {
                        console.log(this.responseText);
                        const message = this.responseText;
                        if (message === 'Not found username') {
                            validLabelUsername.classList.remove('hidden');
                            username.classList.add('border-red-500');
                            labelForUsername.classList.add('text-red-400');
                        } else if (message === 'Wrong password') {
                            validLabelPassword.classList.remove('hidden');
                            password.classList.add('border-red-500');
                            labelForPassword.classList.add('text-red-400');
                        } else if (message === 'Logged in') {
                            console.log("Logged in");
                            //session lưu vào local (Tạo phiên làm việc)
                            window.location.href = "/web-tour/index.php"
                        }
                    }
                }
                xhr.send(`username=${usernameValue}&password=${passwordValue}`);
            })  
        </script>
</body>
</html>