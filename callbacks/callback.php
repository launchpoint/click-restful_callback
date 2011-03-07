<?

$callback = RestfulCallback::find_by_token(p('token'));
if(!$callback)
{
  flash_next('Invalid URL');
  redirect_to(callback_not_found_url(), array('token', p('token')));
}
if (array_key_exists('flash', $callback->args)) flash_next($callback->args['flash']);
redirect_to($callback->args['forward_to'] . "?token={$callback->token}");
