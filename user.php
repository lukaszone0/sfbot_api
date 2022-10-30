<?php

class user{

    public $server = "";
    public $password = "";
    public $c = 0;
    public $ssid = 0;

    public function init($oko){
        global $resp;

        if(!isset($oko->act)){
            $resp->message = "no act param";
            return 0;
        }

        if(!isset($oko->c) or !is_numeric($oko->c)){
            $resp->message = "missing c value";
            return 0;
        }
		
        if(!isset($oko->server) OR !validateserver($oko->server)){
            $resp->message = "no server address or incorrect address";
            return 0;
        }

        $this->server = $oko->server;
        $this->c = $oko->c;
        
        if($oko->act != "AccountLogin"){
            if(!isset($oko->ssid) or strlen($oko->ssid) > 32){
                $resp->message = "missing session id";
                return 0;
            }
            if(!isset($oko->cryptoid) or !isset($oko->cryptokey)){
                $resp->message = "missing cryptoid and cryptokey";
                return 0;
            }
            $this->ssid = $oko->ssid;
        }

        switch($oko->act){

            case "AccountLogin":
				
                if(!isset($oko->login) or !isset($oko->pass) or empty($oko->login) or empty($oko->pass)){
                    $resp->message = "missing login and password";
                    break;
                }

                $this->password = Crypto::makepass($oko->pass);
				
                $array_data = array("login" => $oko->login, "pass" => $this->password, "logincount" => $this->c);

				$ret = Socket::send("http://" . $this->server, Crypto::$def_cryptoid . Crypto::encrypt(Pattern::AccountLogin($array_data)), $oko->c);
				
				if(isset($ret['error'])){
					$resp->message = $ret['error'];
				}
				else if(isset($ret['ownplayersave'])){

                    $this->timestamp = (int) $ret['timestamp'];
					$this->loaduserdata($ret['ownplayersave'], $oko->act);
					$this->ssid = $ret['sessionid'];
                    $this->login = $oko->login;

                    
                    
					$resp = $this;
                    $resp->cryptoid = $ret['cryptoid'];
					$resp->cryptokey = $ret['cryptokey'];

					$resp->requeststatus = "success";
				}
            break;

            case "PlayerAdventureStart":

				if(isset($oko->questid)){
					$questid = $oko->questid;
				}
				else {
					$questid = rand(1, 3);
				}
				
                $pattern = Pattern::PlayerAdventureStart(array("ssid" => $oko->ssid, "questid" => $questid));

                $crypted = Crypto::encrypt($pattern, $oko->cryptokey);
                $crypted = substr($crypted, 0, 86);
				$ret = Socket::send("http://" . $this->server, $oko->cryptoid . "" . $crypted, $oko->c);

				if(isset($ret['error'])){
					$resp->message = $ret['error'];
				}
				else if(isset($ret['ownplayersave'])){
					$this->loaduserdata($ret['ownplayersave'], $oko->act);
					$resp = $this;
                    $resp->status = 2;
                    $resp->statustime = $this->quests[$oko->questid -1]['time'] + $ret['timestamp'];
                    $resp->statusextra = $oko->questid;
					$resp->requeststatus = "success";
                    $resp->timestamp = $ret['timestamp'];
				}
                else if(isset($ret['success'])){
                    $resp->requeststatus = "success";
                }
                else{
                    $resp->requeststatus = "error";
                    $resp->message = "An occured error";
                }

            break;

            case "PlayerAdventureFinished":

				if(!isset($oko->skiptype)){
					$resp->message = "missing skip type";
					break;
				}
                else if(isset($oko->skiptype) and $oko->skiptype != 1 and $oko->skiptype != 2 and $oko->skiptype != 0){
                    $resp->message = "unavailable skip type";
					break;
				}

				$pattern = Pattern::PlayerAdventureFinished(array("ssid" => $oko->ssid, "skiptype" => $oko->skiptype));
				
                $crypted = Crypto::encrypt($pattern, $oko->cryptokey);
                $crypted = substr($crypted, 0, 86);
				$ret = Socket::send("http://" . $this->server, $oko->cryptoid . "" . $crypted, $oko->c);
                
				if(isset($ret['error'])){
					$resp->message = $ret['error'];
				}
				else if(isset($ret['ownplayersave'])){
					$this->loaduserdata($ret['ownplayersave']);
                    $this->goldreward = explode("/", $ret['fightresultbattlereward'])[2];
					$this->mushreward = explode("/", $ret['fightresultbattlereward'])[1];
					$this->expreward = explode("/", $ret['fightresultbattlereward'])[3];
                    $resp = $this;
					$resp->requeststatus = "success";
				}
			
			break;

            case "PlayerBeerBuy":

                $pattern = Pattern::PlayerBeerBuy(array("ssid" => $oko->ssid));
				
                $crypted = Crypto::encrypt($pattern, $oko->cryptokey);
                //$crypted = substr($crypted, 0, 86);
				$ret = Socket::send("http://" . $this->server, $oko->cryptoid . "" . $crypted, $oko->c);

                if(isset($ret['success'])){
                    $resp->requeststatus = "success";
                    $resp->message = "success buy beer";
                }
                else if(isset($ret['ownplayersave'])){
					$this->loaduserdata($ret['ownplayersave']);
                    $resp = $this;
					$resp->requeststatus = "success";
				}
                else if(isset($ret['error'])){
					$resp->message = $ret['error'];
				}

            break;

            case "PlayerWorkStart":

                if(!isset($oko->hours) || $oko->hours < 0 || $oko->hours > 10){
                    $resp->requeststatus = "hours not valid !";
                }

                $pattern = Pattern::PlayerWorkStart(array("ssid" => $oko->ssid, "hours" => $oko->hours));
				
                $crypted = Crypto::encrypt($pattern, $oko->cryptokey);
                $crypted = substr($crypted, 0, 86);
				$ret = Socket::send("http://" . $this->server, $oko->cryptoid . "" . $crypted, $oko->c);
                if(isset($ret['success'])){
                    $resp->requeststatus = "success";
                    $resp->message = "success buy beer";
                }
                else if(isset($ret['ownplayersave'])){
					$this->loaduserdata($ret['ownplayersave']);
                    $resp = $this;
                    $resp->status = 1;
                    $resp->statustime = $ret['timestamp'] + (3600 * $oko->hours);
                    $resp->statusextra = $oko->hours;

					$resp->requeststatus = "success";
				}
                else if(isset($ret['error'])){
					$resp->message = $ret['error'];
				}

            break;

            case "Poll":

                $pattern = Pattern::Poll(array("ssid" => $oko->ssid));
				
                $crypted = Crypto::encrypt($pattern, $oko->cryptokey);
                $crypted = substr($crypted, 0, 86);
				$ret = Socket::send("http://" . $this->server, $oko->cryptoid . "" . $crypted, $oko->c);

                if(isset($ret['success']) or !isset($ret['error'])){
                    $resp->requeststatus = "success";
                    $resp->message = "success";
                    if(isset($ret['ownplayersave'])){
                        $this->loaduserdata($ret['ownplayersave']);
                        $resp = $this;
                        $resp->requeststatus = "success";
                        $resp->timestamp = (int) $ret['timestamp'];
                    }
                }
				else if(isset($ret['error'])){
					$resp->message = $ret['error'];
				}

            break;

            case "PlayerWorkFinished":
                
                $pattern = Pattern::PlayerWorkFinished(array("ssid" => $oko->ssid));
				
                $crypted = Crypto::encrypt($pattern, $oko->cryptokey);
                $crypted = substr($crypted, 0, 86);
				$ret = Socket::send("http://" . $this->server, $oko->cryptoid . "" . $crypted, $oko->c);

                if(isset($ret['success']) OR !isset($ret['error'])){
                    $resp->requeststatus = "success";
                    $resp->message = "success";
                    if(isset($ret['ownplayersave'])){
                        $this->loaduserdata($ret['ownplayersave']);
                        $resp = $this;
                        $resp->requeststatus = "success";
                        $resp->workreward = $ret['workreward'];
                        $resp->timestamp = (int) $ret['timestamp'];
                    }
                }
				else if (isset($ret['error'])){
					$resp->message = $ret['error'];
				}


            break;

            case "PlayerAdventureStop":
            case "PlayerWorkStop":
                if($oko->act == "PlayerAdventureStop"){
                    $pattern = Pattern::PlayerAdventureStop(array("ssid" => $oko->ssid));
                }
                else if($oko->act == "PlayerWorkStop"){
                    $pattern = Pattern::PlayerWorkStop(array("ssid" => $oko->ssid));
                }
                
				
                $crypted = Crypto::encrypt($pattern, $oko->cryptokey);
                $crypted = substr($crypted, 0, 86);
				$ret = Socket::send("http://" . $this->server, $oko->cryptoid . "" . $crypted, $oko->c);

                if(isset($ret['success']) OR !isset($ret['error'])){
                    $resp->requeststatus = "success";
                    $resp->message = "success";
                    if(isset($ret['ownplayersave'])){
                        $this->loaduserdata($ret['ownplayersave']);
                        $resp = $this;
                        $resp->requeststatus = "success";
                        $resp->timestamp = (int) $ret['timestamp'];
                    }
                }
				else if (isset($ret['error'])){
					$resp->message = $ret['error'];
				}

            break;

            default:
                $resp->message = "unknown action";
            break;

        }
    }

    private function loaduserdata($saveupdate){

        $playersave = explode("/", "0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/0/");
	
        $saveupdate = explode("/", $saveupdate);
		
		if(count($saveupdate) < 135){
            for($i=0;$i<Count($saveupdate);$i+=2){
                $playersave[$saveupdate[$i]] = $saveupdate[$i+1];
            }
            
        }
        else if(count($saveupdate) > 135){
            $i = 0;
            foreach($saveupdate as $index){
                $playersave[$i] = $index;
                $i++;
            }
        }
		
        $this->playerid = (int) $playersave[1];
		$this->lvl = (int) $playersave[7];
		$this->mush =	(int) $playersave[14];
		$this->silver =	(int) round($playersave[13] / 100);
		$this->exp =	(int) $playersave[8];
		$this->expnext = (int) $playersave[9];
		
		//$this->timestamp = (int) $playersave[2];
		
		
        //echo ($playersave[45]);

        ///2355285196800

        
		$this->status = (int) ($playersave[45]) > 3 ? ($playersave[45] - 2700302876672) : $playersave[45];
		$this->statusextra = (int) ($playersave[46]) > 10 ? ($playersave[46] - 2700302876672) : (int) $playersave[46];

        if($this->statusextra == 0){
            $this->status = 0;
        }

		//$this->statustime = (int) ($playersave[47] - 7200) >= 0 ? ($playersave[47] - 7200) : 0;

		$this->statustime = (int) $playersave[47];


        if(isset($playersave[456])){
            $this->thirst = (int) $playersave[456];
        }
        
		
		$this->quests[0]['time'] = (int) $playersave[241];
        $this->quests[1]['time'] = (int) $playersave[242];
        $this->quests[2]['time'] = (int) $playersave[243];

        $this->quests[0]['exp'] = (int) $playersave[280];
        $this->quests[1]['exp'] = (int) $playersave[281];
        $this->quests[2]['exp'] = (int) $playersave[282];

        $this->quests[0]['silver'] = (int) $playersave[283];
        $this->quests[1]['silver'] = (int) $playersave[284];
        $this->quests[2]['silver'] = (int) $playersave[285];
		
		//$this->statusend = $this->statustime - $this->timestamp >= 0 ? $this->statustime - $this->timestamp : 0;
		
		//$this->statusend = (int) $playersave[2] + $this->quests[$this->statusextra - 1]['time'];
		
		$this->mount = (int) 0;
		// 492 493 494
		$this->potions = array((int) $playersave[492], (int) $playersave[493], (int) $playersave[494]);
		
		if($playersave[451] > time()){
			$this->mount = (int) $playersave[286] * 10;
			if($playersave[286] == 4)
				$this->mount = (int) 50;
		}
		
        $this->beers = (int) $playersave[457];

        if(isset($playersave[542])){
            $this->timeglass = $playersave[542];
        }

	}

}


?>