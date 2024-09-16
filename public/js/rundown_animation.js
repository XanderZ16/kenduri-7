linesObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            line = entry.target.querySelector(".line");
            line.classList.toggle("h-full-i", entry.isIntersecting);
        });
    },
    {
        rootMargin: "1000px 0px -100px 0px",
    }
);

stepsObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            info = entry.target.querySelector(".pb-8");

            info.classList.toggle("show-rundown", entry.isIntersecting);
        });
    },
    {
        rootMargin: "1000px 0px -100px 0px"
    }
);

dotsObserver = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            dot = entry.target.querySelector("h2:first-child");
            dot.classList.toggle("opacity-100-i", entry.isIntersecting);
        })
    },
    {
        rootMargin: "1000px 0px -100px 0px"
    }
)

const steps = document.querySelectorAll(".step");

steps.forEach(step => {
    linesObserver.observe(step);
    stepsObserver.observe(step);
    dotsObserver.observe(step);
});

