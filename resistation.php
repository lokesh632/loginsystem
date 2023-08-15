<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resistation</title>
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  
<div class="form">
  <section class="container">
    <header> Registration </header>
    <form class="form" action="action.php" method="post">
      <div class="input-box">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your name" required />
      </div>
      <div class="input-box">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email" required />
      </div>
      <div class="input-box">
        <label>Password</label>
        <input type="password" name="Password" placeholder="Enter your Password" required />
      </div>
      <div class="input-box">
        <label>Address</label>
        <input type="text" name="address" placeholder="Enter your Address" required />
      </div>
      <div class="input-box">
        <label>Phone Number</label>
        <input type="number" name="phone" placeholder="Enter your Phone Number" required />
      </div>

      <button type="submit" id="res_sub">Submit</button> 
    </form>
   
  </section>
</div>

</body>

</html>
