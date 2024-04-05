import './bootstrap';
import 'preline';

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