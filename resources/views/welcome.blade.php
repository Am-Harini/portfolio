<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Harini B - PHP Laravel Developer portfolio">
    <title>Harini B | PHP Laravel Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#home">Harini<span>.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li><a class="nav-link" href="#home">Home</a></li>
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#skills">Skills</a></li>
                <li><a class="nav-link" href="#experience">Experience</a></li>
                <li><a class="nav-link" href="#projects">Projects</a></li>
                <li><a class="nav-link" href="#education">Education</a></li>
                <li><a class="btn btn-accent btn-sm px-3 ms-lg-2" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-8">
                <p class="eyebrow">PHP • LARAVEL • MYSQL</p>
                <h1>Hi, I'm <span>Harini B</span><br>PHP Laravel Developer.</h1>
                <p class="lead mt-4">I build secure, scalable and business-focused web applications, REST APIs and admin panels using Laravel and MySQL.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="#projects" class="btn btn-accent btn-lg">View My Work <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    <a href="{{ asset('resume/HARINI_B.pdf') }}" download class="btn btn-outline-dark btn-lg">
                        Download Resume <i class="fa-solid fa-download ms-2"></i>
                    </a>
                </div>
                <div class="socials mt-4">
                    <a href="mailto:harinibalamurugan110904@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                    <a href="tel:+916380969801"><i class="fa-solid fa-phone"></i></a>
                    <a href="https://linkedin.com/in/harinibalamurugan11" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="hero-card">
                    <div class="code-icon"><i class="fa-brands fa-laravel"></i></div>
                    <h4>2+ Years</h4>
                    <p>Laravel Development</p>
                    <div class="mini-stats">
                        <div><strong>REST</strong><small>APIs</small></div>
                        <div><strong>MySQL</strong><small>Database</small></div>
                        <div><strong>MVC</strong><small>Architecture</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section">
    <div class="container">
        <div class="section-heading"><p class="eyebrow">ABOUT ME</p><h2>Backend developer focused on real-world solutions.</h2></div>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="glass-card h-100">
                    <p>I'm a PHP Laravel Developer with 2+ years of experience building web applications, REST APIs and admin panels. My work includes role-based systems, billing software, crypto/fiat exchange platforms and management platforms.</p>
                    <p class="mb-0">I enjoy debugging existing applications, improving modules and creating practical backend solutions that support business needs.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="glass-card h-100">
                    <div class="info-row"><span>Location</span><strong>Madurai, Tamil Nadu</strong></div>
                    <div class="info-row"><span>Email</span><strong>harinibalamurugan110904@gmail.com</strong></div>
                    <div class="info-row"><span>Phone</span><strong>+91 63809 69801</strong></div>
                    <div class="info-row"><span>Focus</span><strong>Laravel / Backend</strong></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="section section-alt">
    <div class="container">
        <div class="section-heading"><p class="eyebrow">TECHNICAL SKILLS</p><h2>Tools I work with.</h2></div>
        <div class="row g-3">
            @foreach([
                ['PHP','fa-php'],['Laravel','fa-laravel'],['MySQL','fa-database'],
                ['HTML5','fa-html5'],['CSS3','fa-css3-alt'],['JavaScript','fa-js'],
                ['React.js','fa-react'],['Git','fa-git-alt'],['REST APIs','fa-plug'],
                ['Authentication','fa-shield-halved'],['Authorization','fa-user-lock'],['Admin Panels','fa-table-columns']
            ] as $skill)
            <div class="col-6 col-md-4 col-lg-3"><div class="skill-card"><i class="fa-solid {{ $skill[1] }}"></i><span>{{ $skill[0] }}</span></div></div>
            @endforeach
        </div>
    </div>
</section>

<section id="experience" class="section">
    <div class="container">
        <div class="section-heading"><p class="eyebrow">EXPERIENCE</p><h2>Professional journey.</h2></div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="glass-card">
                    <span class="date">Jul 2024 – Aug 2026</span>
                    <h3>PHP Laravel Developer</h3>
                    <h5>Hivelance Technologies (P) Limited · Madurai</h5>
                    <ul>
                        <li>Developed and maintained web applications and admin panels using PHP Laravel.</li>
                        <li>Built and integrated REST APIs with secure authentication and role-based access control.</li>
                        <li>Designed and optimized MySQL databases for performance and reliability.</li>
                        <li>Debugged, enhanced and improved modules across multiple live projects.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="section section-alt">
    <div class="container">
        <div class="section-heading"><p class="eyebrow">PROJECTS</p><h2>Selected work.</h2></div>
        <div class="row g-4">
            @php
            $projects = [
                ['Apex – ICO Project','Fully developed the user-side ICO website with fiat/crypto deposits and withdrawals and INR ↔ USDT exchange functionality.','Laravel','REST APIs','MySQL','fa-coins'],
                ['HRMS','Employee management, attendance tracking and role-based admin functionalities.','Laravel','MySQL','RBAC','fa-users'],
                ['Hive Chat Application','Enhanced Chatify with real-time chat features connected to internal MySQL employee data.','Laravel','Chatify','MySQL','fa-comments'],
                ['Hospital Management System','Patient registration, appointment scheduling and role-based access for Admin, Doctor, Receptionist, Nurse, Pharmacist, Lab Technician and Billing staff.','Laravel','MySQL','RBAC','fa-hospital'],
                ['Centring Shiva','Product and stock management, sales, rental, credit, estimation and billing with role-based access.','Laravel','MySQL','Billing','fa-file-invoice-dollar'],
                ['Company Websites','Developed and maintained Hivelance, Plurance, Dapps and Bizvertex websites with their admin panels.','PHP','Laravel','Admin Panels','fa-globe']
            ];
            @endphp
            @foreach($projects as $project)
            <div class="col-md-6 col-lg-4">
                <div class="project-card h-100">
                    <div class="project-icon"><i class="fa-solid {{ $project[5] }}"></i></div>
                    <h3>{{ $project[0] }}</h3>
                    <p>{{ $project[1] }}</p>
                    <div class="tags">
                        @foreach(array_slice($project,2,3) as $tag)<span>{{ $tag }}</span>@endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="education" class="section">
    <div class="container">
        <div class="section-heading"><p class="eyebrow">EDUCATION</p><h2>Academic background.</h2></div>
        <div class="glass-card education-card">
            <div class="edu-icon"><i class="fa-solid fa-graduation-cap"></i></div>
            <div><span class="date">Graduated · May 2024</span><h3>B.Sc. Information Technology</h3><p>The Madura College, Madurai</p><strong>Percentage: 80.20%</strong></div>
        </div>
    </div>
</section>

<section id="contact" class="section section-alt">
    <div class="container">
        <div class="section-heading"><p class="eyebrow">CONTACT</p><h2>Let's build something useful.</h2><p>Have a Laravel project or opportunity? Send me a message.</p></div>
        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
        @if($errors->any())<div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="glass-card contact-info">
                    <a href="mailto:harinibalamurugan110904@gmail.com"><i class="fa-solid fa-envelope"></i><span>harinibalamurugan110904@gmail.com</span></a>
                    <a href="tel:+916380969801"><i class="fa-solid fa-phone"></i><span>+91 63809 69801</span></a>
                    <a href="https://linkedin.com/in/harinibalamurugan11" target="_blank"><i class="fa-brands fa-linkedin"></i><span>linkedin.com/in/harinibalamurugan11</span></a>
                </div>
            </div>
            <div class="col-lg-7">
                <form method="POST" action="{{ route('contact.send') }}" class="glass-card">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6"><label>Name</label><input name="name" class="form-control" value="{{ old('name') }}" required></div>
                        <div class="col-md-6"><label>Email</label><input type="email" name="email" class="form-control" value="{{ old('email') }}" required></div>
                        <div class="col-12"><label>Subject</label><input name="subject" class="form-control" value="{{ old('subject') }}" required></div>
                        <div class="col-12"><label>Message</label><textarea name="message" rows="5" class="form-control" required>{{ old('message') }}</textarea></div>
                        <div class="col-12"><button class="btn btn-accent">Send Message <i class="fa-solid fa-paper-plane ms-2"></i></button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer><div class="container text-center"><p class="mb-0">© {{ date('Y') }} Harini B · PHP Laravel Developer</p></div></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>