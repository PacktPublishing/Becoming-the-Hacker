<?php

class WriteLock {
    public $file = '/tmp/lockfile';
    public $contents = 'app_in_use';

    public function write(){
        file_put_contents($this->file, $this->contents);
    }

    public function __wakeup(){
        if (strlen($this->file) > 0 && strlen($this->contents) > 0) {
            $this->write();
        }
    }
}

?>