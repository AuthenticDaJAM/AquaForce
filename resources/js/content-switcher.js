// resources/js/content-switcher.js

document.addEventListener('DOMContentLoaded', () => {
    let currentContentIndex = 5;
    const totalContent = document.querySelectorAll('.content').length;
    function showContent(contentId) {
        if (contentId < 4){
        // Hide all content items
        const items = document.querySelectorAll('.content-item');
        items.forEach(item => {
            if (item) item.classList.add('hidden');
        });

        // Show the selected content item
        const selectedContent = document.getElementById(`content-${contentId}`);
        if (selectedContent) {
            selectedContent.classList.remove('hidden');
        }

        // Remove 'active' class from all buttons
        const buttons = document.querySelectorAll('.nav-button');
        buttons.forEach(button => {
            if (button) button.classList.remove('active');
        });

        // Add 'active' class to the clicked button
        const activeButton = document.querySelector(`.nav-button[data-content-id="${contentId}"]`);
        if (activeButton) {
            activeButton.classList.add('active');
        }
    } else if (currentContentIndex <= totalContent){
        // Show next item
        const selectedContent = document.getElementById(`content-${currentContentIndex}`);
        if (selectedContent) {
            selectedContent.classList.remove('hidden');
            if (selectedContent) {
                selectedContent.classList.remove('hidden');
                currentContentIndex++;
            }
            if (currentContentIndex > 6) {
                document.getElementById('show-more-btn').classList.add('hidden');
            }
        }
        const showMoreButton = document.getElementById('show-more-btn');
        showMoreButton.addEventListener('click', showNextContent);
    }
    }

    // Add event listeners to buttons
    document.querySelectorAll('.nav-button').forEach(button => {
        button.addEventListener('click', () => {
            const contentId = button.getAttribute('data-content-id');
            showContent(contentId);
        });
    });

    // Show the first content by default
    showContent(1);
});
