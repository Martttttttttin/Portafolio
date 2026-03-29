<?php
$nombre = "Carlos Martin";
$email = "carlos.angeles.claudio@gmail.com";
$telefono = "+51 945 331 391";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio — <?php echo $nombre; ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Fontshare: Clash Display + Satoshi -->
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@200,300,400,500,600,700&f[]=satoshi@300,400,500&display=swap" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="../assets/styles/general.css">
</head>

<body>

    <!-- Custom Cursor -->
    <div class="cursor" id="cursor"></div>
    <div class="cursor-ring" id="cursorRing"></div>

    <!-- ── NAVBAR ── -->
    <nav class="navbar-custom" id="navbar">
        <a href="#hero" class="nav-logo">CM</a>
        <ul class="nav-links">
            <li><a href="#sobre-mi">Sobre mí</a></li>
            <li><a href="#habilidades">Habilidades</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <!-- ── HERO ── -->
    <section id="hero">
        <div class="video-bg">
            <video autoplay muted loop playsinline>
                <source src="../assets/video/27669-365224683.mp4" type="video/mp4">
            </video>
            <div class="video-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-tag">Portafolio</div>
            <h1 class="hero-title">
                <?php echo explode(' ', $nombre)[0]; ?><br>
                <em><?php echo explode(' ', $nombre)[1]; ?></em>
            </h1>
            <p class="hero-subtitle">Desarrollador Web &nbsp;·&nbsp; Lima, Perú</p>
        </div>
        <a href="#sobre-mi" class="hero-scroll">
            <span>Scroll</span>
            <div class="scroll-arrow">
                <i class="bi bi-chevron-down"></i>
                <i class="bi bi-chevron-down"></i>
            </div>
        </a>
    </section>

    <!-- ── SOBRE MÍ ── -->
    <section id="sobre-mi">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 reveal">
                    <p class="section-label">Sobre mí</p>
                    <h2 class="section-title">Creando con<br><em>propósito</em><br>y precisión</h2>
                    <div class="gold-line"></div>
                    <p class="about-text">
                        Soy <strong><?php echo $nombre; ?></strong>, practicante de la carrera de Desarrollo de Software con pasión por
                        desarrollo de paginas web y de implementar experiencias digitales que combinen <strong>funcionalidad impecable</strong>
                        con diseño cuidado. Cada proyecto es una oportunidad de resolver problemas reales
                        con soluciones elegantes.
                    </p>
                    <div class="mt-4">
                        <a href="#contacto" class="btn-gold">Hablemos</a>
                        <a href="#proyectos" class="btn-outline-gold">Ver proyectos</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-6 reveal reveal-delay-1">
                            <div class="stat-box">
                                <div class="stat-num">3+</div>
                                <div class="stat-label">Años de experiencia</div>
                            </div>
                        </div>
                        <div class="col-6 reveal reveal-delay-2">
                            <div class="stat-box">
                                <div class="stat-num">20+</div>
                                <div class="stat-label">Proyectos completados</div>
                            </div>
                        </div>
                        <div class="col-6 reveal reveal-delay-3">
                            <div class="stat-box">
                                <div class="stat-num">15+</div>
                                <div class="stat-label">Clientes satisfechos</div>
                            </div>
                        </div>
                        <div class="col-6 reveal reveal-delay-4">
                            <div class="stat-box">
                                <div class="stat-num">∞</div>
                                <div class="stat-label">Líneas de código</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── HABILIDADES ── -->
    <section id="habilidades">
        <div class="container">
            <div class="row mb-5">
                <div class="col reveal">
                    <p class="section-label">Habilidades</p>
                    <h2 class="section-title">Mi stack<br>tecnológico</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="skill-card h-100">
                        <div class="skill-icon"><i class="bi bi-code-slash"></i></div>
                        <div class="skill-name">Frontend</div>
                        <p class="skill-desc">Interfaces modernas, responsivas y accesibles con atención al detalle.</p>
                        <div class="skill-tags">
                            <span class="skill-tag">HTML</span>
                            <span class="skill-tag">CSS</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">Bootstrap</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal reveal-delay-1">
                    <div class="skill-card h-100">
                        <div class="skill-icon"><i class="bi bi-server"></i></div>
                        <div class="skill-name">Backend</div>
                        <p class="skill-desc">Lógica robusta del lado del servidor, APIs y manejo eficiente de datos.</p>
                        <div class="skill-tags">
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">MySQL</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal reveal-delay-2">
                    <div class="skill-card h-100">
                        <div class="skill-icon"><i class="bi bi-palette"></i></div>
                        <div class="skill-name">Diseño UI</div>
                        <p class="skill-desc">Diseño visual orientado a experiencia de usuario y conversión.</p>
                        <div class="skill-tags">
                            <span class="skill-tag">Figma</span>
                            <span class="skill-tag">UX/UI</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal reveal-delay-1">
                    <div class="skill-card h-100">
                        <div class="skill-icon"><i class="bi bi-git"></i></div>
                        <div class="skill-name">Control de versiones</div>
                        <p class="skill-desc">Flujos de trabajo colaborativos y gestión de proyectos con Git.</p>
                        <div class="skill-tags">
                            <span class="skill-tag">Git</span>
                            <span class="skill-tag">GitHub</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 reveal reveal-delay-2">
                    <div class="skill-card h-100">
                        <div class="skill-icon"><i class="bi bi-phone"></i></div>
                        <div class="skill-name">Mobile First</div>
                        <p class="skill-desc">Diseño adaptable que funciona perfectamente en cualquier dispositivo.</p>
                        <div class="skill-tags">
                            <span class="skill-tag">Responsive</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── PROYECTOS ── -->
    <section id="proyectos">
        <div class="container">
            <div class="row mb-5">
                <div class="col reveal">
                    <p class="section-label">Proyectos</p>
                    <h2 class="section-title">Trabajo<br><em>selecto</em></h2>
                </div>
            </div>
            <div class="row g-4">

                <!-- Proyecto 01 — APRODEPERU -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="project-card">
                        <a href="https://test.aprodeperu.org/index.php" target="_blank" rel="noopener" class="project-thumb">
                            <img
                                src="../assets/img/ong preview.webp"
                                alt="Preview APRODEPERU"
                                class="project-preview-img"
                            >
                            <div class="project-overlay">
                                <span class="btn-view">Ver proyecto <i class="bi bi-arrow-up-right"></i></span>
                            </div>
                        </a>
                        <div class="project-body">
                            <h3 class="project-title">APRODEPERU</h3>
                            <p class="project-desc">Sitio web institucional para organización social sin fines de lucro. Sistema de gestión de contenido, secciones dinámicas y diseño adaptativo para todos los dispositivos.</p>
                            <div class="project-tags">
                                <span class="tag">PHP</span>
                                <span class="tag">JS</span>
                                <span class="tag">CSS</span>
                                <span class="tag">GIT</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 02 -->
                <div class="col-md-6 col-lg-4 reveal reveal-delay-1">
                    <div class="project-card">
                        <div class="project-thumb">
                            <div class="project-thumb-inner">&#60;/&#62;</div>
                            <div class="project-overlay">
                                <a href="#" class="btn-view">Ver proyecto</a>
                            </div>
                        </div>
                        <div class="project-body">
                            <h3 class="project-title">Sistema de Gestión</h3>
                            <p class="project-desc">Dashboard empresarial con reportes, roles de usuario y módulos personalizados.</p>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 03 -->
                <div class="col-md-6 col-lg-4 reveal reveal-delay-2">
                    <div class="project-card">
                        <div class="project-thumb">
                            <div class="project-thumb-inner">&#9670;</div>
                            <div class="project-overlay">
                                <a href="#" class="btn-view">Ver proyecto</a>
                            </div>
                        </div>
                        <div class="project-body">
                            <h3 class="project-title">Landing Page Corporativa</h3>
                            <p class="project-desc">Sitio web de presentación con animaciones, formulario de contacto y SEO optimizado.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── CONTACTO ── -->
    <section id="contacto">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 reveal">
                    <p class="section-label">Contacto</p>
                    <h2 class="contact-big">Trabajemos<br><em>juntos</em></h2>
                    <div class="gold-line"></div>
                    <p class="contact-intro">
                        ¿Tienes un proyecto en mente? Me encantaría escucharte.
                        Cuéntame tu idea y juntos la hacemos realidad.
                    </p>
                    <div class="mt-4 d-flex gap-3 flex-wrap">
                        <a href="mailto:<?php echo $email; ?>" class="btn-gold">Enviar mensaje</a>
                        <a href="./pdf/CV - Carlos martin angeles claudio.pdf" download="CV - Carlos Martin" class="btn-outline-gold">Descargar CV <i class="bi bi-download"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 reveal reveal-delay-1">
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="bi bi-whatsapp"></i></div>
                        <div>
                            <div class="contact-label">WhatsApp</div>
                            <div class="contact-value">
                                <a href="https://wa.me/51945331391" target="_blank" rel="noopener"><?php echo $telefono; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                        <div>
                            <div class="contact-label">Email</div>
                            <div class="contact-value">
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
                        <div>
                            <div class="contact-label">Ubicación</div>
                            <div class="contact-value">Lima, Perú</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FOOTER ── -->
    <footer>
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div class="footer-copy">© 2026 <?php echo $nombre; ?> — Todos los derechos reservados</div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS propio -->
    <script src="../assets/js/principal.js"></script>

</body>
</html>