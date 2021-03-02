<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_account extends CI_Model {



// Total Desposit // ctive and non active	
	public function totaldeposit($id){
		$query = $this->db->query("SELECT SUM(amount) as totaldeposit FROM `invest` 
									WHERE `memberid`='$id'")->result();
		if($query){
			foreach($query as $row){
				return $row->totaldeposit;
			}

		}else{
			return 0;
		}

	}

	
// Total Profit // withdraw no matter
	public function totalprofitbymemberid($id){
		$query = $this->db->query("SELECT SUM(`profit`.amount) as totalprofit FROM `profit` 
									WHERE `profit`.memberid='$id'")->result();
		if($query){
			foreach($query as $row){
				return $row->totalprofit;
			}

		}else{
			return 0;
		}

	}
	
// Total Reward	
	public function totalreward($id){
		$query = $this->db->query("SELECT SUM(`reward`.amount) as totalreward FROM `reward` 
									WHERE `reward`.memberid='$id'")->result();
		if($query){
			foreach($query as $row){
				return $row->totalreward;
			}

		}else{
			return 0;
		}

	}

// Total Reward	PM
	public function totalrewardpm($id){
		$query = $this->db->query("SELECT SUM(`reward`.amount) as totalreward FROM `reward` 
									WHERE `reward`.memberid='$id' AND `reward`.gateway='pm'")->result();
		if($query){
			foreach($query as $row){
				return $row->totalreward;
			}

		}else{
			return 0;
		}

	}

// Total Reward	PM
	public function totalrewardbtc($id){
		$query = $this->db->query("SELECT SUM(`reward`.amount) as totalreward FROM `reward` 
									WHERE `reward`.memberid='$id' AND `reward`.gateway='btc'")->result();
		if($query){
			foreach($query as $row){
				return $row->totalreward;
			}

		}else{
			return 0;
		}

	}	
		
	
	
// Total Earning  ComissionPM  + Comission BTC + Reward 
	public function totalearning($id){
		$totalcomission = ($this->totalcomissionpm($id)+$this->totalcomissionbtc($id)+ $this->totalreward($id));
		$totalamoun = $this->totalprofitbymemberid($id);	
		return $totalearning = ($totalamoun+$totalcomission);	

	}
	
	
	
// total withdraw pm  and btc
	public function totalwithdraw($id){
		$query = $this->db->query("SELECT SUM(amount) as totalwithdraw FROM `withdraw` 
									WHERE `memberid`='$id'")->result();
		if($query){
			foreach($query as $row){
				return $row->totalwithdraw;
			}

		}else{
			return 0;
		}

	}	
	
//comission by pm  
	public function totalcomissionpm($id){
		$query = $this->db->query("SELECT SUM(`referralcomission`.comission) as totalcomissionpm 
									FROM `referralcomission` 
									WHERE `investid` IN (SELECT `id` FROM `invest` WHERE `paymentway`='pm')
									AND `referralcomission`.memberid='$id'
									")->result();
		if($query){
			foreach($query as $row){
				return $row->totalcomissionpm;
			}

		}else{
			return 0;
		}

	}	
	
	
	
//comission by btc 
	public function totalcomissionbtc($id){
		$query = $this->db->query("SELECT SUM(`referralcomission`.comission) as totalcomissionbtc
									FROM `referralcomission` 
									WHERE `investid` IN (SELECT `id` FROM `invest` WHERE `paymentway`='btc')
									AND `referralcomission`.memberid='$id'
									")->result();
		if($query){
			foreach($query as $row){
				return $row->totalcomissionbtc;
			}

		}else{
			return 0;
		}

	}	
	
	
	
	
	
	
	
// Active Deposit // still profit generating	
	public function activedeposit($id){
		$query = $this->db->query("SELECT SUM(amount) as activedeposit FROM `invest` 
									WHERE `memberid`='$id' AND `flag`=1")->result();
		if($query){
			foreach($query as $row){
				return $row->activedeposit;
			}

		}else{
			return 0;
		}

	}

	

	// Total active balance	// 
	public function totalactivebalance($id){
		return ($this->totalearning($id)  -   $this->totalwithdraw($id));	

	}
	
// Deposit List
	public function deposit($id){
	  return	$query = $this->db->query("SELECT `invest`.* , `package`.packagename , `package`.expiry ,	`package`.periodoption
									FROM `invest` 
									JOIN `package` ON `invest`.packageid=`package`.id WHERE `invest`.memberid='$id' ORDER BY `invest`.id DESC")->result();
		
	}

	
// Total Earning
	public function earning($id){
		return	$query = $this->db->query("SELECT `profit`.* , `package`.packagename , `package`.id ,  `invest`.packageid, `invest`.paymentway,  `invest`.amount as depositamount  FROM `profit`
										   JOIN   `invest` ON `invest`.id=`profit`.investid
										   JOIN `package` ON `invest`.packageid=`package`.id
										   WHERE `invest`.packageid=`package`.id
										   AND `profit`.memberid='$id' ORDER BY `profit`.id DESC
										  ")->result();
		  
	}	




// WIthdraw from pm
	public function withdrawpm($id){
		$query = $this->db->query("SELECT SUM(`withdraw`.amount) as totalwithdraw  FROM `withdraw` 
									WHERE `withdraw`.memberid='$id' AND `withdraw`.gateway='pm'")->result();
		if($query){
		foreach($query as $row){
			return $row->totalwithdraw;
		}

		}else{
			return 0;
		}
	}

// Profit from BTC
	public function profitinfobtc($id){
		$query = $this->db->query("SELECT SUM(`profit`.amount) as totalprofit , `invest`.paymentway FROM `profit` 
									JOIN `invest` ON `invest`.id=`profit`.investid 
									WHERE `profit`.memberid='$id' AND `invest`.paymentway='btc'")->result();
		if($query){
		foreach($query as $row){
			return $row->totalprofit;
		}

		}else{
			return 0;
		}
	}

// Withdraw from btc
	public function withdrawbtc($id){
		$query = $this->db->query("SELECT SUM(`withdraw`.amount) as totalwithdraw  FROM `withdraw` 
									WHERE `withdraw`.memberid='$id' AND `withdraw`.gateway='btc'")->result();
		if($query){
		foreach($query as $row){
			return $row->totalwithdraw;
		}

		}else{
			return 0;
		}
	}


	  
// Total Deposited amount	  
	 public function despositamount($id){
		$query = $this->db->query("SELECT SUM(`invest`.amount) as totalinvest  FROM `invest` 
									WHERE `invest`.memberid='$id'")->result();
		if($query){
		foreach($query as $row){
			return $row->totalinvest;
		}

		}else{
			return 0;
		}
	 }
	 
//Last Deposit	 
	 public function lastdeposit($id){
		$query = $this->db->query("SELECT `invest`.amount as lastdeposit FROM `invest` WHERE `invest`.memberid='$id' ORDER BY id DESC LIMIT 1")->result();
		
		if($query){
			foreach($query as $row){
				return $row->lastdeposit;
			}
		}else{
			return 0;
		}
		
	}
	
// Last Withdraw	
	 public function lastwithdraw($id){
		$query = $this->db->query("SELECT `withdraw`.amount as lastwithdraw FROM `withdraw` WHERE `withdraw`.memberid='$id' ORDER BY id DESC LIMIT 1")->result();
		
		if($query){
			foreach($query as $row){
				return $row->lastwithdraw;
			}
		}else{
			return 0;
		}
		
	}
	
	
	/// Balance Calculation
	

// Total profit by PM
	public function profitinfopm($id){
		$query = $this->db->query("SELECT SUM(`profit`.amount) as totalprofit , `invest`.paymentway FROM `profit` 
									JOIN `invest` ON `invest`.id=`profit`.investid 
									WHERE `profit`.memberid='$id' AND `invest`.paymentway='pm'")->result();
		if($query){
		foreach($query as $row){
			return $row->totalprofit;
		}

		}else{
			return 0;
		}
	}

// PM BALANCE CACLULATION

			// note = pm ER AND BTC ER REFERAL COMISSION O BALANCE E ADD KORTE HOBE

	public function balancepm($id){
		$profitpm = ($this->profitinfopm($id) + $this->totalrewardpm($id) + $this->totalcomissionpm($id));	
		$withdrawpm = $this->withdrawpm($id);
		return $balancepm = $profitpm -  $withdrawpm;
	}
	
// END PM BALANCE CALCULATION	

// BTC BALANCE CALCULATION	
			// note= btc balance er sathe referral income add hobe
	public function balancebtc($id){
		$profitinfobtc = ($this->profitinfobtc($id) +  $this->totalrewardbtc($id) + $this->totalcomissionbtc($id));	
		$withdrawbtc = $this->withdrawbtc($id);
		return $balancebtc = $profitinfobtc -  $withdrawbtc;
	}
// END BTC BALANCE CALCULATION	
	 
	 
	 
	 /// Referal 
	 
	 public function refcomissiondownline($id){
		$query = $this->db->query("SELECT SUM(`referralcomission`.comission) as refcomission FROM referralcomission WHERE `downline`='$id'")->result_array();
		if($query){
			return $query;
		}else{
			return 0;
		}
	}
	
	
	
	 
	 
	 
		
}//end of class

