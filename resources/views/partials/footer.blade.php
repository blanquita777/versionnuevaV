<!-- resources/views/partials/footer.blade.php -->

<footer>
    <div class="footer-top">
        <div class="footer-logo">
            <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo" />
        </div>
        
        <div class="subscription">
            <p>Suscríbete y obtén un 15% de descuento en tu primera compra</p>
            <button>Suscribirse</button>
            <div class="payment-options">
                <img src="{{ asset('imagenes/visa.png') }}" alt="Visa" />
                <img src="{{ asset('imagenes/mastercard.png') }}" alt="Mastercard" />
                <img src="{{ asset('imagenes/bcp.png') }}" alt="BCP" />
                <img src="{{ asset('imagenes/bbva.png') }}" alt="BBVA" />
                <img src="{{ asset('imagenes/yape.png') }}" alt="Yape" />
            </div>
        </div>
    </div>

    <div class="footer-main">
        <div class="footer-section">
            <h3>Nosotros</h3>
            <ul>
                <li><a href="/nosotros">Nosotros</a></li>
                <li><a href="/garantias">Garantías</a></li>
                <li><a href="/politicas">Políticas de privacidad</a></li>
                <li><a href="/promociones">Promociones - Términos y Condiciones</a></li>
                <li><a href="#">Términos y condiciones Venta Telefónica</a></li>
                <li><a href="#">Términos y condiciones Delivery</a></li>
                <li><a href="/preguntas">Preguntas Frecuentes</a></li>
                <li><a href="/vision-carreteras">Buena Visión en Carretera</a></li>
                <li><a href="#">Permisos PRSS</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Servicios</h3>
            <ul>
                <li><a href="#">Convenios</a></li>
                <li><a href="#">Agenda tu examen visual</a></li>
                <li><a href="#">Cupones</a></li>
                <li><a href="/nosotros">Nuestro blog</a></li>
                <li><a href="/testimonios">Testimonios</a></li>
                <li><a href="#">Reservas de citas</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contacto</h3>
            <p>Horario para atención:</p>
            <p>Lunes a Sábado de 10:00 a 19:00</p>
            <p>Consultas Venta Tienda: 0800-14600</p>
            <p>Horario atención venta telefónica: Lunes a Sábado de 11:00 a 19:00</p>
            <h4>Síguenos en:</h4>
            <div class="social-media">
                <a href="/pago" class="social-icon-1">
                    <img src="{{ asset('imagenes/facebook.png') }}" alt="Facebook" />
                </a>
                <a href="/pago" class="social-icon-2">
                    <img src="{{ asset('imagenes/instagram.jpg') }}" alt="Instagram" />
                </a>
                <a href="/pago" class="social-icon-3">
                    <img src="{{ asset('imagenes/whatsap.png') }}" alt="WhatsApp" />
                </a>
                <a href="/pago" class="social-icon-4">
                    <img src="{{ asset('imagenes/tiktok.png') }}" alt="TikTok" />
                </a>
            </div>
        </div>

        <div class="footer-section">
            <h3>Ubicación</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18..."></iframe>
        </div>
    </div>
</footer>

