@extends('layouts.speaker')

@section('content')
    <div class="rounded-lg border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700">
        <form>
            <!-- Section -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0">
                <div class="sm:col-span-12 border-b">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Complete Your Data
                    </h2>
                </div>
                <!-- End Col -->

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
                        <option selected disabled>Select One</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <!-- End Col -->


                <div class="sm:col-span-6">
                    <select id="city" name="city"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-md bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>Select One</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
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
                    <input type="text" id="cetificate-1" name="cetificate-1"
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
                    <input type="file" name="certificatePhoto-1" id="certificatePhoto-1"
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
                    <input type="file" name="documentationPhoto-1" id="documentationPhoto-1"
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
                    <input type="text" id="documentation-1" name="documentation-1"
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
                        Links
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-12">
                    <div class="flex">
                        <input type="hidden" id="socialMediaName-1" name="socialMediaName-1" value="LinkedIn">
                        <button id="socialMediaName-button-1" data-dropdown-toggle="dropdown-social"
                            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 dark:border-gray-700 dark:text-white rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                            type="button">
                            LinkedIn
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdown-social"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                                <li id="socialMedia-list">
                                    <button type="button" id="twitter-1" onclick="changeSocial('Twitter', '1')"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Twitter
                                    </button>
                                    <button type="button" id="instagram-1" onclick="changeSocial('Instagram', '1')"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Instagram
                                    </button>
                                    <button type="button" id="facebook-1" onclick="changeSocial('Facebook', '1')"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Facebook
                                    </button>
                                    <button type="button" id="github-1" onclick="changeSocial('Github', '1')"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Github
                                    </button>
                                    <button type="button" id="other-1" onclick="changeSocial('Other', '1')"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Other
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="relative w-full">
                            <input type="text" id="socialMediaLink-1"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-md border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-12" id="socialMediaSection">

                </div>

                {{-- <div class="sm:col-span-3">
                    <label for="af-submit-application-linkedin-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        LinkedIn URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="af-submit-application-linkedin-url" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-twitter-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Twitter URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="af-submit-application-twitter-url" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-github-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Github URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="af-submit-application-github-url" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-portfolio-url"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Portfolio URL
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="af-submit-application-portfolio-url" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-other-website"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Other website
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="af-submit-application-other-website" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
                <!-- End Col --> --}}

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
                        Before sending your application, please let us know...
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-desired-salary"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Desired salary
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="af-submit-application-desired-salary" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="af-submit-application-available-start-date"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Available start date
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input id="af-submit-application-available-start-date" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
                <!-- End Col -->
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

                <div class="mt-5 flex">
                    <input type="checkbox"
                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                        id="af-submit-application-privacy-check">
                    <label for="af-submit-application-privacy-check"
                        class="text-sm text-gray-500 ml-2 dark:text-gray-400">Allow
                        us to process your personal
                        information.</label>
                </div>
            </div>
            <!-- End Section -->

            <button type="button"
                class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Submit application
            </button>
        </form>
    </div>

    <script>
        var Certificate = 1;
        var Documentation = 1;
        var SocialMedia = 1;

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        changeSocial = ($name, $id) => {
            $('#socialMedia-list').append(
                `
                <button type="button" id="${socialMediaName}-${SocialMedia}" onclick="changeSocial('${socialMediaNameButton}', '${SocialMedia}')"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    ${$name}
                </button>
              `
            )
            $(`#${socialMediaName}-${SocialMedia}`).remove();
            $(`#socialMediaName-${$id}`).val($name);
            $(`#socialMediaName-button-${$id}`).html(`
                ${$name}
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            `);
        }

        addSocialMediaForm = () => {
            SocialMedia++;
            $('#socialMediaSection').append(`
          <div class="sm:col-span-12">
              <div class="flex">
                  <input type="hidden" id="socialMediaName-${SocialMedia}" name="socialMediaName-${SocialMedia}">
                  <button id="socialMediaName-button-${SocialMedia}" data-dropdown-toggle="dropdown-social-${SocialMedia}"
                      class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 dark:border-gray-700 dark:text-white rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                      type="button">
                      LinkedIn
                      <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          fill="none" viewBox="0 0 10 6">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m1 1 4 4 4-4" />
                      </svg>
                  </button>
                  <div id="dropdown-social-${SocialMedia}"
                      class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                          <li>
                              <button type="button" id="twitter-${SocialMedia}" onclick="changeSocial('Twitter', '${SocialMedia}')"
                                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                  Twitter
                              </button>
                              <button type="button" id="instagram-${SocialMedia}" onclick="changeSocial('Instagram', '${SocialMedia}')"
                                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                  Instagram
                              </button>
                              <button type="button" id="facebook-${SocialMedia}" onclick="changeSocial('Facebook', '${SocialMedia}')"
                                  class="block px
                                  -4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                  Facebook
                              </button>
                              <button type="button" id="github-${SocialMedia}" onclick="changeSocial('Github', '${SocialMedia}')"
                                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                  Github
                              </button>
                              <button type="button" id="other-${SocialMedia}" onclick="changeSocial('other', '${SocialMedia}')"
                                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                  Other
                              </button>
                          </li>
                      </ul>
                  </div>
                  <div class="relative w-full">
                      <input type="text" id="socialMediaLink-${SocialMedia}"
                          class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-md border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500">
                  </div>
              </div>
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
              <input type="file" name="documentationPhoto-${Documentation}" id="documentationPhoto-${Documentation}"
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
              <input type="text" id="documentation-${Documentation}" name="documentation-${Documentation}"
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
              <input type="text" id="cetificate-${Certificate}" name="cetificate-${Certificate}"
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
              <input type="file" name="certificatePhoto-${Certificate}" id="certificatePhoto-${Certificate}"
                  class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400">
          </div>
          <!-- End Col -->
        `);
        }
    </script>
@endsection
