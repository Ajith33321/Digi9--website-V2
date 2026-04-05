/**
 * DIGI9 — Form Validation
 */
(function() {
  'use strict';

  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('consultation-form');
    if (!form) return;

    form.addEventListener('submit', function(e) {
      let valid = true;
      clearErrors();

      // Name
      const name = form.querySelector('[name="name"]');
      if (name && name.value.trim().length < 2) {
        showError(name, 'Please enter your name');
        valid = false;
      }

      // Email
      const email = form.querySelector('[name="email"]');
      if (email && !isValidEmail(email.value)) {
        showError(email, 'Please enter a valid email');
        valid = false;
      }

      // Phone
      const phone = form.querySelector('[name="phone"]');
      if (phone && phone.value.trim().length < 7) {
        showError(phone, 'Please enter a valid phone number');
        valid = false;
      }

      if (!valid) {
        e.preventDefault();
      }
    });

    function isValidEmail(email) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function showError(input, message) {
      input.style.borderColor = '#ff4444';
      const err = document.createElement('span');
      err.className = 'form-error';
      err.textContent = message;
      err.style.cssText = 'color:#ff4444;font-size:0.75rem;margin-top:4px;display:block;';
      input.parentElement.appendChild(err);
    }

    function clearErrors() {
      form.querySelectorAll('.form-error').forEach(e => e.remove());
      form.querySelectorAll('.form-input, .form-textarea, .form-select').forEach(i => {
        i.style.borderColor = '';
      });
    }
  });
})();
