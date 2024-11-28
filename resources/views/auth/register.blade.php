<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Create your account</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Or
                    <a href="{{ route('user.login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">sign in to your account</a>
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('user.register') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input id="name" name="name" type="text" autocomplete="name" required 
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required 
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" required 
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required 
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <button href="{{ route('user.login') }}" type="submit" 
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Register
                    </button>
                </div>
            </form>
            <p class="mt-6 text-center text-sm text-gray-600">
                Already have an account? 
                <a href="{{ route('user.login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Sign in here</a>
            </p>
        </div>
    </div>
</body>
</html>
