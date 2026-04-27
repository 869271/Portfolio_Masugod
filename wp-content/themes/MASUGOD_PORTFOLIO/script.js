(function () {
  var yearEl = document.getElementById("year");
  if (yearEl) yearEl.textContent = String(new Date().getFullYear());

  var header = document.querySelector(".site-header");
  var toggle = document.querySelector(".nav-toggle");
  var nav = document.getElementById("site-nav");

  if (header && toggle && nav) {
    function setOpen(open) {
      header.classList.toggle("is-open", open);
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
      toggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
    }

    toggle.addEventListener("click", function () {
      setOpen(!header.classList.contains("is-open"));
    });

    nav.querySelectorAll("a[href^='#']").forEach(function (link) {
      link.addEventListener("click", function () {
        setOpen(false);
      });
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") setOpen(false);
    });
  }

  var form = document.getElementById("contact-form");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var fd = new FormData(form);
      var name = (fd.get("name") || "").toString().trim();
      var email = (fd.get("email") || "").toString().trim();
      var phone = (fd.get("phone") || "").toString().trim();
      var message = (fd.get("message") || "").toString().trim();
      var body =
        "Name: " +
        name +
        "\nEmail: " +
        email +
        "\nPhone: " +
        phone +
        "\n\n" +
        message;
      var subject = encodeURIComponent("Portfolio contact from " + (name || "visitor"));
      window.location.href =
        "mailto:masugodrowena8@gmail.com?subject=" + subject + "&body=" + encodeURIComponent(body);
    });
  }

  // Scroll reveal animations (lightweight + accessible)
  var reduceMotion =
    window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (!reduceMotion) {
    var revealTargets = [];

    function addTargets(selector, baseDelayMs) {
      var nodes = document.querySelectorAll(selector);
      nodes.forEach(function (el, i) {
        el.classList.add("reveal");
        el.style.setProperty("--d", String((baseDelayMs || 0) + i * 70) + "ms");
        revealTargets.push(el);
      });
    }

    addTargets(".section-header", 0);
    addTargets(".about__text, .about__cards .about-card", 60);
    addTargets(".works__grid .work-card", 80);
    addTargets(".skills__columns .skill-panel, .tools-strip", 80);
    addTargets(".cert-grid .cert-card", 80);
    addTargets(".resume-card, .resume-summary__col", 60);
    addTargets(".contact__aside, .contact-form-wrap, .contact-info", 60);

    if ("IntersectionObserver" in window && revealTargets.length) {
      var io = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add("is-visible");
              io.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.15, rootMargin: "0px 0px -10% 0px" }
      );

      revealTargets.forEach(function (el) {
        io.observe(el);
      });
    } else {
      revealTargets.forEach(function (el) {
        el.classList.add("is-visible");
      });
    }
  }
})();
