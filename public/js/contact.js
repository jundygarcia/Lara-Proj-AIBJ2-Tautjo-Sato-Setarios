// Contact page - created by Gio Setarios

const contactForm = document.querySelector('#contact-form');
const successMessage = document.querySelector('#success-message');
const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// Set or clear a field error - Gio Setarios
function setFieldError(field, message) {
	const errorMessage = document.querySelector(`#${field.id}-error`);

	errorMessage.textContent = message;
	field.classList.toggle('has-error', Boolean(message));
	field.setAttribute('aria-invalid', message ? 'true' : 'false');
}

// Validate one form field - Gio Setarios
function validateField(field) {
	const value = field.value.trim();

	if (!value) {
		setFieldError(field, `Please enter your ${field.name}.`);
		return false;
	}

	if (field.type === 'email' && !emailPattern.test(value)) {
		setFieldError(field, 'Please enter a valid email address.');
		return false;
	}

	setFieldError(field, '');
	return true;
}

// Clear a field error while the user types - Gio Setarios
function handleFieldInput(event) {
	const field = event.target;

	if (field instanceof HTMLInputElement || field instanceof HTMLTextAreaElement) {
		setFieldError(field, '');
	}
}

// Validate and submit the Contact form - Gio Setarios
function handleContactSubmit(event) {
	event.preventDefault();
	successMessage.hidden = true;

	const fields = [
		document.querySelector('#name'),
		document.querySelector('#email'),
		document.querySelector('#subject'),
		document.querySelector('#message'),
	];
	let isValid = true;

	fields.forEach((field) => {
		if (!validateField(field)) {
			isValid = false;
		}
	});

	if (!isValid) {
		return;
	}

	successMessage.hidden = false;
	contactForm.reset();
}

if (contactForm) {
	contactForm.addEventListener('input', handleFieldInput);
	contactForm.addEventListener('submit', handleContactSubmit);
}
