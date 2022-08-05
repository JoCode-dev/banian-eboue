var express = require("express");
var path = require("path");
var nodemailer = require("nodemailer");

const PORT = process.env.PORT || 3000;

var app = express();

// API Middleware
app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, "public")));

// Routes
app.get;

// API Routes
app.get("/", (req, res) => {
  res.sendFile(__dirname + "/public/index.html");
});

app.get("/valid", (req, res) => {
  res.sendFile(__dirname + "/public/valid.html");
});

app.post("/", async (req, res) => {
  console.log(req.body);

  var from = "oznov@banianeboue.space";
  var to = "oznov@banianeboue.space";
  var subject = "Réservation Banian Eboue";
  var message = `
  Réservation Banian Eboue \n\n

  Informations du Client\n

  Nom & Prénoms : ${req.body.nom} ${req.body.prenom} \n
  Numéro de téléphone : ${req.body.num} \n
  Adresse email  : ${req.body.email} \n
  `;

  let testAccount = await nodemailer.createTestAccount();

  // create reusable transporter object using the default SMTP transport
  let transporter = nodemailer.createTransport({
    host: "smtp.titan.email",
    port: 465,
    secure: true, // true for 465, false for other ports
    auth: {
      user: "oznov@banianeboue.space", // generated ethereal user
      pass: "3fu5lQ3JqB", // generated ethereal password
    },
  });

  /* var transporter = nodemailer.createTransport({
    service: "gmail",
    auth: {
      user: "cedricduakon@gmail.com",
      pass: "M4 F13Ur 6r4C3",
    },
  }); */

  var mailOptions = {
    from: from,
    to: to,
    subject: subject,
    text: message,
  };

  transporter.sendMail(mailOptions, function (error, info) {
    if (error) {
      console.log(error);
    } else {
      console.log("Email Sent: " + info.response);
    }
    res.redirect("/valid");
  });
});

app.listen(PORT, () => {
  console.log("Server running at http://localhost:3000");
});
