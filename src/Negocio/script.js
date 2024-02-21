document.addEventListener("DOMContentLoaded", function() {
    var linkRecipeButtons = document.querySelectorAll('.c-link-recipe');
    var closeButtons = document.querySelectorAll('.close-popup-btn');

    linkRecipeButtons.forEach(function(linkRecipeButton, index) {
        var popup = document.querySelectorAll('.c-popup')[index];

        linkRecipeButton.addEventListener('click', function(event) {
            event.preventDefault();
            popup.style.display = 'block';
        });

        closeButtons[index].addEventListener('click', function(event) {
            event.preventDefault();
            popup.style.display = 'none';
        });
    });
});

