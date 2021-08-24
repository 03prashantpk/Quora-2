<link rel="stylesheet" type="text/css" href="styles/lqnavbarStyle.css">

<nav class="navbar navbar-expand-lg navbar-light" style="padding-left: 100px; background-color: #262626; color: #fff; width: 100%; position: fixed; box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
; z-index:1;">
   <a class="navbar-brand" href="index.php">Quora</a>
   <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item">
            <a class="nav-link" href="nouvellequestion.php" style="color: #fff">Ask Question</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="profil.php" style="color: #fff">My Question</a>
         </li>

      </ul>
   </div>
   <ul class="navbar-nav mr-auto" style="padding-right: 100px;">
      <li class="nav-item dropdown" style="float: right;">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanses="false" style="color: #fff"> <i class="fa fa-user-circle" aria-hidden="true"></i> Join Now
         </a>
         <div class="dropdown-menu" style="padding-right: 40px; background-color: #262626; width: 160px;">
            <a class="dropdown-item" href="connexion.php" style=" background-color: #262626; color: #fff"><i class="fa fa-sign-in" aria-hidden="true"></i>
               Register Now</a>
            <a class="dropdown-item" href="inscription.php" style=" background-color: #262626; color: #fff"><i class="fa fa-user-plus" aria-hidden="true"></i>
               Login Now</a>
            <a class="dropdown-item" href="#" style=" background-color: #262626; color: #fff"><i class="fa fa-info-circle" aria-hidden="true"></i>
               Learn More</a>
            <br><br>
            <p style="font-size: 11px; color:#ccc; text-align: center; padding-left: 32px;">Developed By <br> Prashant Kumar</p>
         </div>
      </li>
   </ul>
</nav>

<style>
   .dropdown-toggle {
      background-color: #F52936;
      border-radius: 22px;
      padding-top: 4px;
      height: 30px;
   }
   .fa{
      color: #F52936;
   }
   .fa-user-circle{
      color: #fff;
   }
</style>
<script>
      if (window.history.replaceState) {
         window.history.replaceState(null, null, window.location.href);
      }
   </script>