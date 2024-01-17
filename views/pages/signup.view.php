<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Sign up</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="assets/css/vendors/flatpickr.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
</head>

<body class="font-inter antialiased bg-slate-100 text-slate-600">

<script>
    if (localStorage.getItem('sidebar-expanded') == 'true') {
        document.querySelector('body').classList.add('sidebar-expanded');
    } else {
        document.querySelector('body').classList.remove('sidebar-expanded');
    }
</script>

<main>

    <div class="relative flex">

        <!-- Content -->
        <div class="w-full mt-5">

            <div class=" h-full flex flex-col after:flex-1 ">
                <div class="max-w-sm mx-auto w-full px-4 py-8 align-middle">

                    <h1 class="text-3xl text-slate-800 font-bold mb-6">Create your Account ✨</h1>
                    <!-- Form -->
                    <form>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium mb-1" for="email">Email Address <span class="text-rose-500">*</span></label>
                                <input id="email" class="form-input w-full" type="email" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1" for="name">Full Name <span class="text-rose-500">*</span></label>
                                <input id="name" class="form-input w-full" type="text" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1" for="password">Password</label>
                                <input id="password" class="form-input w-full" type="password" autocomplete="on" />
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <div class="mr-1">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" />
                                    <span class="text-sm ml-2">Email me about product news.</span>
                                </label>
                            </div>
                            <a class="btn bg-indigo-500 hover:bg-indigo-600 text-white ml-3 whitespace-nowrap" href="index.html">Sign Up</a>
                        </div>
                    </form>
                    <!-- Footer -->
                    <div class="pt-5 mt-6 border-t border-slate-200">
                        <div class="text-sm">
                            Have an account? <a class="font-medium text-indigo-500 hover:text-indigo-600" href="signin.html">Sign In</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</main>

<script src="assets/js/vendors/alpinejs.min.js" defer></script>

</body>

</html>
