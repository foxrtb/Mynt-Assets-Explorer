# Mynt-Assets-Explorer

Simple Mynt Asset Explorer

Requirements:
Apache or Nginx, PHP7

1. Edit config.php with your parameters:
```
<?php
$cfg['rpcUsername'] = 'your_rpc_username';
$cfg['rpcPassword'] = 'your_rpc_password';
$cfg['rpcHostIP'] = '127.0.0.1'; // Can be remote
$cfg['rpcHostPort'] = 7774;
$cfg['rpcURL'] = 'https://assets.example.com';
$cfg['theme'] = "w3css";
$cfg['wordFilter'] = 'creat_your_own_filter_list'; //Not yet implemented
$cfg['filterReplaceChar'] = '&hearts;';
?>
```

2. Restart web server


Original Source: https://github.com/MSFTserver/Raven-Assets-Viewer
