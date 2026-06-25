$(document).ready(function() {
    // Loading Screen
    $(window).on('load', function() {
        $('#loadingScreen').addClass('hidden');
    });

    setTimeout(function() {
        $('#loadingScreen').addClass('hidden');
    }, 1500);

    // AOS Init
    AOS.init({
        duration: 800,
        once: true,
        offset: 50,
    });

    // Navbar Scroll Effect
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 50) {
            $('#mainNavbar').addClass('scrolled');
        } else {
            $('#mainNavbar').removeClass('scrolled');
        }

        // Scroll to Top Button
        if ($(this).scrollTop() > 300) {
            $('#scrollToTop').addClass('show');
        } else {
            $('#scrollToTop').removeClass('show');
        }
    });

    // Scroll to Top
    $('#scrollToTop').on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
    });

    // Dark Mode Toggle
    $('#darkModeToggle').on('click', function() {
        var currentTheme = $('html').attr('data-bs-theme');
        var newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        $('html').attr('data-bs-theme', newTheme);
        localStorage.setItem('theme', newTheme);

        var icon = $(this).find('i');
        if (newTheme === 'dark') {
            icon.removeClass('bi-moon-stars').addClass('bi-sun');
        } else {
            icon.removeClass('bi-sun').addClass('bi-moon-stars');
        }
    });

    // Load saved theme
    var savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        $('html').attr('data-bs-theme', savedTheme);
        if (savedTheme === 'dark') {
            $('#darkModeToggle i').removeClass('bi-moon-stars').addClass('bi-sun');
        }
    }

    // Animated Counter
    function animateCounters() {
        $('.stat-counter').each(function() {
            var $this = $(this);
            var target = parseInt($this.data('target'));

            if (target === 0) return;

            var suffix = $this.data('suffix') || '';
            var prefix = $this.data('prefix') || '';

            $({ count: 0 }).animate({ count: target }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    var num = Math.floor(this.count);
                    $this.text(prefix + num.toLocaleString() + suffix);
                },
                complete: function() {
                    $this.text(prefix + target.toLocaleString() + suffix);
                }
            });
        });
    }

    // Trigger counter animation on scroll
    var counterAnimated = false;
    $(window).on('scroll', function() {
        if (!counterAnimated) {
            var statsSection = $('.stats-section');
            if (statsSection.length) {
                var offset = statsSection.offset().top - $(window).height() + 100;
                if ($(this).scrollTop() > offset) {
                    animateCounters();
                    counterAnimated = true;
                }
            }
        }
    });

    // Smooth Scroll for anchor links
    $('a[href*="#"]:not([href="#"])').on('click', function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
            location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
                return false;
            }
        }
    });

    // Navbar active state
    var path = window.location.pathname;
    $('.navbar-nav .nav-link').each(function() {
        var href = $(this).attr('href');
        if (href && path.indexOf(href) === 0 && href !== '/') {
            $(this).addClass('active');
        }
    });

    // Close navbar on mobile after click
    $('.navbar-nav .nav-link').on('click', function() {
        $('#mainNav').collapse('hide');
    });

    // ============================================================
    // SEARCH OVERLAY
    // ============================================================
    var $searchOverlay = $('#searchOverlay');
    var $searchOverlayInput = $('#searchOverlayInput');

    function openSearch() {
        $searchOverlay.addClass('active');
        setTimeout(function() { $searchOverlayInput.focus(); }, 300);
        $('body').css('overflow', 'hidden');
    }

    function closeSearch() {
        $searchOverlay.removeClass('active');
        $('body').css('overflow', '');
    }

    $('#searchToggle, #searchToggleMobile').on('click', function(e) {
        e.preventDefault();
        openSearch();
    });

    $('#searchOverlayClose').on('click', closeSearch);

    $searchOverlay.on('click', function(e) {
        if ($(e.target).is($searchOverlay)) { closeSearch(); }
    });

    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && $searchOverlay.hasClass('active')) { closeSearch(); }
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            if (!$searchOverlay.hasClass('active')) { openSearch(); }
        }
    });

    // ============================================================
    // DARK MODE – System Preference Detection
    // ============================================================
    function getSystemTheme() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            return 'dark';
        }
        return 'light';
    }

    function applyTheme(theme) {
        $('html').attr('data-bs-theme', theme);
        localStorage.setItem('theme', theme);
        var $icon = $('#darkModeToggle i');
        if (theme === 'dark') {
            $icon.removeClass('bi-moon-stars').addClass('bi-sun');
        } else {
            $icon.removeClass('bi-sun').addClass('bi-moon-stars');
        }
    }

    var savedTheme = localStorage.getItem('theme');
    if (!savedTheme) { savedTheme = getSystemTheme(); }
    applyTheme(savedTheme);

    $('#darkModeToggle').on('click', function() {
        var currentTheme = $('html').attr('data-bs-theme');
        applyTheme(currentTheme === 'dark' ? 'light' : 'dark');
    });

    if (window.matchMedia) {
        window.matchMedia('(prefers-color-scheme: dark)').addListener(function(e) {
            if (!localStorage.getItem('theme')) { applyTheme(e.matches ? 'dark' : 'light'); }
        });
    }

    // ============================================================
    // SCROLL-BASED ANIMATIONS
    // ============================================================
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800, once: true, offset: 50, delay: 50,
            easing: 'ease-out-cubic', disable: 'mobile',
        });
    }

    $(window).on('scroll', function() {
        var scrollPos = $(this).scrollTop();
        if ($('.hero-section').length) { $('.hero-bg, .hero-pattern').css('transform', 'translateY(' + (scrollPos * 0.15) + 'px)'); }
        if ($('.stats-overlay').length) { $('.stats-overlay').css('transform', 'translateY(' + (scrollPos * 0.08) + 'px)'); }
    });

    // ============================================================
    // COUNTER ANIMATION
    // ============================================================
    function animateCounters() {
        $('.stat-counter').each(function() {
            var $this = $(this);
            var target = parseInt($this.data('target'));
            if (target === 0) return;
            var suffix = $this.data('suffix') || '';
            var prefix = $this.data('prefix') || '';
            var duration = parseInt($this.data('duration')) || 2000;
            $({ count: 0 }).animate({ count: target }, {
                duration: duration, easing: 'easeOutCubic',
                step: function() { $this.text(prefix + Math.floor(this.count).toLocaleString() + suffix); },
                complete: function() { $this.text(prefix + target.toLocaleString() + suffix); }
            });
        });
    }

    if ($.easing && !$.easing.easeOutCubic) {
        $.easing.easeOutCubic = function(x, t, b, c, d) { return c * ((t = t / d - 1) * t * t + 1) + b; };
    }

    var counterAnimated = false;
    $(window).on('scroll', function() {
        if (!counterAnimated) {
            var statsSection = $('.stats-section');
            if (statsSection.length) {
                var offset = statsSection.offset().top - $(window).height() + 100;
                if ($(this).scrollTop() > offset) { animateCounters(); counterAnimated = true; }
            }
        }
    });

    // ============================================================
    // NAVBAR ENHANCEMENTS
    // ============================================================
    var lastScrollTop = 0;
    var navbarHeight = $('#mainNavbar').outerHeight() || 70;

    $(window).on('scroll', function() {
        var currentScrollTop = $(this).scrollTop();

        if (currentScrollTop > 50) { $('#mainNavbar').addClass('scrolled'); }
        else { $('#mainNavbar').removeClass('scrolled'); }

        if (currentScrollTop > navbarHeight + 50) {
            if (currentScrollTop > lastScrollTop) { $('#mainNavbar').addClass('navbar-hidden'); }
            else { $('#mainNavbar').removeClass('navbar-hidden'); }
        } else { $('#mainNavbar').removeClass('navbar-hidden'); }

        lastScrollTop = currentScrollTop;

        if (currentScrollTop > 300) { $('#scrollToTop').addClass('show'); }
        else { $('#scrollToTop').removeClass('show'); }
    });

    $('#scrollToTop').on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
    });

    // ============================================================
    // SMOOTH SCROLL
    // ============================================================
    $('a[href*="#"]:not([href="#"]):not(.dropdown-toggle):not(.carousel-control-prev):not(.carousel-control-next)').on('click', function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                var navH = $('#mainNavbar').outerHeight() || 80;
                $('html, body').animate({ scrollTop: target.offset().top - navH }, 800);
                return false;
            }
        }
    });

    // ============================================================
    // PRELOADER
    // ============================================================
    var preloaderProgress = 0;
    var preloaderInterval;

    function updatePreloaderProgress() {
        preloaderInterval = setInterval(function() {
            if (preloaderProgress < 90) {
                preloaderProgress += Math.random() * 15;
                if (preloaderProgress > 90) preloaderProgress = 90;
                $('.preloader-progress-bar').css('width', preloaderProgress + '%');
                $('.preloader-percent').text(Math.floor(preloaderProgress) + '%');
            }
        }, 300);
    }

    if ($('#loadingScreen').length) { updatePreloaderProgress(); }

    $(window).on('load', function() {
        preloaderProgress = 100;
        if (preloaderInterval) clearInterval(preloaderInterval);
        $('.preloader-progress-bar').css('width', '100%');
        $('.preloader-percent').text('100%');
        setTimeout(function() { $('#loadingScreen').addClass('hidden'); }, 500);
    });

    setTimeout(function() {
        if ($('#loadingScreen').length && !$('#loadingScreen').hasClass('hidden')) {
            if (preloaderInterval) clearInterval(preloaderInterval);
            $('.preloader-progress-bar').css('width', '100%');
            $('.preloader-percent').text('100%');
            setTimeout(function() { $('#loadingScreen').addClass('hidden'); }, 500);
        }
    }, 5000);

    // ============================================================
    // DYNAMIC CSS
    // ============================================================
    $('<style>').prop('type', 'text/css').html(
        '.navbar-hidden { transform: translateY(-100%) !important; transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important; }' +
        '#mainNavbar { transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease, background 0.3s ease; }' +
        '.toast-notification { border-left: 4px solid; }' +
        '[data-bs-theme="dark"] .toast-notification { background: #1a1a2e !important; color: #e4e4e7; border-color: rgba(255,255,255,0.06); }'
    ).appendTo('head');

    // ============================================================
    // TOAST / NOTIFICATION SYSTEM
    // ============================================================
    window.showToast = function(message, type, duration) {
        type = type || 'info'; duration = duration || 3000;
        var icons = { success: 'bi-check-circle-fill', error: 'bi-x-circle-fill', warning: 'bi-exclamation-triangle-fill', info: 'bi-info-circle-fill' };
        var colors = { success: '#10b981', error: '#ef4444', warning: '#f59e0b', info: '#3b82f6' };
        var icon = icons[type] || icons.info;
        var color = colors[type] || colors.info;
        $('.toast-notification').remove();
        var $toast = $('<div class="toast-notification" style="position:fixed;bottom:100px;right:24px;z-index:999999;background:#fff;border-radius:14px;padding:1rem 1.25rem;box-shadow:0 20px 60px rgba(0,0,0,0.15);display:flex;align-items:center;gap:0.75rem;font-weight:500;font-size:0.9rem;transform:translateY(20px);opacity:0;transition:all 0.4s cubic-bezier(0.4,0,0.2,1);max-width:380px;border-left:4px solid ' + color + ';border:1px solid rgba(0,0,0,0.04);"><i class="bi ' + icon + '" style="color:' + color + ';font-size:1.3rem;"></i><span>' + message + '</span></div>');
        $('body').append($toast);
        setTimeout(function() { $toast.css({ transform: 'translateY(0)', opacity: 1 }); }, 50);
        setTimeout(function() { $toast.css({ transform: 'translateY(20px)', opacity: 0 }); setTimeout(function() { $toast.remove(); }, 400); }, duration);
    };

});
