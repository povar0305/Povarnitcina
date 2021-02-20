<?php
namespace Povarnitcina {

    use core\LogAbstract;
    use core\LogInterface;
    use DateTime;


    Class MyLog extends LogAbstract implements LogInterface{

        public function _write()
        {
            $d = new DateTime();
            $filename = "log/".$d->format('d.m.Y_T_H.i.s.u').".log";

            $dirname = "log";

            if(!(is_dir($dirname))){
                mkdir($dirname, 0777, true);
            }

            $logfile = "";

            foreach($this->log as $s){
                echo $s."\n";
                echo $value."\r\n";
                $logfile .= $value."\r\n";
            }
            file_put_contents($filename, $logfile, FILE_APPEND);

        }

        public static function log($str):void
        {
            MyLog::Instance()->_log($str);
        }

        public static function write():void
        {
            MyLog::Instance()->_write();
        }
        public function _log($str)
        {
           $this->log[]=$str;
        }

    }
}
?>