<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-yellow-100 overflow-hidden">

<div class="layout-box">

    <nav>
        <p class="logo">
            loansleader
        </p>

        <ul class="test">
            <li><a href="#">home</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">policies</a></li>
            <li><a href="#">terms</a></li>
        </ul>
    </nav>

    <div class="main-box overflow-y-scroll">

        <div class="main-content-1">
            <img class="banner-img" src="{{asset('img/2.jpg')}}" alt="">


            <h1>
                Lorem ipsum dolor sit amet.
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ipsum nam pariatur provident. Ab asperiores at autem blanditiis corporis dicta, dolorum et ipsa, neque perspiciatis quaerat quam quo, quod similique.
            </p>

        </div>

        <div class="main-content-1">
            <img class="banner-img" src="{{asset('img/2.jpg')}}" alt="">


            <h1>
                Lorem ipsum dolor sit amet.
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ipsum nam pariatur provident. Ab asperiores at autem blanditiis corporis dicta, dolorum et ipsa, neque perspiciatis quaerat quam quo, quod similique.
            </p>

        </div>
    </div>

    <div class="lateral-box sticky">
        <div class="lateral-content-1">
            <form action="" class="space-y-2 text-center"><span>money here</span>
                <div class="input-div border-b-8">
                    <label for="amount">amount</label>
                    <input for="amount" type="text" required class="outline-none w-full mx-8 py-2 mt-6 text-center text-2xl font-logo">
                </div>

                <div class="input-div border-b-8">
                    <label for="email">e-mail</label>
                    <input for="email" type="email" required class="outline-none w-full mx-8 py-2 mt-6 text-center text-2xl font-logo">
                </div>
                <div class="input-div border-b-8">
                    <label for="phone">phone</label>
                    <input for="phone" type="text" required class="outline-none w-full mx-8 py-2 mt-6 text-center text-2xl font-logo">
                </div>

                <button>send</button></form>

        </div>
    </div>

</div>
</body>
</html>
