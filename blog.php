<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="God's Greatness Achievers Int'l Church">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/livestream.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6c1ada6317.js" crossorigin="anonymous"></script>
    <title>GGAC | blog</title>
    <link rel="icon" href="./img/ggac-logo.png" type="image/png">

  <style>

    /* Custom styles here */
    body {
      font-family: Arial, sans-serif;
    }

    .blog-header {
      text-align: center;
      margin-top: 50px;
      color: #333;
    }

    .blog-post {
      margin: 30px 0;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .blog-post h2 {
      color: #0d6efd;
    }

    .blog-post p {
      line-height: 1.6;
    }

    .read-more {
      text-decoration: none;
      color: #0d6efd;
    }

    .read-more:hover {
      color: #0056b3;
      text-decoration: underline;
    }



    /* Default Styles for Navbar */
    .navbar {
      background-color: #333;
    }

    .navbar-nav .nav-link {
      color: white;
    }

    .navbar-nav .nav-link:hover {
      color: yellowgreen;
    }

    /* Styles for screens larger than 600px */
    @media (min-width: 601px) {
      .navbar-nav {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        width: 30%;
      }

      .navbar-brand {
        color: white;
        font-size: 24px;
      }
    }

    /* Styles for screens with max-width 600px */
    @media (max-width: 600px) {
      .navbar-nav {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        width: 100%;
        padding: 10px 0;
        background-color: #333;
      }

      .navbar-collapse {
        text-align: center;
      }

      .navbar-toggler {
        border: none;
        font-size: 24px;
        color: white;
      }

      .navbar-toggler:focus {
        outline: none;
      }

      .navbar-brand {
        font-size: 18px;
        margin-bottom: 5px;
        color: white;
      }
    }
  </style>
</head>

<body>
  <?php
    include "header.php";
  ?>
  <div class="blog-header">
    <h1>Church Blog</h1>
    <p>Stay updated with our latest news, sermons, and events</p>
  </div>

  <!-- Blog Posts -->
  <div class="container">
    <div class="blog-post">
      <h2>Sunday Sermon Recap: The Power of Faith</h2>
      <p>October 20, 2024 by Pastor John Doe</p>
      <p>Last Sunday, Pastor John shared a powerful message about the transformative power of faith. He emphasized that true faith is not just believing in miracles but trusting in God's plan, even when times are tough...</p>
      <a href="sermon-recap.html" class="read-more">Read more</a>
    </div>

    <div class="blog-post">
      <h2>Most Religious countries in 2024</h2>
      <p>October 30, 2024 by Albert</p>
      <p>Over the years, faith has played a pivotal role in changing and shaping the world's view about beliefs, traditions, etc. In 2024, faith has continued to play a crucial role in shaping societies across the globe, with certain countries taking center stage. From daily rituals to national traditions and even government policies, religion navigates its way through our society's activities. This article delves into the most religious countries today, examining how spirituality shapes identities, strengthens communities, and drives values. Below are the top five religious countries in the world today.</p>
    
      <a href="javascript:void(0)" class="read-more" onclick="showContent()">Read more</a>
    
      <div class="hidden-content" style="display: none;">
        <p>5. Indonesia: This country is considered as the world's largest muslimpopulation, Indonesia has a high degree of religious observance, with islam being deeply rooted the cultural and political landscape</p>
      </div>
    </div>
    
    <script>
      function showContent() {
        document.querySelector(".hidden-content").style.display = "block";
        document.querySelector(".read-more").style.display = "none";
      }
    </script>
    

    <div class="blog-post">
      <h2>Testimony: How God Healed Me</h2>
      <p>October 15, 2024 by Sister Mary</p>
      <p>“I want to share my testimony of how God miraculously healed me. I was diagnosed with a serious illness, and the doctors had little hope. But through prayer, faith, and God's mercy, I experienced a complete healing...”</p>
      <a href="healing-testimony.html" class="read-more">Read more</a>
    </div>
  </div>
 <?php
    include "footer.php";
 ?>
</body>

</html>
