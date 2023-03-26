<?php


$is_float = filter_var(1.2, FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
$is_float = is_float(1.2);

$is_int = filter_var(1.2, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_THOUSAND);
$is_int = is_int(1.2);

$is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP );

$is_url = filter_var("http://www.google.com", FILTER_VALIDATE_URL );

$is_email = filter_var("testeasd", FILTER_VALIDATE_EMAIL );

$is_mac = filter_var("00:00:00:00:00:00", FILTER_VALIDATE_MAC );

$is_bool = filter_var("true", FILTER_VALIDATE_BOOLEAN );
$is_bool = is_bool("true");

$is_array = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_REQUIRE_ARRAY );
$is_array = is_array("true");

$is_null = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
$is_null = is_null("true");

$is_string = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_FORCE_ARRAY );
$is_string = is_string("true");

$is_scalar = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
$is_scalar = is_scalar("true");

$is_callable = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
$is_callable = is_callable("true");

$is_numeric = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
$is_numeric = is_numeric("true");

$is_double = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
$is_double = is_double("true");

$is_real = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_long = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_integer = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_real = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_object = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_resource = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_iterable = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_countable = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_finite = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_infinite = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_nan = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_alnum = filter_var("true", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );

$is_regexp = filter_var("123", FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[0-9]+$/")));



?>