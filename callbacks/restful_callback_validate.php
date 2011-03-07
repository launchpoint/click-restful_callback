<?

$rc = $restful_callback;

if (!is_array($rc->args) ) click_error("Restful callback args must be an array.", $rc);
if (!array_key_exists('forward_to', $rc->args)) click_error("Restful callback args must have forward_to", $rc);