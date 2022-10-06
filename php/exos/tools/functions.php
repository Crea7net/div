<?php

use Carbon\Carbon;

function aff($var, $txt = null)
{
	echo '<a title=' . debug_backtrace()[0]['file'] . '&nbsp;-&nbsp;Line&nbsp;' . debug_backtrace()[0]['line'] . '><pre>' . (($txt) ? $txt . ' : ' : '');
	var_dump($var);
	echo '</pre></a>';
}
// aff(debug_backtrace());

function getDt()
{
	$now           = (new Carbon())->locale('fr');
	$_SESSION['d'] = $_SESSION['d'] ?? null ?: serialize($now);

	return unserialize($_SESSION['d']);
}

/**
 * Get Array L → D.
 */
function getColumnHeads(): array
{
	$dt = Carbon::create('2022-03-20');
	for ($i = 0; $i++ < 7;) {
		$days[] = $dt->addDay()->locale('fr')->dayName;
	}

	return $days;
}

function getCalendarVars($dt)
{
	global $data;
	$data['d']   = $dt->day;
	$data['m']   = $dt->month;
	$data['moisFr'] = $dt->locale('fr')->monthName;
	$data['y']   = $dt->year;

	$day0                = $dt->copy()->firstOfMonth()->dayOfWeekIso;
	$days                = $dt->daysInMonth;
	$daysInPreviousMonth = $dt->copy()->subMonth()->daysInMonth;

	$data['currentMonth'] = (new Carbon())->month;

	$month = [];
	for ($i = $daysInPreviousMonth - $day0 + 1; $i++ < $daysInPreviousMonth;) {
		$month[] = $i * -1;
	}
	$month = array_merge($month, range(1, $days));
	$month = array_merge($month, array_map(function ($v) {
		return $v * -1;
	}, range(1, 42 - count($month))));

	return $month;
}