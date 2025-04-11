import express from 'express';
import dotenv from 'dotenv';
import nodemailer from 'nodemailer';
import cors from 'cors';

const app = express();

dotenv.config();
const port = process.env.PORT || 5000;



app.use(cors());
app.use(express.json());
app.use(express.urlencoded({extended:true}))

app.get('/',(req,res)=>{
    res.status(200).json({msg:`server working well at localhost:${port}`})
})

app.post('/contact',async (req,res)=>{
    const {name,email,subject,message} = req.body;

    const transporter =  nodemailer.createTransport({
        service:'gmail',
        auth: {
            user: process.env.USER_EMAIL,
            pass: process.env.USER_PASS,
        },
        debug:true,
        logger:true
       
    })

   
    const mailOptions ={
        from: email,
        to: 'nabothdaniel44@gmail.com',
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

app.listen(port,"0.0.0.0", () => {
    console.log(`Server running on http://localhost:${port}`);
  });
