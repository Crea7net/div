<?php

declare(strict_types=1);

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

$date = date('Y-m-d H:i:s', time() + 10 ** 9);
$date = new DateTimeImmutable();
// $s=time();
aff($date);

function from(DateTimeImmutable $date): DateTimeImmutable
{
	return (new DateTimeImmutable($date));
}

$d = (new DateTimeImmutable())::createFromFormat('Y-m-d H:i:s', $date);
aff(from($d));