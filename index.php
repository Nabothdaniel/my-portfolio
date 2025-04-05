<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daniel – Full Stack Developer</title>
  <meta name="description" content="Full Stack Developer with 5+ years experience in web development and AI integration">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            mono: ['IBM Plex Mono', 'monospace']
          },
          colors: {
            primary: '#0d1117',
            secondary: '#ec4899',
          }
        }
      }
    }
  </script>
  <style>
    html {
      scroll-behavior: smooth;
    }
    .project-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .project-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans antialiased">
  <!-- Navbar -->
  <header class="bg-primary text-white px-4 py-4 sticky top-0 z-50 shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <a href="/" class="text-xl font-bold font-mono hover:text-secondary transition-colors">Daniel</a>
      <nav>
        <button id="menu-toggle" class="sm:hidden text-2xl focus:outline-none" aria-label="Toggle menu">
          <i class="fas fa-bars" id="menu-icon"></i>
        </button>
        <ul id="nav-menu" class="hidden sm:flex gap-6 items-center font-semibold">
          <li><a href="#about" class="hover:text-secondary transition-colors">About</a></li>
          <li><a href="#skills" class="hover:text-secondary transition-colors">Skills</a></li>
          <li><a href="#projects" class="hover:text-secondary transition-colors">Projects</a></li>
          <li><a href="#contact" class="bg-secondary hover:bg-pink-500 text-white font-semibold py-2 px-4 rounded-lg transition-colors">Contact</a></li>
        </ul>
      </nav>
    </div>
    <!-- Mobile dropdown -->
    <div id="mobile-nav" class="sm:hidden hidden bg-primary px-4 py-2 space-y-2">
      <a href="#about" class="block py-2 hover:text-secondary transition-colors">About</a>
      <a href="#skills" class="block py-2 hover:text-secondary transition-colors">Skills</a>
      <a href="#projects" class="block py-2 hover:text-secondary transition-colors">Projects</a>
      <a href="#contact" class="block py-2 hover:text-secondary transition-colors">Contact</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="min-h-screen flex items-center justify-center bg-primary text-white px-4">
    <div class="text-center max-w-2xl animate-fade-in">
      <h1 class="text-4xl sm:text-6xl font-bold font-mono mb-6">Hey, I'm Daniel <span class="wave">👋</span></h1>
      <p class="mt-4 text-lg sm:text-xl opacity-90 max-w-lg mx-auto">A Full Stack Developer with 5+ years experience, passionate about clean code and smart solutions.</p>
      <div class="mt-8 flex justify-center gap-4">
        <a href="#projects" class="bg-secondary hover:bg-pink-500 text-white font-semibold py-3 px-6 rounded-lg transition-colors">View My Work</a>
        <a href="#contact" class="border border-white hover:bg-white hover:text-primary text-white font-semibold py-3 px-6 rounded-lg transition-colors">Contact Me</a>
      </div>
    </div>
  </section>

  <!-- About Me -->
  <section id="about" class="py-20 px-4 bg-gray-50">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold font-mono mb-8 text-center">About Me</h2>
      <div class="flex flex-col md:flex-row gap-8 items-center">
        <div class="md:w-1/3 flex justify-center">
          <div class="w-64 h-64 rounded-full bg-gradient-to-br from-secondary to-purple-600 overflow-hidden shadow-xl">
            <!-- Placeholder for profile image -->
            <img src="./images/my-image.jpg" alt="Daniel" class="w-full h-full object-cover">
          </div>
        </div>
        <div class="md:w-2/3">
          <p class="text-lg text-gray-700 mb-4">I'm a Full Stack Developer with extensive experience in both frontend and backend technologies. My journey in web development started over 5 years ago, and since then I've helped numerous clients bring their ideas to life.</p>
          <p class="text-lg text-gray-700 mb-6">I specialize in creating responsive, accessible, and performant web applications using modern technologies. When I'm not coding, you can find me contributing to open source projects or exploring new tech trends.</p>
          <div class="flex flex-wrap gap-4">
            <div class="bg-white px-4 py-2 rounded-full shadow-sm">
              <span class="font-mono text-sm">JavaScript</span>
            </div>
            <div class="bg-white px-4 py-2 rounded-full shadow-sm">
              <span class="font-mono text-sm">React</span>
            </div>
            <div class="bg-white px-4 py-2 rounded-full shadow-sm">
              <span class="font-mono text-sm">Node.js</span>
            </div>
            <div class="bg-white px-4 py-2 rounded-full shadow-sm">
              <span class="font-mono text-sm">TypeScript</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-20 px-4 bg-white">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold font-mono text-center mb-12">My Skills</h2>
      <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-code"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Frontend Development</h3>
          <p class="text-gray-600">Building responsive and interactive user interfaces with React, Vue, and modern CSS frameworks. Focused on accessibility and performance.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-server"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Backend Development</h3>
          <p class="text-gray-600">Creating robust APIs and server-side applications with Node.js, Express, and various databases including MongoDB and PostgreSQL.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
          <div class="text-4xl text-secondary mb-4">
            <i class="fab fa-git-alt"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Version Control</h3>
          <p class="text-gray-600">Expertise in Git workflows, CI/CD pipelines, and collaborative development practices to ensure smooth project delivery.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-robot"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">AI Integration</h3>
          <p class="text-gray-600">Implementing AI solutions with OpenAI, LangChain, and custom models to create intelligent, data-driven applications.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Responsive Design</h3>
          <p class="text-gray-600">Crafting mobile-first designs that work flawlessly across all devices using Tailwind CSS and modern layout techniques.</p>
        </div>
        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Web Security</h3>
          <p class="text-gray-600">Implementing best practices for authentication, authorization, and data protection in web applications.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="py-20 px-4 bg-gray-50">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold font-mono text-center mb-12">Featured Projects</h2>
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="project-card bg-white rounded-lg shadow-md overflow-hidden">
          <div class="h-48 overflow-hidden">
            <img src="https://source.unsplash.com/600x400/?real-estate,website" alt="Houzly" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="font-semibold text-xl mb-2">Houzly</h3>
            <p class="text-gray-600 mb-4">A modern real estate platform with advanced search and AI-powered recommendations.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Next.js</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Node.js</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">MongoDB</span>
            </div>
            <a href="#" class="text-secondary font-semibold hover:underline">View Project →</a>
          </div>
        </div>
        <div class="project-card bg-white rounded-lg shadow-md overflow-hidden">
          <div class="h-48 overflow-hidden">
            <img src="https://source.unsplash.com/600x400/?finance,dashboard" alt="PayTop" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="font-semibold text-xl mb-2">PayTop</h3>
            <p class="text-gray-600 mb-4">A fintech platform for digital payments with wallet management and analytics.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">React</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Express</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">PostgreSQL</span>
            </div>
            <a href="#" class="text-secondary font-semibold hover:underline">View Project →</a>
          </div>
        </div>
        <div class="project-card bg-white rounded-lg shadow-md overflow-hidden">
          <div class="h-48 overflow-hidden">
            <img src="https://source.unsplash.com/600x400/?ai,technology" alt="AI Assistant" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <h3 class="font-semibold text-xl mb-2">AI Assistant</h3>
            <p class="text-gray-600 mb-4">An intelligent assistant that helps with productivity tasks using natural language.</p>
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Vue.js</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Python</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">OpenAI</span>
            </div>
            <a href="#" class="text-secondary font-semibold hover:underline">View Project →</a>
          </div>
        </div>
      </div>
      <div class="text-center mt-12">
        <a href="#" class="inline-flex items-center text-secondary font-semibold hover:underline">
          View All Projects
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="py-20 px-4 bg-primary text-white">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold font-mono text-center mb-12">What People Say</h2>
      <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 rounded-full overflow-hidden mr-4">
            <img src="https://source.unsplash.com/100x100/?portrait,woman" alt="Sarah Chen" class="w-full h-full object-cover">
          </div>
          <div>
            <h4 class="font-semibold text-lg">Sarah Chen</h4>
            <p class="text-gray-300">Tech Lead at InnovateCo</p>
          </div>
        </div>
        <blockquote class="italic text-lg mb-6">
          "Daniel's expertise in both frontend and backend development was instrumental in delivering our product on time. His attention to detail and problem-solving skills are exceptional. He not only implemented complex features but also optimized our application's performance significantly."
        </blockquote>
        <div class="flex space-x-2">
          <i class="fas fa-star text-yellow-400"></i>
          <i class="fas fa-star text-yellow-400"></i>
          <i class="fas fa-star text-yellow-400"></i>
          <i class="fas fa-star text-yellow-400"></i>
          <i class="fas fa-star text-yellow-400"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-20 px-4 bg-white">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold font-mono text-center mb-12">Get In Touch</h2>
      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-semibold mb-4">Contact Information</h3>
          <p class="mb-6">Feel free to reach out for collaboration or just to say hello!</p>
          
          <div class="space-y-4">
            <div class="flex items-start">
              <div class="text-secondary mr-4 mt-1">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h4 class="font-semibold">Email</h4>
                <a href="mailto:nabothdaniel35@gmail.com.com" class="text-gray-600 hover:text-secondary transition-colors">nabothdaniel35@gmail.com</a>
              </div>
            </div>
            <div class="flex items-start">
              <div class="text-secondary mr-4 mt-1">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h4 class="font-semibold">Location</h4>
                <p class="text-gray-600">San Francisco, CA</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="text-secondary mr-4 mt-1">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div>
                <h4 class="font-semibold">Phone</h4>
                <a href="tel:+1234567890" class="text-gray-600 hover:text-secondary transition-colors">+1 (234) 567-890</a>
              </div>
            </div>
          </div>

          <div class="mt-8">
            <h4 class="font-semibold mb-4">Follow Me</h4>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-600 hover:text-secondary text-xl transition-colors">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="text-gray-600 hover:text-secondary text-xl transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="text-gray-600 hover:text-secondary text-xl transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-gray-600 hover:text-secondary text-xl transition-colors">
                <i class="fab fa-dev"></i>
              </a>
            </div>
          </div>
        </div>
        <div>
          <form class="space-y-4">
            <div>
              <label for="name" class="block mb-1 font-medium">Name</label>
              <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent">
            </div>
            <div>
              <label for="email" class="block mb-1 font-medium">Email</label>
              <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent">
            </div>
            <div>
              <label for="subject" class="block mb-1 font-medium">Subject</label>
              <input type="text" id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent">
            </div>
            <div>
              <label for="message" class="block mb-1 font-medium">Message</label>
              <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent"></textarea>
            </div>
            <button type="submit" class="w-full bg-secondary hover:bg-pink-500 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-8 px-4">
    <div class="max-w-5xl mx-auto">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
          <a href="#" class="text-xl font-bold font-mono hover:text-secondary transition-colors">Daniel</a>
          <p class="text-gray-400 mt-1">Full Stack Developer</p>
        </div>
        <div class="flex space-x-6">
          <a href="#about" class="hover:text-secondary transition-colors">About</a>
          <a href="#skills" class="hover:text-secondary transition-colors">Skills</a>
          <a href="#projects" class="hover:text-secondary transition-colors">Projects</a>
          <a href="#contact" class="hover:text-secondary transition-colors">Contact</a>
        </div>
      </div>
      <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
        <p>© 2025 Daniel. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    const toggleBtn = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('mobile-nav');
    const menuIcon = document.getElementById('menu-icon');

    toggleBtn.addEventListener('click', () => {
      navMenu.classList.toggle('hidden');
      menuIcon.classList.toggle('fa-bars');
      menuIcon.classList.toggle('fa-times');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-nav a').forEach(link => {
      link.addEventListener('click', () => {
        navMenu.classList.add('hidden');
        menuIcon.classList.remove('fa-times');
        menuIcon.classList.add('fa-bars');
      });
    });

    // Smooth scrolling for all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
</body>
</html>