<?php include('server.php') ?> 

<!DOCTYPE html> 

<html> 

<head> 

  <title>Registration system PHP and MySQL</title> 

<link rel="stylesheet" type="text/css" href="style.css"> 
  
</head> 

<body> 
<div class="hi" >
    <h2>The Global Sustainability Forum</h2>
     is a dedicated platform that brings together individuals, organizations, and innovators committed to creating a sustainable future. Our mission is to <em>inspire collaboration</em>, share knowledge, and <strong>promote actionable solutions</strong> to tackle the world's most pressing environmental challenges.

    Through discussions, workshops, and resources, we empower communities to adopt <strong>eco-friendly practices</strong>, support renewable energy, and protect natural resources. Together, we can drive meaningful change for a healthier planet and a better tomorrow.

</div>

  <div class="header"> 

    <h2>Login</h2> 

  </div> 

  

  <form method="post" action="login.php"> 

    <?php include('errors.php'); ?> 

    <div class="input-group"> 

      <label>Username</label> 

      <input type="text" name="username" > 

    </div> 

    <div class="input-group"> 

      <label>Password</label> 

      <input type="password" name="password"> 

    </div> 

    <div class="input-group"> 

      <button type="submit" class="btn" name="login_user">Login</button> 

    </div> 

    <p> 

      Not yet a member? <a href="register.php">Sign up</a> 
    </p> 
  </form> 
  <h1 class="h1">Key Aspects of Global Sustainability:</h1>
  <main class="main1">
        <section class="sustainability-section">
           
            <h2>Environmental Sustainability</h2>
            <p>Conserving natural resources (air, water, soil, forests, biodiversity) and reducing pollution.</p>
            <p>Transitioning to renewable energy sources and mitigating climate change.</p>
            <h2>Economic Sustainability</h2>
            <p>Supporting economic growth that does not harm the environment.</p>
            <p>Promoting fair trade, reducing poverty, and ensuring equitable resource distribution.</p>
      
        
            <h2>Social Sustainability</h2>
            <p>Ensuring social equity, access to education, healthcare, and opportunities.</p>
            <p>Protecting cultural diversity and fostering social cohesion.</p>
       
        
            <h2>Interconnectedness</h2>
            <p>Recognizing that sustainability issues (e.g., deforestation, carbon emissions, water scarcity) transcend national boundaries, requiring international cooperation.</p>
            <p>Global sustainability underpins efforts like the United Nations Sustainable Development Goals (SDGs), which provide a roadmap for addressing global challenges such as poverty, inequality, and environmental degradation by 2030.</p>
        </section>
    </main>
   
</body> 
</html> 
