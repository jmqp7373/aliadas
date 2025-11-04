<?php include 'includes/header.php'; ?>

<main class="main">
    <!-- Sección Bienvenida -->
    <section class="welcome-section">
        <div class="container">
            <h1 class="welcome-title">Bienvenida a Aliadas</h1>
            <p class="welcome-subtitle">Tu red de estudios profesionales de webcam en Colombia</p>
            <p class="welcome-text">Trabajamos con dedicación para ofrecer los mejores espacios, equipos y acompañamiento a nuestras modelos.</p>
        </div>
    </section>

    <!-- Sección Estudios -->
    <section id="estudios" class="studios-section">
        <div class="container">
            <h2 class="section-title">Nuestros Estudios</h2>
            <div class="studios-grid">
                <!-- Estudio Esmeralda -->
                <div class="studio-card">
                    <div class="studio-icon">
                        <img src="assets/images/iconos-estudios/esmeralda.png" alt="Estudio Esmeralda Webcam" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="studio-icon-placeholder" style="display:none;">💎</div>
                    </div>
                    <h3 class="studio-name"><a href="https://esmeraldawebcam.com.co" target="_blank" class="studio-link">Esmeralda Webcam</a></h3>
                    <p class="studio-description">Equipamiento premium con tecnología de última generación y espacios diseñados para tu comodidad.</p>
                    <ul class="studio-features">
                        <li>✓ Equipos de alta gama</li>
                        <li>✓ Iluminación profesional</li>
                        <li>✓ Ambientes exclusivos</li>
                    </ul>
                </div>

                <!-- Estudio Zafiro -->
                <div class="studio-card">
                    <div class="studio-icon">
                        <img src="assets/images/iconos-estudios/zafiro.png" alt="Estudio Zafiro Webcam" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="studio-icon-placeholder" style="display:none;">💠</div>
                    </div>
                    <h3 class="studio-name"><a href="https://zafirowebcam.com.co" target="_blank" class="studio-link">Zafiro Webcam</a></h3>
                    <p class="studio-description">Espacio moderno y acogedor con todas las herramientas que necesitas para destacar.</p>
                    <ul class="studio-features">
                        <li>✓ Tecnología avanzada</li>
                        <li>✓ Conexión de alta velocidad</li>
                        <li>✓ Soporte técnico 24/7</li>
                    </ul>
                </div>

                <!-- Estudio Diamante -->
                <div class="studio-card">
                    <div class="studio-icon">
                        <img src="assets/images/iconos-estudios/diamante.png" alt="Estudio Diamante Webcam" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="studio-icon-placeholder" style="display:none;">💍</div>
                    </div>
                    <h3 class="studio-name"><a href="https://diamantewebcam.com.co" target="_blank" class="studio-link">Diamante Webcam</a></h3>
                    <p class="studio-description">La excelencia hecha estudio. Para modelos que buscan la perfección en cada transmisión.</p>
                    <ul class="studio-features">
                        <li>✓ Instalaciones de lujo</li>
                        <li>✓ Equipamiento top</li>
                        <li>✓ Ambientes únicos</li>
                    </ul>
                </div>
            </div>

            <!-- Botón de llamado a la acción -->
            <div id="unete" class="cta-section">
                <a href="#contacto" class="cta-button">ÚNETE A ALIADAS</a>
            </div>
        </div>
    </section>

    <!-- Sección Valora -->
    <section class="valora-section">
        <div class="container">
            <div class="valora-content">
                <div class="valora-logo">
                    <img src="assets/images/logo-valora.png" alt="Logo Valora.vip" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'width:150px;height:150px;background:#1B263B;color:white;display:flex;align-items:center;justify-content:center;border-radius:10px;font-size:24px;font-weight:bold;\'>VALORA</div>';">
                </div>
                <div class="valora-text">
                    <h2 class="valora-title">¿Eres modelo independiente?</h2>
                    <p class="valora-description">
                        Descubre también <a href="https://valora.vip" target="_blank" class="valora-link">Valora.vip</a>, 
                        nuestra herramienta líder para gestión profesional webcam.
                    </p>
                    <p class="valora-features">Controla tus finanzas, organiza tu tiempo y maximiza tus ingresos con la plataforma diseñada especialmente para ti.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="contact-section">
        <div class="container">
            <h2 class="section-title">Contáctanos</h2>
            <p class="contact-text">¿Tienes preguntas? Estamos aquí para ayudarte a dar el siguiente paso en tu carrera.</p>
            <div class="contact-info">
                <p>📧 Email: admin@aliadaswebcam.com.co</p>
                <p>📱 WhatsApp: +57 XXX XXX XXXX</p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
