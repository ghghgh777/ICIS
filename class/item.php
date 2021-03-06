<?php

class Item {
	private $pid;
	private $name;
	private $pdate;
	private $debtList;
	private $payList;
	private $statusList;
	
	public function __construct($pid, $name, $pdate, $debtList, $payList, $statusList) {
		$this->pid = $pid;
		$this->name = $name;
		$this->pdate = $pdate;
		$this->debtList = $debtList;
		$this->payList = $payList;
		$this->statusList = $statusList;
	}
	
	public function GetPid() {
		return $this->pid;
	}
	
	public function GetName() {
		return $this->name;
	}
	
	public function GetDate() {
		return $this->pdate;
	}
	
	public function GetDebtList() {
		return $this->debtList;
	}
	
	public function GetPayList() {
		return $this->payList;
	}
	
	public function GetStatusList() {
		return $this->statusList;
	}
	
	public function SetDebtList($debtList) {
		$this->debtList = $debtList;
	}
	
	public function SetPayList($payList) {
		$this->payList = $payList;
	}
	
	public function SetStatusList($statusList) {
		$this->statusList = $statusList;
	}
	
	public function __toString() {
		$debtstr = listToStr($debtList);
		$paystr = listToStr($payList);
		$statusstr = listToStr($statusList);
		return implode('@', array('#ICIS#', 'ITEM', $this->pid, $this->name, $this->pdate, $debtstr, $paystr, $statusstr));
	}
	
	private function listToStr($list) {
		$str = '';
		foreach ($list as $key => $value)
			$str .= $key.':'.$value.',';
		return substr($str, 0, -1);
	}
}

?>