<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UFO-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="otayhte.html" rel="stylesheet" type="text/html">
<body>
<script>
var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'sveta.pongo87@gmail.com',
    pass: '1234567'
  }
});

var mailOptions = {
  from: 'sveta.pongo87@gmail.com',
  to: 'sveta.pongo87@gmail.com',
  subject: 'Sending Email using Node.js',
  text: 'That was easy!'
};

transporter.sendMail(mailOptions, function(error, info){
  if (error) {
    console.log(error);
  } else {
    console.log('Email sent: ' + info.response);
  }
});
</script>
</body>
</html>