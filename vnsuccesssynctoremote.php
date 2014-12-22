<?php 
  chdir('./01_jacky');
  echo "Begin synchronizing...\n";
  $out = shell_exec('sh 022_pull_remote.command');
  echo($out);
  echo "\nSynchronized successfully from Local to Remote Server!!!";
?>