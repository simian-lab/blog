<?php

date_default_timezone_set('America/Los_Angeles');

class Deploy {

  /**
   * A callback function to call after the deploy has finished.
   * 
   * @var callback
   */
  public $post_deploy;

  /**
   * The name of the file that will be used for logging deployments. Set to 
   * FALSE to disable logging.
   * 
   * @var string
   */
  private $_log = 'deployments.log';

  /**
   * The timestamp format used for logging.
   * 
   * @link  http://www.php.net/manual/en/function.date.php
   * @var   string
   */
  private $_date_format = 'Y-m-d H:i:sP';

  /**
   * The name of the branch to pull from.
   * 
   * @var string
   */
  private $_branch = 'master';

  /**
   * The name of the remote to pull from.
   * 
   * @var string
   */
  private $_remote = 'origin';

  /**
   * Sets up defaults.
   * 
   * @param  array   $data     Information about the deployment
   */
  public function __construct($options = array())
  {
    $available_options = array('log', 'date_format', 'branch', 'remote');

    foreach ($options as $option => $value)
    {
      if (in_array($option, $available_options))
      {
        $this->{'_'.$option} = $value;
      }
    }

    $this->log('Attempting deployment...');
  }

  /**
   * Writes a message to the log file.
   * 
   * @param  string  $message  The message to write
   * @param  string  $type   The type of log message (e.g. INFO, DEBUG, ERROR, etc.)
   */
  public function log($message, $type = 'INFO')
  {
    if ($this->_log)
    {
      // Set the name of the log file
      $filename = $this->_log;

      if ( ! file_exists($filename))
      {
        // Create the log file
        file_put_contents($filename, '');

        // Allow anyone to write to log files
        chmod($filename, 0666);
      }

      // Write the message into the log file
      // Format: time --- type: message
      file_put_contents($filename, date($this->_date_format).' --- '.$type.': '.$message.PHP_EOL, FILE_APPEND);
    }
  }

  /**
   * Executes the necessary commands to deploy the website.
   */
  public function execute()
  {
    //Get the information about the push from bitbucket.
    $event_payload = file_get_contents('php://input');
    $json_bitbucket_payload = json_decode($event_payload, true);
    $push_branch = $json_bitbucket_payload['push']['changes'][0]['new']['name'];
    
    if ( $push_branch != $this->_branch ) {
      $this->log('Wrong branch deployment canceled.');
      return;
    }

    try
    {
      // Discard any changes to tracked files since our last deploy
      exec('git reset --hard origin/'.$this->_branch, $output);
      $this->log('Reseting repository... '.implode(' ', $output));

      // Update the local repository
      exec('git pull --rebase '.$this->_remote.' '.$this->_branch, $output); 
      $this->log('Pulling in changes... '.implode(' ', $output));

      $this->log('Deployment successful.');
    }
    catch (Exception $e)
    {
      $this->log($e, 'ERROR');
    }
  }
}

// This is just an example
$deploy = new Deploy();

$deploy->execute();
