import './bootstrap';
import 'preline';

////////////////////////////////////////////////////////////////////////////
///                       Side Menu Effects                              ///
////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('a[id^="toggleButton"]');

    // Check if there's a stored active button
    const activeButtonId = localStorage.getItem('activeButtonId');

    // Set initial active button based on stored value
    if (activeButtonId) {
        const activeButton = document.getElementById(activeButtonId);
        if (activeButton) {
            activateButton(activeButton);
        }
    }
    // Add click event listener to each button
    buttons.forEach(button => {
        button.addEventListener('click', function () {
            // Activate the clicked button
            activateButton(button);
            // Store the id of the active button
            localStorage.setItem('activeButtonId', button.id);
        });
    });
    function activateButton(button) {
        // Deactivate all buttons
        buttons.forEach(btn => {
            btn.classList.remove('bg-gray-100', 'dark:bg-gray-900', 'dark:text-white', 'dark:text-slate-300');
            btn.classList.add('text-slate-700', 'dark:text-slate-400');
        });
        // Activate the clicked button
        button.classList.remove('text-slate-700', 'dark:text-slate-400');
        button.classList.add('bg-gray-100', 'text-slate-700', 'hover:bg-gray-100', 'dark:bg-gray-900', 'dark:text-white', 'dark:hover:text-slate-300');
    }
});
////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////
///                         Toast Messages                               ///
////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function () {
    const toast = document.getElementById('validationToast');
    // Only try to show the toast if it exists on the page
    if (toast) {
        toast.style.display = 'block';

        // Hide the toast after 5 seconds
        setTimeout(function () {
            toast.style.display = 'none';
        }, 5000);
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const successToast = document.getElementById('successToast');
    if (successToast) {
        successToast.style.display = 'block';
        setTimeout(() => {
            successToast.style.display = 'none';
        }, 5000); // Hide after 5 seconds
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const errorToast = document.getElementById('errorToast');
    if (errorToast) {
        errorToast.style.display = 'block';
        setTimeout(() => {
            errorToast.style.display = 'none';
        }, 5000); // Hide after 5 seconds
    }
});
////////////////////////////////////////////////////////////////////////////