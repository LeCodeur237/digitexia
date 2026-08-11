(function () {
  function ready(callback) {
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", callback);
      return;
    }

    callback();
  }

  ready(function () {
    var burger = document.getElementById("burger") || document.querySelector("[data-dx-burger]");
    var mobilePanel = document.getElementById("mobilePanel") || document.querySelector("[data-dx-mobile-panel]");

    if (burger && mobilePanel) {
      burger.addEventListener("click", function () {
        var isOpen = mobilePanel.classList.toggle("open");
        burger.classList.toggle("open", isOpen);
        burger.setAttribute("aria-expanded", isOpen ? "true" : "false");
      });

      mobilePanel.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function () {
          mobilePanel.classList.remove("open");
          burger.classList.remove("open");
          burger.setAttribute("aria-expanded", "false");
        });
      });

      document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
          mobilePanel.classList.remove("open");
          burger.classList.remove("open");
          burger.setAttribute("aria-expanded", "false");
        }
      });

      window.addEventListener("resize", function () {
        if (window.innerWidth > 1100) {
          mobilePanel.classList.remove("open");
          burger.classList.remove("open");
          burger.setAttribute("aria-expanded", "false");
        }
      });
    }

    var revealEls = document.querySelectorAll(".dx-reveal, .reveal");
    if (revealEls.length > 0) {
      if (!("IntersectionObserver" in window)) {
        revealEls.forEach(function (el) {
          el.classList.add("in-view");
        });
      } else {
        var revealObserver = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add("in-view");
              revealObserver.unobserve(entry.target);
            }
          });
        }, { threshold: 0.12 });

        revealEls.forEach(function (el) {
          revealObserver.observe(el);
        });
      }
    }

    var counters = document.querySelectorAll("[data-count]");
    if (counters.length > 0 && "IntersectionObserver" in window) {
      var countObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;

          var el = entry.target;
          var target = Number(el.getAttribute("data-count"));
          var suffix = el.getAttribute("data-suffix") || "";
          var decimals = Number(el.getAttribute("data-decimals")) || 0;
          var duration = Number(el.getAttribute("data-duration")) || 1200;
          var start = performance.now();

          function tick(now) {
            var progress = Math.min((now - start) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            var value = target * eased;
            el.textContent = value.toLocaleString(undefined, {
              minimumFractionDigits: decimals,
              maximumFractionDigits: decimals
            }) + suffix;

            if (progress < 1) {
              requestAnimationFrame(tick);
            }
          }

          requestAnimationFrame(tick);
          countObserver.unobserve(el);
        });
      }, { threshold: 0.35 });

      counters.forEach(function (el) {
        countObserver.observe(el);
      });
    }
  });
})();
