<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daniel – Full Stack Developer</title>
  <meta name="description" content="Professional Full Stack Developer with 5+ years experience in web development and system architecture">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0a192f',    // Deep Navy
            secondary: '#64ffda',  // Teal
            accent: '#1e90ff',     // Soft Blue
            light: '#f8f8f8',      // Light Gray
            dark: '#333333',       // Text Color
            slate: '#8892b0'       // Secondary Text
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            mono: ['IBM Plex Mono', 'monospace']
          },
          animation: {
            'fade-in': 'fadeIn 0.5s ease-in',
            'float': 'float 3s ease-in-out infinite'
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' }
            },
            float: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-10px)' }
            }
          }
        }
      }
    }
  </script>
  <style>
    html {
      scroll-behavior: smooth;
    }
    body {
      background-color: #f8f8f8;
    }
    .project-card {
      transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .project-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    .nav-link {
      position: relative;
    }
    .nav-link:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -4px;
      left: 0;
      background-color: #64ffda;
      transition: width 0.3s ease;
    }
    .nav-link:hover:after {
      width: 100%;
    }
    .wave {
      animation-name: wave-animation;
      animation-duration: 2.5s;
      animation-iteration-count: infinite;
      transform-origin: 70% 70%;
      display: inline-block;
    }
    @keyframes wave-animation {
      0% { transform: rotate(0deg); }
      10% { transform: rotate(14deg); }
      20% { transform: rotate(-8deg); }
      30% { transform: rotate(14deg); }
      40% { transform: rotate(-4deg); }
      50% { transform: rotate(10deg); }
      60% { transform: rotate(0deg); }
      100% { transform: rotate(0deg); }
    }
  </style>
</head>
<body class="font-sans antialiased text-dark">
  <!-- Navbar -->
  <header class="bg-primary text-white px-6 py-4 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <a href="#" class="text-xl font-bold font-mono hover:text-secondary transition-colors">Daniel</a>
      <nav>
        <button id="menu-toggle" class="sm:hidden text-2xl focus:outline-none" aria-label="Toggle menu">
          <i class="fas fa-bars" id="menu-icon"></i>
        </button>
        <ul id="nav-menu" class="hidden sm:flex gap-8 items-center font-medium">
          <li><a href="#about" class="nav-link hover:text-secondary">About</a></li>
          <li><a href="#skills" class="nav-link hover:text-secondary">Skills</a></li>
          <li><a href="#projects" class="nav-link hover:text-secondary">Projects</a></li>
          <li><a href="#contact" class="bg-secondary text-primary hover:bg-opacity-90 font-semibold py-2 px-5 rounded-md transition-all btn-hover">Contact</a></li>
        </ul>
      </nav>
    </div>
    <!-- Mobile dropdown -->
    <div id="mobile-nav" class="sm:hidden hidden bg-primary px-6 py-3 space-y-3 border-t border-gray-800">
      <a href="#about" class="block py-2 hover:text-secondary transition-colors">About</a>
      <a href="#skills" class="block py-2 hover:text-secondary transition-colors">Skills</a>
      <a href="#projects" class="block py-2 hover:text-secondary transition-colors">Projects</a>
      <a href="#contact" class="block py-2 hover:text-secondary transition-colors">Contact</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="min-h-screen flex items-center justify-center bg-primary text-white px-6">
    <div class="text-center max-w-2xl animate-fade-in">
      <h1 class="text-4xl sm:text-6xl font-bold font-mono mb-6">Hey, I'm Daniel <span class="wave">👋</span></h1>
      <p class="mt-4 text-lg sm:text-xl text-slate max-w-lg mx-auto">A Full Stack Developer specializing in building exceptional digital experiences with modern technologies.</p>
      <div class="mt-10 flex justify-center gap-4">
        <a href="#projects" class="bg-secondary text-primary hover:bg-opacity-90 font-semibold py-3 px-6 rounded-md transition-all btn-hover shadow-sm">
          View My Work
        </a>
        <a href="#contact" class="border border-secondary text-secondary hover:bg-secondary hover:bg-opacity-10 font-semibold py-3 px-6 rounded-md transition-all btn-hover">
          Let's Connect
        </a>
      </div>
    </div>
  </section>

  <!-- About Me -->
  <section id="about" class="py-20 px-6 bg-light">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold font-mono mb-12 text-center"><span class="border-b-2 border-secondary pb-1">About Me</span></h2>
      <div class="flex flex-col md:flex-row gap-12 items-center">
        <div class="md:w-2/5 flex justify-center">
          <div class="w-64 h-64 rounded-full bg-gradient-to-br from-secondary to-accent overflow-hidden shadow-xl">
            <img src="https://source.unsplash.com/400x400/?developer" alt="Daniel" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
          </div>
        </div>
        <div class="md:w-3/5">
          <p class="text-lg text-gray-700 mb-6 leading-relaxed">I'm a passionate Full Stack Developer with over 5 years of experience crafting robust web applications. My expertise spans the entire development stack, from designing intuitive user interfaces to building scalable backend systems.</p>
          <p class="text-lg text-gray-700 mb-8 leading-relaxed">What sets me apart is my ability to bridge technical and business requirements, delivering solutions that are both technically sound and deliver real value to users.</p>
          <div class="flex flex-wrap gap-3">
            <div class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">
              <span class="font-mono text-sm">JavaScript/TypeScript</span>
            </div>
            <div class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">
              <span class="font-mono text-sm">React & Next.js</span>
            </div>
            <div class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">
              <span class="font-mono text-sm">Node.js & Express</span>
            </div>
            <div class="bg-white px-4 py-2 rounded-full shadow-sm border border-gray-200">
              <span class="font-mono text-sm">GraphQL</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-20 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold font-mono text-center mb-12"><span class="border-b-2 border-secondary pb-1">Technical Skills</span></h2>
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Skill Card 1 -->
        <div class="skill-card bg-light p-6 rounded-lg border border-gray-200 hover:border-secondary transition-all">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Frontend Development</h3>
          <p class="text-gray-600 mb-4">Building responsive, accessible interfaces with modern frameworks and tools.</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white px-3 py-1 text-xs rounded-full border">React</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Next.js</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Tailwind</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">TypeScript</span>
          </div>
        </div>
        
        <!-- Skill Card 2 -->
        <div class="skill-card bg-light p-6 rounded-lg border border-gray-200 hover:border-secondary transition-all">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-server"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Backend Development</h3>
          <p class="text-gray-600 mb-4">Creating robust APIs and server architectures for scalable applications.</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Node.js</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Express</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">GraphQL</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">PostgreSQL</span>
          </div>
        </div>
        
        <!-- Skill Card 3 -->
        <div class="skill-card bg-light p-6 rounded-lg border border-gray-200 hover:border-secondary transition-all">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Mobile Development</h3>
          <p class="text-gray-600 mb-4">Building cross-platform mobile applications with native performance.</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white px-3 py-1 text-xs rounded-full border">React Native</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Flutter</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Expo</span>
          </div>
        </div>
        
        <!-- Skill Card 4 -->
        <div class="skill-card bg-light p-6 rounded-lg border border-gray-200 hover:border-secondary transition-all">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-database"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">Database Systems</h3>
          <p class="text-gray-600 mb-4">Designing efficient data models and optimized query systems.</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white px-3 py-1 text-xs rounded-full border">MongoDB</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">PostgreSQL</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Firebase</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Redis</span>
          </div>
        </div>
        
        <!-- Skill Card 5 -->
        <div class="skill-card bg-light p-6 rounded-lg border border-gray-200 hover:border-secondary transition-all">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-cloud"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">DevOps & Cloud</h3>
          <p class="text-gray-600 mb-4">Deploying and maintaining applications in cloud environments.</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white px-3 py-1 text-xs rounded-full border">AWS</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Docker</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">Kubernetes</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">CI/CD</span>
          </div>
        </div>
        
        <!-- Skill Card 6 -->
        <div class="skill-card bg-light p-6 rounded-lg border border-gray-200 hover:border-secondary transition-all">
          <div class="text-4xl text-secondary mb-4">
            <i class="fas fa-robot"></i>
          </div>
          <h3 class="text-xl font-semibold mb-3">AI Integration</h3>
          <p class="text-gray-600 mb-4">Implementing machine learning models and AI-powered features.</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white px-3 py-1 text-xs rounded-full border">OpenAI</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">TensorFlow</span>
            <span class="bg-white px-3 py-1 text-xs rounded-full border">LangChain</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="py-20 px-6 bg-light">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold font-mono text-center mb-12"><span class="border-b-2 border-secondary pb-1">Featured Projects</span></h2>
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- Project 1 -->
        <div class="project-card bg-white rounded-lg overflow-hidden border border-gray-200">
          <div class="h-48 overflow-hidden relative">
            <img src="https://source.unsplash.com/600x400/?real-estate,dashboard" alt="Houzly" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-xl">Houzly</h3>
              <div class="flex space-x-2">
                <a href="#" class="text-gray-400 hover:text-secondary"><i class="fab fa-github"></i></a>
                <a href="#" class="text-gray-400 hover:text-accent"><i class="fas fa-external-link-alt"></i></a>
              </div>
            </div>
            <p class="text-gray-600 mb-4">Modern real estate platform with AI-powered recommendations and virtual tours.</p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Next.js</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Node.js</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">MongoDB</span>
            </div>
          </div>
        </div>
        
        <!-- Project 2 -->
        <div class="project-card bg-white rounded-lg overflow-hidden border border-gray-200">
          <div class="h-48 overflow-hidden relative">
            <img src="https://source.unsplash.com/600x400/?finance,app" alt="PayTop" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-xl">PayTop</h3>
              <div class="flex space-x-2">
                <a href="#" class="text-gray-400 hover:text-secondary"><i class="fab fa-github"></i></a>
                <a href="#" class="text-gray-400 hover:text-accent"><i class="fas fa-external-link-alt"></i></a>
              </div>
            </div>
            <p class="text-gray-600 mb-4">Fintech platform for digital payments with multi-currency support.</p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">React</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">NestJS</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">PostgreSQL</span>
            </div>
          </div>
        </div>
        
        <!-- Project 3 -->
        <div class="project-card bg-white rounded-lg overflow-hidden border border-gray-200">
          <div class="h-48 overflow-hidden relative">
            <img src="https://source.unsplash.com/600x400/?ai,technology" alt="AI Assistant" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-2">
              <h3 class="font-semibold text-xl">AI Assistant</h3>
              <div class="flex space-x-2">
                <a href="#" class="text-gray-400 hover:text-secondary"><i class="fab fa-github"></i></a>
                <a href="#" class="text-gray-400 hover:text-accent"><i class="fas fa-external-link-alt"></i></a>
              </div>
            </div>
            <p class="text-gray-600 mb-4">Intelligent productivity assistant with natural language processing.</p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Vue.js</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">Python</span>
              <span class="bg-gray-100 px-2 py-1 text-xs rounded">OpenAI</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-12">
        <a href="#" class="inline-flex items-center text-accent font-medium hover:text-primary transition-colors">
          View All Projects
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="py-20 px-6 bg-primary text-white">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold font-mono text-center mb-12"><span class="border-b-2 border-secondary pb-1">Client Testimonials</span></h2>
      <div class="bg-gray-800 p-8 rounded-lg">
        <div class="flex items-center mb-6">
          <div class="w-16 h-16 rounded-full overflow-hidden mr-4 border-2 border-secondary">
            <img src="https://source.unsplash.com/100x100/?portrait,businesswoman" alt="Sarah Chen" class="w-full h-full object-cover">
          </div>
          <div>
            <h4 class="font-semibold text-lg">Sarah Chen</h4>
            <p class="text-slate">CTO at TechInnovate</p>
          </div>
        </div>
        <blockquote class="italic text-lg mb-6 leading-relaxed">
          "Daniel delivered exceptional work on our platform redesign. His technical expertise and attention to detail resulted in a 40% performance improvement and significantly enhanced user experience. He's communicative, professional, and consistently delivers beyond expectations."
        </blockquote>
        <div class="flex space-x-1">
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
  <section id="contact" class="py-20 px-6 bg-white">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold font-mono text-center mb-12"><span class="border-b-2 border-secondary pb-1">Get In Touch</span></h2>
      <div class="grid md:grid-cols-2 gap-12">
        <div>
          <h3 class="text-xl font-semibold mb-6">Contact Information</h3>
          <p class="mb-8 text-gray-600">Feel free to reach out for project inquiries, collaborations, or just to say hello. I'm always open to discussing new opportunities.</p>
          
          <div class="space-y-6">
            <div class="flex items-start">
              <div class="text-secondary mr-4 mt-1 text-xl">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <h4 class="font-semibold">Email</h4>
                <a href="mailto:daniel@example.com" class="text-gray-600 hover:text-accent transition-colors">daniel@example.com</a>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="text-secondary mr-4 mt-1 text-xl">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div>
                <h4 class="font-semibold">Phone</h4>
                <a href="tel:+1234567890" class="text-gray-600 hover:text-accent transition-colors">+1 (234) 567-890</a>
              </div>
            </div>
            
            <div class="flex items-start">
              <div class="text-secondary mr-4 mt-1 text-xl">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <h4 class="font-semibold">Location</h4>
                <p class="text-gray-600">San Francisco, CA</p>
              </div>
            </div>
          </div>

          <div class="mt-12">
            <h4 class="font-semibold mb-4">Connect With Me</h4>
            <div class="flex space-x-4">
              <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-primary hover:text-white hover:border-primary transition-colors">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-blue-700 hover:text-white hover:border-blue-700 transition-colors">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-blue-400 hover:text-white hover:border-blue-400 transition-colors">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-600 hover:bg-purple-600 hover:text-white hover:border-purple-600 transition-colors">
                <i class="fab fa-discord"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div>
          <form class="space-y-4">
            <div>
              <label for="name" class="block mb-2 font-medium">Name</label>
              <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
            </div>
            <div>
              <label for="email" class="block mb-2 font-medium">Email</label>
              <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
            </div>
            <div>
              <label for="subject" class="block mb-2 font-medium">Subject</label>
              <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
            </div>
            <div>
              <label for="message" class="block mb-2 font-medium">Message</label>
              <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all"></textarea>
            </div>
            <button type="submit" class="w-full bg-accent hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition-all btn-hover shadow-sm">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-primary text-white py-12 px-6">
    <div class="max-w-5xl mx-auto">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="mb-6 md:mb-0">
          <a href="#" class="text-xl font-bold font-mono hover:text-secondary transition-colors">Daniel</a>
          <p class="text-slate mt-2">Full Stack Developer</p>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
          <a href="#about" class="text-slate hover:text-white transition-colors">About</a>
          <a href="#skills" class="text-slate hover:text-white transition-colors">Skills</a>
          <a href="#projects" class="text-slate hover:text-white transition-colors">Projects</a>
          <a href="#contact" class="text-slate hover:text-white transition-colors">Contact</a>
        </div>
      </div>
      <div class="border-t border-gray-800 mt-12 pt-8 text-center text-slate">
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

    // Animation on scroll
    const animateOnScroll = () => {
      const elements = document.querySelectorAll('.project-card, .skill-card');
      elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;
        
        if (elementPosition < screenPosition) {
          element.style.opacity = '1';
          element.style.transform = 'translateY(0)';
        }
      });
    };

    // Set initial state
    document.querySelectorAll('.project-card, .skill-card').forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    // Run on load and scroll
    window.addEventListener('load', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);
  </script>
</body>
</html>