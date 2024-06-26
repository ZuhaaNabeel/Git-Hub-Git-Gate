<!DOCTYPE html>
<html>
 <head>
 
  <title>GithHub profile Finder</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="style.css">

 </head>

 <header>
        <div class="header">
        <ul>
            <li><a href="Home page.html">Home</a></li>
            <li><a href="register.html">Join</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
</header>

 <body>
  <div class="container">
   <div class="search-container">
    <input  type="text" name="" id="input"  placeholder="Enter Github UserName"/>
    <div id="search" onclick="getUser()">Search User</div>
   </div>

   <div class="profile-card">
    <div class="main-info">
     <img src="profile-logo.png" alt="avatar" id="prof-img" />
     <span class="name" id="name">Zuhaa Nabeel</span>
     <a href="" id="username">@Zuhaa_Nabeel</a>
    </div>
    <div class="bio">
     <p id="bio">Web developer|Student@CUST</p>
     <p><span id="repo">7</span> Repositories</p>
    </div>
    <div class="follow">
     <div class="followers">
      <span class="no" id="followers">3</span>
      Followers
     </div>
     <div class="following">
      <span class="no" id="following">23</span>
      Following
     </div>
    </div>
   </div>
  </div>

 </body>
</html>
