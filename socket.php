<?php

class Socket{

    public function send($server, $data, $c){

        $query = $server . "/req.php?req=" . $data ."&c=" . $c . "&rnd=0." . rand(0, 9) . rand(0, 9999);

        //$context = stream_context_create($headers);

		$ret = file_get_contents($query);
        
        $obj = sfjson($ret);

        return $obj;
        
    }
}
?>