const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(bodyParser.json());

app.post('/send-email', async (req, res) => {
    try {
        const { to, subject, text } = req.body;

        const transporter = nodemailer.createTransport({
            host: 'smtp.mailgun.org',
            port: 587,
            auth: {
                user: 'postmaster@sandbox9e122a64dee5487694a2c4376047fd60.mailgun.org',
                pass: 'b47ddb051fe869f8175b843244b4a19a-451410ff-7669a164'
            }
        });

        await transporter.sendMail({
            from: 'postmaster@sandbox9e122a64dee5487694a2c4376047fd60.mailgun.org',
            to,
            subject,
            text
        });

        res.status(200).json({ message: 'Email sent successfully' });
    } catch (error) {
        console.error(error);
        res.status(500).json({ message: 'Email sending failed' });
    }
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
