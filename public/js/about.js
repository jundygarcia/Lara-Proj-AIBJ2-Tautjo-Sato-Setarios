document.addEventListener('DOMContentLoaded', function () {
    var button = document.getElementById('read-more-btn');
    var moreText = document.getElementById('story-more');

    // Stop if these elements are not on the page
    if (!button || !moreText) {
        return;
    }

    button.addEventListener('click', function () {
        // toggle() adds the class if it's missing, removes it if it's there
        var isOpen = moreText.classList.toggle('open');

        if (isOpen) {
            button.textContent = 'Read Less';
        } else {
            button.textContent = 'Read More';
        }
    });
});