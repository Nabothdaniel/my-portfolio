import express from 'express';
import dotenv from 'dotenv';
import nodemailer from 'nodemailer';
import cors from 'cors';

const app = express();

dotenv.config();
const port = process.env.PORT || 5000;

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Nodemailer transporter setup
const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: process.env.USER_EMAIL,
        pass: process.env.USER_PASS,
    },
    debug: true,
    logger: true,
});

// Root route
app.get('/', (req, res) => {
    res.status(200).json({ msg: `Server working well at localhost:${port}` });
});

// Contact form route
app.post('/contact', async (req, res) => {
    const { name, email, subject, message } = req.body;

    const mailOptions = {
        from: email,
        to: 'nabothdaniel44@gmail.com',
        subject: `New Contact Form Message: ${subject}`,
        text: `From: ${name}\nEmail: ${email}\n\n${message}`,
    };

    try {
        await transporter.sendMail(mailOptions);
        res.status(200).json({ message: 'Email sent successfully.' });
    } catch (error) {
        console.error(error);
        res.status(500).json({ message: 'Error sending email.' });
    }
});

// Suspend user email
app.post('/suspend-user', async (req, res) => {
    console.log(req.body)
    const { email,name } = req.body;

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


    try {
        await transporter.sendMail(mailOptions);
        res.status(200).json({ message: 'Suspension email sent to user.' });
    } catch (error) {
        console.error(error);
        res.status(500).json({ message: 'Failed to send suspension email.' });
    }
});

// Activate user email
app.post('/activate-user', async (req, res) => {
    const { email, name } = req.body;

    if (!email || !name) {
        return res.status(400).json({ message: 'Email and name are required.' });
    }

    const mailOptions = {
        from:  process.env.USER_EMAIL_TWO,
        to: email,
        subject: '✅ Account Activated Successfully',
        html: `
    <div style="font-family: Arial, sans-serif; max-width: 600px; padding: 20px; border: 1px solid #ccc;">
      <h2 style="color: green;">Account Activated</h2>
      <p>Hello ${name},</p>
      <p>We're excited to let you know that your account has been <strong>successfully activated</strong>.</p>
      <p>You can now log in and start using our services.</p>
      <a href="https://workforce-wizard.netlify.app" style="display: inline-block; padding: 10px 20px; background-color: green; color: #fff; text-decoration: none; border-radius: 4px;">
        Log In Now
      </a>
      <p style="margin-top: 20px;">Welcome aboard!<br>The Admin Team</p>
    </div>
  `
    };


    try {
        await transporter.sendMail(mailOptions);
        res.status(200).json({ message: 'Activation email sent to user.' });
    } catch (error) {
        console.error(error);
        res.status(500).json({ message: 'Failed to send activation email.' });
    }
});

// Start server
app.listen(port, '0.0.0.0', () => {
    console.log(`Server running on http://localhost:${port}`);
});
