<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initial animations
        gsap.to('#navbar', {
            opacity: 1,
            duration: 1,
            ease: 'power2.out'
        });

        gsap.to('#shareSection', {
            opacity: 1,
            y: 0,
            duration: 1,
            delay: 0.3,
            ease: 'power2.out'
        });

        gsap.to('#statsCard', {
            opacity: 1,
            duration: 1,
            delay: 0.6,
            ease: 'power2.out'
        });

        gsap.to('#recipesCard', {
            opacity: 1,
            duration: 1,
            delay: 0.6,
            ease: 'power2.out'
        });

        // Animate recipe cards
        gsap.to('.recipe-card', {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.2,
            delay: 1,
            ease: 'power2.out'
        });

        // Counter animation
        gsap.to('#counter', {
            innerHTML: 2847,
            duration: 2,
            delay: 1,
            snap: {
                innerHTML: 1
            },
            ease: 'power1.out'
        });

        // Hover animations for recipe cards
        document.querySelectorAll('.recipe-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    backgroundColor: '#f8fafc',
                    duration: 0.3
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    backgroundColor: '#f9fafb',
                    duration: 0.3
                });
            });
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('imagePreview');
        const previewImage = imagePreview.querySelector('img');

        imageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                previewImage.src = '';
                imagePreview.classList.add('hidden');
            }
        });
    });
     // Select elements
     const addrecettesButton = document.querySelector('button.bg-white.text-emerald-600');
        const modal = document.querySelector('.modalForm');
        const closeModalButton = modal.querySelector('button.text-white.hover\\:text-emerald-100');

        // Show modal with GSAP animation
        addrecettesButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
            gsap.fromTo(modal, {
                opacity: 0
            }, {
                opacity: 1,
                duration: 0.3
            });
            gsap.fromTo(modal.querySelector('.bg-white.rounded-xl.shadow-xl'), {
                y: 50,
                opacity: 0
            }, {
                y: 0,
                opacity: 1,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        // Hide modal with GSAP animation
        closeModalButton.addEventListener('click', () => {
            gsap.to(modal, {
                opacity: 0,
                duration: 0.3,
                onComplete: () => modal.classList.add('hidden')
            });
        });

        // Optional: Hover effects for recettes cards
        const recettesCards = document.querySelectorAll('.bg-white.rounded-lg.shadow-md');
        recettesCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    scale: 1.02,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });
</script>
</body>

</html>
