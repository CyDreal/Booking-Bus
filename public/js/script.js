// navbar strat
const navbar = document.querySelector("nav");
const navbarLogo = document.querySelector(".navbar-logo");
const navbarText = document.querySelector(".navbar-text");

window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        navbar.classList.add("navbar-scrolled"); // Menambahkan kelas navbar-scrolled saat scroll
        navbarLogo.style.display = "none"; // Sembunyikan logo gambar
        navbarText.style.display = "inline-block"; // Tampilkan teks logo
    } else {
        navbar.classList.remove("navbar-scrolled"); // Menghapus kelas navbar-scrolled saat scroll kembali ke atas
        navbarLogo.style.display = "inline-block"; // Tampilkan logo gambar kembali
        navbarText.style.display = "none"; // Sembunyikan teks logo
    }
});
// navbar end

// Configure Particles.js
particlesJS('particles-js', {
    particles: {
        number: {
            value: 80,
            density: {
                enable: true,
                value_area: 800
            }
        },
        color: { value: '#ffffff' },
        shape: { type: 'circle' },
        opacity: {
            value: 0.5,
            random: false,
            animation: {
                enable: true,
                speed: 1,
                minimumValue: 0.1,
                sync: false
            }
        },
        size: {
            value: 3,
            random: true,
            animation: {
                enable: true,
                speed: 2,
                minimumValue: 0.1,
                sync: false
            }
        },
        move: {
            enable: true,
            speed: 2,
            direction: 'none',
            random: true,
            straight: false,
            outMode: 'out',
            bounce: false
        }
    },
    interactivity: {
        detectOn: 'canvas',
        events: {
            onHover: {
                enable: true,
                mode: 'repulse'
            },
            onClick: {
                enable: true,
                mode: 'push'
            },
            resize: true
        }
    },
    retina_detect: true
});

// Configure Stars Background
particlesJS('stars-bg', {
    particles: {
        number: {
            value: 100,
            density: {
                enable: true,
                value_area: 800
            }
        },
        color: { value: '#ffffff' },
        shape: { type: 'circle' },
        size: {
            value: 2,
            random: true
        },
        move: {
            enable: true,
            speed: 0.5,
            direction: 'none',
            random: true
        }
    }
});

// Initialize AOS
AOS.init();
