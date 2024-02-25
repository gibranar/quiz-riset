<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Password</title>

    @vite('resources/css/app.css')
    <style>
        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #fcf;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(0);
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(24px, 0);
            }
        }
    </style>
</head>

<body>
    <article class="w-screen h-screen flex justify-center items-center">
        <section class="w-full bg-gray-50 dark:bg-gray-900 place-content-center">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg"
                        alt="logo">
                    Support UMKM
                </a>
                <div
                    class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                    <h2 id="title"
                        class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Masukkan Email
                    </h2>
                    <p id="info-email" style="display: none">Silahkan masuk ke link yang sudah kami kirim di <a
                            href="https://mail.google.com/mail/u/0/" target="_blank" style="color: blue">email</a> anda!
                    </p>
                    <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="{{ route('login') }}">
                        <div id="div-email">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                Anda</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="user@gmail.com" required="">
                        </div>
                        <button type="submit" id="submit" name="submit"
                            class="w-full relative text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            style="height: 40px;">
                            <p id="text-submit">Submit</p>
                            <div id="loading" class="lds-ellipsis sticky bottom-7" style="display: none">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </article>
</body>

<script>
    const submit = document.getElementById('submit');
    submit.addEventListener('click', function() {
        if (document.getElementById('email').value != '') {
            document.getElementById('loading').style.display = 'inline-block';
            document.getElementById('text-submit').textContent = '';
            document.getElementById('title').textContent = 'Cek Email';
        }

        const timeout = setTimeout(textEmail, 5000);

        function textEmail() {
            document.getElementById("info-email").style.display = "block";
            submit.style.display = 'none';
            document.getElementById('div-email').textContent = '';
        }
    });
</script>

</html>
