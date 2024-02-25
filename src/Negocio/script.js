window.onload = function() {
    var recipeButtons = document.querySelectorAll('.c-link-recipe');
    var closeButtons = document.querySelectorAll('.close-popup-btn');
    var popups = document.querySelectorAll('.c-popup');
    
    recipeButtons.forEach(function(button, index) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            popups[index].classList.add('visible');
        });
    });

    closeButtons.forEach(function(closeButton, index) {
        closeButton.addEventListener('click', function(event) {
            event.stopPropagation();
            var popup = closeButton.closest('.c-popup');
            popup.classList.remove('visible');
        });
    });
};