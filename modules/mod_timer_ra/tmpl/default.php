<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_popular
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="timer_wrapper">
    <div class="big_text">
        <?php
            echo $params->get('text1');
        ?>
    </div>
    <div class="top_text">
        <?php
            echo $params->get('text2');
        ?>
    </div>

    <div id="clockdiv">
        <div>
            <span class="days number"></span>
            <div class="smalltext">дней</div>
        </div>
        <div>
            <span class="hours number"></span>
            <div class="smalltext">часов</div>
        </div>
        <div>
            <span class="minutes number"></span>
            <div class="smalltext">минут</div>
        </div>
        <div>
            <span class="seconds number"></span>
            <div class="smalltext">секунд</div>
        </div>
    </div>
    <?php
    //получаем время окончания акции из админки в секундах и преобразовываем его в милисекунды
        $date = strtotime($params->get('date'), $params->get('date'))*1000;
    ?>
    <script>
        jQuery(document).ready(function () {
            function getTimeRemaining(endtime) {
                var t = <?php echo $date ?> - Date.now();
                //alert(Date.now());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / (1000 * 60)) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 24));
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }

            function initializeClock(id, endtime) {
                var clock = document.getElementById(id);
                var daysSpan = clock.querySelector('.days');
                var hoursSpan = clock.querySelector('.hours');
                var minutesSpan = clock.querySelector('.minutes');
                var secondsSpan = clock.querySelector('.seconds');

                function updateClock() {
                    var t = getTimeRemaining(endtime);

                    daysSpan.innerHTML = t.days;
                    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                    if (t.total <= 0) {
                        clearInterval(timeinterval);
                    }
                }

                updateClock();
                var timeinterval = setInterval(updateClock, 1000);
            }

            initializeClock('clockdiv');
        });
    </script>
</div>

