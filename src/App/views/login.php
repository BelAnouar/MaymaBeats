<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <header class="flex relative">
        <div class="w-1/3  bg-orange-400 opacity-70 flex justify-center">
            <div class="h-16 flex justify-center items-end">
                <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-100">MaymaBeats</h1>
                <div class="w-2 h-2 bg-green-400 rounded-full"></div>
            </div>
        </div>
        <div class=" top-48	left-64 absolute h-16 z-10	 ">
            <h1 class="mb-4 text-6xl font-extrabold leading-none tracking-tight text-gray-100">Joie Mélodie</h1>
            <p class="w-1/3	text-gray-300 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere error nulla eligendi, minima eius distinctio repellat ab sequi </p>


            <button type="button" class="my-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Connectez-vous
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </button>

        </div>

        <div class="w-2/5 h-screen opacity-70  bg-[url('/MaymaBeats/public/assets/images/signup.jpg')] bg-cover bg-center bg-no-repeat"></div>
        <div class="w-2/5 h-screen bg-orange-400 opacity-70 flex justify-center items-center p-5">


            <form class="w-full z-10 bg-gradient-to-bl from-orange-300 to-rose-300  p-4 rounded-3xl" method="post">
                <input type="hidden" name="type" value="register">


                <div class=" p-2">
                    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Email</label>
                    <input type="email" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   w-full p-2.5 " name="email" required>
                </div>
                <div class=" p-2">
                    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Mot de passe</label>
                    <input type="password" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   w-full p-2.5 " name="pass" required>
                </div>
                <div class=" p-2">
                    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">you role</label>
                    <select name="Role" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg   w-full p-2.5 " name="" id="">
                        <option value="artist">artist</option>
                        <option value="client">client</option>
                        <option value="client">admin</option>
                    </select>

                </div>
                <div class="w-2/4 m-auto my-4">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-4 py-2.5 text-center" name="submit">Login</button>
                </div>

                <a href="forgotPwd">forget password?</a>
            </form>


        </div>
    </header>

</body>

</html>