document.addEventListener("DOMContentLoaded", function () {
    const fadeInElements = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("fade-in-visible");
            } else {
                entry.target.classList.remove("fade-in-visible");
            }
        });
    }, {
        threshold: 0.3 
    });

    fadeInElements.forEach(element => observer.observe(element));
});
