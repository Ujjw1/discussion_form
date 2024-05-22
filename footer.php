<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
           footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer-links ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer-links li {
  margin-right: 20px;
}

.footer-links a {
  color: #fff;
  text-decoration: none;
}

.footer-links a:hover {
  color: #ccc;
}

.footer-social ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer-social li {
  margin-right: 20px;
}

.footer-social a {
  color: #fff;
  text-decoration: none;
}

.footer-social a:hover {
  color: #ccc;
}

.footer-newsletter {
  margin-top: 20px;
}

.footer-newsletter h4 {
  margin-bottom: 10px;
}

.footer-newsletter input[type="email"] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  width: 200px;
}

.footer-newsletter button {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.footer-newsletter button:hover {
  background-color: #3e8e41;
}

.footer-copyright {
  margin-top: 20px;
  font-size: 14px;
  color: #ccc;
}
    </style>
</head>
<body>
      
<div class="containe">
  <footer>
  <div class="footer-container">
    <div class="footer-links">
      <ul>
        <li><a href="Welcome.php">Home </a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>
    <div class="footer-social">
      <ul>
        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="github"><i class="fab fa-github"></i></a></li>
        <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
      </ul>
    </div>
    <div class="footer-newsletter ml-5">
      <h4 >Provide an email address or contact form for users to reach out with questions or feedback!</h4>
      <input type="email" placeholder="Enter your email address">
      <button>Subscribe</button>
    </div>
    <div class="footer-copyright">
      <p class="mt-5 text-center">&copy; 2024 Coding Forum. All rights reserved.</p>
    </div>
  </div>
</footer>
</div>
<script src="script.js"></script>
</body>
</html>