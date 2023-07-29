@extends('layouts.auth')

@section('content')
    <main class="w-full max-w-md mx-auto my-auto p-6">
        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Don't have an account yet?
                        <a class="text-blue-600 decoration-2 hover:underline font-medium" href="{{ route('auth.register') }}">
                            Sign up here
                        </a>
                    </p>
                </div>

                <div class="mt-5">

                    <!-- Form -->
                    <form id="formLogin">
                        <div class="grid gap-y-4">
                            <!-- Form Group -->
                            <div>
                                <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                <div class="relative">
                                    <input type="text" id="email" name="email"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        aria-describedby="email-error">
                                    <div
                                        class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="email-error"></p>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <div class="flex justify-between items-center">
                                    <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                </div>
                                <div class="relative">
                                    <input type="password" id="password" name="password"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        aria-describedby="password-error">
                                    <div
                                        class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="password-error"></p>
                            </div>
                            <!-- End Form Group -->

                            <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Sign
                                in</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </main>

    <script>
        $('#formLogin').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('auth.login') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.data.role == 0) {
                        window.location.href = "{{ route('home') }}";
                    } else if (data.data.role == 1) {
                        window.location.href = "{{ route('speaker.dashboard') }}";
                    } else if (data.data.role == 2) {
                        window.location.href = "{{ route('admin.dashboard') }}";
                    }
                },
                error: function(data) {
                    if ($('#email-error').hasClass('hidden') == false) {
                        $('#email-error').addClass('hidden');
                        $('#email').removeClass('border-red-500');
                        $('#email').addClass('border-gray-200');
                        $('#email').removeClass('dark:ring-red-500');
                        $('#email').addClass('dark:border-gray-700');
                    }
                    if ($('#password-error').hasClass('hidden') == false) {
                        $('#password-error').addClass('hidden');
                        $('#password').removeClass('border-red-500');
                        $('#password').addClass('border-gray-200');
                        $('#password').removeClass('dark:ring-red-500');
                        $('#password').addClass('dark:border-gray-700');
                    }
                    if (data.status == 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors.errors, function(key, value) {
                            $('#' + key + '-error').removeClass('hidden');
                            $('#' + key).removeClass('border-gray-200');
                            $('#' + key).addClass('border-red-500');
                            $('#' + key).removeClass('dark:border-gray-700');
                            $('#' + key).addClass('dark:ring-red-500');
                            $('#' + key + '-error').html(value[0]);
                        });
                        $('#password').val('');
                    }
                    console.log(data);
                }
            });
        });
    </script>
@endsection
