@extends('layouts.auth')

@section('content')
    <main class="w-full max-w-md mx-auto p-6">
        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign up</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Already have an account?
                        <a class="text-blue-600 decoration-2 hover:underline font-medium" href="{{ route('auth.login') }}">
                            Sign in here
                        </a>
                    </p>
                </div>

                <div class="mt-5">
                    <!-- Form -->
                    <form id="registerForm">
                        <input type="hidden" id="role" name="role" value="">

                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mb-2">
                            <div>
                                <label for="hs-firstname-hire-us-1" class="block text-sm mb-2 dark:text-white">First
                                    Name</label>
                                <input type="text" name="firstName" id="firstName"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <p class="hidden text-xs text-red-600 mt-2" id="firstName-error"></p>
                            </div>

                            <div>
                                <label for="hs-lastname-hire-us-1" class="block text-sm mb-2 dark:text-white">Last
                                    Name</label>
                                <input type="text" name="lastName" id="lastName"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <p class="hidden text-xs text-red-600 mt-2" id="lastName-error"></p>
                            </div>
                        </div>
                        <!-- End Grid -->
                        <div class="grid gap-y-4">
                            <!-- Form Group -->
                            <div>
                                <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email"
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
                                <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
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

                            <!-- Form Group -->
                            <div>
                                <label for="confirm-password" class="block text-sm mb-2 dark:text-white">Confirm
                                    Password</label>
                                <div class="relative">
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        aria-describedby="confirm-password-error">
                                    <div
                                        class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="password_confirmation-error"></p>
                            </div>
                            <!-- End Form Group -->

                            <!-- Checkbox -->
                            <div class="flex items-center">
                                <div class="relative">
                                    <div class="flex">
                                        <input id="accept" name="accept" type="checkbox"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                        <div class="ml-3">
                                            <label for="remember-me" class="text-sm dark:text-white">I accept the <a
                                                    class="text-blue-600 decoration-2 hover:underline font-medium"
                                                    href="#">Terms and Conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="text-xs hidden text-red-600 mt-2" id="accept-error">You must agree to the
                                        Terms and Conditions</p>
                                </div>
                            </div>
                            <!-- End Checkbox -->

                            <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                Sign up
                            </button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </main>

    {{-- modal --}}
    <div id="registerModal"
        class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]"
        data-hs-overlay-keyboard="false">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                <div class="p-4 overflow-y-auto">
                    <p class="text-4xl font-semibold text-gray-900 dark:text-white text-center">Pick Your Role</p>
                    <!-- Card Blog -->
                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                        <!-- Grid -->
                        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-6">
                            <!-- Card -->
                            <div
                                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]  hover:shadow-lg transition">
                                <img class="w-full h-auto rounded-t-xl" src="{{ url('assets/Seeker.png') }}"
                                    alt="Image Description">
                                <div
                                    class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                                    <button
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        onclick="setRole(0)">
                                        Speaker Seeker
                                    </button>
                                </div>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div
                                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]  hover:shadow-lg transition">
                                <img class="w-4/5 h-auto rounded-t-xl ms-5" src="{{ url('assets/Speaker.png') }}"
                                    alt="Image Description">
                                <div
                                    class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                                    <button
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-b-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4 dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        onclick="setRole(1)">
                                        The Speaker
                                    </button>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- End Card Blog -->
                </div>
            </div>
        </div>
    </div>

    <script>
        $modalEL = document.getElementById('registerModal');
        //open modal when document is ready
        $(document).ready(function() {
            HSOverlay.open($modalEL);
        });

        setRole = (id) => {
            $('#role').val(id);
            HSOverlay.close($modalEL);
        }

        $('#registerForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            if ($('#accept').is(':checked')) {
                $('#accept-error').addClass('hidden');
                $('#accept').removeClass('border-red-500');
                $('#accept').addClass('border-gray-200');
                $('#accept').removeClass('dark:ring-red-500');
                $('#accept').addClass('dark:border-gray-700');
                $.ajax({
                    url: "{{ route('auth.postRegister') }}",
                    type: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.status == 200) {
                            window.location.href = "{{ route('auth.login') }}";
                        }
                    },
                    error: function(data) {
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
                        }
                    }
                });
            } else {
                $('#accept-error').removeClass('hidden');
                $('#accept').removeClass('border-gray-200');
                $('#accept').addClass('border-red-500');
                $('#accept').removeClass('dark:border-gray-700');
                $('#accept').addClass('dark:ring-red-500');
            }
        });
    </script>
@endsection
