    document.addEventListener('DOMContentLoaded', function() {
        // Clear input fields for Form 1 (main-contact-form)
        var mainContactForm = document.getElementById('main-contact-form');
        if (mainContactForm) {
            mainContactForm.querySelector('[name="name"]').value = '';
            mainContactForm.querySelector('[name="email"]').value = '';
            mainContactForm.querySelector('[name="phone"]').value = '';
            mainContactForm.querySelector('[name="subject"]').value = '';
            mainContactForm.querySelector('[name="message"]').value = '';
        }

        // Clear input fields for Form 2
        var form2 = document.getElementById('form2');
        if (form2) {
            form2.querySelector('[name="name"]').value = '';
            form2.querySelector('[name="email"]').value = '';
            form2.querySelector('[name="phone"]').value = '';
            form2.querySelector('[name="designation"]').value = '';
            form2.querySelector('[name="subject"]').value = '';
            form2.querySelector('[name="message"]').value = '';
        }
    });