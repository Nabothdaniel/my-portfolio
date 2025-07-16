import express from 'express';
import dotenv from 'dotenv';
import nodemailer from 'nodemailer';
import cors from 'cors';

dotenv.config();
const app = express();
const port = process.env.PORT || 5000;

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Setup pooled SMTP transporter
const transporter = nodemailer.createTransport({
  service: 'gmail',
  pool: true,
  maxConnections: 5,
  maxMessages: 100,
  rateLimit: 10, // optional, limits per second
  auth: {
    user: process.env.USER_EMAIL,
    pass: process.env.USER_PASS,
  },
  debug: false,
  logger: false,
});

// Verify transporter connection at startup
transporter.verify((error, success) => {
  if (error) {
    console.error('❌ SMTP connection error:', error);
  } else {
    console.log('✅ SMTP server ready to send emails');
  }
});

// Root route
app.get('/', (req, res) => {
  res.status(200).json({ msg: `Server working well at localhost:${port}` });
});

// Contact form route
app.post('/contact', (req, res) => {
  const { name, email, subject, message } = req.body;

  const mailOptions = {
    from: email,
    to: 'nabothdaniel44@gmail.com',
    subject: `New Contact Form Message: ${subject}`,
    text: `From: ${name}\nEmail: ${email}\n\n${message}`,
  };

  // Send response quickly, then process email in background
  res.status(202).json({ message: 'Email is being processed.' });

  transporter.sendMail(mailOptions)
    .then(() => console.log(`📩 Contact email sent from ${email}`))
    .catch((err) => console.error('❌ Failed to send contact email:', err));
});

// Suspend user email
app.post('/suspend-user', (req, res) => {
  const { email, name } = req.body;

  if (!email || !name) {
    return res.status(400).json({ message: 'Email and name are required.' });
  }

  const mailOptions = {
    from: process.env.USER_EMAIL_TWO,
    to: email,
    subject: '⚠️ Account Suspension Notice',
    html: `
      <div style="font-family: Arial, sans-serif; max-width: 600px; padding: 20px; border: 1px solid #ccc;">
        <h2 style="color: red;">Account Suspended</h2>
        <p>Dear ${name},</p>
        <p>Your account has been <strong>suspended</strong> due to a violation of our terms of service.</p>
        <p>Please contact the administrator for further instructions.</p>
        <a href="mailto:eduragroup@gmail.com" style="display: inline-block; padding: 10px 20px; background-color: red; color: #fff; text-decoration: none; border-radius: 4px;">
          Contact Admin
        </a>
        <p style="margin-top: 20px;">Regards,<br>The Admin Team</p>
      </div>
    `
  };

  res.status(202).json({ message: 'Suspension email is being sent.' });

  transporter.sendMail(mailOptions)
    .then(() => console.log(`🔴 Suspension email sent to ${email}`))
    .catch((err) => console.error('❌ Failed to send suspension email:', err));
});

// Activate user email
app.post('/activate-user', (req, res) => {
  const { email, name } = req.body;

  if (!email || !name) {
    return res.status(400).json({ message: 'Email and name are required.' });
  }

  const mailOptions = {
    from: process.env.USER_EMAIL_TWO,
    to: email,
    subject: '✅ Account Activated Successfully',
    html: `
      <div style="font-family: Arial, sans-serif; max-width: 600px; padding: 20px; border: 1px solid #ccc;">
        <h2 style="color: green;">Account Activated</h2>
        <p>Hello ${name},</p>
        <p>Your account has been <strong>successfully activated</strong>.</p>
        <p>You can now log in and start using our services.</p>
        <a href="https://workforce-wizard.netlify.app" style="display: inline-block; padding: 10px 20px; background-color: green; color: #fff; text-decoration: none; border-radius: 4px;">
          Log In Now
        </a>
        <p style="margin-top: 20px;">Welcome aboard!<br>The Admin Team</p>
      </div>
    `
  };

  res.status(202).json({ message: 'Activation email is being sent.' });

  transporter.sendMail(mailOptions)
    .then(() => console.log(`🟢 Activation email sent to ${email}`))
    .catch((err) => console.error('❌ Failed to send activation email:', err));
});

// Start the server
app.listen(port, '0.0.0.0', () => {
  console.log(`🚀 Server running at http://localhost:${port}`);
});
