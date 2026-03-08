// Animations.js 
// This file holds all the JS controlling the text effects for the buttons on index, and soon to be home of any new animations!.

// 07/03/26 - Adding debug code.

//document.addEventListener('DOMContentLoaded', () => {  // Uncomment if breaks, this will ensure all elements are loaded.
console.log("Animations.js is loaded.")
document.querySelectorAll('.btn-wrapper').forEach(wrapper => {
    const btn = wrapper.querySelector('a');
    const text = btn.querySelector('.btn-text');
    const originalText = text.textContent;
    const isBrowse = btn.id === 'btnBrowse';
    
    let fadeInTimer = null;
    let wipeTimer = null;
    let ReturnTimer = null;
    let PushTimer = null;
    
    wrapper.addEventListener('mouseenter', () => {
    
        // Clear any pending timers from a quick mouse-out/in
        clearTimeout(fadeInTimer);
        clearTimeout(wipeTimer);
        clearTimeout(ReturnTimer);
        clearTimeout(PushTimer);
        console.log("(MouseEnter) Timers Cleared");
    
        // Reset text and colour.
        text.textContent = originalText;
        text.style.color = '';
        text.style.transform = '';    // reset transform on re-enter
        text.style.opacity = '1';     // reset opacity on re-enter
        text.style.transition = '';   // clear any leftover transition
    
        if (isBrowse)
        {
          // blk text on white bg
        text.style.transition = 'color 0.2s'
        text.style.color = '#000000';
            // Wait for basher to reach the text
            PushTimer = setTimeout(() => {
            // Text Effect.
            text.style.transition = 'transform 1.5s cubic-bezier(0.15, 0, 0.75, 0.9), opacity 1.5s ease-in';
            text.style.transform = 'translateX(200px)';
            text.style.opacity = '0';
            console.log("(BR) Push-Transition Complete")
            }, 650);;
                // Wipe text after basher pushes
                wipeTimer = setTimeout(() => {
                text.style.opacity = '0';
                text.style.transform = '';
                text.style.transition = '';
                console.log("(BR) Browse Text is Invisible")
                }, 2250);
                    // bring back text in black (only blue on mouse out) :0
                    fadeInTimer = setTimeout(() => {
                    text.textContent = originalText;
                    text.style.color = '#000000';
                    text.style.transition = 'opacity 0.6s';
                    text.style.opacity = '1';
                    console.log("(BR) Browse Text is visible");
                    }, 2500);
        }
        else
        {
            // Map button
            text.style.transition = 'opacity 0.3s';
            text.style.opacity = '0';
            console.log("(RM) Map Text is invisible");
            console.info("(RM) Anim in Progress.")
            ReturnTimer = setTimeout(() => {
            text.textContent = originalText;
            text.style.color = '#000000';

            text.style.transform = 'translateY(-20px)'; // text start point
            text.style.transition = 'opacity 0.2s ease-out, transform 0.2s ease-out'
            setTimeout(() => {
                text.style.opacity = '1';
                //text.style.transition = 'opacity 0.6s';
                text.style.transform = 'translateY(0px)';
            }, 20);
            console.log("(RM) Map Text is Visible");
            }, 1700); //1800
        }
    });
    
    wrapper.addEventListener('mouseleave', () => {
    
        // Cancel the fade-in if user left before it triggered
        clearTimeout(fadeInTimer);
        clearTimeout(wipeTimer);
        clearTimeout(ReturnTimer);
        clearTimeout(PushTimer);
        console.log("(MouseLeave) Timers Cleared");
        // Full reset
        text.textContent = originalText;
        text.style.color = '';
        text.style.transform = '';
        text.style.transition = 'opacity 0.4s';
        text.style.opacity = '1';
        console.log("(MouseLeave) Full Reset Complete!");
        });
    });
//});