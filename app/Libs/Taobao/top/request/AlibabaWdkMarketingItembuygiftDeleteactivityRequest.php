<?php
/**
 * TOP API: alibaba.wdk.marketing.itembuygift.deleteactivity request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkMarketingItembuygiftDeleteactivityRequest
{
	/** 
	 * 要删除的活动信息
	 **/
	private $param;
	
	private $apiParas = array();
	
	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.itembuygift.deleteactivity";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
