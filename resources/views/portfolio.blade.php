<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Harini B — PHP Laravel Developer</title>
<meta name="description" content="Harini B, PHP Laravel Developer — backend systems, REST APIs, and fintech platforms.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<a class="skip-link" href="#main">Skip to content</a>

<div class="shell">

  <!-- Sidebar / nav -->
  <header class="rail" id="rail">
    <div class="rail-top">
      <span class="rail-mark">HB</span>
      <button class="rail-toggle" id="railToggle" aria-expanded="false" aria-controls="railNav">
        <span></span><span></span><span></span>
      </button>
    </div>
    <nav class="rail-nav" id="railNav">
      <a href="#about"><span class="idx">01</span>About</a>
      <a href="#skills"><span class="idx">02</span>Skills</a>
      <a href="#experience"><span class="idx">03</span>Experience</a>
      <a href="#projects"><span class="idx">04</span>Projects</a>
      <a href="#contact"><span class="idx">05</span>Contact</a>
    </nav>
    <div class="rail-bottom">
      <a href="mailto:harinibalamurugan110904@gmail.com">Email</a>
      <a href="https://LinkedIn.com/in/harinibalamurugan11" target="_blank" rel="noopener">LinkedIn</a>
    </div>
  </header>

  <main id="main">

    <!-- HERO -->
    <section class="hero">
      <p class="hero-kicker">// backend developer, madurai</p>
      <h1 class="hero-title">Harini B builds the systems<br>behind the interface.</h1>
      <p class="hero-lede">
        PHP Laravel developer with 2+ years shipping REST APIs, admin panels
        and role-based platforms — from hospital scheduling to a live
        fiat/crypto exchange product.
      </p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="#projects">See the work</a>
        <a class="btn btn-ghost" href="#contact">Get in touch</a>
      </div>
      <div class="hero-stat-row">
        <div class="stat"><span class="stat-num">2+</span><span class="stat-label">years experience</span></div>
        <div class="stat"><span class="stat-num">7</span><span class="stat-label">production projects</span></div>
        <div class="stat"><span class="stat-num">4</span><span class="stat-label">company websites shipped</span></div>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="block" id="about">
      <h2 class="block-title"><span class="idx">01</span>About</h2>
      <div class="block-body">
        <p>
          I'm a PHP Laravel developer at Hivelance Technologies in Madurai,
          where I build and maintain web applications, admin panels and
          REST APIs for real business problems — hospital scheduling,
          billing and rental software, internal chat tools, and a
          cryptocurrency exchange platform.
        </p>
        <p>
          I care most about the backend holding up under real usage:
          clean MVC structure, sensible database design, and
          authentication that doesn't leak. MySQL query optimization is
          my quiet favourite part of the job.
        </p>
      </div>
    </section>

    <!-- SKILLS -->
    <section class="block" id="skills">
      <h2 class="block-title"><span class="idx">02</span>Skills</h2>
      <div class="skill-grid">
        <div class="skill-card">
          <span class="skill-tag">backend</span>
          <p>PHP, Laravel — MVC architecture, REST APIs, authentication &amp; authorization</p>
        </div>
        <div class="skill-card">
          <span class="skill-tag">database</span>
          <p>MySQL — schema design, query optimization</p>
        </div>
        <div class="skill-card">
          <span class="skill-tag">frontend</span>
          <p>HTML5, CSS3, JavaScript (basic), React.js (basic)</p>
        </div>
        <div class="skill-card">
          <span class="skill-tag">tooling</span>
          <p>Git, role-based access control, admin panel development</p>
        </div>
      </div>
    </section>

    <!-- EXPERIENCE -->
    <section class="block" id="experience">
      <h2 class="block-title"><span class="idx">03</span>Experience</h2>
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-date">Jul 2024 — Aug 2026</div>
          <div class="timeline-content">
            <h3>PHP Laravel Developer</h3>
            <p class="timeline-org">Hivelance Technologies (P) Limited, Madurai</p>
            <ul>
              <li>Developed and maintained web applications and admin panels using PHP Laravel.</li>
              <li>Built and integrated REST APIs with secure authentication and role-based access control.</li>
              <li>Designed and optimized MySQL databases for performance and reliability.</li>
              <li>Debugged, enhanced, and improved existing modules across multiple live projects.</li>
            </ul>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-date">May 2024</div>
          <div class="timeline-content">
            <h3>B.Sc. Information Technology</h3>
            <p class="timeline-org">The Madura College, Madurai — 80.20%</p>
          </div>
        </div>
      </div>
    </section>

    <!-- PROJECTS -->
    <section class="block" id="projects">
      <h2 class="block-title"><span class="idx">04</span>Projects</h2>
      <p class="block-intro">Selected work, presented as I'd document it — table by table.</p>

      <div class="schema-list">

        <details class="schema-card" open>
          <summary>
            <span class="schema-name">apex_ico_platform</span>
            <span class="schema-flag">user-side · full build</span>
          </summary>
          <div class="schema-body">
            <p>Fully developed the user-facing side of the Apex ICO website.</p>
            <ul class="schema-fields">
              <li><span>deposit</span> fiat and crypto deposit flows</li>
              <li><span>withdraw</span> fiat and crypto withdrawal flows</li>
              <li><span>exchange</span> INR ⇄ USDT currency conversion, both directions</li>
            </ul>
          </div>
        </details>

        <details class="schema-card">
          <summary>
            <span class="schema-name">hrms</span>
            <span class="schema-flag">human resource management</span>
          </summary>
          <div class="schema-body">
            <ul class="schema-fields">
              <li><span>employees</span> employee records and profiles</li>
              <li><span>attendance</span> attendance tracking</li>
              <li><span>roles</span> role-based admin functionality</li>
            </ul>
          </div>
        </details>

        <details class="schema-card">
          <summary>
            <span class="schema-name">hive_chat</span>
            <span class="schema-flag">internal tool · real-time</span>
          </summary>
          <div class="schema-body">
            <ul class="schema-fields">
              <li><span>base</span> integrated and enhanced Chatify (Laravel)</li>
              <li><span>data</span> connected to internal MySQL employee data</li>
              <li><span>features</span> real-time chat tailored to company needs</li>
            </ul>
          </div>
        </details>

        <details class="schema-card">
          <summary>
            <span class="schema-name">hospital_management</span>
            <span class="schema-flag">multi-role platform</span>
          </summary>
          <div class="schema-body">
            <ul class="schema-fields">
              <li><span>patients</span> registration and appointment scheduling</li>
              <li><span>roles</span> Admin, Doctor, Receptionist, Nurse, Pharmacist, Lab Technician, Billing</li>
            </ul>
          </div>
        </details>

        <details class="schema-card">
          <summary>
            <span class="schema-name">centring_shiva</span>
            <span class="schema-flag">billing &amp; rental</span>
          </summary>
          <div class="schema-body">
            <ul class="schema-fields">
              <li><span>stock</span> product and stock management</li>
              <li><span>transactions</span> sales, rental, credit, estimation, billing</li>
              <li><span>roles</span> admin and employee access</li>
            </ul>
          </div>
        </details>

        <details class="schema-card">
          <summary>
            <span class="schema-name">company_websites</span>
            <span class="schema-flag">×4 shipped</span>
          </summary>
          <div class="schema-body">
            <ul class="schema-fields">
              <li><span>sites</span> Hivelance, Plurance, Dapps, Bizvertex</li>
              <li><span>scope</span> each with its own admin panel</li>
            </ul>
          </div>
        </details>

      </div>
    </section>

    <!-- CONTACT -->
    <section class="block" id="contact">
      <h2 class="block-title"><span class="idx">05</span>Contact</h2>
      <p class="block-intro">Open to new opportunities — reach out below or through email / LinkedIn.</p>

      @if (session('status'))
        <p class="form-status" role="status">{{ session('status') }}</p>
      @endif

      <form class="contact-form" method="POST" action="{{ url('contact') }}">
        @csrf
        <div class="field">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" required>
          @error('name') <span class="field-error">{{ $message }}</span> @enderror
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" required>
          @error('email') <span class="field-error">{{ $message }}</span> @enderror
        </div>
        <div class="field">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
          @error('message') <span class="field-error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Send message</button>
      </form>

      <div class="contact-direct">
        <a href="mailto:harinibalamurugan110904@gmail.com">harinibalamurugan110904@gmail.com</a>
        <a href="tel:+916380969801">+91 63809 69801</a>
        <a href="https://LinkedIn.com/in/harinibalamurugan11" target="_blank" rel="noopener">LinkedIn.com/in/harinibalamurugan11</a>
      </div>
    </section>

    <footer class="site-footer">
      <p>Harini B — PHP Laravel Developer · Madurai, Tamil Nadu</p>
    </footer>

  </main>
</div>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
