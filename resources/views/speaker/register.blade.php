@extends('layouts.speaker')

@section('content')
    <div class="rounded-lg border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700">
        <form id="registerForm" enctype="multipart/form-data">
            <!-- Section -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0">
                <div class="sm:col-span-12 border-b">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Complete Your Data
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-resume-cv"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Profile Picture
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
                    <input type="file" name="profilePhoto" id="profilePhoto"
                        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400">
                </div>

                <div class="sm:col-span-6">
                    <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Gender
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Age
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <select id="gender" name="gender"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Select One</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <!-- End Col -->


                <div class="sm:col-span-6">
                    <input type="text" id="age" name="age"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-full-name"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Last Education
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <div class="sm:flex">
                        <input type="text" id="lastEducation" name="lastEducation"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-full-name"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Current Job
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <div class="sm:flex">
                        <input type="text" id="currentJob" name="currentJob"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <div class="inline-block">
                        <label for="af-submit-application-phone"
                            class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                            Describe Yourself
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <textarea id="descripction" name="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Province
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        City
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <select id="province" name="province"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </select>
                </div>
                <!-- End Col -->


                <div class="sm:col-span-6">
                    <select id="city" name="city"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </select>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-full-name"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Price
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-11">
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none font-medium text-gray-900 dark:text-white">
                                Rp.
                            </div>
                        </div>
                        <input type="text" id="price" name="price"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 pl-10">
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-1">
                    <label for="af-submit-application-full-name"
                        class="text-xl font-medium text-gray-900 mt-2.5 dark:text-white">
                        / Hari
                    </label>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Section -->

            <!-- Section -->
            <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700">
                <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Certificate
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <h2
                        class="text-sm font-semibold text-gray-800 dark:text-gray-200 border-t first:border-transparent border-gray-200 dark:border-gray-700 pt-2">
                        Certificate 1
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-resume-cv"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Certificate Title
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <input type="text" id="certificate[]" name="certificate[]"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-resume-cv"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Certificate File
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
                    <input type="file" name="certificatePhoto[]" id="certificatePhoto[]"
                        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12" id="certificateSection">

                </div>

                <div class="sm:col-span-12">
                    <p class="mt-3">
                        <button type="button" onclick="addCertificateForm()"
                            class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium">
                            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            Add Certificate
                        </button>
                    </p>
                </div>
            </div>
            <!-- End Section -->

            <!-- Section -->
            <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700">
                <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Documentation
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <h2
                        class="text-sm font-semibold text-gray-800 dark:text-gray-200 border-t first:border-transparent border-gray-200 dark:border-gray-700 pt-2">
                        Documentation 1
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-resume-cv"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Documentation File
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
                    <input type="file" name="documentationPhoto[]" id="documentationPhoto[]"
                        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-resume-cv"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Documentation Description
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <input type="text" id="documentation[]" name="documentation[]"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12" id="documentationSection">

                </div>

                <div class="sm:col-span-12">
                    <p class="mt-3">
                        <button type="button" onclick="addDocumentationForm()"
                            class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium">
                            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            Add Certificate
                        </button>
                    </p>
                </div>
            </div>
            <!-- End Section -->

            <!-- Section -->
            <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700">
                <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Social Media Links
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-linkedin-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        LinkedIn URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <input id="socialMediaLink-linkedIn" name="socialMediaLink-linkedIn" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-twitter-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Twitter URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <input id="socialMediaLink-twitter" name="socialMediaLink-twitter" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-twitter-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Facebook URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <input id="socialMediaLink-facebook" name="socialMediaLink-facebook" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="sm:col-span-12">
                    <label for="af-submit-application-twitter-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Instagram URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <input id="socialMediaLink-instagram" name="socialMediaLink-instagram" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div class="sm:col-span-12">
                    <label for="af-submit-application-github-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Github URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <input id="socialMediaLink-github" name="socialMediaLink-github" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <label for="af-submit-application-other-website"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Other website
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <label for="af-submit-application-other-website"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Website Name
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <label for="af-submit-application-other-website"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Website Link
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <input id="socialMediaName[]" name="socialMediaName[]" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <input id="socialMedialink[]" name="socialMedialink[]" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 sm:col-span-12" id="socialMediaSection">

                </div>

                <div class="sm:col-span-12">
                    <button type="button" onclick="addSocialMediaForm()"
                        class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        Add URL
                    </button>
                </div>
            </div>
            <!-- End Section -->

            <!-- Section -->
            <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700">
                <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Expertise
                    </h2>
                </div>
                <!-- End Col -->

                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 sm:col-span-12" id="expertiseSection">
                    <div class="sm:col-span-3">
                        <select id="expertise[]" name="expertise[]"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>Select One</option>
                            @foreach ($expertise as $expertie)
                                <option value="{{ $expertie->id }}">{{ $expertie->expertiseName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- End Col -->


                </div>

                <div class="sm:col-span-3">
                    <button type="button" onclick="addExpertise()"
                        class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium">
                        <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        Add Expertise
                    </button>
                </div>
            </div>
            <!-- End Section -->

            <!-- Section -->
            <div class="py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Submit application
                </h2>
                <p class="mt-3 text-sm text-gray-600 dark:text-gray-400">
                    In order to contact you with future jobs that you may be interested in, we need to store your
                    personal data.
                </p>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    If you are happy for us to do so please click the checkbox below.
                </p>

                <div class="relative">
                    <div class="mt-5 flex">
                        <input id="check" name="check" type="checkbox"
                            class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                        <label for="af-submit-application-privacy-check"
                            class="text-sm text-gray-500 ml-2 dark:text-gray-400">Allow
                            us to process your personal
                            information.</label>
                    </div>
                    <p class="text-xs hidden text-red-600 mt-2" id="check-error">You must agree to precess</p>
                </div>
            </div>
            <!-- End Section -->

            <button type="submit"
                class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Submit application
            </button>
        </form>
    </div>

    <script>
        var Certificate = 1;
        var Documentation = 1;
        var SocialMedia = 1;
        var Expertise = 1;
        const ListOfProvinsi = [{
                provinsi: 'Banten',
                value: 'banten'
            },
            {
                provinsi: 'DKI Jakarta',
                value: 'dki'
            },
            {
                provinsi: 'Jawa Barat',
                value: 'jabar'
            },
            {
                provinsi: 'Jawa Tengah',
                value: 'jateng'
            },
            {
                provinsi: 'Daerah Istimewa Yogyakarta',
                value: 'yogya'
            },
            {
                provinsi: 'Jawa Timur',
                value: 'jatim'
            },
        ];

        const ListOfCity = {
            jatim: [{
                    kota: 'Bangkalan'
                },
                {
                    kota: 'Banyuwangi'
                },
                {
                    kota: 'Blitar'
                },
                {
                    kota: 'Bojonegoro'
                },
                {
                    kota: 'Bondowoso'
                },
                {
                    kota: 'Gresik'
                },
                {
                    kota: 'Jember'
                },
                {
                    kota: 'Jombang'
                },
                {
                    kota: 'Kediri'
                },
                {
                    kota: 'Lamongan'
                },
                {
                    kota: 'Lumajang'
                },
                {
                    kota: 'Madiun'
                },
                {
                    kota: 'Magetan'
                },
                {
                    kota: 'Malang'
                },
                {
                    kota: 'Mojokerto'
                },
                {
                    kota: 'Nganjuk'
                },
                {
                    kota: 'Ngawi'
                },
                {
                    kota: 'Pacitan'
                },
                {
                    kota: 'Pamekasan'
                },
                {
                    kota: 'Pasuruan'
                },
                {
                    kota: 'Ponorogo'
                },
                {
                    kota: 'Probolinggo'
                },
                {
                    kota: 'Sampang'
                },
                {
                    kota: 'Sidoarjo'
                },
                {
                    kota: 'Situbondo'
                },
                {
                    kota: 'Sumenep'
                },
                {
                    kota: 'Trenggalek'
                },
                {
                    kota: 'Tuban'
                },
                {
                    kota: 'Tulungagung'
                },
                {
                    kota: 'Kota Batu'
                },
                {
                    kota: 'Kota Blitar'
                },
                {
                    kota: 'Kota Kediri'
                },
                {
                    kota: 'Kota Madiun'
                },
                {
                    kota: 'Kota Malang'
                },
                {
                    kota: 'Kota Mojokerto'
                },
                {
                    kota: 'Kota Pasuruan'
                },
                {
                    kota: 'Kota Probolinggo'
                },
                {
                    kota: 'Kota Surabaya'
                },
            ],
            jabar: [{
                    kota: 'Kabupaten Bandung'
                },
                {
                    kota: 'Kabupaten Bandung Barat'
                },
                {
                    kota: 'Kabupaten Bekasi'
                },
                {
                    kota: 'Kabupaten Bogor'
                },
                {
                    kota: 'Kabupaten Ciamis'
                },
                {
                    kota: 'Kabupaten Cianjur'
                },
                {
                    kota: 'Kabupaten Cirebon'
                },
                {
                    kota: 'Kabupaten Garut'
                },
                {
                    kota: 'Kabupaten Indramayu'
                },
                {
                    kota: 'Kabupaten Karawang'
                },
                {
                    kota: 'Kabupaten Kuningan'
                },
                {
                    kota: 'Kabupaten Majalengka'
                },
                {
                    kota: 'Kabupaten Pangandaran'
                },
                {
                    kota: 'Kabupaten Purwakarta'
                },
                {
                    kota: 'Kabupaten Subang'
                },
                {
                    kota: 'Kabupaten Sukabumi'
                },
                {
                    kota: 'Kabupaten Sumedang'
                },
                {
                    kota: 'Kabupaten Tasikmalaya'
                },
                {
                    kota: 'Kota Bandung'
                },
                {
                    kota: 'Kota Banjar'
                },
                {
                    kota: 'Kota Bekasi'
                },
                {
                    kota: 'Kota Bogor'
                },
                {
                    kota: 'Kota Cimahi'
                },
                {
                    kota: 'Kota Cirebon'
                },
                {
                    kota: 'Kota Depok'
                },
                {
                    kota: 'Kota Sukabumi'
                },
                {
                    kota: 'Kota Tasikmalaya'
                },
            ],
            jateng: [{
                    kota: 'Kabupaten Banjarnegara'
                },
                {
                    kota: 'Kabupaten Banyumas'
                },
                {
                    kota: 'Kabupaten Batang'
                },
                {
                    kota: 'Kabupaten Blora'
                },
                {
                    kota: 'Kabupaten Boyolali'
                },
                {
                    kota: 'Kabupaten Brebes'
                },
                {
                    kota: 'Kabupaten Cilacap'
                },
                {
                    kota: 'Kabupaten Demak'
                },
                {
                    kota: 'Kabupaten Grobogan'
                },
                {
                    kota: 'Kabupaten Jepara'
                },
                {
                    kota: 'Kabupaten Karanganyar'
                },
                {
                    kota: 'Kabupaten Kebumen'
                },
                {
                    kota: 'Kabupaten Kendal'
                },
                {
                    kota: 'Kabupaten Klaten'
                },
                {
                    kota: 'Kabupaten Kudus'
                },
                {
                    kota: 'Kabupaten Magelang'
                },
                {
                    kota: 'Kabupaten Pati'
                },
                {
                    kota: 'Kabupaten Pekalongan'
                },
                {
                    kota: 'Kabupaten Pemalang'
                },
                {
                    kota: 'Kabupaten Purbalingga'
                },
                {
                    kota: 'Kabupaten Purworejo'
                },
                {
                    kota: 'Kabupaten Rembang'
                },
                {
                    kota: 'Kabupaten Semarang'
                },
                {
                    kota: 'Kabupaten Sragen'
                },
                {
                    kota: 'Kabupaten Sukoharjo'
                },
                {
                    kota: 'Kabupaten Tegal'
                },
                {
                    kota: 'Kabupaten Temanggung'
                },
                {
                    kota: 'Kabupaten Wonogiri'
                },
                {
                    kota: 'Kabupaten Wonosobo'
                },
                {
                    kota: 'Kota Magelang'
                },
                {
                    kota: 'Kota Pekalongan'
                },
                {
                    kota: 'Kota Salatiga'
                },
                {
                    kota: 'Kota Semarang'
                },
                {
                    kota: 'Kota Surakarta'
                },
                {
                    kota: 'Kota Tegal'
                },
            ],
            yogya: [{
                    kota: 'Kabupaten Bantul'
                },
                {
                    kota: 'Kabupaten Gunungkidul'
                },
                {
                    kota: 'Kabupaten Kulon Progo'
                },
                {
                    kota: 'Kabupaten Sleman'
                },
                {
                    kota: 'Kota Yogyakarta'
                },
            ],
            dki: [{
                    kota: 'Kepulauan Seribu'
                },
                {
                    kota: 'Jakarta Barat'
                },
                {
                    kota: 'Jakarta Pusat'
                },
                {
                    kota: 'Jakarta Selatan'
                },
                {
                    kota: 'Jakarta Timur'
                },
                {
                    kota: 'Jakarta Utara'
                },
            ],
            banten: [{
                    kota: 'Kabupaten Lebak'
                },
                {
                    kota: 'Kabupaten Pandeglang'
                },
                {
                    kota: 'Kabupaten Serang'
                },
                {
                    kota: 'Kabupaten Tangerang'
                },
                {
                    kota: 'Kota Cilegon'
                },
                {
                    kota: 'Kota Serang'
                },
                {
                    kota: 'Kota Tangerang'
                },
                {
                    kota: 'Kota Tangerang Selatan'
                },
            ],
        };

        $(document).ready(function() {
            $.each(ListOfProvinsi, function(key, value) {
                $('#province').append(`<option value="${value.value}">${value.provinsi}</option>`);
            });
            $('#city').append(`<option selected disabled>Select One</option>`);
            $.each(ListOfCity.banten, function(key, value) {
                $('#city').append(`<option value="${value.kota}">${value.kota}</option>`);
            });

            $('#province').change(function() {
                var provinsi = $(this).val();
                var city = ListOfCity[provinsi];
                $('#city').empty();
                $('#city').append(`<option selected disabled>Select One</option>`);
                $.each(city, function(key, value) {
                    $('#city').append(`<option value="${value.kota}">${value.kota}</option>`);
                });
            });
        });

        $('#registerForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            if ($('#check').is(':checked')) {
                $('#check-error').addClass('hidden');
                $('#check').removeClass('border-red-500');
                $('#check').addClass('border-gray-200');
                $('#check').removeClass('dark:ring-red-500');
                $('#check').addClass('dark:border-gray-700');
                $.ajax({
                    type: "POST",
                    url: "{{ route('speaker.postRegister') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        window.location.href = "{{ route('speaker.dashboard') }}";
                    },
                    error: function(response) {
                        var error = $.parseJSON(response.responseText);
                        $.each(error.errors, function(key, value) {
                            alert(value)
                        })
                    }
                });
            } else {
                $('#check-error').removeClass('hidden');
                $('#check').removeClass('border-gray-200');
                $('#check').addClass('border-red-500');
                $('#check').removeClass('dark:border-gray-700');
                $('#check').addClass('dark:ring-red-500');
            }
        });

        addExpertise = () => {
            Expertise++;
            $('#expertiseSection').append(`
          <div class="sm:col-span-3">
              <select id="expertise[]" name="expertise[]"
                  class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected disabled>Select One</option>
                  @foreach ($expertise as $expertie)
                      <option value="{{ $expertie->id }}">{{ $expertie->expertiseName }}</option>
                  @endforeach
              </select>
          </div>
          <!-- End Col -->
          `);
        }

        addSocialMediaForm = () => {
            SocialMedia++;
            $('#socialMediaSection').append(`
            <div class="sm:col-span-6">
                    <label for="af-submit-application-other-website"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Website Name
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <label for="af-submit-application-other-website"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Website Link
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <input id="socialMediaName[]" name="socialMediaName[]" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-6">
                    <input id="socialMediaLink[]" name="socialMediaLink[]" type="text"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <!-- End Col -->
          `);
        }

        addDocumentationForm = () => {
            Documentation++;
            $('#documentationSection').append(`
          <div class="sm:col-span-12">
              <h2
                  class="text-sm font-semibold text-gray-800 dark:text-gray-200 border-t first:border-transparent border-gray-200 dark:border-gray-700 pt-2">
                  Documentation ${Documentation}
              </h2>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-12">
              <label for="af-submit-application-resume-cv"
                  class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                  Documentation File
              </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-12">
              <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
              <input type="file" name="documentationPhoto[]" id="documentationPhoto[]"
                  class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400">
          </div>
          <!-- End Col -->

          <div class="sm:col-span-12">
              <label for="af-submit-application-resume-cv"
                  class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                  Documentation Description
              </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-12 mb-5">
              <input type="text" id="documentation-[]" name="documentation-[]"
                  class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- End Col -->

        `);
        }

        addCertificateForm = () => {
            Certificate++;
            $('#certificateSection').append(`
          <div class="sm:col-span-12">
              <h2
                  class="text-sm font-semibold text-gray-800 dark:text-gray-200 border-t first:border-transparent border-gray-200 dark:border-gray-700 pt-2">
                  Certificate ${Certificate}
              </h2>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-12">
              <label for="af-submit-application-resume-cv"
                  class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                  Certificate Title
              </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-12">
              <input type="text" id="certificate[]" name="certificate[]"
                  class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <!-- End Col -->

          <div class="sm:col-span-12">
              <label for="af-submit-application-resume-cv"
                  class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                  Certificate File
              </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-12 mb-5">
              <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
              <input type="file" name="certificatePhoto[]" id="certificatePhoto[]"
                  class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400">
          </div>
          <!-- End Col -->
        `);
        }
    </script>
@endsection
