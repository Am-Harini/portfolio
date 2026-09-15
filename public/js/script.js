// ---------------------------------------------------
// Mobile nav toggle
// ---------------------------------------------------
const railToggle = document.getElementById('railToggle');
const railNav = document.getElementById('railNav');

if (railToggle && railNav) {
  railToggle.addEventListener('click', () => {
    const isOpen = railNav.classList.toggle('open');
    railToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });

  // Close menu after a nav link is tapped (mobile)
  railNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      railNav.classList.remove('open');
      railToggle.setAttribute('aria-expanded', 'false');
    });
  });
}

// ---------------------------------------------------
// Highlight the active section link on scroll
// ---------------------------------------------------
const sections = document.querySelectorAll('main .block, main .hero');
const navLinks = document.querySelectorAll('.rail-nav a');

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const id = entry.target.getAttribute('id');
      if (!id) return;

      navLinks.forEach((link) => {
        link.classList.toggle('is-active', link.getAttribute('href') === `#${id}`);
      });
    });
  },
  { rootMargin: '-40% 0px -50% 0px', threshold: 0 }
);

sections.forEach((section) => {
  if (section.id) observer.observe(section);
});

// ---------------------------------------------------
// Only one project "schema card" open at a time
// ---------------------------------------------------
const schemaCards = document.querySelectorAll('.schema-card');

schemaCards.forEach((card) => {
  card.addEventListener('toggle', () => {
    if (!card.open) return;
    schemaCards.forEach((other) => {
      if (other !== card) other.open = false;
    });
  });
});

// ---------------------------------------------------
// Basic client-side validation feedback before submit
// (Laravel still validates server-side — this is just UX polish)
// ---------------------------------------------------
const contactForm = document.querySelector('.contact-form');

if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    const requiredFields = contactForm.querySelectorAll('[required]');
    let hasEmpty = false;

    requiredFields.forEach((field) => {
      if (!field.value.trim()) hasEmpty = true;
    });

    if (hasEmpty) {
      e.preventDefault();
      contactForm.reportValidity();
    }
  });
}
