@if($errors->any())
    <div id="validationToast" class="fixed top-5 left-1/2 -translate-x-1/2 z-50 bg-white border border-gray-200 rounded-lg shadow-lg p-4 dark:bg-gray-800 dark:border-gray-700 opacity-100 transition-opacity duration-1000" style="display: none;">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <!-- Icon SVG -->
                <svg class="h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium dark:text-white">
                    {{ $errors->first() }}
                </p>
            </div>
        </div>
    </div>
    @endif
    @if(session('success'))
    <div id="successToast" class="fixed top-5 left-1/2 -translate-x-1/2 z-50 bg-green-500 border border-green-700 rounded-lg shadow-lg p-4 text-white opacity-100 transition-opacity duration-1000" style="display: none;">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <!-- Success Icon SVG -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium dark:text-white">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    </div>
    @endif
    @if(session('error'))
    <div id="errorToast" class="fixed top-5 left-1/2 -translate-x-1/2 z-50 bg-red-500 border border-red-700 rounded-lg shadow-lg p-4 text-white opacity-100 transition-opacity duration-1000" style="display: none;">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <!-- Error Icon SVG you provided -->
                <svg class="h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium dark:text-white">
                    {{ session('error') }}
                </p>
            </div>
        </div>
    </div>
    @endif