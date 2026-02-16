// ScrollToTop.js  
// 1.0
//      - Basic Direct scroll script
//
// 2.0
//      - Switched from direct style.display to Bootstrap's 'd-none' class
//      - Lowered threshold from 300px to 250px for quicker appearance
//      - Added comment for clarity
// 3.0
//      - Added null check for button (prevents errors if button missing) 
//      - Debugging Code. (console.logs)

console.log("ScrollToTop.js is loaded");

document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM is ready, looking for button");

    const btn = document.getElementById('scrollToTopBtn');

    if (!btn) { // Better safe than sorry :)
        console.error("Scroll button NOT FOUND. Check the id='scrollToTopBtn'"); 
        return;
    }

    console.log("Button found");

    // Show/hide logic
    window.addEventListener('scroll', function() {
        if (window.scrollY > 250) {          // Decreased px to get working / Reset to 300px after testing.
            btn.classList.remove('d-none');
            console.log("Showing button");
        } else {
            btn.classList.add('d-none');
            console.log("Hiding button");
        }
    });

    // Always listening for user click to smoothly scroll to the top 
    btn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
