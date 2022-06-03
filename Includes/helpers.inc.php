<?php
function html($text)
{
return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
//With the function we can hence use html output as:
// echo html($comment['text']);

}

function htmlout($text)
{
  //outputs the value sent out by html
  echo html($text);
}
