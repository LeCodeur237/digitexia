document.addEventListener("DOMContentLoaded", () => {
    const stickySection = document.querySelector(".portfolio-content-vh");
    const horizontalContainer = document.querySelector(
        ".portfolio-inner-ticker",
    );

    if (stickySection && horizontalContainer) {
        window.addEventListener("scroll", () => {
            const sectionTop = stickySection.offsetTop;
            const sectionHeight = stickySection.offsetHeight;
            const viewportHeight = window.innerHeight;
            const scrollY = window.scrollY;

            const start = sectionTop;
            const end = sectionTop + sectionHeight - viewportHeight;

            if (scrollY >= start && scrollY <= end) {
                const progress = (scrollY - start) / (end - start);
                const maxTranslate =
                    horizontalContainer.scrollWidth - window.innerWidth + 100; // +100 buffer
                horizontalContainer.style.transform = `translateX(-${maxTranslate * progress}px)`;
            } else if (scrollY < start) {
                horizontalContainer.style.transform = `translateX(0px)`;
            } else if (scrollY > end) {
                const maxTranslate =
                    horizontalContainer.scrollWidth - window.innerWidth + 100;
                horizontalContainer.style.transform = `translateX(-${maxTranslate}px)`;
            }
        });
    }
});
