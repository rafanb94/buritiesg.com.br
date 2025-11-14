</main>
    

    <script>
        // Home slider logic
        (function() {
            const slides = [
                document.getElementById('home-slide-0'),
                document.getElementById('home-slide-1')
            ];

            const btn0 = document.getElementById('slider-01');
            const btn1 = document.getElementById('slider-02');

            function setActiveControl(index) {
                // Reset both buttons to inactive (transparent top border + gray text)
                [btn0, btn1].forEach((b, i) => {
                    b.setAttribute('aria-selected', i === index ? 'true' : 'false');
                    b.classList.remove('border-orange-500', 'text-orange-500');
                    b.classList.add('border-transparent', 'text-gray-400');
                });

                // Active button: top border orange and orange text
                const active = index === 0 ? btn0 : btn1;
                active.classList.remove('border-transparent', 'text-gray-400');
                active.classList.add('border-orange-500', 'text-orange-500');
            }

            function showHomeSlide(index) {
                slides.forEach((s, i) => {
                    if (!s) return;
                    if (i === index) {
                        s.classList.remove('hidden', 'opacity-0');
                        s.classList.add('opacity-100');
                        s.style.transition = 'opacity 300ms ease';
                    } else {
                        s.classList.remove('opacity-100');
                        s.classList.add('opacity-0');
                        // delay adding hidden to allow fade-out
                        setTimeout(() => s.classList.add('hidden'), 300);
                    }
                });
                setActiveControl(index);
            }

            // Attach handlers
            btn0.addEventListener('click', () => showHomeSlide(0));
            btn1.addEventListener('click', () => showHomeSlide(1));

            // init state
            showHomeSlide(0);
        })();

        function showService(index) {
            // Hide all services
            document.querySelectorAll('[id^="service-"]').forEach(el => {
                el.classList.add('hidden');
            });

            // Show selected service
            document.getElementById(`service-${index}`).classList.remove('hidden');

            // Update button states - remove active state from all buttons
            for (let i = 0; i < 3; i++) {
                const btn = document.getElementById(`btn-${i}`);
                const arrow = btn.querySelector('span:first-child');
                const title = btn.querySelector('h3');

                if (i === index) {
                    // Active button
                    arrow.className = 'text-orange-500';
                    title.className = 'text-3xl font-semibold text-orange-500';
                } else {
                    // Inactive button
                    arrow.className = 'text-gray-400';
                    title.className = 'text-3xl font-semibold text-gray-600';
                }
            }
        }

         const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');
        const menuLinks = mobileMenu.querySelectorAll('a');

        // Função para abrir/fechar menu
        menuButton.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('translate-x-full');
            
            if (isOpen) {
                // Fechar menu
                mobileMenu.classList.add('translate-x-full');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                document.body.style.overflow = '';
            } else {
                // Abrir menu
                mobileMenu.classList.remove('translate-x-full');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        });

        // Fechar menu ao clicar em um link
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                document.body.style.overflow = '';
            });
        });

        const btns = document.querySelectorAll(".submenu-btn");

        btns.forEach(btn => {
        btn.addEventListener("click", () => {
            const submenu = btn.nextElementSibling;
            submenu.classList.toggle("hidden");
            btn.querySelector("span").textContent =
                submenu.classList.contains("hidden") ? "+" : "-";
        });
    });
    </script>
</body>
</html>