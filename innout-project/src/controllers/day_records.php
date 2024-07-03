<?php
session_start();
requireValidSession();

$date = (new DateTime())->getTimestamp();
$today = strftime("%d de %B de %Y", $date); // <--- %d de %B de %Y

loadTemplateView('day_records', ['today' => $today]);
