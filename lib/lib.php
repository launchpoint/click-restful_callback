<?

function create_restful_callback($args)
{
  global $subdomain, $domain;
  $callback = RestfulCallback::create( array(
    'attributes'=>array(
      'args'=>$args
    )
  ));
  return callback_url($callback);
}

function callback_data($token)
{
  $cb = RestfulCallback::find_by_token($token);
  if ($cb) return $cb->args;
  return null;
}

function expire_callback($token)
{
  $cb = RestfulCallback::find_by_token($token);
  if($cb) $cb->expire();
}