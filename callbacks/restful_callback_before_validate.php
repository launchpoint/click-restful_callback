<?

if (!$restful_callback->token)
{
  $restful_callback->token = md5(s_var_export($restful_callback->args) . uniqid() . microtime() . session_id());
}