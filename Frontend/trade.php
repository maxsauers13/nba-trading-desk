<?php
  include_once 'header.php'
?>

<!-- Trade Section START -->
<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-9">
      <?php
        if (isset($_SESSION["useruid"])) {
          echo "<h1>" . $_SESSION["usersname"] . "'s Trading Desk</h1>";
        } else {
            echo "<h1>The Trading Desk</h1>";
        }
      ?>
      <div class="news-link">
        <img class="poster" src="/img/jordan.png" />
        <span class="hot-news">$20</span>
        <h3 class="news-log">Buy/Sell Michael Jordan</h3>
        <p class="description">
          Michael Jordan <br>
          Pts: 20 <br>
          Asts: 5 <br>
          Rebs: 6
        </p>
        <a href="trade.php" class="btn-view"><span class="ic-sx24"></span> Buy</a>
        <a href="trade.php" class="btn-view" style="float:left"><span class="ic-sx24"></span> Sell</a>        
      </div>
      <div class="news-link">
        <img class="poster" src="/img/jordan.png" />
        <span class="hot-news">$20</span>
        <h3 class="news-log">Buy/Sell Michael Jordan</h3>
        <p class="description">
          Michael Jordan <br>
          Pts: 20 <br>
          Asts: 5 <br>
          Rebs: 6
        </p>
        <a href="trade.php" class="btn-view"><span class="ic-sx24"></span> Buy</a>
        <a href="trade.php" class="btn-view" style="float:left"><span class="ic-sx24"></span> Sell</a>        
      </div>
      <div class="news-link">
        <img class="poster" src="/img/jordan.png" />
        <span class="hot-news">$20</span>
        <h3 class="news-log">Buy/Sell Michael Jordan</h3>
        <p class="description">
          Michael Jordan <br>
          Pts: 20 <br>
          Asts: 5 <br>
          Rebs: 6
        </p>
        <a href="trade.php" class="btn-view"><span class="ic-sx24"></span> Buy</a>
        <a href="trade.php" class="btn-view" style="float:left"><span class="ic-sx24"></span> Sell</a>        
      </div>
      <div class="news-link">
        <img class="poster" src="/img/jordan.png" />
        <span class="hot-news">$20</span>
        <h3 class="news-log">Buy/Sell Michael Jordan</h3>
        <p class="description">
          Michael Jordan <br>
          Pts: 20 <br>
          Asts: 5 <br>
          Rebs: 6
        </p>
        <a href="trade.php" class="btn-view"><span class="ic-sx24"></span> Buy</a>
        <a href="trade.php" class="btn-view" style="float:left"><span class="ic-sx24"></span> Sell</a>        
      </div>
      <div class="news-link">
        <img class="poster" src="/img/jordan.png" />
        <span class="hot-news">$20</span>
        <h3 class="news-log">Buy/Sell Michael Jordan</h3>
        <p class="description">
          Michael Jordan <br>
          Pts: 20 <br>
          Asts: 5 <br>
          Rebs: 6
        </p>
        <a href="trade.php" class="btn-view"><span class="ic-sx24"></span> Buy</a>
        <a href="trade.php" class="btn-view" style="float:left"><span class="ic-sx24"></span> Sell</a>        
      </div>
      </div>
    <div class="col-lg-3 col-md-3">
      <div class="right-block">
          <div class="n-m">Current Player Prices</div>
          <div class="n-m-item">
              <span class="online-o"></span>
              20$
              Michael Jordan
          </div>
          <div class="n-m-item">
              <span class="online-o"></span>
              20$
              Michael Jordan
          </div>
          <div class="n-m-item">
              <span class="online-o"></span>
              20$
              Michael Jordan
          </div>
          <div class="n-m-item">
              <span class="online-o"></span>
              20$
              Michael Jordan
          </div>
          <div class="n-m-item">
              <span class="online-o"></span>
              20$
              Michael Jordan
          </div>
          <div class="n-m-item">
              <span class="online-o"></span>
              20$
              Michael Jordan
          </div>
          <div class="n-m-item">
              <span class="online-o"></span>
              20$
              Michael Jordan
          </div>
          <div class="n-m-item">
              <span class="online-o"></span>
              20$
              Michael Jordan
          </div>
          <p class="tdx-strom"> Total Players: 551</p>
      </div>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php'
?>