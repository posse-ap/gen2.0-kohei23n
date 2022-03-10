<?php 

require('dbconnect.php');

// 今日の学習時間
$today_stmt = $db->query("SELECT study_time FROM records WHERE study_date = CURDATE()");
$today = $today_stmt->fetch() ?: 0;

//今月の学習時間
$month_stmt = $db->query("SELECT SUM(study_time) FROM records WHERE DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')");
$month = $month_stmt->fetch() ?: 0;

//合計学習時間
$total_stmt = $db->query("SELECT SUM(study_time) FROM records");
$total = $total_stmt->fetch() ?: 0;

// ?: = ternary operator, same as < condition ? value1 : value2; >
// https://www.phptutorial.net/php-tutorial/php-ternary-operator/ 

//棒グラフデータ
$bar_stmt = $db->query(
  "SELECT 
    SUM(study_time) 
  FROM 
    records 
  GROUP BY
    study_date 
  HAVING
    DATE_FORMAT(study_date, '%M/%Y') = DATE_FORMAT(now(), '%M/%Y')"
);
$bars = $bar_stmt->fetchAll() ?: 0;

//学習言語円グラフデータ
$language_stmt = $db->query(
  "SELECT 
    languages.language, SUM(records.study_time), languages.colour
  FROM 
    records
  JOIN 
    languages ON records.language_id = languages.id 
  GROUP BY
    languages.language, languages.colour");
$languages = $language_stmt->fetchAll() ?: 0;

//学習言語円グラフデータ、 % を計算する用
$percentage_stmt = $db->query(
  "SELECT 
    languages.language, SUM(records.study_time), languages.colour
  FROM 
    records
  JOIN 
    languages ON records.language_id = languages.id
  GROUP BY
    languages.language, languages.colour"
  );
$percentages = $percentage_stmt->fetchAll() ?: 0;



//学習コンテンツ円グラフデータ
$content_stmt = $db->query(
  "SELECT
    contents.content, SUM(records.study_time)
  FROM 
    records 
  JOIN 
    contents ON records.content_id = contents.id 
  GROUP BY 
    contents.content");
$contents = $content_stmt->fetchAll() ?: 0;


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POSSE Web App</title>
  <link rel="stylesheet" href="webapp.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
</head>
<body>
  <!-- HEADER -->
  <header class="header">
    <div class="header_left">
      <div class="img_cont"></div>
      <h2 class="top_text">4th Week</h2>
    </div>
    <div class="header_right">
      <a href="#modal" id="modalbtn">記録・投稿</a>
    </div>
  </header>

  <!-- MAIN -->
  <main class="main">
    <div class="main_section" id="main_section">
      <!-- LEFT -->
      <div class="left">
        <!-- TOP LEFT -->
        <div class="top_left">
          <div class="hour">
            <h2 class="hour_title">Today</h2>
            <h1 class="hour_number"><?= $today['study_time'] ?></h1>
            <h2 class="hour_hour">hours</h2>
          </div>
          <div class="hour">
            <h2 class="hour_title">Month</h2>
            <h1 class="hour_number"><?= $month['SUM(study_time)'] ?></h1>
            <h2 class="hour_hour">hours</h2>
          </div>
          <div class="hour">
            <h2 class="hour_title">Total</h2>
            <h1 class="hour_number"><?= $total['SUM(study_time)'] ?></h1>
            <h2 class="hour_hour">hours</h2>
          </div>
        </div>
        <!-- BOTTOM LEFT -->
        <div class="bottom_left">
          <!-- <div id="column" class="column"></div> -->
          <div class="column_cont">
            <canvas id="column" class="column"></canvas>
          </div>
        </div>
      </div>
      <!-- RIGHT -->
      <div class="right">
        <div class="donut">
          <h1 class="gakushu">学習言語</h1>
          <canvas id="donut_lang"></canvas>
          <div class="legend_cont_lang">
            <div class="legend">
              <div class="legend_circle html_circle"></div>
              <p>HTML</p>
            </div>
            <div class="legend">
              <div class="legend_circle css_circle"></div>
              <p>CSS</p>
            </div>
            <div class="legend">
              <div class="legend_circle sql_circle"></div>
              <p>SQL</p>
            </div>
            <div class="legend">
              <div class="legend_circle shell_circle"></div>
              <p>Shell</p>
            </div>
            <div class="legend">
              <div class="legend_circle js_circle"></div>
              <p>Javascript</p>
            </div>
            <div class="legend">
              <div class="legend_circle other_circle"></div>
              <p>その他</p>
            </div>
            <div class="legend">
              <div class="legend_circle php_circle"></div>
              <p>PHP</p>
            </div>
            <div class="legend">
                <div class="legend_circle laravel_circle"></div>
                <p>Laravel</p>
            </div>
          </div>
        </div>

      <div class="donut">
        <h1 class="gakushu">学習コンテンツ</h1>
        <canvas id="donut_content"></canvas>
        <div class="legend_cont_content">
          <div class="legend">
            <div class="legend_circle n_circle"></div>
            <p>N予備校</p>
          </div>
          <div class="legend">
            <div class="legend_circle kadai_circle"></div>
            <p>課題</p>
          </div>
          <div class="legend">
            <div class="legend_circle dot_circle"></div>
            <p>ドットインストール</p>
          </div>
        </div>
      </div>
      </div>
      <!-- BOTTOM -->
      <div class="bottom">
        <div class="arrow_back"></div>
        <p class="date">2022年3月</p>
        <div class="arrow_next"></div>
        <div class="mobile_modal">
          <a href="#" id="mobile_modalbtn">記録・投稿</a>
        </div>
      </div>
    </div>
    <!-- MODAL -->
    <div class="modal_bg">
      <div class="modal_inner" id="modal">
        <div class="modal_wrapper">
          <div class="modal_left" id="modal_left">
            <div class="modal_day">
              <h1 class="modal_title">学習日</h1>
              <input type="text" class="textbox_small" id="datepicker">
            </div>
            <div class="modal_content">
              <h1 class="modal_title">学習コンテンツ（複数選択可）</h1>
              <div class="option_cont">
                <div class="option content_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_content"></div>
                  <p class="label">N予備校</p>
                </div class="option">
                <div class="option content_op" >
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_content"></div>
                  <p class="label">ドットインストール</p>
                </div class="option">
                <div class="option content_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_content"></div>
                  <p class="label">POSSE課題</p>
                </div class="option">
              </div>
            </div>
            <div class="modal_lang">
              <h1 class="modal_title">学習言語（複数選択可）</h1>
              <div class="option_cont">
                <div class="option lang_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_lang"></div>
                  <p class="label">HTML</p>
                </div>
                <div class="option lang_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_lang"></div>
                  <p class="label">CSS</p>
                </div class="option">
                <div class="option lang_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_lang"></div>
                  <p class="label">Javascript</p>
                </div class="option">
                <div class="option lang_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_lang"></div>
                  <p class="label">PHP</p>
                </div class="option">
                <div class="option lang_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_lang"></div>
                  <p class="label">Laravel</p>
                </div class="option">
                <div class="option lang_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_lang"></div>
                  <p class="label">SQL</p>
                </div class="option">
                <div class="option lang_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_lang"></div>
                  <p class="label">SHELL</p>
                </div class="option">
                <div class="option lang_op">
                  <div class="arrow_check"></div>
                  <div class="circle_gray circle_lang"></div>
                  <p class="label">情報システム基礎知識（その他）</p>
                </div class="option">
              </div>
            </div>
          </div> 
          <!-- MODAL RIGHT -->
          <div class="modal_right" id="modal_right">
            <div class="modal_time">
              <h1 class="modal_title">学習時間</h1>
              <input type="number" class="textbox_small">
            </div>
            <div class="modal_twitter">
              <h1 class="modal_title">Twitter用コメント</h1>
              <textarea id = "tweetBox" onkeyup="GetTweet(value)" cols="51" rows="10" class="tweet_area"></textarea>
            </div>
            <div class="modal_twitter_share">
              <div class="arrow_check_twitter"></div>
              <div class="twitter_circle" id="twitter_circle"></div>
              <span id="TWEET" class="tweet_button_cont">
                <a class="tweet_button" href="https://twitter.com/intent/tweet?text=" target="_blank" >Twitterにシェアする</a>
              </span>
            </div>
          </div> 
        </div>
        <!-- MODAL BOTTOM -->
        <div class="modal_bottom" id="modal_bottom">
          <a href="#modal" id="bottom_btn">記録・投稿</a>
        </div>
        <!-- X BUTTON -->
        <div class="x" id="close"></div>
        <!-- LOADER -->
        <div class="loader" id="loader"></div>
        <!-- 完了画面-->
        <div class="complete" id="complete">
          <h1 class="complete_title">AWESOME!</h1>
          <div class="complete_check"></div>
          <div class="complete_circle"></div>
          <h1 class="complete_msg">記録・投稿<br>完了しました</h1>
        </div>

      </div>
    </div>
    <!-- MOBILE MODAL -->
    <div class="mobilemodal_bg">
      <div class="mobilemodal_inner" id="mobilemodal">
        <div class="mobilemodal_wrapper" id="mobilemodal_wrapper">
          <div class="mobilemodal_day">
            <h1 class="mobilemodal_title">学習日</h1>
            <input type="text" class="textbox_small" id="">
          </div>
          <div class="mobilemodal_content">
            <h1 class="mobilemodal_title">学習コンテンツ（複数選択可）</h1>
            <div class="option_cont">
              <div class="option mobilecontent_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_content"></div>
                <p class="label">N予備校</p>
              </div class="option">
              <div class="option mobilecontent_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_content"></div>
                <p class="label">ドットインストール</p>
              </div class="option">
              <div class="option mobilecontent_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_content"></div>
                <p class="label">POSSE課題</p>
              </div class="option">
            </div>
          </div>
          <div class="mobilemodal_lang">
            <h1 class="mobilemodal_title">学習言語（複数選択可）</h1>
            <div class="option_cont">
              <div class="option mobilelang_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_lang"></div>
                <p class="label">HTML</p>
              </div>
              <div class="option mobilelang_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_lang"></div>
                <p class="label">CSS</p>
              </div class="option">
              <div class="option mobilelang_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_lang"></div>
                <p class="label">Javascript</p>
              </div class="option">
              <div class="option mobilelang_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_lang"></div>
                <p class="label">PHP</p>
              </div class="option">
              <div class="option mobilelang_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_lang"></div>
                <p class="label">Laravel</p>
              </div class="option">
              <div class="option mobilelang_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_lang"></div>
                <p class="label">SQL</p>
              </div class="option">
              <div class="option mobilelang_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_lang"></div>
                <p class="label">SHELL</p>
              </div class="option">
              <div class="option mobilelang_op">
                <div class="arrow_check"></div>
                <div class="circle_gray mobilecircle_lang"></div>
                <p class="label">情報システム基礎知識（その他）</p>
              </div class="option">
            </div>
          </div>
          <div class="mobilemodal_time">
            <h1 class="mobilemodal_title">学習時間</h1>
            <input type="text" class="textbox_small" id="">
          </div>
          <div class="mobilemodal_twitter">
            <h1 class="mobilemodal_title">Twitter用コメント</h1>
            <input type="text" class="textbox_large">
          </div>
          <div class="mobilemodal_twitter_share">
            <div class="arrow_check_twitter"></div>
            <div class="twitter_circle"></div>
            <p class="twitter_text">Twitterにシェアする</p>
          </div>
          <div class="mobile_modal">
            <a href="#mobile_modal" id="mobile_modalbtn2">記録・投稿</a>
          </div>
        </div>
        <!-- X BUTTON -->
        <div class="x_mobile" id="closemobile"></div>
        <!-- LOADER -->
        <div class="loader_mobile" id="loader_mobile"></div>
        <!-- 完了画面-->
        <div class="complete" id="complete_mobile">
          <h1 class="complete_title">AWESOME!</h1>
          <div class="complete_check"></div>
          <div class="complete_circle"></div>
          <h1 class="complete_msg">記録・投稿<br>完了しました</h1>
        </div>
      </div>
    </div>

  </main>
  

  <script>
    
  // 学習時間棒グラフ
  
  const column = document.getElementById('column').getContext('2d');

  var gradient = column.createLinearGradient(0, 0, 0, 300);
  gradient.addColorStop(0, 'rgba(54, 206, 254, 1)');
  gradient.addColorStop(1, 'rgba(17,115,189, 1)');
  
  const myColumnChart = new Chart(column, {
      // label: 'none',
      
      type: 'bar',
      data: {
          labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30],
          datasets: [{
              // data: [4, 4, 5, 3, 0, 0, 4, 2, 2, 8, 8, 2, 2, 1, 7, 4, 4, 3, 3, 3, 2, 2, 6, 2, 2, 1, 1, 1, 7, 8],
              data: [
                <?php 
                foreach ($bars as $bar) {
                  echo $bar['SUM(study_time)'] . ",";
                }
                ?>
              ],
              backgroundColor: gradient,
              borderRadius: 50,
              borderSkipped: false,
          }],
          // barPercentage: 0.3
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              grid: {
                display: false,
                drawBorder: false,
              },
              ticks: {
                // min: 2,
                // maxTicksLimit: 15,
                color: '#bdd1e1',
                autoSkip: false,
                min: 1,
                max: 30,
                padding: 0,
                // stepSize: 2,
                callback: function(val, index) {
                  // Hide the label of every 2nd dataset
                  return index % 2 === 1 ? this.getLabelForValue(val) : '';
                },
                maxRotation: 0,
                minRotation: 0
              },
              // barPercentage: 0.3
            },
            y: {
              grid: {
                display: false,
                drawBorder: false
              },
              max: 8,
              min: 0,
              ticks: {
                stepSize: 2, 
                callback: function(value) {
                  return value + 'h';
                },
                color: '#bdd1e1',
              },
            },
          },
          plugins: {
            legend: {
              display: false
            }
          }
      },
      
  });

  // STUDY LANGUAGE

  const donut1 = document.getElementById('donut_lang').getContext('2d');

  const myFirstDonutChart = new Chart(donut1, {
      type: 'doughnut',
      data: {
          labels: ['CSS', 'HTML', 'Javascript', 'Laravel', 'PHP', 'SHELL', 'SQL', 'その他'],
          datasets: [{
              // data: [30, 20, 20, 20, 10, 10, 5, 5],
              data: [
                <?php 
                foreach ($languages as $language) {
                  echo $language['SUM(records.study_time)'] . ",";
                }
                ?>
              ],
              backgroundColor: [
                "#0f70bd",
                "#0445ec",
                "#b29ef3",
                "#3005c0",
                "#4a17ef",
                "#3ccefe",
                "#20bdde",
                "#6c46eb",
              ],
              // backgroundColor: [
              //   <?php 
              //   foreach ($languages as $language) {
              //     echo "\"" . $language['languages.colour)'] . "\",";
              //   }
              //   ?>
              // ],
              borderColor: 'transparent'
          }],
      },
      plugins: [ChartDataLabels],
      options: {
          responsive: true,
          plugins: {
            legend: {
              display: false
            },
            datalabels: {
              color: '#fff',
              // formatter: function(value) {
              //   return value + '%';
              // }
              formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value*100 / sum).toFixed(0)+"%";
                return percentage;
              },
            }
          },
      },
      
  });

  const donut2 = document.getElementById('donut_content').getContext('2d');

  const mySecondDonutChart = new Chart(donut2, {
      type: 'doughnut',
      data: {
          labels: ['N予備校', '課題', 'ドットインストール'],
          datasets: [{
              // data: [40, 40, 20],
              data: [
                <?php 
                foreach ($contents as $content) {
                  echo $content['SUM(records.study_time)'] . ",";
                }
                ?>
              ],
              backgroundColor: [
                '#0445ec',
                '#0f70bd',
                '#20bdde',
              ],
              borderColor: 'transparent'
          }],
      },
      plugins: [ChartDataLabels],
      options: {
          responsive: true,
          plugins: {
            legend: {
              display: false
            },
            datalabels: {
              color: '#fff',
              // formatter: function(value) {
              //   return value + '%';
              // }
              formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value*100 / sum).toFixed(0)+"%";
                return percentage;
              },
            }
          },
      },
      
  });

  </script>
    <script src="webapp.js"></script>
</body>
</html>
