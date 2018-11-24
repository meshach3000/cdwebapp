<?php
function printMenu(){
    echo ('<div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="material-icons">apps</i> Subscriptions
              </a>
            </li>
			 <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="material-icons">person</i> Profile
              </a>
            </li>
			 <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="material-icons">book</i> Register
              </a>
            </li>
			 <li class="nav-item">
              <a href="pages/login.php" class="nav-link">
                  <i class="material-icons">star</i> Sign in
              </a>
            </li>
            </li>
          </ul>
      </div>');
}
?>