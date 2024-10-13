document.addEventListener('DOMContentLoaded', function() {
    // Ensure dropdown menus are initially hidden
    var languageDropdown = document.querySelector('.dropdown-content');
    var menuDropdown = document.querySelector('.menu-dropdown-content');

    if (languageDropdown) languageDropdown.style.display = 'none';
    if (menuDropdown) menuDropdown.style.display = 'none';

    // Language icon click event
    document.querySelector('.language i').addEventListener('click', function() {
        languageDropdown.style.display = languageDropdown.style.display === 'block' ? 'none' : 'block';
        this.classList.toggle('open');
    });

    // Menu icon click event
    document.querySelector('.menu i').addEventListener('click', function() {
        menuDropdown.style.display = menuDropdown.style.display === 'block' ? 'none' : 'block';
        this.classList.toggle('open');
    });

    // Close dropdowns when clicking outside
    window.addEventListener('click', function(event) {
        // Close language dropdown if clicked outside
        if (!event.target.closest('.language')) {
            if (languageDropdown.style.display === 'block') {
                languageDropdown.style.display = 'none';
                document.querySelector('.language i').classList.remove('open');
            }
        }

        // Close menu dropdown if clicked outside
        if (!event.target.closest('.menu')) {
            if (menuDropdown.style.display === 'block') {
                menuDropdown.style.display = 'none';
                document.querySelector('.menu i').classList.remove('open');
            }
        }
    });
});

var swiper = new Swiper(".mySwiper", {});


document.querySelector('.interior-design-title').addEventListener('click', function() {
    document.querySelector('.interior-design-normal').style.display = 'none';
    document.querySelector('.interior-design').style.width = '100%';
    document.querySelector('.exterior-design').style.display = 'none';
    document.querySelector('.interior-design-click').style.display = 'block';
   
});

document.querySelector('.exterior-design-title').addEventListener('click', function() {
    document.querySelector('.exterior-design-normal').style.display = 'none';
    document.querySelector('.exterior-design').style.width = '100%';
    document.querySelector('.interior-design').style.display = 'none';
    document.querySelector('.exterior-design-click').style.display = 'block';
   
});





// document.querySelector('.exterior-design-title').addEventListener('click', function() {
//     document.querySelector('.exterior-design-normal').style.display = 'none';
//     document.querySelector('.exterior-design').style.display = 'none';
//     document.querySelector('.exterior-design-click').style.width = '100%';
//     document.querySelector('.interior-design').style.display = 'none';
//     document.querySelector('.exterior-design-click').style.display = 'block';
   
// });




// salam

document.querySelector('.interiorgeri').addEventListener('click', function() {
    if (window.innerWidth < 797) {
        document.querySelector('.interior-design').style.width = '100%';
    } else {
        document.querySelector('.interior-design').style.width = '48%';
    }
    document.querySelector('.interior-design-normal').style.display = 'block';
    document.querySelector('.exterior-design').style.display = 'block';
    document.querySelector('.interior-design-click').style.display = 'none';
});


document.querySelector('.exteriorgeri').addEventListener('click', function() {
    document.querySelector('.exterior-design-normal').style.display = 'block';
    if (window.innerWidth < 797) {
        document.querySelector('.exterior-design').style.width = '100%';
    } else {
        document.querySelector('.exterior-design').style.width = '48%';
    }
    document.querySelector('.interior-design').style.display = 'block';
    document.querySelector('.exterior-design').style.display = 'block';
    document.querySelector('.exterior-design-click').style.display = 'none';
   
});








