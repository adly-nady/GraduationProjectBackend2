<?php

function ReturnDone($value, $message = '')
{
  return response()->json([
    'status' => true,
    'message' => $message,
    'data' => $value,
  ]);
}
function ReturnError($errCode, $msg)
{
  return response()->json([
    'status' => false,
    'errCode' => $errCode,
    'message' => $msg,
  ]);
}
