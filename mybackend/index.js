import express from 'express';
import dotenv from 'dotenv';
import nodemailer from 'nodemailer';
import cors from 'cors';

const app = express();

dotenv.config();
const port = process.env.PORT;



app.use(cors());
app.use(express.json());
app.use(express.urlencoded({extended:true}))

app.get('/',(req,res)=>{
    res.status(200).json({msg:`server working well at localhost:${port}`})
})

app.post('/contact',async (req,res)=>{
    const {name,email,subject,message} = req.body;

    const transporter = nodemailer.createTransport({
        service:'gmail',
        auth: {
            user: process.env.USER_EMAIL,
            pass: process.env.USER_PASS,
        }
       
    })

    console.log('EMAIL:', process.env.USER_EMAIL);
    console.log('PASS:', process.env.USER_PASS);
    const mailOptions ={
        from: email,
        to: 'nabothdaniel35@gmail.com',
        subject: `New Contact Form Message: ${subject}`,
        text: `From: ${name}\nEmail: ${email}\n\n${message}`,
    }

    try {
        await transporter.sendMail(mailOptions);
        res.status(200).json({ message: 'Email sent successfully.' });
      } catch (error) {
        console.error(error);
        res.status(500).json({ message: 'Error sending email.' });
      }
})

app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
  });
