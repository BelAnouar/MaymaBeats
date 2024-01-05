<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-[#892CDC]">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-[#222831] py-12">
        <div class="bg-[#D9ACF5] relative bg-white px-6 pt-10 pb-9 shadow-xl mx-auto w-full max-w-lg rounded-2xl ">
            <div class="mx-auto flex w-full max-w-md flex-col space-y-16  ">
                <div class="flex flex-col items-center justify-center text-center space-y-2">
                    <div class="font-semibold text-3xl text-primary-100">
                        <p>Email Verification</p>
                    </div>
                    <div class="flex flex-row text-sm font-medium text-gray-400">
                        <p>We have sent a code to your email ba**@dipainhouse.com</p>
                    </div>
                </div>

                <div>
                    <form method="post">
                        <div class="flex flex-col space-y-16">
                            <div class="flex flex-row items-center justify-between mx-auto w-full max-w-xs">
                                <div class="w-16 h-16 ">
                                    <input max="1" class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-primary-300 focus:bg-bg-300 focus:ring-1 ring-blue-700" type="text" name="pass1" id="">
                                </div>
                                <div class="w-16 h-16 ">
                                    <input class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-primary-300 focus:bg-bg-300 focus:ring-1 ring-blue-700" type="text" name="pass2" id="">
                                </div>
                                <div class="w-16 h-16 ">
                                    <input max="1" class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-primary-300 focus:bg-bg-300 focus:ring-1 ring-blue-700" type="text" name="pass3" id="">
                                </div>
                                <div class="w-16 h-16 ">
                                    <input max="1" class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-primary-300 focus:bg-bg-300 focus:ring-1 ring-blue-700" type="text" name="pass4" id="">
                                </div>
                            </div>

                            <div class="flex flex-col space-y-5">
                                <div>
                                    <button type="submit" class="flex flex-row items-center justify-center text-center w-full border rounded-xl outline-none py-5 bg-primary-200 border-none text-text-100 text-sm shadow-sm">
                                        Verify Account
                                    </button>
                                </div>

                                <div class="flex flex-row items-center justify-center text-center text-sm font-medium space-x-1 text-text-100">
                                    <p>Didn't receive code?</p> <a class="flex flex-row items-center text-accent-100" href="http://" target="_blank" rel="noopener noreferrer">Resend</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>