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

//submits the form and sends the eamil from the backend with nodemailer
const contactForm = document.getElementById('contact-form');
let spinner = document.querySelector('#spinner')
let submitBtn = document.querySelector('#submit-btn')

    

contactForm.addEventListener('submit', async (event) => {
  event.preventDefault();
  
  // Set loading state
  submitBtn.disabled = true;
  btnText.textContent = 'Sending...';
  spinner.style.display = 'inline-block';

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const subject = document.getElementById('subject').value;
  const message = document.getElementById('message').value;
  
  try {
    const res = await fetch('https://my-portfolio-ed4l.onrender.com/contact', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ name, email, subject, message })
    });

    const data = await res.json();
    
    // Update response message
    document.getElementById('response-msg').textContent = data.message;
    document.getElementById('response-msg').style.color = res.ok ? 'green' : 'red';

    // Only reset form if successful
    if (res.ok) {
      document.getElementById('name').value = '';
      document.getElementById('email').value = '';
      document.getElementById('subject').value = '';
      document.getElementById('message').value = '';
    }

  } catch(error) {
    document.getElementById('response-msg').textContent = 'Failed to send message.';
    document.getElementById('response-msg').style.color = 'red';
    console.error('Error:', error);
  } finally {
    // Always reset loading state
    submitBtn.disabled = false;
    btnText.textContent = 'Send Message';
    spinner.style.display = 'none';
  }
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

document.querySelector('#date').innerHTML = `${new Date().getFullYear()}`;
// Run on load and scroll
window.addEventListener('load', animateOnScroll);
window.addEventListener('scroll', animateOnScroll);